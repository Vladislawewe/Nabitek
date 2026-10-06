document.addEventListener('DOMContentLoaded', () => {

    /* =========================================================
       МОБИЛЬНОЕ МЕНЮ
       ========================================================= */

    const toggle = document.querySelector('.nav-toggle');
    const nav = document.querySelector('.site-nav');

    if (toggle && nav) {
        toggle.addEventListener('click', () => {

            const isOpen =
                nav.classList.toggle('is-open');

            toggle.setAttribute(
                'aria-expanded',
                String(isOpen)
            );
        });
    }


    /* =========================================================
       МОДАЛЬНАЯ ФОРМА
       ========================================================= */

    const modal =
        document.getElementById('consultModal');

    const openers =
        document.querySelectorAll('.js-open-modal');

    const closeButton =
        modal?.querySelector('.modal-close');


    /*
     * Элементы модального окна.
     */

    const modalTitle =
        modal?.querySelector('.modal-card h2');

    const modalDescription =
        modal?.querySelector('.modal-description');

    const modalMessage =
        modal?.querySelector('.modal-message');


    /*
     * Открытие формы.
     *
     * Для блока «Кухни и мебель на заказ»
     * используется такая же форма, как у
     * кнопки «Рассчитать стоимость».
     *
     * Для блока «Распил и фасады»
     * остаётся форма технолога.
     */

    const openModal = (button) => {

        if (!modal) {
            return;
        }


        const isMaterialsServiceButton =
            Boolean(
                button.closest('.service-card.materials')
            );


        if (isMaterialsServiceButton) {

            if (modalTitle) {
                modalTitle.textContent =
                    'Давайте обсудим проект';
            }


            if (modalDescription) {
                modalDescription.textContent =
                    'Запишитесь на бесплатную консультацию с технологом.';
            }


            if (modalMessage) {
                modalMessage.placeholder =
                    'Расскажите подробнее';
            }

        } else {

            if (modalTitle) {
                modalTitle.textContent =
                    'Обсудим вашу кухню?';
            }


            if (modalDescription) {
                modalDescription.textContent =
                    'Запишитесь на бесплатную консультацию с дизайнером.';
            }


            if (modalMessage) {
                modalMessage.placeholder =
                    'Расскажите, какая кухня вам нужна';
            }

        }


        modal.classList.add('is-open');

        modal.setAttribute(
            'aria-hidden',
            'false'
        );

        modal
            .querySelector('input')
            ?.focus();
    };


    /*
     * Обработчики всех кнопок открытия формы.
     */

    openers.forEach((button) => {

        button.addEventListener(
            'click',
            (event) => {

                event.preventDefault();

                openModal(button);

            }
        );

    });


    /*
     * Закрытие по крестику.
     */

    closeButton?.addEventListener(
        'click',
        () => {

            modal.classList.remove(
                'is-open'
            );

            modal.setAttribute(
                'aria-hidden',
                'true'
            );

        }
    );


    /*
     * Закрытие по клику вне окна.
     */

    modal?.addEventListener(
        'click',
        (event) => {

            if (event.target === modal) {

                modal.classList.remove(
                    'is-open'
                );

                modal.setAttribute(
                    'aria-hidden',
                    'true'
                );

            }

        }
    );


    /* =========================================================
       ОТПРАВКА ФОРМЫ
       ========================================================= */

    const form =
        modal?.querySelector('.contact-form');


    form?.addEventListener(
        'submit',
        async (event) => {

            event.preventDefault();


            const status =
                form.querySelector('.form-status');


            status.textContent =
                'Отправка…';


            const formData =
                new FormData(form);


            formData.append(
                'action',
                'nabitek_contact'
            );


            formData.append(
                'nonce',
                nabitekData.nonce
            );


            try {

                const response =
                    await fetch(
                        nabitekData.ajaxUrl,
                        {
                            method: 'POST',
                            body: formData,
                        }
                    );


                const data =
                    await response.json();


                status.textContent =
                    data.data?.message ||
                    'Готово';


                if (data.success) {
                    form.reset();
                }


            } catch (error) {

                status.textContent =
                    'Не удалось отправить форму. Позвоните нам по телефону в разделе «Контакты».';

            }

        }
    );


    /* =========================================================
       КАРУСЕЛЬ ПРОЕКТОВ НА ГЛАВНОЙ
       ========================================================= */

    document
        .querySelectorAll('.projects-carousel')
        .forEach((carousel) => {

            const track =
                carousel.querySelector(
                    '[data-projects-carousel]'
                );


            const previous =
                carousel.querySelector(
                    '.projects-control-prev'
                );


            const next =
                carousel.querySelector(
                    '.projects-control-next'
                );


            if (!track || !previous || !next) {
                return;
            }


            let isMoving = false;


            const getStep = () => {

                const card =
                    track.querySelector(
                        '.project-card'
                    );


                if (!card) {
                    return 0;
                }


                const gap =
                    parseFloat(
                        getComputedStyle(track).gap
                    ) || 0;


                return (
                    card.getBoundingClientRect().width +
                    gap
                );

            };


            const updateButtons = () => {

                previous.disabled =
                    track.scrollLeft <= 1;


                next.disabled =
                    track.scrollLeft +
                    track.clientWidth >=
                    track.scrollWidth - 1;

            };


            const moveOneProject = (
                direction
            ) => {

                if (isMoving) {
                    return;
                }


                const step =
                    getStep();


                if (!step) {
                    return;
                }


                isMoving = true;


                track.scrollBy({

                    left:
                        direction * step,

                    behavior:
                        'smooth'

                });


                setTimeout(() => {

                    updateButtons();

                    isMoving = false;

                }, 450);

            };


            previous.addEventListener(
                'click',
                () => {
                    moveOneProject(-1);
                }
            );


            next.addEventListener(
                'click',
                () => {
                    moveOneProject(1);
                }
            );


            track.addEventListener(
                'scroll',
                updateButtons,
                {
                    passive: true
                }
            );


            window.addEventListener(
                'resize',
                updateButtons
            );


            updateButtons();

        });


    /* =========================================================
       СТАРАЯ ГАЛЕРЕЯ ПРОЕКТОВ
       ========================================================= */

    document
        .querySelectorAll(
            '[data-project-gallery]'
        )
        .forEach((gallery) => {

            const slides =
                gallery.querySelectorAll(
                    '.project-gallery-slide'
                );


            const viewer =
                gallery
                    .closest(
                        '.project-single-layout'
                    )
                    ?.querySelector(
                        '[data-project-main-image]'
                    );


            slides.forEach((slide) => {

                slide.addEventListener(
                    'click',
                    () => {

                        slides.forEach(
                            (item) => {

                                item.classList.remove(
                                    'is-active'
                                );

                            }
                        );


                        slide.classList.add(
                            'is-active'
                        );


                        if (viewer) {

                            viewer.src =
                                slide.dataset.galleryImage;

                        }

                    }
                );

            });

        });


    /* =========================================================
       ГАЛЕРЕЯ ОТДЕЛЬНОЙ СТРАНИЦЫ ПРОЕКТА
       ========================================================= */

    document
        .querySelectorAll(
            '[data-project-gallery-viewer]'
        )
        .forEach((gallery) => {

            const main =
                gallery.querySelector(
                    '[data-project-main-image]'
                );


            const thumbsWrap =
                gallery.querySelector(
                    '[data-project-thumbs]'
                );


            const thumbs =
                Array.from(
                    gallery.querySelectorAll(
                        '[data-project-thumb]'
                    )
                );


            const previous =
                gallery.querySelector(
                    '[data-project-prev]'
                );


            const next =
                gallery.querySelector(
                    '[data-project-next]'
                );


            if (
                !main ||
                !thumbsWrap ||
                !thumbs.length
            ) {
                return;
            }


            let index = 0;


            /*
             * Проверяем, помещаются ли
             * все миниатюры.
             */

            const updateThumbsLayout = () => {

                const hasOverflow =
                    thumbsWrap.scrollWidth >
                    thumbsWrap.clientWidth + 1;


                thumbsWrap.classList.toggle(
                    'is-centered',
                    !hasOverflow
                );

            };


            /*
             * Показываем фотографию.
             */

            const show = (
                newIndex,
                shouldScrollThumb = true
            ) => {

                index =
                    (
                        newIndex +
                        thumbs.length
                    ) %
                    thumbs.length;


                const thumb =
                    thumbs[index];


                const image =
                    thumb.dataset.galleryImage;


                if (image) {
                    main.src = image;
                }


                thumbs.forEach(
                    (
                        item,
                        itemIndex
                    ) => {

                        const isActive =
                            itemIndex === index;


                        item.classList.toggle(
                            'is-active',
                            isActive
                        );


                        item.setAttribute(
                            'aria-current',
                            isActive
                                ? 'true'
                                : 'false'
                        );

                    }
                );


                /*
                 * Если миниатюры
                 * не помещаются,
                 * прокручиваем ленту.
                 */

                if (shouldScrollThumb) {

                    const wrapLeft =
                        thumbsWrap.scrollLeft;


                    const wrapRight =
                        wrapLeft +
                        thumbsWrap.clientWidth;


                    const thumbLeft =
                        thumb.offsetLeft;


                    const thumbRight =
                        thumbLeft +
                        thumb.offsetWidth;


                    if (
                        thumbLeft <
                        wrapLeft
                    ) {

                        thumbsWrap.scrollTo({
                            left: thumbLeft,
                            behavior: 'smooth'
                        });

                    } else if (
                        thumbRight >
                        wrapRight
                    ) {

                        thumbsWrap.scrollTo({
                            left:
                                thumbRight -
                                thumbsWrap.clientWidth,

                            behavior: 'smooth'
                        });

                    }

                }


                updateThumbsLayout();

            };


            /*
             * Нажатие на миниатюру.
             */

            thumbs.forEach(
                (
                    thumb,
                    thumbIndex
                ) => {

                    thumb.addEventListener(
                        'click',
                        () => {
                            show(thumbIndex);
                        }
                    );

                }
            );


            /*
             * Стрелка назад.
             */

            previous?.addEventListener(
                'click',
                () => {
                    show(index - 1);
                }
            );


            /*
             * Стрелка вперёд.
             */

            next?.addEventListener(
                'click',
                () => {
                    show(index + 1);
                }
            );


            /*
             * При изменении размера окна
             * пересчитываем расположение.
             */

            const refreshLayout = () => {
                updateThumbsLayout();
            };


            window.addEventListener(
                'resize',
                refreshLayout
            );


            /*
             * После загрузки изображений
             * снова проверяем ширину.
             */

            thumbs.forEach((thumb) => {

                thumb
                    .querySelector('img')
                    ?.addEventListener(
                        'load',
                        refreshLayout
                    );

            });


            /*
             * Начальное состояние.
             */

            thumbs.forEach(
                (
                    item,
                    itemIndex
                ) => {

                    const isActive =
                        itemIndex === 0;


                    item.classList.toggle(
                        'is-active',
                        isActive
                    );


                    item.setAttribute(
                        'aria-current',
                        isActive
                            ? 'true'
                            : 'false'
                    );

                }
            );


            updateThumbsLayout();


            /*
             * Дополнительная проверка
             * после отрисовки страницы.
             */

            setTimeout(
                updateThumbsLayout,
                50
            );

        });


    /* =========================================================
       FAQ
       ========================================================= */

    document
        .querySelectorAll('.faq-question')
        .forEach((question) => {

            question.addEventListener(
                'click',
                () => {

                    const item =
                        question.closest(
                            '.faq-item'
                        );


                    if (!item) {
                        return;
                    }


                    const isOpen =
                        item.classList.contains(
                            'is-open'
                        );


                    document
                        .querySelectorAll(
                            '.faq-item.is-open'
                        )
                        .forEach(
                            (openItem) => {

                                openItem.classList.remove(
                                    'is-open'
                                );

                            }
                        );


                    if (!isOpen) {

                        item.classList.add(
                            'is-open'
                        );

                    }

                }
            );

        });


    /* =========================================================
       ОТЗЫВЫ — ПОКАЗАТЬ ЕЩЁ
       ========================================================= */

    document
        .querySelectorAll(
            '[data-reviews-grid]'
        )
        .forEach((grid) => {

            const cards =
                Array.from(
                    grid.querySelectorAll(
                        '.review-card'
                    )
                );


            const loadMore =
                document.querySelector(
                    '[data-reviews-load-more]'
                );


            if (!cards.length) {

                loadMore?.classList.add(
                    'is-hidden'
                );

                return;
            }


            let expanded = false;


            const updateReviews = () => {

                cards.forEach(
                    (
                        card,
                        index
                    ) => {

                        card.classList.toggle(
                            'is-extra-review',
                            index > 3
                        );


                        card.classList.toggle(
                            'is-revealed',
                            expanded ||
                            index <= 3
                        );

                    }
                );


                const hasMore =
                    cards.length > 4;


                loadMore?.classList.toggle(
                    'is-hidden',
                    !hasMore ||
                    expanded
                );

            };


            loadMore?.addEventListener(
                'click',
                () => {

                    expanded = true;

                    updateReviews();

                }
            );


            updateReviews();

        });


    /* =========================================================
       СТРАНИЦА ПРОЕКТОВ — ФИЛЬТРЫ
       ========================================================= */

    document
        .querySelectorAll(
            '[data-projects-page-grid]'
        )
        .forEach((grid) => {

            const cards =
                Array.from(
                    grid.querySelectorAll(
                        '.projects-page-card'
                    )
                );


            const filterButtons =
                document.querySelectorAll(
                    '[data-project-filter]'
                );


            const loadMore =
                document.querySelector(
                    '[data-projects-load-more]'
                );


            const emptyState =
                document.querySelector(
                    '[data-projects-filter-empty]'
                );


            let activeFilter = 'all';

            let showAll = false;


            const updateProjectPage = () => {

                let visibleCount = 0;


                cards.forEach(
                    (
                        card,
                        index
                    ) => {

                        const category =
                            card.dataset.projectCategory ||
                            '';


                        const matchesFilter =
                            activeFilter === 'all' ||
                            category === activeFilter;


                        /*
                         * В режиме «Все проекты»:
                         * показываем первые 4.
                         *
                         * Остальные после
                         * «Показать ещё».
                         */

                        const shouldShow =
                            matchesFilter &&
                            (
                                activeFilter !== 'all' ||
                                index < 4 ||
                                showAll
                            );


                        /*
                         * Задаём display
                         * непосредственно через JS.
                         */

                        card.style.display =
                            shouldShow
                                ? 'block'
                                : 'none';


                        if (shouldShow) {
                            visibleCount++;
                        }

                    }
                );


                /*
                 * Кнопка «Показать ещё»
                 * нужна только на всех проектах.
                 */

                if (loadMore) {

                    const hasMore =
                        activeFilter === 'all' &&
                        cards.length > 4 &&
                        !showAll;


                    loadMore.classList.toggle(
                        'is-hidden',
                        !hasMore
                    );

                }


                /*
                 * Сообщение,
                 * если категория пустая.
                 */

                if (emptyState) {

                    emptyState.hidden =
                        visibleCount !== 0;

                }

            };


            filterButtons.forEach(
                (button) => {

                    button.addEventListener(
                        'click',
                        () => {

                            activeFilter =
                                button.dataset.projectFilter ||
                                'all';


                            /*
                             * При выборе категории
                             * показываем все проекты.
                             */

                            showAll = false;


                            filterButtons.forEach(
                                (item) => {

                                    const isActive =
                                        item === button;


                                    item.classList.toggle(
                                        'is-active',
                                        isActive
                                    );


                                    item.setAttribute(
                                        'aria-selected',
                                        String(isActive)
                                    );

                                }
                            );


                            updateProjectPage();

                        }
                    );

                }
            );


            loadMore?.addEventListener(
                'click',
                () => {

                    showAll = true;

                    updateProjectPage();

                }
            );


            updateProjectPage();

        });

});