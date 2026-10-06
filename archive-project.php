<?php get_header(); ?>

<?php
$project_catalog = [
    [
        'slug'     => 'brauni',
        'title'    => 'Кухня для Юлии и её семьи',
        'location' => 'ЖК Брауни',
        'details'  => 'МДФ в плёнке • Фурнитура Blum',
        'image'    => 'projects/brauni/2.jpg',
        'category' => 'kitchen',
    ],
    [
        'slug'     => 'newton',
        'title'    => 'Кухня для Владимира и Марии',
        'location' => 'ЖК Ньютон',
        'details'  => 'Фасады AGT • Фурнитура Blum',
        'image'    => 'projects/newton/2.jpg',
        'category' => 'kitchen',
    ],
    [
        'slug'     => 'japandi',
        'title'    => 'Кухня для Алексея и Александры',
        'location' => 'В стиле джапанди',
        'details'  => 'ЛДСП Egger • МДФ в плёнке',
        'image'    => 'projects/japandi/1.jpg',
        'category' => 'kitchen',
    ],
    [
        'slug'     => 'kapuchino',
        'title'    => 'Кухня для Михаила и Олеси',
        'location' => 'ЖК Капучино',
        'details'  => 'ЛДСП Egger • Фурнитура Blum',
        'image'    => 'projects/kapuchino/1.jpg',
        'category' => 'kitchen',
    ],
    [
        'slug'     => 'ekaterina',
        'title'    => 'Кухня для Екатерины и её семьи',
        'location' => 'Индивидуальный проект',
        'details'  => 'МДФ в плёнке • Фурнитура Blum',
        'image'    => 'projects/ekaterina/1.jpg',
        'category' => 'kitchen',
    ],
    [
        'slug'     => 'scandinavia',
        'title'    => 'Кухня для Андрея и Татьяны',
        'location' => 'ЖК Скандинавия',
        'details'  => 'ЛДСП Egger • Фурнитура Blum',
        'image'    => 'projects/scandinavia/1.jpg',
        'category' => 'kitchen',
    ],
    [
        'slug'     => 'shkaf-detskaya-baramzinoy',
        'title'    => 'Шкаф в детскую',
        'location' => 'ул. Барамзиной, 42',
        'details'  => 'ЛДСП Egger и УваДрев • Эмаль • Blum',
        'image'    => 'projects/shkaf-detskaya-baramzinoy/1.jpg',
        'category' => 'wardrobe',
    ],
    [
        'slug'     => 'gostinaya-gorkogo',
        'title'    => 'Гостиная на Горького',
        'location' => 'ул. Горького, 86',
        'details'  => 'ЛДСП Egger • Фурнитура Blum',
        'image'    => 'projects/gostinaya-gorkogo/1.jpg',
        'category' => 'other',
    ],
    [
        'slug'     => 'vannaya-protasy',
        'title'    => 'Мебель в ванную комнату',
        'location' => 'п. Протасы',
        'details'  => 'МДФ • Blum • Столешница Grandex',
        'image'    => 'projects/vannaya-protasy/1.jpg',
        'category' => 'other',
    ],
    [
        'slug'     => 'stol-tumby-gorkogo',
        'title'    => 'Стол и тумбы на Горького',
        'location' => 'ул. Горького, 86',
        'details'  => 'ЛДСП Lamarty • Петли Blum',
        'image'    => 'projects/stol-tumby-gorkogo/1.jpg',
        'category' => 'other',
    ],
];

function nabitek_archive_project_url($slug) {
    $post = get_page_by_path($slug, OBJECT, 'project');

    if ($post instanceof WP_Post) {
        return get_permalink($post);
    }

    return '#consult';
}
?>

