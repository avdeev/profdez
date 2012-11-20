<?php

class MailController extends Controller {

  public $pageDescription;
  public $pageKeywords;

  public function beforeRender() {
    $this->pageDescription = $this->pageDescription ? $this->pageDescription : Yii::app()->params['pageDescription'];
    $this->pageKeywords = $this->pageKeywords ? $this->pageKeywords : Yii::app()->params['pageKeywords'];

    Yii::app()->clientScript->registerMetaTag($this->pageDescription, 'description');
    Yii::app()->clientScript->registerMetaTag($this->pageKeywords, 'keywords');

    return true;
  }

  public function actionIndex() {
    Yii::app()->bootstrap->registerCoreCss();

    Yii::app()->clientScript->registerScript('mailSubmit', "
      $('#inputSubmit').click(function(){
          $.post('/mail/send', $('#askForm').serialize(), function(data){
            if (data == 'OK') {
              $('#myModal').modal('show');
            } else {

            }
          });
        });", CClientScript::POS_READY);

    $this->render('index');
  }

  public function actionSend() {
    $message = new YiiMailMessage;
    $message->view = 'mailAsk';

    //userModel is passed to the view
    $message->setBody(array('form' => $_POST), 'text/html');

    $message->addTo(Yii::app()->params['adminEmail']);
    $message->from = Yii::app()->params['adminEmail'];
    Yii::app()->mail->send($message);

    echo 'OK';
    
    Yii::app()->end();
  }

}