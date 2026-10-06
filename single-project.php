<?php

get_header();


/**
 * Данные проектов.
 */
$projects = [


    /*
     * =========================================================
     * КУХНИ
     * =========================================================
     */

    'brauni' => [

        'title' =>
            'Кухня для Юлии и её семьи',

        'subtitle' =>
            'Кухня в ЖК Брауни',

        'folder' =>
            'brauni',

        'images' => [
            '1.jpg',
            '1-8-1024x682.jpg',
            '2.jpg',
            '3-7-1024x682.jpg',
            '5-4-1024x682.jpg',
            '7-1-1024x682.jpg',
        ],

        'description' => [

            'Юлия обратилась к нам по рекомендации дизайнера интерьеров. Вместе с дизайнером Юлией продумали планировку, фрезеровку и каждую деталь кухни.',

            'Функциональный остров, встроенная техника и сочетание фасадов сделали кухню современной, удобной и эргономичной.',

        ],

        'size' =>
            '3900 × 2611 мм',

        'height' =>
            '',

        'designer' =>
            'Юлия',

        'materials' =>
            'МДФ в плёнке • Фурнитура Blum',

        'price' =>
            '371 300 ₽',

        'price_note' =>
            '+ Столешница из искусственного камня
Стоимость кухни и острова с доставкой и установкой на момент заказа 21.03.2023',
    ],


    'newton' => [

        'title' =>
            'Кухня для Владимира и Марии',

        'subtitle' =>
            'Кухня для семьи, ЖК Ньютон',

        'folder' =>
            'newton',

        'images' => [
            '1.jpg',
            '2.jpg',
            '2-2.jpg',
        ],

        'description' => [

            'Для Владимира и Марии создали функциональную кухню с учётом размеров помещения и ежедневных задач семьи.',

            'Фасады AGT Safari Grey, фурнитура Blum и столешница Grandex объединили практичность и современный внешний вид.',

        ],

        'size' =>
            '3440 × 3050 мм',

        'height' =>
            '2600 мм',

        'designer' =>
            '',

        'materials' =>
            'ЛДСП • AGT 3020 Safari Grey • Blum • TB Antaro • Schuko • Aventos HF • Grandex',

        'price' =>
            '419 600 ₽',

        'price_note' =>
            '+ столешница из искусственного камня Grandex, Корея',
    ],


    'japandi' => [

        'title' =>
            'Кухня для Александры и Алексея',

        'subtitle' =>
            'В стиле Джапанди',

        'folder' =>
            'japandi',

        'images' => [
            '1.jpg',
            '1-10.jpg',
            '2-9-1024x683.jpg',
            '3-9-1024x682.jpg',
            '5-6-1024x682.jpg',
            '6-5-1024x683.jpg',
        ],

        'description' => [

            'Александра и Алексей хотели кухню в стиле «Джапанди» — сочетание скандинавского минимализма и японской эстетики.',

            'Получилось спокойное, функциональное и лаконичное решение, полностью соответствующее характеру интерьера.',

        ],

        'size' =>
            '2380 × 4900 мм',

        'height' =>
            '2680 мм',

        'designer' =>
            'Юлия',

        'materials' =>
            'ЛДСП Egger • МДФ в плёнке',

        'price' =>
            '357 500 ₽',

        'price_note' =>
            'Столешница из искусственного камня в стоимость не входит.',
    ],


    'kapuchino' => [

        'title' =>
            'Кухня для Михаила и Олеси',

        'subtitle' =>
            'Кухня-гостиная в ЖК Капучино',

        'folder' =>
            'kapuchino',

        'images' => [
            '1.jpg',
            '3-10-1024x682.jpg',
            '4-8-1024x682.jpg',
            '5-7-1024x682.jpg',
        ],

        'description' => [

            'Михаил и Олеся хотели светлую кухню без лишних шкафов, но с продуманным функционалом и красивой текстурой под дерево.',

            'На основе эскиза заказчиков дизайнер доработал планировку и детали. В результате кухня получилась лёгкой, уютной и практичной.',

        ],

        'size' =>
            '',

        'height' =>
            '',

        'designer' =>
            '',

        'materials' =>
            'Фасады под дерево',

        'price' =>
            '301 578 ₽',

        'price_note' =>
            'Стоимость кухни с доставкой и установкой',
    ],


    'ekaterina' => [

        'title' =>
            'Светлая кухня с золотыми акцентами',

        'subtitle' =>
            'Кухня для Екатерины и её семьи',

        'folder' =>
            'ekaterina',

        'images' => [
            '1.jpg',
            '4-9-1024x683.jpg',
            '5-8-1024x682.jpg',
            '6-6-1024x682.jpg',
            '7-3-1024x683.jpg',
        ],

        'description' => [

            'Екатерина пришла с готовым проектом, но хотела рассмотреть другие варианты. Дизайнер Любовь предложила новую планировку, ради которой семья решила перенести розетки.',

            'Спокойные фасады дополнили золотые ручки, светильники, мойка и смеситель. Детали объединили интерьер в единую композицию.',

        ],

        'size' =>
            '2790 × 1975 мм',

        'height' =>
            '2600 мм',

        'designer' =>
            'Любовь',

        'materials' =>
            'МДФ в плёнке • Золотые акценты',

        'price' =>
            '247 800 ₽',

        'price_note' =>
            "Стоимость на 05.09.2023
С доставкой и установкой",
    ],


    'scandinavia' => [

        'title' =>
            'Кухня для Татьяны и Андрея',

        'subtitle' =>
            'Кухня в ЖК Скандинавия',

        'folder' =>
            'scandinavia',

        'images' => [
            '1.jpg',
            '1-13-1024x682.jpg',
            '3-12-1024x1024.jpg',
            '5-9-1024x1024.jpg',
            '6-7-1024x1024.jpg',
            '9-1024x1024.jpg',
        ],

        'description' => [

            'Для Татьяны и Андрея спроектировали кухню с учётом размеров помещения и индивидуальных задач семьи.',

            'Пластик Alvic Zenit и фурнитура Blum позволили создать современное и практичное решение.',

        ],

        'size' =>
            '4410 × 1987 мм',

        'height' =>
            '2620 мм',

        'designer' =>
            '',

        'materials' =>
            'Пластик Alvic Zenit • Фурнитура Blum',

        'price' =>
            '372 100 ₽',

        'price_note' =>
            'Стоимость кухни с доставкой и установкой',
    ],


    /*
     * =========================================================
     * ШКАФЫ И ГАРДЕРОБНЫЕ
     * =========================================================
     */

    'shkaf-detskaya-baramzinoy' => [

        'title' =>
            'Шкаф в детскую',

        'subtitle' =>
            'Шкаф в детскую, ул. Барамзиной 42',

        'folder' =>
            'shkaf-detskaya-baramzinoy',

        'images' => [
            '1.jpg',
            '2.jpg',
            '3.jpg',
            '4.jpg',
        ],

        'description' => [

            'Для детской комнаты создали многофункциональный шкаф со встроенными мягкими сиденьями.',

            'Шкаф занимает всю стену, обеспечивает много места для хранения и одновременно создаёт уютную зону для чтения, игр и отдыха.',

        ],

        'size' =>
            '3555 × Г440 × В2500 мм',

        'height' =>
            '2500 мм',

        'designer' =>
            'Юлия',

        'materials' =>
            'ЛДСП Egger • Эмаль • Blum • Боярд',

        'price' =>
            '233 600 ₽',

        'price_note' =>
            'Стоимость шкафа с доставкой и установкой на момент заказа 25.01.2024',
    ],


    /*
     * =========================================================
     * ДРУГАЯ МЕБЕЛЬ
     * =========================================================
     */

    'gostinaya-gorkogo' => [

        'title' =>
            'Гостиная на Горького',

        'subtitle' =>
            'Мебель для гостиной',

        'folder' =>
            'gostinaya-gorkogo',

        'images' => [
            '1.jpg',
            '2.jpg',
            '3.jpg',
            '4.jpg',
            '5.jpg',
        ],

        'description' => [

            'Для квартиры на улице Горького создали индивидуальную мебель для гостиной с учётом размеров помещения и задач заказчицы.',

            'ЛДСП Egger и фурнитура Blum позволили объединить все элементы в единую и функциональную композицию.',

        ],

        'size' =>
            '2800 × Г300 × В2550 мм',

        'height' =>
            '2550 мм',

        'designer' =>
            'Юлия',

        'materials' =>
            'ЛДСП Egger • Фурнитура Blum',

        'price' =>
            '80 920 ₽',

        'price_note' =>
            'Стоимость гостиной с доставкой и установкой на момент заказа 30.11.2024',
    ],


    'vannaya-protasy' => [

        'title' =>
            'Мебель в ванную комнату',

        'subtitle' =>
            'Мебель для ванной, п. Протасы',

        'folder' =>
            'vannaya-protasy',

        'images' => [
            '1.jpg',
            '2.jpg',
            '3.jpg',
            '4.jpg',
        ],

        'description' => [

            'Для ванной комнаты создали подвесную тумбу с двумя раковинами, которая занимает всю стену и обеспечивает удобное хранение.',

            'МДФ с фрезеровкой собственного производства, фурнитура Blum и столешница Grandex объединили практичность и аккуратный внешний вид.',

        ],

        'size' =>
            '2099 × Г495 × В520 мм',

        'height' =>
            '520 мм',

        'designer' =>
            'Юлия',

        'materials' =>
            'МДФ в плёнке • Blum • Grandex',

        'price' =>
            '164 400 ₽',

        'price_note' =>
            'Общая стоимость: тумба 99.400₽ + столешница Grandex 65.000₽',
    ],


    'stol-tumby-gorkogo' => [

        'title' =>
            'Стол и тумбы на Горького',

        'subtitle' =>
            'Комплект мебели для Любови',

        'folder' =>
            'stol-tumby-gorkogo',

        'images' => [
            '1.jpg',
            '2.jpg',
            '3.jpg',
            '4.jpg',
            '5.jpg',
        ],

        'description' => [

            'Для Любови создали комплект мебели из стола и двух тумб, рассчитанный индивидуально под пространство.',

            'Все элементы выполнены в едином стиле из ЛДСП Lamarty с фурнитурой Blum и образуют цельную композицию.',

        ],

        'size' =>
            'Стол: 1760 × Г400 × В800 мм;<br>Первая тумба: 1095 × 310 × В450 мм;<br>Вторая тумба: 1800 × Г300 × В120 мм',
        
        'height' =>
            '',

        'designer' =>
            'Юлия',

        'materials' =>
            'ЛДСП Lamarty • Петли Blum',

        'price' =>
            '82 250 ₽',

        'price_note' =>
            'Стоимость стола и двух тумб с доставкой и установкой на момент заказа 30.11.2024',
    ],
];


