<footer class="footer">
      <section class="comments">
        <div class="wrapper">
          <h2 class="comments__title">Оставить отзыв</h2>
          <div class="comments-form">
            <div class="wpcf7">
              <form class="wpcf7-form" action="">
                <p>
                  <span class="wpcf7-form-control-wrap">
                    <textarea
                      class="wpcf7-textarea"
                      name=""
                      id=""
                      cols="40"
                      rows="10"
                      placeholder="Расскажите, что вы думаете о проекте"
                    ></textarea>
                  </span>
                </p>
                <p>
                  <span class="wpcf7-form-control-wrap">
                    <input
                      class="wpcf7-text"
                      type="text"
                      size="40"
                      placeholder="Ваше имя"
                    />
                  </span>
                </p>
                <div class="comments-submit-area">
                  <p>
                    <input
                      class="wpcf7-submit"
                      type="submit"
                      value="Отправить"
                    />
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
                <img
                  class="review__image"
                  src="<?php echo bloginfo('template_url'); ?>/assets/images/reviews/review-1.jpg"
                  alt="Иван Грачев"
                  width="50"
                  height="50"
                />
              </div>
              <p class="review__name">Иван Грачев</p>
              <p class="review__text">Очень самобытный и необычный проект.</p>
            </div>
            <div class="review">
              <div class="review__image-wrapper">
                <img
                  class="review__image"
                  src="<?php echo bloginfo('template_url'); ?>/assets/images/reviews/review-2.jpg"
                  alt="Мария Рачинская"
                  width="50"
                  height="50"
                />
              </div>
              <p class="review__name">Мария Рачинская</p>
              <p class="review__text">
                Мне особенно понравилось решение лестничных клеток. Кружки
                вообще очень стильные!
              </p>
            </div>
            <div class="review">
              <div class="review__image-wrapper">
                <img
                  class="review__image"
                  src="<?php echo bloginfo('template_url'); ?>/assets/images/reviews/review-3.jpg"
                  alt="Светлана"
                  width="50"
                  height="50"
                />
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