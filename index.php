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
    <h1 class="main-content__title"><?php the_field('main-content__title'); ?></h1>
    <section class="intro wrapper">
      <h2 class="intro__title"><?php the_field('intro__title'); ?></h2>
      <div class="intro__main-image-wrapper">
        <img src="<?php the_field('intro__main-image'); ?>" alt="Отель Tomazzi hall" />
      </div>
      <div class="intro__text-wrapper">
        <p class="intro__text">
          <?php the_field('intro__text_accent'); ?>
        </p>
        <p class="intro__text">
          <?php the_field('intro__text'); ?>
        </p>
      </div>
      <ul class="intro__list">
        <li class="intro__list-item"><?php the_field('intro__item-1'); ?></li>
        <li class="intro__list-item"><?php the_field('intro__item-2'); ?></li>
        <li class="intro__list-item"><?php the_field('intro__item-3'); ?></li>
      </ul>
      <div class="intro__images-wrapper">
        <img src="<?php the_field('intro__additional-image-1'); ?>" alt="Большная лестница в отеле">
        <img src="<?php the_field('intro__additional-image-2'); ?>" alt="Лифт в отеле">
      </div>
    </section>
    <section class="inspiration wrapper">
      <h2 class="inspiration__title">
        <?php the_field('inspiration__title'); ?>
      </h2>
      <div class="inspiration__text-wrapper">
        <p class="inspiration__text"><?php the_field('
         inspiraton__text-first'); ?></p>
        <p class="inspiration__text"><?php the_field('
         inspiraton__text-second'); ?></p>
      </div>
      <div class="inspiration__blockquote-wrapper">
        <blockquote class="inspiration__blockquote">
          <?php the_field('inspiration__blockquote'); ?>
        </blockquote>
      </div>
    </section>
  </main>
  <footer class="footer">
    <section class="form-review wrapper">
      <h2 class="form-review__title"><?php the_field('form-review__title'); ?></h2>
      <form class="form-review form" action="">
        <p>
          <label class="visually-hidden" for="comments">Комментарий</label>
          <textarea class="form__textarea" cols="40" rows="10" placeholder="Расскажите, что вы думаете о проекте" required id="comments"></textarea>
        </p>
        <p>
          <label class="visually-hidden" for="name">Введите имя</label>
          <input class="form__field" type="text" name="name" placeholder="Ваше имя" required id="name" />
        </p>
        <div class="form-review__submit-wrapper">
          <button class="form-review__submit">Отправить</button>
          <p class="form-review__submit-description">Отзыв будет добавлен после проверки модератором</p>
        </div>
      </form>
    </section>
    <section class="reviews wrapper">
      <ul class="reviews__list">
        <li class="reviews__item">
          <div class="review__image-wrapper">
            <img class="review__image" src="<?php the_field('review__image_1'); ?>" />
          </div>
          <p class="review__name"><?php the_field('review__name_1'); ?></p>
          <p class="review__text"><?php the_field('review__text_1'); ?></p>
        </li>
        <li class="reviews__item">
          <div class="review__image-wrapper">
            <img class="review__image" src="<?php the_field('review__image_2') ?>" />
          </div>
          <p class="review__name"><?php the_field('review__name_2') ?></p>
          <p class="review__text"><?php the_field('review__text_2') ?></p>
        </li>
        <li class="reviews__item">
          <div class="review__image-wrapper">
            <img class="review__image" src="<?php the_field('review__image_3') ?>" />
          </div>
          <p class="review__name"><?php the_field('review__name_3') ?></p>
          <p class="review__text"><?php the_field('review__text_3') ?></p>
        </li>
      </ul>
    </section>
  </footer>
</body>

</html>