$current_slug =
    get_post_field(
        'post_name',
        get_the_ID()
    );


$project =
    $projects[$current_slug]
    ?? null;


if (!$project) {

    $project = [

        'title' =>
            get_the_title(),

        'subtitle' =>
            '',

        'folder' =>
            $current_slug,

        'images' =>
            [],

        'description' => [
            wp_strip_all_tags(
                get_the_content()
            ),
        ],

        'size' =>
            '',

        'height' =>
            '',

        'designer' =>
            '',

        'materials' =>
            '',

        'price' =>
            '',

        'price_note' =>
            '',
    ];
}


$base_path =
    get_template_directory()
    . '/assets/images/projects/'
    . $project['folder']
    . '/';


$base_url =
    get_template_directory_uri()
    . '/assets/images/projects/'
    . $project['folder']
    . '/';


$images = [];


foreach (
    $project['images']
    as $image
) {

    if (
        file_exists(
            $base_path . $image
        )
    ) {

        $images[] =
            $base_url
            . rawurlencode(
                $image
            );

    }
}


if (!$images) {

    $fallback =
        get_the_post_thumbnail_url(
            get_the_ID(),
            'full'
        );

    if ($fallback) {
        $images[] = $fallback;
    }
}


$related = [];


foreach (
    $projects
    as $slug => $item
) {

    if (
        $slug === $current_slug
        || empty(
            $item['images']
        )
    ) {
        continue;
    }


    $related[] = [

        'slug' =>
            $slug,

        'title' =>
            $item['title'],

        'image' =>
            $item['images'][0],

    ];


    if (
        count($related) === 2
    ) {
        break;
    }
}

