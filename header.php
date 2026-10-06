<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta
        name="description"
        content="НАБИТЕК — кухни и мебель на заказ в Перми. Индивидуальное проектирование и собственное производство."
    >
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">

    <div class="container header-inner">

        <!-- Фирменная монограмма позади логотипа -->
        <img
            class="header-monogram-img"
            src="<?php echo esc_url(
                get_template_directory_uri() . '/assets/images/vector-8.png'
            ); ?>"
            alt=""
            aria-hidden="true"
        >

        <a
            class="site-logo"
            href="<?php echo esc_url(home_url('/')); ?>"
            aria-label="НАБИТЕК"
        >
            <?php
            echo nabitek_img(
                'logo-light.png',
                'full',
                ['alt' => 'НАБИТЕК']
            );
            ?>
        </a>

        <button
            class="nav-toggle"
            type="button"
            aria-label="Открыть меню"
            aria-expanded="false"
        >
            ☰
        </button>

        <?php
        $is_front_page = is_front_page();
        $home_url = home_url('/');
        ?>

        <nav class="site-nav" aria-label="Главная навигация">
            <a href="<?php echo esc_url($is_front_page ? '#services' : $home_url . '#services'); ?>">Кухни на заказ</a>
            <a class="<?php echo is_post_type_archive('project') || is_singular('project') ? 'is-active' : ''; ?>" href="<?php echo esc_url(get_post_type_archive_link('project')); ?>">Наши проекты</a>
            <a class="<?php echo is_post_type_archive('review') || is_singular('review') ? 'is-active' : ''; ?>" href="<?php echo esc_url(get_post_type_archive_link('review')); ?>">Отзывы</a>
            <a href="<?php echo esc_url($is_front_page ? '#contacts' : $home_url . '#contacts'); ?>">Контакты</a>
        </nav>

    </div>
</header>