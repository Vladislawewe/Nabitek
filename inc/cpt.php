<?php

if (!defined('ABSPATH')) {
    exit;
}


/**
 * Регистрация типов записей «Проекты» и «Отзывы».
 */
function nabitek_register_cpt() {

    register_post_type(
        'project',
        [
            'labels' => [

                'name' =>
                    'Проекты',

                'singular_name' =>
                    'Проект',

                'add_new_item' =>
                    'Добавить проект',

                'edit_item' =>
                    'Редактировать проект',

            ],

            'public' =>
                true,

            'menu_icon' =>
                'dashicons-portfolio',

            'supports' => [
                'title',
                'editor',
                'thumbnail',
            ],

            'has_archive' =>
                'projects',

            'rewrite' => [

                'slug' =>
                    'projects',

                'with_front' =>
                    false,

            ],

            'show_in_rest' =>
                true,
        ]
    );


    register_post_type(
        'review',
        [
            'labels' => [

                'name' =>
                    'Отзывы',

                'singular_name' =>
                    'Отзыв',

                'add_new_item' =>
                    'Добавить отзыв',

                'edit_item' =>
                    'Редактировать отзыв',

            ],

            'public' =>
                true,

            'menu_icon' =>
                'dashicons-format-quote',

            'supports' => [
                'title',
                'editor',
                'thumbnail',
            ],

            'has_archive' =>
                'reviews',

            'rewrite' => [

                'slug' =>
                    'reviews',

                'with_front' =>
                    false,

            ],

            'show_in_rest' =>
                true,
        ]
    );
}


add_action(
    'init',
    'nabitek_register_cpt'
);


/**
 * Названия и краткое содержимое проектов,
 * которые должны существовать в WordPress.
 */
function nabitek_project_seed_data() {

    return [

        /*
         * =====================================================
         * КУХНИ
         * =====================================================
         */

        'brauni' => [

            'title' =>
                'Кухня для Юлии и её семьи',

            'content' =>
                'Кухня в ЖК Брауни.',
        ],


        'newton' => [

            'title' =>
                'Кухня для Владимира и Марии',

            'content' =>
                'Кухня для семьи, ЖК Ньютон.',
        ],


        'japandi' => [

            'title' =>
                'Кухня для Александры и Алексея',

            'content' =>
                'Кухня в стиле Джапанди.',
        ],


        'kapuchino' => [

            'title' =>
                'Кухня для Михаила и Олеси',

            'content' =>
                'Кухня-гостиная в ЖК Капучино.',
        ],


        'ekaterina' => [

            'title' =>
                'Светлая кухня с золотыми акцентами',

            'content' =>
                'Кухня для Екатерины и её семьи.',
        ],


        'scandinavia' => [

            'title' =>
                'Кухня для Татьяны и Андрея',

            'content' =>
                'Кухня в ЖК Скандинавия.',
        ],


        /*
         * =====================================================
         * ШКАФЫ И ГАРДЕРОБНЫЕ
         * =====================================================
         */

        'shkaf-detskaya-baramzinoy' => [

            'title' =>
                'Шкаф в детскую',

            'content' =>
                'Шкаф в детскую, ул. Барамзиной 42.',
        ],


        /*
         * =====================================================
         * ДРУГАЯ МЕБЕЛЬ
         * =====================================================
         */

        'gostinaya-gorkogo' => [

            'title' =>
                'Гостиная на Горького',

            'content' =>
                'Мебель для гостиной, Горького 86.',
        ],


        'vannaya-protasy' => [

            'title' =>
                'Мебель в ванную комнату',

            'content' =>
                'Мебель для ванной комнаты, Пермский край, п. Протасы.',
        ],


        'stol-tumby-gorkogo' => [

            'title' =>
                'Стол и тумбы на Горького',

            'content' =>
                'Комплект мебели для Любови, Горького 86.',
        ],

    ];
}


/**
 * Создаёт отсутствующие записи проектов.
 *
 * Существующие записи не изменяются.
 */
function nabitek_seed_project_posts() {

    /*
     * Увеличиваем версию,
     * чтобы новые проекты создались
     * на уже установленной теме.
     */
    $seed_version =
        '3';


    if (
        get_option(
            'nabitek_projects_seeded_version'
        ) === $seed_version
    ) {
        return;
    }


    $all_created =
        true;


    foreach (
        nabitek_project_seed_data()
        as $slug => $project
    ) {

        $existing =
            get_page_by_path(
                $slug,
                OBJECT,
                'project'
            );


        /*
         * Если запись уже существует —
         * ничего с ней не делаем.
         */
        if (
            $existing instanceof WP_Post
        ) {
            continue;
        }


        $result =
            wp_insert_post(
                [

                    'post_type' =>
                        'project',

                    'post_status' =>
                        'publish',

                    'post_name' =>
                        $slug,

                    'post_title' =>
                        $project['title'],

                    'post_content' =>
                        $project['content'],

                ],
                true
            );


        if (
            is_wp_error(
                $result
            )
        ) {

            $all_created =
                false;

        }

    }


    if ($all_created) {

        update_option(
            'nabitek_projects_seeded_version',
            $seed_version
        );

    }

}


add_action(
    'init',
    'nabitek_seed_project_posts',
    100
);


/**
 * Обновляет rewrite-правила после изменения маршрутов темы.
 */
function nabitek_maybe_flush_rewrite_rules() {

    $rewrite_version =
        '1.5.0';


    if (
        get_option(
            'nabitek_rewrite_version'
        ) !== $rewrite_version
    ) {

        flush_rewrite_rules(
            false
        );


        update_option(
            'nabitek_rewrite_version',
            $rewrite_version
        );

    }

}


add_action(
    'init',
    'nabitek_maybe_flush_rewrite_rules',
    99
);


/**
 * Активация темы.
 */
function nabitek_activate_theme() {

    nabitek_register_cpt();

    nabitek_seed_project_posts();

    flush_rewrite_rules(
        false
    );


    update_option(
        'nabitek_rewrite_version',
        '1.5.0'
    );


    update_option(
        'nabitek_projects_seeded_version',
        '3'
    );

}


add_action(
    'after_switch_theme',
    'nabitek_activate_theme'
);