?>

<main class="project-detail-page">

    <div class="container project-detail-container">

        <nav
            class="project-detail-breadcrumbs"
            aria-label="Хлебные крошки"
        >

            <div
                class="project-detail-breadcrumbs-main"
            >

                <a href="<?php echo esc_url(
                    home_url('/')
                ); ?>">
                    Главная
                </a>

                <span>/</span>

                <a
                    href="<?php echo esc_url(
                        get_post_type_archive_link(
                            'project'
                        )
                    ); ?>"
                >
                    Наши проекты
                </a>

                <span>/</span>

                <span>
                    <?php echo esc_html(
                        $project['title']
                    ); ?>
                </span>

            </div>


            <a
                class="project-detail-all-link"
                href="<?php echo esc_url(
                    get_post_type_archive_link(
                        'project'
                    )
                ); ?>"
            >
                ← Все проекты
            </a>

        </nav>


        <div class="project-detail-topline">

            <div>

                <h1
                    class="display project-detail-title"
                >
                    <?php echo esc_html(
                        $project['title']
                    ); ?>
                </h1>


                <?php if (
                    !empty(
                        $project['subtitle']
                    )
                ) : ?>

                    <p
                        class="project-detail-subtitle"
                    >
                        <?php echo esc_html(
                            $project['subtitle']
                        ); ?>
                    </p>

                <?php endif; ?>

            </div>

        </div>


        <?php if ($images) : ?>

            <section
                class="project-detail-gallery"
                data-project-gallery-viewer
            >

                <div
                    class="project-detail-main-image-wrap"
                >

                    <?php if (
                        count($images) > 1
                    ) : ?>

                        <button
                            type="button"
                            class="project-detail-arrow project-detail-arrow-prev"
                            data-project-prev
                            aria-label="Предыдущее фото"
                        >
                            ‹
                        </button>


                        <button
                            type="button"
                            class="project-detail-arrow project-detail-arrow-next"
                            data-project-next
                            aria-label="Следующее фото"
                        >
                            ›
                        </button>

                    <?php endif; ?>


                    <img
                        class="project-detail-main-image"
                        src="<?php echo esc_url(
                            $images[0]
                        ); ?>"
                        alt="<?php echo esc_attr(
                            $project['title']
                        ); ?>"
                        data-project-main-image
                    >

                </div>


                <?php if (
                    count($images) > 1
                ) : ?>

                    <div
                        class="project-detail-thumbs"
                        data-project-thumbs
                    >

                        <?php foreach (
                            $images
                            as $index => $image
                        ) : ?>

                            <button
                                type="button"
                                class="project-detail-thumb<?php echo $index === 0
                                    ? ' is-active'
                                    : ''; ?>"
                                data-project-thumb
                                data-gallery-image="<?php echo esc_url(
                                    $image
                                ); ?>"
                                data-gallery-index="<?php echo esc_attr(
                                    $index
                                ); ?>"
                                aria-label="Открыть фото <?php echo esc_attr(
                                    $index + 1
                                ); ?>"
                            >

                                <img
                                    src="<?php echo esc_url(
                                        $image
                                    ); ?>"
                                    alt=""
                                    loading="lazy"
                                >

                            </button>

                        <?php endforeach; ?>

                    </div>

                <?php endif; ?>

            </section>

        <?php endif; ?>


        <section class="project-detail-info">

            <div class="project-detail-about">

                <h2>
                    О проекте
                </h2>


                <?php foreach (
                    $project['description']
                    as $paragraph
                ) : ?>

                    <p>
                        <?php echo esc_html(
                            $paragraph
                        ); ?>
                    </p>

                <?php endforeach; ?>

            </div>


            <aside class="project-detail-characteristics">

                <h2>
                    Характеристики
                </h2>


                <?php if (
                    !empty(
                        $project['size']
                    )
                ) : ?>

                    <div
                        class="project-detail-spec"
                    >

                        <span>
                            Размеры
                        </span>

                        <strong>
                            <?php echo wp_kses_post(
                                $project['size']
                            ); ?>
                        </strong>

                    </div>

                <?php endif; ?>

                <?php if (
                    !empty(
                        $project['materials']
                    )
                ) : ?>

                    <div
                        class="project-detail-spec"
                    >

                        <span>
                            Материалы
                        </span>

                        <strong>
                            <?php echo esc_html(
                                $project['materials']
                            ); ?>
                        </strong>

                    </div>

                <?php endif; ?>


                <?php if (
                    !empty(
                        $project['price']
                    )
                ) : ?>

                    <div
                        class="project-detail-price"
                    >
                        <?php echo esc_html(
                            $project['price']
                        ); ?>
                    </div>


                    <?php if (
                        !empty(
                            $project['price_note']
                        )
                    ) : ?>

                        <p
                            class="project-detail-price-note"
                        >

                            <?php echo nl2br(
                                esc_html(
                                    $project['price_note']
                                )
                            ); ?>

                        </p>

                    <?php endif; ?>

                <?php endif; ?>


                <a
                    class="project-detail-calc-btn js-open-modal"
                    href="#consult"
                >
                    <?php

                    $kitchen_slugs = [
                        'brauni',
                        'newton',
                        'japandi',
                        'kapuchino',
                        'ekaterina',
                        'scandinavia',
                    ];

                    echo in_array(
                        $current_slug,
                        $kitchen_slugs,
                        true
                    )
                        ? 'Рассчитать мою кухню'
                        : 'Рассчитать мой проект';

                    ?>
                </a>


                <p
                    class="project-detail-individual"
                >
                    Стоимость рассчитывается индивидуально.
                </p>

            </aside>

        </section>


        <?php if ($related) : ?>

            <section
                class="project-detail-related"
            >

                <div
                    class="project-detail-related-heading"
                >

                    <h2>
                        Другие наши проекты
                    </h2>


                    <a
                        href="<?php echo esc_url(
                            get_post_type_archive_link(
                                'project'
                            )
                        ); ?>"
                    >
                        Смотреть все →
                    </a>

                </div>


                <div
                    class="project-detail-related-grid"
                >

                    <?php foreach (
                        $related
                        as $item
                    ) : ?>

                        <?php

                        $related_post =
                            get_page_by_path(
                                $item['slug'],
                                OBJECT,
                                'project'
                            );


                        $related_url =
                            $related_post instanceof WP_Post
                                ? get_permalink(
                                    $related_post
                                )
                                : get_post_type_archive_link(
                                    'project'
                                );


                        $related_path =
                            get_template_directory()
                            . '/assets/images/projects/'
                            . $item['slug']
                            . '/'
                            . $item['image'];


                        $related_url_img =
                            get_template_directory_uri()
                            . '/assets/images/projects/'
                            . $item['slug']
                            . '/'
                            . rawurlencode(
                                $item['image']
                            );

                        ?>


                        <a
                            class="project-detail-related-card"
                            href="<?php echo esc_url(
                                $related_url
                            ); ?>"
                        >

                            <span
                                class="project-detail-related-image"
                            >

                                <?php if (
                                    file_exists(
                                        $related_path
                                    )
                                ) : ?>

                                    <img
                                        src="<?php echo esc_url(
                                            $related_url_img
                                        ); ?>"
                                        alt="<?php echo esc_attr(
                                            $item['title']
                                        ); ?>"
                                        loading="lazy"
                                    >

                                <?php endif; ?>

                            </span>


                            <strong>
                                <?php echo esc_html(
                                    $item['title']
                                ); ?>
                            </strong>

                        </a>

                    <?php endforeach; ?>

                </div>

            </section>

        <?php endif; ?>

    </div>


    <section
        class="reviews-banner project-page-final-banner"
        aria-label="Рассчитать проект"
    >

        <div
            class="container reviews-banner-inner"
        >

            <img
                class="reviews-banner-monogram"
                src="<?php echo esc_url(
                    get_template_directory_uri()
                    . '/assets/images/vector-8.png'
                ); ?>"
                alt=""
                aria-hidden="true"
            >


            <div
                class="reviews-banner-content"
            >

                <h2>
                    Обсудим вашу будущую кухню?
                </h2>


                <p
                    class="project-page-final-banner-subtitle"
                >
                    Подберем решение под ваши размеры и бюджет
                </p>

            </div>


            <button
                class="reviews-banner-button js-open-modal"
                type="button"
            >
                Рассчитать проект
            </button>

        </div>

    </section>

