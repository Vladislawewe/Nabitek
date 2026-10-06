<footer class="site-footer" id="contacts">
    <div class="container footer-inner">

        <div>
            <h2 class="footer-title">Контакты</h2>

            <p class="footer-text">
                Единый номер «НАБИТЕК»
            </p>

            <?php
            $phone1 = get_theme_mod(
                'nabitek_phone1',
                '7 (931) 913-53-09'
            );
            ?>

            <p class="footer-text">
                <a
                    href="tel:<?php echo esc_attr(
                        preg_replace('/[^0-9+]/', '', $phone1)
                    ); ?>"
                >
                    <?php echo esc_html($phone1); ?>
                </a>
            </p>

            <div class="socials">

                <a
                    href="https://vk.ru/nabytek_perm"
                    target="_blank"
                    rel="noopener"
                    aria-label="VK"
                >
                    VK
                </a>

                <a
                    href="https://max.ru/join/3-VJoHgbRV4DvCHRcQTVFsbyux_aSK3sIxKdYBhKrKg"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="footer-social-link"
                    aria-label="MAX"
                >
                    MAX
                </a>

                <a
                    href="https://t.me/nabytek_perm"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="footer-social-link"
                    aria-label="Telegram"
                >
                    TG
                </a>

            </div>
        </div>


        <div class="footer-address-column">

            <h2 class="footer-title">
                Адреса
            </h2>

            <p class="footer-address">

                <strong>
                    Адрес салона
                </strong><br>

                <span class="footer-salon-address">
                    Пермь, ул. Стахановская 43, ТЦ Видный, 2 этаж.
                </span><br>

                Время работы: ПН-СБ 11-20.00,<br>
                ВС 11-18.00 по предварительной записи

            </p>

            <p class="footer-address footer-production">

                <strong>
                    Производство
                </strong><br>

                Пермь, Гамовский тракт 4/3

            </p>

        </div>

    </div>
</footer>


<!-- =========================================================
     МОДАЛЬНАЯ ФОРМА
     ========================================================= -->

<div
    class="modal"
    id="consultModal"
    aria-hidden="true"
>

    <div class="modal-card">

        <button
            class="modal-close"
            type="button"
            aria-label="Закрыть"
        >
            ×
        </button>


        <!--
            Это стандартный вариант формы.

            Для кнопок «Рассчитать стоимость»,
            «Рассчитать проект» и остальных кнопок
            он остаётся без изменений.
        -->

        <h2
            class="display"
            style="font-size: 36px; margin: 0 0 8px;"
        >
            Обсудим вашу кухню?
        </h2>


        <p class="modal-description">
            Запишитесь на бесплатную консультацию с дизайнером.
        </p>


        <form class="contact-form">

            <div class="form-grid">


                <label>
                    Имя

                    <input
                        name="name"
                        type="text"
                        required
                    >
                </label>


                <label>
                    Телефон

                    <input
                        name="phone"
                        type="tel"
                        required
                    >
                </label>


                <label>
                    Сообщение

                    <textarea
                        name="message"
                        class="modal-message"
                        placeholder="Расскажите, какая кухня вам нужна"
                    ></textarea>

                </label>


                <button
                    class="btn"
                    type="submit"
                >
                    Отправить заявку
                </button>

            </div>


            <div
                class="form-status"
                aria-live="polite"
            ></div>

        </form>

    </div>

</div>


<?php wp_footer(); ?>


</body>
</html>