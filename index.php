<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />
  <title>Interior lounge</title>
  <?php wp_head() ?>
</head>

<body>
  <header class="header">

  </header>
  <main>
    <section class="intro">
      <div class="wrapper">
        <div class="wysiwyg-wrapper"></div>
      </div>
    </section>
    <section class="main-area">
      <div class="wrapper">
        <div class="wysiwyg-wrapper">
          <h1 class="greetings_title">
            <?php
            the_field('greetings_title');
            ?>
          </h1>
          <h2>
            То же самое с заголовком второго уровня, посмотрим как будет
            смотреться текст на нескольких строках
          </h2>
          <div class="greetings_wrapper-image">
            <img src="<?php the_field('greetings_image') ?>" alt="Приветственное изображение" />
          </div>
          <p>
            <?php
            the_field('greetings_description');
            ?>
          </p>
          <p>
            Повторим параграф, чтобы посмотреть отступы между двумя
            параграфами подряд. Повторим параграф, чтобы посмотреть отступы
            между двумя параграфами подряд. Повторим параграф, чтобы
            посмотреть отступы между двумя параграфами подряд.
          </p>
          <h3>
            Заголовок третьего уровня поставим где-нибудь и тоже напишем
            больше текста, чтобы он переносился на несколько строк и мы сразу
            проверили переполнение:
          </h3>
          <ul>
            <li>
              Источники вдохновения планировалось искать в строгой геометрии,
              модерне и духе «ревущих двадцатых» Источники вдохновения
              планировалось искать в строгой геометрии, модерне и духе
              «ревущих двадцатых»;
            </li>
            <li>
              Необходимо было выдержать дорогой и одновременно элегантный
              стиль;
            </li>
            <li>
              Ключевой элемент дизайна любого общественного пространства —
              удобство для жителей.
            </li>
          </ul>
          <p>
            Добавим параграф после списка, чтобы посмотреть отступы после
            списка. Добавим параграф после списка, чтобы посмотреть отступы
            после списка. Добавим параграф после списка, чтобы посмотреть
            отступы после списка.
          </p>
          <blockquote>
            «Нам хотелось поддержать внешнюю архитектурную концепцию, но
            внутри добавить что-то необычное. Сделать некое подобие матрешки,
            чтобы все время открывались новые смыслы и элементы».
          </blockquote>
          <p>
            Добавим параграф после цитаты, чтобы посмотреть отступ после
            цитаты. Добавим параграф после цитаты, чтобы посмотреть отступ
            после цитаты. Добавим параграф после цитаты, чтобы посмотреть
            отступ после цитаты. Добавим параграф после цитаты, чтобы
            посмотреть отступ после цитаты. Добавим параграф после цитаты,
            чтобы посмотреть отступ после цитаты.
          </p>
        </div>
      </div>
    </section>
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