</main>


<style>

.project-detail-page {
    background: var(--milk);
    padding: 22px 0 0;
}


.project-detail-container {
    max-width: 1200px;
}


.project-detail-breadcrumbs {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    width: 100%;
    margin-bottom: 8px;
    color: #5e5e57;
    font-size: 13px;
}


.project-detail-breadcrumbs-main {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 5px;
    min-width: 0;
}


.project-detail-all-link {
    flex: 0 0 auto;
    margin-left: auto;
    color: var(--olive);
    font-size: 15px;
    font-weight: 600;
    text-decoration: underline;
    text-underline-offset: 2px;
}


.project-detail-breadcrumbs a:hover,
.project-detail-all-link:hover,
.project-detail-related-heading a:hover {
    opacity: .65;
}


.project-detail-topline {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 25px;
    margin-bottom: 20px;
}


.project-detail-title {
    margin: 0 0 5px;

    font-size:
        clamp(
            40px,
            4.4vw,
            62px
        );

    line-height: .98;

    white-space: nowrap;
}


.project-detail-subtitle {
    margin: 0;

    color: #111;

    font-size: 16px;

    font-weight: 600;
}


.project-detail-gallery {
    margin-bottom: 25px;
}


.project-detail-main-image-wrap {
    position: relative;

    width: 100%;

    display: flex;

    justify-content: center;
    align-items: center;

    overflow: visible;

    background: transparent;
}


