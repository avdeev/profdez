<?php

class SiteController extends Controller {

  public $defaultAction = 'starter';
  public $pageDescription;
  public $pageKeywords;

  public function afterRender() {
    $this->pageDescription = $this->pageDescription ? $this->pageDescription : Yii::app()->params['pageDescription'];
    $this->pageKeywords = $this->pageKeywords ? $this->pageKeywords : Yii::app()->params['pageKeywords'];

    Yii::app()->clientScript->registerMetaTag($this->pageDescription, 'description');
    Yii::app()->clientScript->registerMetaTag($this->pageKeywords, 'keywords');

    return true;
  }

  public function actionStarter() {
    Yii::app()->bootstrap->registerCoreCss();

    Yii::app()->clientScript->registerScript('redirect', '
              function redirect() {
                window.location.href = "/site/index";
              }', CClientScript::POS_HEAD);

    Yii::app()->clientScript->registerScript('starterFade', ' 
            $("#mainLogo").fadeOut(10000);
            setTimeout("redirect()", 10000);
        ', CClientScript::POS_READY);

    $this->render('starter');
  }

  public function actionIndex() {
    Yii::app()->bootstrap->registerCoreCss();
    $this->render('index');
  }

  /**
   * This is the action to handle external exceptions.
   */
  public function actionError() {
    Yii::app()->bootstrap->registerCoreCss();

    if ($error = Yii::app()->errorHandler->error) {
      if (Yii::app()->request->isAjaxRequest)
        echo $error['message'];
      else
        $this->render('error', $error);
    }
  }

}