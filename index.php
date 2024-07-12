<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />
  <title>Interior lounge</title>
  <?php
  wp_head();
  ?>
</head>

<body>
  <header class="header wrapper">
    <a class="header__logo" href="index.php">
      <img src="<?php bloginfo('template_url'); ?>/assets/images/logo/logo.svg" alt="Дизайн общественных интерьеров" width="262" height="47" />
    </a>
    <nav class="main-nav">
      <ul class="main-nav__list">
        <li class="main-nav__item main-nav__item_has-children">
          Наши проекты
          <ul class="sub-menu">
            <li class="sub-menu__item">
              <a class="sub-menu__link" href="#">Tomazzi Hall</a>
            </li>
            <li class="sub-menu__item">
              <a class="sub-menu__link" href="#">Lounge Hall</a>
            </li>
            <li class="sub-menu__item">
              <a class="sub-menu__link" href="#">Astra Hall</a>
            </li>
          </ul>
        </li>
        <li class="main-nav__item">
          <a class="main-nav__link" href="#">Контакты</a>
        </li>
        <li class="main-nav__item main-nav__item_review">
          <a class="main-nav__link" href="#">Оставить отзыв</a>
        </li>
      </ul>
    </nav>
  </header>
  <main class="main-content">
    <h1 class="main-content__title">Дизайн общественных интерьеров </h1>
    <section class="intro wrapper">
      <h2 class="intro__title">Кейс клубного дома Tomazzi Hall</h2>
      <div class="intro__main-image-wrapper">
        <img src="<?php bloginfo('template_url') ?>/assets/images/main-intro-image.jpg" alt="Клубный дом Tomazzi Hall" width="1110" height="400" />
      </div>
      <div class="intro__text-wrapper">
        <p class="intro__text intro__text-primary">Создать объект, подобного которому в Санкт-Петербурге еще не было, — такую задачу поставил перед собой девелопер <b>Interior Lounge,</b> продумывая клубный дом <a href="#">Tomazzi Hall</a>. Над экстерьером комплекса работала команда одного из крупнейших архитектурных Бюро России — «Студия 11» разработал концепцию, а мы оформили интерьер 10 парадных и 3 лаунж-зон.</p>
        <p class="intro__text">
          Заказчик знал команду, следил за нашей деятельностью, поэтому никого больше не рассматривал — поручил дизайн парадных и лаунж-зон нам. Основными моментами, на которые мы оринтировались, стали:
        </p>
      </div>
      <ul class="intro__list">
        <li class="intro__list-item">Источники вдохновения планировалось искать в строгой геометрии, модерне и духе «ревущих двадцатых»;</li>
        <li class="intro__list-item">Необходимо было выдержать дорогой и одновременно элегантный стиль;</li>
        <li class="intro__list-item">Ключевой элемент дизайна любого общественного пространства — удобство для жителей.</li>
      </ul>
      <div class="intro__images-wrapper">
        <img src="<?php bloginfo('template_url'); ?>/assets/images/intro-image-1.jpg" alt="Большная лестница в отеле" width="540" height="350">
        <img src="<?php bloginfo('template_url') ?>/assets/images/intro-image-2.jpg" alt="Лифт в отеле" width="540" height="350">
      </div>
    </section>
    <section class="inspiration"></section>
  </main>
  <footer class="footer">
    <section class="comments">
      <div class="wrapper">
        <h2 class="comments__title">Оставить отзыв</h2>
        <div class="comments-form">
          <div class="wpcf7">
            <form class="wpcf7-form" action="">
              <p>
                <span class="wpcf7-form-control-wrap">
                  <textarea class="wpcf7-textarea" name="" id="" cols="40" rows="10" placeholder="Расскажите, что вы думаете о проекте"></textarea>
                </span>
              </p>
              <p>
                <span class="wpcf7-form-control-wrap">
                  <input class="wpcf7-text" type="text" size="40" placeholder="Ваше имя" />
                </span>
              </p>
              <div class="comments-submit-area">
                <p>
                  <input class="wpcf7-submit" type="submit" value="Отправить" />
                  <span class="ajax-loader"></span>
                </p>
                <div class="comments-text">
                  Отзыв будет добавлен после проверки модератором
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <section class="reviews">
      <div class="wrapper">
        <div class="reviews__wrapper">
          <div class="review">
            <div class="review__image-wrapper">
              <img class="review__image" src="<?php echo bloginfo('template_url'); ?>/assets/images/reviews/review-1.jpg" alt="Иван Грачев" width="50" height="50" />
            </div>
            <p class="review__name">Иван Грачев</p>
            <p class="review__text">Очень самобытный и необычный проект.</p>
          </div>
          <div class="review">
            <div class="review__image-wrapper">
              <img class="review__image" src="<?php echo bloginfo('template_url'); ?>/assets/images/reviews/review-2.jpg" alt="Мария Рачинская" width="50" height="50" />
            </div>
            <p class="review__name">Мария Рачинская</p>
            <p class="review__text">
              Мне особенно понравилось решение лестничных клеток. Кружки
              вообще очень стильные!
            </p>
          </div>
          <div class="review">
            <div class="review__image-wrapper">
              <img class="review__image" src="<?php echo bloginfo('template_url'); ?>/assets/images/reviews/review-3.jpg" alt="Светлана" width="50" height="50" />
            </div>
            <p class="review__name">Светлана</p>
            <p class="review__text">
              Очень нравится, что в городе развиваются такие проекты. Надеюсь,
              такие проекты скоро будут не только в частных домах, но и в
              кафе, музеях, театрах. Я бы сходила!
            </p>
          </div>
        </div>
      </div>
    </section>
  </footer>
</body>

</html>