.project-detail-main-image {
    display: block;

    width: 60%;

    max-width: 1100px;

    height: auto;

    object-fit: contain;
}


.project-detail-arrow {
    position: absolute;

    top: 50%;

    transform:
        translateY(-50%);

    z-index: 5;

    width: 40px;
    height: 62px;

    display: flex;

    align-items: center;
    justify-content: center;

    padding: 0;

    border: 0;

    background:
        rgba(
            255,
            255,
            255,
            .88
        );

    color: #333;

    font-size: 38px;

    line-height: 1;

    cursor: pointer;

    transition:
        background-color .2s ease;
}


.project-detail-arrow:hover {
    background:
        rgba(
            255,
            255,
            255,
            1
        );
}


.project-detail-arrow-prev {
    left: 20%;
}


.project-detail-arrow-next {
    right: 20%;
}


.project-detail-thumbs {
    display: flex;

    align-items: center;

    justify-content: flex-start;

    gap: 14px;

    width: 100%;

    margin-top: 12px;

    overflow-x: auto;

    overflow-y: hidden;

    scrollbar-width: none;

    -ms-overflow-style: none;

    scroll-behavior: smooth;
}


.project-detail-thumbs::-webkit-scrollbar {
    display: none;
}


.project-detail-thumbs.is-centered {
    justify-content: center;

    overflow-x: hidden;
}


