<?php

class MailController extends Controller {

  public $pageDescription;
  public $pageKeywords;

  public function afterRender() {
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

    $model = new ContactForm();
    $model->attributes = $_POST['contact'];
    if ($model->validate()) {
      $message->setBody(array('form' => $model), 'text/html');

      $message->addTo(Yii::app()->params['adminEmail']);
      $message->from = Yii::app()->params['adminEmail'];
      Yii::app()->mail->send($message);

      echo 'OK';
    } else {
      echo json_encode($model->getErrors());
    }

    Yii::app()->end();
  }

}