<?php
$this->pageTitle = Yii::app()->name . ' | Главная страница';
$this->pageDescription = 'Мероприятия, направленные на уничтожение грызунов (мыши, крысы, кроты, суслики и т.д.). Комплекс мер, направленных на уничтожение всех видов членистоногих насекомых (тараканы, муравьи, блохи, клещи, клопы и т.д.). Мероприятия, направленные на уничтожение возбудителей инфекционных заболеваний, грибков, а так же неприятных запахов.';
$this->pageKeywords = 'дератизация, дезинсекция, дезинфекция, профилактика, профилактическая дезинфекция, помещений, обработка, уничтожение, борьба, грызуны, грызунов, крысы, крыс, мыши, мышей, кроты, кротов, насекомые, насекомых, мухи, мух, блохи, блох, комары, комаров, тараканы, тараканов, клопы, клопов, клещи, клещей, муравьи, муравьёв, инфекция, инфекции, плесень, плесени, санитарная, профдезинфекция, здравоохранение, дезинфекционные, препараты, мероприятия, территория, паразиты, паразитов';
?>
<div class="index">
  <div class="row" style="z-index: 2; position: relative;">
    <div class="span4">
      <a href="/info" title="Информация о компании"><img src="/images/buttonInfo.png" alt="" style="margin: -39px 0 0 40px;" /></a>
    </div>
    <div class="span4 offset2">
      <a href="/price" title="Услуги и цены"><img src="/images/buttonPrice.png" alt="" style="margin-top: -69px;" /></a>
    </div>
  </div>
</div>
<div class="row">
  <div class="span10 offset1" style="margin-top: -70px; position: relative;">
    <div class="content">

      <?php
      $this->widget('bootstrap.widgets.TbCarousel', array(
          'htmlOptions' => array('style' => 'z-index: 1; margin: 15px 45px; position: relative;'),
          'items' => array(
              array('image' => '/images/carousel_1.jpg'),
              array('image' => '/images/carousel_2.jpg'),
              array('image' => '/images/carousel_3.jpg'),
              array('image' => '/images/carousel_4.jpg'),
              array('image' => '/images/carousel_5.jpg'),
          ),
      ));
      ?>

      <div class="row" style="margin-top: -180px; position: relative; z-index: 2;">
        <div class="span2">
          <a href="/home" title="Интересные факты">
            <img src="/images/buttonHome.png" alt="Интересные факты" style="margin-left: -112px;" />
          </a>
        </div>
        <div class="span2 offset5">
          <a href="/mail" title="Составить заявку">
            <img src="/images/buttonMail.png" alt="Составить заявку" style="margin-right: -200px;" />
          </a>
        </div>
      </div>
      <div class="row">
        <div class="span9">
          <div class="note_index">
            <h4>Компания «Профдезинфекция» предоставляет все виды дезинфекционных услуг:</h4>
            <hr style="margin: 10px 0;" />
            <p><b>Дератизация</b> – мероприятия, направленные на уничтожение грызунов (мыши, крысы, кроты, суслики и т.д.)</p>
            <p><b>Дезинсекция</b> – комплекс мер, направленных на уничтожение всех видов членистоногих насекомых (тараканы, муравьи, блохи, клещи, клопы и т.д.)</p>
            <p><b>Дезинфекция</b> – мероприятия, направленные на уничтожение возбудителей инфекционных заболеваний, грибков, а так же неприятных запахов.</p>
            <hr style="margin: 5px 0;" />
            <address style="margin-top: 20px;">
              <h4><abbr title="Телефон">тел</abbr>: (83145) 2-06-98, 8-930-800-04-04</h4>
              <h4><abbr title="Факс">факс</abbr>: (83145) 2-33-34</h4>
            </address>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="span5">
        <div class="index_search">
          <form class="form-search" method="post" action="/search/search">
            <div class="input-append">
              <input type="text" class="span3">
              <button class="btn" type="submit"><i class="icon-search"></i></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>