.project-detail-thumb {
    flex:
        0 0
        calc(
            (100% - 70px) / 6
        );

    display: block;

    width:
        calc(
            (100% - 70px) / 6
        );

    min-width: 0;

    padding: 0;

    border: 0;

    background: transparent;

    cursor: pointer;

    aspect-ratio: 1.65;

    overflow: hidden;
}


.project-detail-thumb img {
    width: 100%;

    height: 100%;

    display: block;

    object-fit: cover;

    outline: 1px solid transparent;

    outline-offset: -1px;

    transition:
        outline-color .2s ease,
        opacity .2s ease;
}


.project-detail-thumb:hover img,
.project-detail-thumb.is-active img {
    outline:
        3px solid
        var(--olive);

    outline-offset: -3px;
}


.project-detail-info {
    display: grid;

    grid-template-columns:
        minmax(0, 1.1fr)
        minmax(320px, .9fr);

    gap: 42px;

    padding-top: 4px;

    border-top:
        2px solid
        #9e3813;
}


.project-detail-info h2,
.project-detail-related h2 {
    margin: 0 0 15px;

    color: var(--terracotta);

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size: 37px;

    line-height: 1.05;

    font-weight: 500;
}


.project-detail-about {
    padding-top: 14px;

    padding-right: 25px;
}


.project-detail-about p {
    margin: 0 0 14px;

    max-width: 760px;

    font-size: 18px;

    line-height: 1.45;
}


.project-detail-characteristics {
    padding:
        14px
        0
        18px
        26px;

    border-left:
        1px solid
        rgba(
            89,
            98,
            74,
            .35
        );
}


.project-detail-spec {
    display: grid;

    grid-template-columns:
        105px
        minmax(0, 1fr);

    column-gap: 40px;

    row-gap: 0;

    padding: 7px 0;

    border-bottom:
        1px solid
        rgba(
            89,
            98,
            74,
            .20
        );

    color: #373735;

    font-size: 16px;

    line-height: 1.25;

    font-weight: 500;
}


