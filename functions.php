<?php

if (!defined('ABSPATH')) {
    exit;
}

define('NABITEK_VERSION', '1.4.2');

/**
 * Настройка темы.
 */
function nabitek_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    add_theme_support(
        'custom-logo',
        [
            'height'      => 80,
            'width'       => 240,
            'flex-height' => true,
            'flex-width'  => true,
        ]
    );

    add_theme_support(
        'html5',
        [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        ]
    );

    register_nav_menus(
        [
            'primary' => 'Главное меню',
        ]
    );
}

add_action('after_setup_theme', 'nabitek_setup');


/**
 * Подключение CSS и JavaScript.
 */
function nabitek_assets() {
    wp_enqueue_style(
        'nabitek-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400;1,500&display=swap',
        [],
        null
    );

    wp_enqueue_style(
        'nabitek-style',
        get_stylesheet_uri(),
        ['nabitek-fonts'],
        NABITEK_VERSION
    );

    wp_enqueue_script(
        'nabitek-main',
        get_template_directory_uri() . '/js/main.js',
        [],
        NABITEK_VERSION,
        true
    );

    wp_localize_script(
        'nabitek-main',
        'nabitekData',
        [
            'ajaxUrl' => admin_url('admin-ajax.php'),
            'nonce'   => wp_create_nonce('nabitek_contact'),
        ]
    );
}

add_action('wp_enqueue_scripts', 'nabitek_assets');


function nabitek_customize_register($wp_customize) {
    $wp_customize->add_section(
        'nabitek_contacts',
        [
            'title'    => 'НАБИТЕК — Контакты',
            'priority' => 30,
        ]
    );

    $fields = [
        'phone1' => ['Единый номер', '288 24 88'],
        'phone2' => ['Телефон 2', '+7 992 248 48 28'],
        'phone3' => ['Телефон 3', '+7 982 450 87 90'],
        'salon' => [
            'Адрес салона',
            'Пермь, ул. Стахановская 43, ТЦ Видный, 2 этаж.',
        ],
        'hours' => [
            'Время работы',
            'ПН–СБ 11:00–20:00, ВС 11:00–18:00 по предварительной записи',
        ],
        'production' => [
            'Производство',
            'Пермь, Гамовский тракт 4/3',
        ],
        'telegram' => ['Telegram URL', '#'],
        'vk'       => ['VK URL', '#'],
    ];

    foreach ($fields as $key => $data) {
        $setting = 'nabitek_' . $key;

        $wp_customize->add_setting(
            $setting,
            [
                'default'           => $data[1],
                'sanitize_callback' => 'sanitize_text_field',
            ]
        );

        $wp_customize->add_control(
            $setting,
            [
                'section' => 'nabitek_contacts',
                'label'   => $data[0],
                'type'    => 'text',
            ]
        );
    }
}

add_action('customize_register', 'nabitek_customize_register');

require_once get_template_directory() . '/inc/cpt.php';


/**
 * Вывод изображения из assets/images.
 */
function nabitek_img($file, $size = 'full', $attrs = []) {
    $url = get_template_directory_uri() . '/assets/images/' . $file;

    $attrs = wp_parse_args(
        $attrs,
        [
            'alt' => '',
        ]
    );

    $attr = '';

    foreach ($attrs as $key => $value) {
        $attr .= sprintf(
            ' %s="%s"',
            esc_attr($key),
            esc_attr($value)
        );
    }

    return sprintf(
        '<img src="%s"%s loading="lazy">',
        esc_url($url),
        $attr
    );
}


/**
 * Собирает изображения проекта из обложки, галереи и содержимого записи.
 */
function nabitek_project_images($post_id) {
    $images = [];
    $featured_image = get_the_post_thumbnail_url($post_id, 'full');
    $gallery_images = get_post_gallery_images($post_id);
    $content = get_post_field('post_content', $post_id);

    if ($featured_image) {
        $images[] = $featured_image;
    }

    $images = array_merge($images, $gallery_images);

    if (preg_match_all('/<img[^>]+src=["\']([^"\']+)["\']/i', $content, $matches)) {
        $images = array_merge($images, $matches[1]);
    }

    return array_values(array_unique(array_filter($images)));
}


/**
 * Вывод иконки.
 */
function nabitek_icon($file, $alt = '') {
    return nabitek_img(
        $file,
        'full',
        [
            'alt' => $alt,
        ]
    );
}


/**
 * AJAX-заявка из формы консультации.
 */
add_action('wp_ajax_nopriv_nabitek_contact', 'nabitek_contact');
add_action('wp_ajax_nabitek_contact', 'nabitek_contact');

function nabitek_contact() {
    check_ajax_referer('nabitek_contact', 'nonce');

    $name = sanitize_text_field($_POST['name'] ?? '');
    $phone = sanitize_text_field($_POST['phone'] ?? '');
    $message = sanitize_textarea_field($_POST['message'] ?? '');

    if (!$name || !$phone) {
        wp_send_json_error(
            [
                'message' => 'Заполните имя и телефон.',
            ],
            422
        );
    }

    $to = get_option('admin_email');
    $subject = 'Заявка с сайта НАБИТЕК';

    $body = "Имя: {$name}\n"
        . "Телефон: {$phone}\n"
        . "Сообщение: {$message}";

    $sent = wp_mail(
        $to,
        $subject,
        $body,
        [
            'Content-Type: text/plain; charset=UTF-8',
        ]
    );

    if ($sent) {
        wp_send_json_success(
            [
                'message' => 'Спасибо! Заявка отправлена.',
            ]
        );
    }

    wp_send_json_success(
        [
            'message' => 'Заявка принята. Если письмо не дошло, свяжитесь с нами по телефону.',
        ]
    );
}


/**
 * Поле ссылки на видео для записи «Отзыв».
 */
function nabitek_review_video_meta_box() {
    add_meta_box(
        'nabitek_review_video',
        'Видеоотзыв',
        'nabitek_render_review_video_meta_box',
        'review',
        'side',
        'default'
    );
}

add_action('add_meta_boxes', 'nabitek_review_video_meta_box');


function nabitek_render_review_video_meta_box($post) {
    wp_nonce_field('nabitek_review_video_save', 'nabitek_review_video_nonce');

    $value = get_post_meta(
        $post->ID,
        '_nabitek_review_video_url',
        true
    );
    ?>
    <p>
        <label for="nabitek_review_video_url">
            Ссылка на видео (YouTube, Rutube, VK Video и т. п.)
        </label>
    </p>

    <input
        id="nabitek_review_video_url"
        name="nabitek_review_video_url"
        type="url"
        value="<?php echo esc_attr($value); ?>"
        placeholder="https://..."
        style="width:100%;"
    >
    <?php
}


function nabitek_save_review_video_meta($post_id) {
    if (
        !isset($_POST['nabitek_review_video_nonce']) ||
        !wp_verify_nonce(
            $_POST['nabitek_review_video_nonce'],
            'nabitek_review_video_save'
        )
    ) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    $url = isset($_POST['nabitek_review_video_url'])
        ? esc_url_raw(
            wp_unslash($_POST['nabitek_review_video_url'])
        )
        : '';

    if ($url) {
        update_post_meta(
            $post_id,
            '_nabitek_review_video_url',
            $url
        );
    } else {
        delete_post_meta(
            $post_id,
            '_nabitek_review_video_url'
        );
    }
}

add_action(
    'save_post_review',
    'nabitek_save_review_video_meta'
);