<main class="projects-page">

    <section class="projects-hero">
        <div class="container projects-container">

            <div class="projects-breadcrumbs">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    Главная
                </a>

                <span aria-hidden="true">/</span>

                <span>
                    Наши проекты
                </span>
            </div>

            <h1 class="projects-page-title display">
                Наши проекты
            </h1>

            <p class="projects-page-lead">
                Кухни и мебель, созданные для реальных домов и семей.
            </p>

            <p class="projects-page-sublead">
                Разные задачи, планировки и бюджеты — индивидуальное решение для каждого.
            </p>

            <div
                class="projects-filters"
                role="tablist"
                aria-label="Фильтр проектов"
            >
                <button
                    class="projects-filter is-active"
                    type="button"
                    data-project-filter="all"
                    role="tab"
                    aria-selected="true"
                >
                    Все проекты
                </button>

                <button
                    class="projects-filter"
                    type="button"
                    data-project-filter="kitchen"
                    role="tab"
                    aria-selected="false"
                >
                    Кухни
                </button>

                <button
                    class="projects-filter"
                    type="button"
                    data-project-filter="wardrobe"
                    role="tab"
                    aria-selected="false"
                >
                    Шкафы и гардеробные
                </button>

                <button
                    class="projects-filter"
                    type="button"
                    data-project-filter="other"
                    role="tab"
                    aria-selected="false"
                >
                    Другая мебель
                </button>
            </div>

            <div
                class="projects-page-grid"
                data-projects-page-grid
            >

                <?php foreach ($project_catalog as $index => $project) : ?>

                    <?php
                    $project_url = nabitek_archive_project_url($project['slug']);

                    $hidden_class = $index > 3
                        ? ' is-extra-project'
                        : '';
                    ?>

                    <article
                        class="projects-page-card<?php echo esc_attr($hidden_class); ?>"
                        data-project-category="<?php echo esc_attr($project['category']); ?>"
                        data-project-index="<?php echo esc_attr($index); ?>"
                    >

                        <a
                            class="projects-page-card-image-link"
                            href="<?php echo esc_url($project_url); ?>"
                        >
                            <div class="projects-page-card-image">

                                <img
                                    src="<?php echo esc_url(
                                        get_template_directory_uri()
                                        . '/assets/images/'
                                        . $project['image']
                                    ); ?>"
                                    alt="<?php echo esc_attr($project['title']); ?>"
                                    loading="<?php echo $index < 2 ? 'eager' : 'lazy'; ?>"
                                >

                            </div>
                        </a>

                        <h2 class="projects-page-card-title">
                            <?php echo esc_html($project['title']); ?>
                        </h2>

                        <p class="projects-page-card-location">
                            <?php echo esc_html($project['location']); ?>
                        </p>

                        <p class="projects-page-card-details">
                            <?php echo esc_html($project['details']); ?>
                        </p>

                        <a
                            class="projects-page-card-button"
                            href="<?php echo esc_url($project_url); ?>"
                        >
                            Подробнее о проекте
                            <span aria-hidden="true">→</span>
                        </a>

                    </article>

                <?php endforeach; ?>

            </div>

            <button
                class="projects-load-more"
                type="button"
                data-projects-load-more
            >
                Показать ещё проекты
            </button>

            <p
                class="projects-filter-empty"
                data-projects-filter-empty
                hidden
            >
                В этой категории пока нет проектов.
            </p>

        </div>
    </section>


    <!-- =========================================================
         ТЕРРАКОТОВЫЙ БЛОК
         ТА ЖЕ КОНСТРУКЦИЯ, ЧТО И НА СТРАНИЦЕ ОТЗЫВОВ
         ========================================================= -->

    <section
        class="reviews-banner projects-page-banner"
        aria-label="Преимущества НАБИТЕК"
    >

        <div class="container reviews-banner-inner">

            <img
                class="reviews-banner-monogram"
                src="<?php echo esc_url(
                    get_template_directory_uri()
                    . '/assets/images/vector-8.png'
                ); ?>"
                alt=""
                aria-hidden="true"
            >

            <div class="reviews-banner-content">

                <h2>
                    Ваша кухня начинается с ваших пожеланий
                </h2>

                <p class="project-page-final-banner-subtitle">
                    Подберем материалы и решения под ваш дом и бюджет
                </p>

            </div>

        </div>

    </section>


    <!-- =========================================================
         БОЛЬШОЙ CTA-БЛОК
         ========================================================= -->

    <section
        class="cta projects-page-cta"
        id="consult"
    >

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
<style>
.projects-page-banner .reviews-banner-inner {
    justify-content: center;
    align-items: center;
}

.projects-page-banner .reviews-banner-content {
    width: 100%;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.projects-page-banner .reviews-banner-content h2,
.projects-page-banner .reviews-banner-content p {
    text-align: center;
}
</style>

<?php get_footer(); ?>