.project-detail-spec span {
    color: #5f5f58;
}


.project-detail-spec strong {
    font-weight: 500;
}


.project-detail-price {
    margin-top: 14px;

    color: var(--terracotta);

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size: 55px;

    line-height: 1;

    font-weight: 650;
}


.project-detail-price-note,
.project-detail-individual {
    margin:
        6px
        0
        12px;

    color: #1f1f1c;

    font-size: 15px;

    line-height: 1.3;

    font-weight: 500;
}


.project-detail-individual {
    margin-bottom: 0;
}


.project-detail-calc-btn {
    width: 100%;

    min-height: 42px;

    display: flex;

    align-items: center;
    justify-content: center;

    padding: 10px 18px;

    background: var(--olive);

    color: var(--white);

    font-size: 15px;

    font-weight: 600;

    line-height: 1.2;

    text-align: center;

    text-decoration: none;

    transition:
        background .2s ease;
}


.project-detail-calc-btn:hover {
    background: #4d5640;
}


.project-detail-related {
    margin: 0 0 34px;

    padding-top: 12px;

    border-top:
        2px solid
        #9e3813;
}


.project-detail-related-heading {
    display: flex;

    align-items: center;

    justify-content: space-between;

    gap: 20px;
}


.project-detail-related-heading a {
    position: relative;

    top: -6px;

    margin-bottom: 0;

    color: var(--olive);

    font-size: 14px;

    font-weight: 600;

    text-decoration: underline;

    text-underline-offset: 2px;
}


.project-detail-related-grid {
    display: grid;

    grid-template-columns:
        repeat(
            2,
            minmax(0, 1fr)
        );

    gap: 20px;
}


.project-detail-related-card {
    display: block;
}


.project-detail-related-image {
    display: block;

    overflow: hidden;

    aspect-ratio: 1.62;

    background: #ddd;
}


.project-detail-related-image img {
    width: 100%;
    height: 100%;

    display: block;

    object-fit: cover;

    transition:
        transform .3s ease;
}


.project-detail-related-card:hover img {
    transform: scale(1.025);
}


.project-detail-related-card strong {
    display: block;

    margin-top: 7px;

    color: var(--terracotta);

    font-family:
        "Playfair Display",
        Georgia,
        serif;

    font-size: 22px;

    font-weight: 600;

    line-height: 1.15;
}


@media (max-width: 900px) {

    .project-detail-info {
        grid-template-columns: 1fr;
        gap: 0;
    }


    .project-detail-about {
        padding-right: 0;
    }


    .project-detail-characteristics {
        padding-left: 0;

        border-left: 0;

        border-top:
            1px solid
            rgba(
                89,
                98,
                74,
                .35
            );
    }

}


@media (max-width: 720px) {

    .project-detail-page {
        padding-top: 18px;
    }


    .project-detail-topline {
        flex-direction: column;

        gap: 8px;
    }


    .project-detail-title {
        font-size: 40px;

        white-space: normal;
    }


    .project-detail-all-link {
        order: -1;
    }


    .project-detail-main-image {
        width: 94%;
    }


    .project-detail-arrow-prev {
        left: 3%;
    }


    .project-detail-arrow-next {
        right: 3%;
    }


    .project-detail-arrow {
        width: 34px;

        height: 52px;

        font-size: 30px;
    }


    .project-detail-thumbs {
        gap: 8px;
    }


    .project-detail-thumb {
        flex-basis:
            calc(
                (100% - 16px) / 3
            );

        width:
            calc(
                (100% - 16px) / 3
            );
    }


    .project-detail-info h2,
    .project-detail-related h2 {
        font-size: 31px;
    }


    .project-detail-about p {
        font-size: 15px;
    }


    .project-detail-spec {
        grid-template-columns:
            90px 1fr;

        font-size: 14px;
    }


    .project-detail-related-grid {
        grid-template-columns: 1fr;
    }


    .project-detail-related-heading {
        align-items: center;
    }

}


@media (max-width: 460px) {

    .project-detail-title {
        font-size: 35px;
    }


    .project-detail-arrow {
        width: 34px;

        height: 50px;

        font-size: 35px;
    }

}

</style>


<?php get_footer(); ?>