<?php
$this->pageTitle = Yii::app()->name . ' | Отправить заявку';
$this->pageDescription = 'Здесь вы можете отправить online-заявку в нашу организацию.';
$this->pageKeywords = 'Дезинфектология, дератизация, дезинсекция, дезинфекция, профилактика, профилактическая дезинфекция, помещений, обработка, уничтожение, борьба, грызуны, грызунов, крысы, крыс, мыши, мышей, кроты, кротов, насекомые, насекомых, мухи, мух';
?>
<div class="mail_notes">

  <div class="row">
    <div class="span12">
      <div style="z-index: 2; position: absolute; top: 200px; margin-left: 90px;">
        <a href="/site/index" title="На главную">
          <img src="/images/buttonHome_left.png" alt="На главную">
        </a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="span8 offset2">
      <h3>Online-заявкa</h3>
      <p>Пожалуйста, заполните все поля формы.</p>
    </div>
  </div>

  <div class="row">
    <div class="span8 offset2">
      <div class="mail_order">
        <form id="askForm" class="form" method="post">
          <div class="control-group">
            <label class="control-label" for="inputName">ФИО / Название организации:</label>
            <div class="controls">
              <input type="text" name="contact[inputName]" id="inputName" placeholder="ФИО/Название организации" style="width: 90%;">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="inputAddress">Адрес объекта:</label>
            <div class="controls">
              <input type="text" name="contact[inputAddress]" id="inputAddress" placeholder="Адрес объекта" style="width: 90%;">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="inputArea">Площадь помещения / земельного участка (м<sup>2</sup>):</label>
            <div class="controls">
              <input type="text" name="contact[inputArea]" id="inputArea" placeholder="Площадь объекта" style="width: 90%;">
            </div>
          </div> 
          <div class="control-group">
            <label class="control-label" for="inputText">Краткое описание проблемы:</label>
            <div class="controls">
              <textarea name="contact[inputText]" id="inputText" rows="9" style="width: 90%;"></textarea>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="inputPhone">Контактный номер телефона:</label>
            <div class="controls">
              <input type="text" name="contact[inputPhone]" id="inputPhone" placeholder="Обратные координаты" style="width: 90%;">
            </div>
          </div>
          <div class="control-group">
            <div class="controls" style="text-align: right; padding-right: 20px;">
              <button type="button" class="btn" style="margin-top: -10px;" id="inputSubmit">отправить</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php $this->beginWidget('bootstrap.widgets.TbModal', array('id' => 'myModal')); ?>

<div class="modal-header">
  <?php
  $this->widget('bootstrap.widgets.TbButton', array(
      'label' => '&times;',
      'htmlOptions' => array('data-dismiss' => 'modal', 'class' => 'close', 'aria-hidden' => 'true'),
  ));
  ?>
  <h4>Сообщение</h4>
</div>

<div class="modal-body">
  <p>Письмо успешно отправлено!</p>
  <p>В ближайшее время специалист свяжется с Вами по указанному номеру.</p>
</div>

<div class="modal-footer">
  <?php
  $this->widget('bootstrap.widgets.TbButton', array(
      'label' => 'Закрыть',
      'htmlOptions' => array('data-dismiss' => 'modal'),
  ));
  ?>
</div>

<?php $this->endWidget(); ?>