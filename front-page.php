<?php get_header(); ?>

<main>

    <section class="hero">
        <div class="hero-inner container">

            <div class="hero-copy">
                <h1 class="display">
                    Кухни и мебель<br>
                    на заказ в Перми
                </h1>

                <p class="lead">
                    Индивидуальное проектирование<br>
                    и собственное производство
                </p>

                <p class="sublead">
                    10 лет создаём мебель для домов<br>
                    и квартир в Перми и Пермском крае.
                </p>

                <div class="hero-actions">
                    <a class="btn js-open-modal" href="#consult">
                        Рассчитать стоимость
                    </a>

                    <a class="btn secondary" href="<?php echo esc_url(get_post_type_archive_link('project')); ?>">
                        Смотреть проекты
                    </a>
                </div>

                <div class="hero-facts">

                    <div class="fact">
                        <strong>35 дней</strong>
                        <span>Кухня мечты<br>
                            за 35 рабочих дней</span>
                    </div>

                    <div class="fact">
                        <strong>2 года</strong>
                        <span>Гарантии<br>
на всю мебель</span>
                    </div>

                </div>
            </div>

            <div
                class="hero-image"
                aria-label="Кухня НАБИТЕК"
            ></div>

        </div>
    </section>

    <section class="story">
        <div class="container story-inner">

            <img
                class="story-monogram-img"
                src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/vector-8.png'); ?>"
                alt=""
                aria-hidden="true"
            >

            <div class="story-photo">
                <?php
                echo nabitek_img(
                    'founders.png',
                    'full',
                    [
                        'alt' => 'Алексей и Екатерина Сухорук — основатели НАБИТЕК',
                    ]
                );
                ?>
            </div>

            <div class="story-copy">

                <h2 class="display">
                    <span class="story-years">10 лет</span> мы создаём<br>
                    мебель для жизни
                </h2>

                <h3>
                    <strong>Алексей и Екатерина Сухорук</strong><br>
                    <em class="story-role">Основатели «НАБИТЕК»</em>
                </h3>

                <p>
                    Алексей отвечает за производство и качество проекта.
                </p>

                <p>
                    Екатерина отвечает за клиентский опыт — <br>чтобы
                    взаимодействие с Набитек было понятным,<br> комфортным
                    и внимательным от первой заявки <br>до установки кухни.
                </p>

            </div>

        </div>
    </section>

    <section class="stats">
        <div class="container stats-grid">

            <div class="stat">
                <strong>10+</strong>
                <span>лет работаем в Перми<br>и Пермском крае</span>
            </div>

            <div class="stat">
                <strong>2500+</strong>
                <span>реализованных<br>проектов</span>
            </div>

            <div class="stat">
                <strong>1500<small class="stat-unit">м²</small></strong>
                <span>производственного<br>цеха</span>
            </div>

        </div>
    </section>

    <section class="service-section" id="services">
        <div class="container service-grid">

            <article class="service-card kitchen">
                <div class="service-content">

                    <h3 class="display">
                        Кухни и мебель<br>
                        на заказ
                    </h3>

                    <p><strong>Полный цикл работ</strong></p>

                    <p>
                        Консультация → проект →<br> материалы →
                        замер → <br>производство → установка
                    </p>

                    <button
                        class="btn js-open-modal"
                        type="button"
                    >
                        Узнать подробнее
                    </button>

                </div>
            </article>

            <article class="service-card materials">
                <div class="service-content">

                    <h3 class="display">
                        Распил<br>
                        и фасады
                    </h3>

                    <ul>
                        <li>распил ЛДСП, МДФ, ХДФ <br>фрезеровка</li>
                        <li>фасады МДФ в пленке</li>
                        <li>изготовление деталей <br>по вашим размерам</li>
                    </ul>

                    <p>
                        <strong>
                            <span class="facade-line">Изготовление фасадов от 3-х</span><br>
                            рабочих дней
                        </strong>
                    </p>

                    <button
                        class="btn js-open-modal"
                        type="button"
                    >
                        Узнать подробнее
                    </button>

                </div>
            </article>

        </div>
    </section>

    <section class="section" id="projects">
        <div class="container">

            <h2 class="section-title display">
                Наши проекты
            </h2>

            <div class="projects-carousel">

                <button
                    class="projects-control projects-control-prev"
                    type="button"
                    aria-label="Предыдущий проект"
                >
                    <svg class="projects-control-icon" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M33 20H8M8 20L18 10M8 20L18 30"
                              stroke="currentColor"
                              stroke-width="6"
                              stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </button>

                <button
                    class="projects-control projects-control-next"
                    type="button"
                    aria-label="Следующий проект"
                >
                    <svg class="projects-control-icon" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M7 20H32M32 20L22 10M32 20L22 30"
                              stroke="currentColor"
                              stroke-width="6"
                              stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </button>

                <div class="projects-grid" data-projects-carousel>                   
                    <?php
                    $projects = [
                        [
                            'slug'  => 'newton',
                            'title' => 'Кухня для Владимира и Марии, ЖК Ньютон',
                            'image' => 'projects/newton/1.jpg',
                        ],
                        [
                            'slug'  => 'japandi',
                            'title' => 'Кухня для Алексея и Александры в стиле Джапанди',
                            'image' => 'projects/japandi/1.jpg',
                        ],
                        [
                            'slug'  => 'ekaterina',
                            'title' => 'Кухня для Екатерины и её семьи, с золотыми акцентами',
                            'image' => 'projects/ekaterina/1.jpg',
                        ],
                        [
                            'slug'  => 'kapuchino',
                            'title' => 'Кухня для Михаила и Олеси, ЖК Капучино',
                            'image' => 'projects/kapuchino/1.jpg',
                        ],
                        [
                            'slug'  => 'brauni',
                            'title' => 'Кухня для Юлии и её семьи, ЖК Брауни',
                            'image' => 'projects/brauni/1.jpg',
                        ],
                        [
                            'slug'  => 'scandinavia',
                            'title' => 'Кухня для Татьяны и Андрея, ЖК Скандинавия',
                            'image' => 'projects/scandinavia/1.jpg',
                        ],
                    ];

                    foreach ($projects as $project) :

                        $project_post = get_page_by_path(
                            $project['slug'],
                            OBJECT,
                            'project'
                        );

                        $project_url = $project_post instanceof WP_Post
                            ? get_permalink($project_post)
                            : get_post_type_archive_link('project');
                    ?>

                        <a
                            class="project-card"
                            href="<?php echo esc_url($project_url); ?>"
                        >

                            <div class="project-image">
                                <img
                                    src="<?php echo esc_url(
                                        get_template_directory_uri()
                                        . '/assets/images/'
                                        . $project['image']
                                    ); ?>"
                                    alt="<?php echo esc_attr($project['title']); ?>"
                                    loading="lazy"
                                >
                            </div>

                            <span class="project-card-title">
                                <?php echo esc_html($project['title']); ?>
                            </span>

                        </a>

                    <?php endforeach; ?>

                </div>

            </div>
        </div>
    </section>

    <section class="why" id="reviews">
        <div class="container">

            <h2 class="section-title display">
                Почему выбирают «НАБИТЕК»
            </h2>

            <div class="why-grid">

                <?php
                $why = [
                    [
                        'factory.svg.png',
                        'Собственное производство',
                        'Полный контроль качества на каждом этапе',
                    ],
                    [
                        'design.svg.png',
                        'Индивидуальные решения',
                        'Наши дизайнеры проектируют мебель под ваш интерьер и задачи',
                    ],
                    [
                        'time.svg.png',
                        'Соблюдаем сроки',
                        'Четкое планирование и контроль на каждом этапе',
                    ],
                    [
                        'kitchen.svg.png',
                        'Подменная кухня',
                        'Предоставляем бесплатно, чтобы облегчить ожидание новой кухни',
                    ],
                ];

                foreach ($why as $item) :
                    [$icon, $title, $text] = $item;
                    ?>

                    <div class="why-item">

                        <?php
                        echo nabitek_icon(
                            $icon,
                            $title
                        );
                        ?>

                        <h3>
                            <?php echo esc_html($title); ?>
                        </h3>

                        <p>
                            <?php if ('Собственное производство' === $title) : ?>
                                <span class="why-line">Полный контроль качества</span>
                                <span class="why-line">на каждом этапе</span>
                            <?php elseif ('Индивидуальные решения' === $title) : ?>
                                <span class="why-line">Наши дизайнеры проектируют</span>
                                <span class="why-line">мебель под ваш интерьер и задачи</span>
                            <?php elseif ('Соблюдаем сроки' === $title) : ?>
                                <span class="why-line">Четкое планирование</span>
                                <span class="why-line">и контроль на каждом этапе</span>
                            <?php elseif ('Подменная кухня' === $title) : ?>
                                <span class="why-line">Предоставляем бесплатно,</span>
                                <span class="why-line">чтобы облегчить ожидание</span>
                                <span class="why-line">новой кухни</span>
                            <?php else : ?>
                                <?php echo esc_html($text); ?>
                            <?php endif; ?>
                        </p>

                    </div>

                <?php endforeach; ?>

            </div>
        </div>
    </section>

    <section class="trust">
        <div class="container trust-grid">

            <div class="trust-col">
                <h3>Команда</h3>

                <p>
                    Дизайнеры, технологи — команда профессионалов,
                    которые любят своё дело.
                </p>

                <div class="mini-avatars" aria-label="Фотографии команды">
                    <?php
                    $team_photos = [
                        ['team-1.jpg', 'Член команды НАБИТЕК'],
                        ['team-2.jpg', 'Член команды НАБИТЕК'],
                        ['team-3.jpg', 'Член команды НАБИТЕК'],
                    ];

                    foreach ($team_photos as [$photo, $alt]) :
                        ?>
                        <span class="mini-avatar">
                            <?php echo nabitek_img($photo, 'full', ['alt' => $alt]); ?>
                        </span>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="trust-col">
                <h3>Видеоотзывы</h3>
                
                <?php $reviews_url = get_post_type_archive_link('review'); ?>
                <p class="trust-review-action">
                    <a
                        class="btn trust-review-button"
                        href="<?php echo esc_url($reviews_url); ?>"
                    >
                        Смотреть все отзывы →
                    </a>
                </p>
                <a
                    class="video-review-link"
                    href="<?php echo esc_url($reviews_url); ?>"
                    aria-label="Перейти на страницу отзывов"
                >
                    <?php
                    echo nabitek_img(
                        'video-review.jpg',
                        'full',
                        [
                            'class' => 'video-review-image',
                            'alt'   => 'Видеоотзыв клиента НАБИТЕК',
                        ]
                    );
                    ?>
                </a>
            </div>

           <div class="trust-col">
    <h3 class="materials-title">Материалы и фурнитура</h3>

    <?php
    $materials_logos = [
        ['blum.jpg', 'blum'],
        ['grandex.jpg', 'GRANDEX'],
        ['egger.jpg', 'EGGER'],
        ['hettich.jpg', 'Hettich'],
        ['cleaf.jpg', 'CLEAF'],
        ['fenix.jpg', 'FENIX NTM'],
        ['luxe.jpg', 'Luxe by ALVIC'],
        ['agt.jpg', 'AGT'],
    ];
    ?>

    <div class="materials-logos">
        <?php foreach ($materials_logos as $logo) : ?>
            <div class="materials-logo">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo esc_attr($logo[0]); ?>"
                    alt="<?php echo esc_attr($logo[1]); ?>"
                    class="materials-logo-image"
                >
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="trust-col">
    <h3>Вопросы и ответы</h3>

    <ul class="faq">
        <li class="faq-item">
            <button type="button" class="faq-question">
                <span>Бесплатный выезд дизайнера,<br>какие условия?</span>
                <span class="faq-icon">+</span>
            </button>
            <div class="faq-answer">
                Выезд дизайнера осуществляется по Перми. 
                Услуга бесплатная. Дизайнер замеряет помещение,  
                приезжает с базовыми образцами, 
                консультирует по расположению и эргономике, 
                предлагает лучшие возможные решения.  

                Далее, планируется встреча у нас в салоне для создания 3D-проекта, выбора материалов и фурнитуры.
            </div>
        </li>

        <li class="faq-item">
            <button type="button" class="faq-question">
                <span>Работаете ли вы за пределами Перми?</span>
                <span class="faq-icon">+</span>
            </button>
            <div class="faq-answer">
                Мы работаем по всей Перми и в Пермском крае в радиусе 250 км.
            </div>
        </li>

        <li class="faq-item">
            <button type="button" class="faq-question">
                <span>Работаете ли вы с ИП и ООО?</span>
                <span class="faq-icon">+</span>
            </button>
            <div class="faq-answer">
                Да, конечно.
            </div>
        </li>

        <li class="faq-item">
            <button type="button" class="faq-question">
                <span>Как проходит оплата?</span>
                <span class="faq-icon">+</span>
            </button>
            <div class="faq-answer">
                При заключении договора предоплата 60%, остаток за день до установки 
                кухни. Оплата возможна наличными, по терминалу,
                переводом и безналичным расчетом (счет на организацию).
            </div>
        </li>
    </ul>
</div>

        </div>
    </section>

    <section class="cta" id="consult">
        <div class="container cta-inner">

            <div></div>

            <div class="cta-copy">

                <h2 class="display">
                    Обсудим вашу будущую кухню?
                </h2>

                <p>
                    Запишитесь на бесплатную консультацию<br>
                    с дизайнером в удобное для вас время
                </p>

                <button
                    class="btn js-open-modal"
                    type="button"
                >
                    Записаться на консультацию
                </button>

            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>