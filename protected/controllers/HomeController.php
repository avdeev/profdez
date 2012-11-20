<?php

class HomeController extends Controller {

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
    $this->render('index');
  }

}