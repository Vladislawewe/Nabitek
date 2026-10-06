<?php get_header(); ?>

<?php
$reviews = get_posts([
    'post_type'      => 'review',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'orderby'        => 'date',
    'order'          => 'DESC',
]);

/*
 * Резервные карточки отзывов.
 * Первые четыре уже были на странице, последние две добавлены сейчас.
 */
$fallback_reviews = [
    [
        'title' => 'Владислав и Елизавета',
        'image' => 'reviews/vladislav-elizaveta.jpg',
        'video' => 'https://vkvideo.ru/video-139775008_456239597?list=5fe5d7723e56b252ce',
    ],
    [
        'title' => 'Эдуард и Екатерина',
        'image' => 'reviews/ekaterina.jpg',
        'video' => 'https://vkvideo.ru/video-139775008_456239556?list=0f793f1cb62fc0c3f4',
    ],
    [
        'title' => 'Алексей и Александра',
        'image' => 'reviews/aleksandra.jpg',
        'video' => 'https://vkvideo.ru/video-139775008_456239501?list=630fcc77d880f37098',
    ],
    [
        'title' => 'Матвей и Елена',
        'image' => 'reviews/matvey-elena.jpg',
        'video' => 'https://vkvideo.ru/video-139775008_456239584?list=a51de07d5dca463a8c',
    ],
    [
        'title' => 'Татьяна',
        'image' => 'reviews/tatiana.jpg',
        'video' => 'https://vkvideo.ru/video-139775008_456239522?list=aea8d0c7441e0564fc',
    ],
    [
        'title' => 'Ксения',
        'image' => 'reviews/ksenia.jpg',
        'video' => 'https://vkvideo.ru/video-139775008_456239515?list=e8d6709504c555c72c',
    ],
];

$is_fallback = empty($reviews);

if ($is_fallback) {
    $reviews = $fallback_reviews;
} elseif (count($reviews) < 6) {
    /*
     * Если в админке пока меньше шести отзывов,
     * добавляем недостающие новые карточки из макета.
     */
    $missing_count = 6 - count($reviews);

    foreach (array_slice($fallback_reviews, -2, $missing_count) as $fallback_review) {
        $reviews[] = [
            'fallback' => true,
            ...$fallback_review,
        ];
    }
}
?>

<main class="reviews-page">
    <section class="reviews-hero">
        <div class="container reviews-container">
            <div class="reviews-breadcrumbs" aria-label="Хлебные крошки">
                <a href="<?php echo esc_url(home_url('/')); ?>">Главная</a>
                <span aria-hidden="true">/</span>
                <span>Отзывы</span>
            </div>

            <h1 class="reviews-page-title display">
                Отзывы наших клиентов
            </h1>

            <p class="reviews-page-lead">
                О выборе кухни и работе с «Набитек» —<br>
                от тех, кто уже прошёл этот путь.
            </p>

            <h2 class="reviews-section-title display">
                Видеоотзывы
            </h2>

            <div class="reviews-grid" data-reviews-grid>
                <?php foreach ($reviews as $index => $review) : ?>
                    <?php
                    $is_fallback_card = !empty($review['fallback']);

                    if ($is_fallback || $is_fallback_card) {
                        $title = $review['title'];
                        $image_url = get_template_directory_uri() . '/assets/images/' . $review['image'];
                        $video_url = $review['video'] ?? '';
                    } else {
                        $title = get_the_title($review);
                        $image_url = get_the_post_thumbnail_url($review, 'large');

                        $fallback_image = $fallback_reviews[$index % 4]['image'];

                        if (!$image_url) {
                            $image_url = get_template_directory_uri() . '/assets/images/' . $fallback_image;
                        }

                        $video_url = get_post_meta(
                            $review->ID,
                            '_nabitek_review_video_url',
                            true
                        );
                    }

                    $video_url = $video_url ? esc_url($video_url) : '#';
                    ?>

                    <article class="review-card">
                        <a
                            class="review-card-media"
                            href="<?php echo esc_url($video_url); ?>"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Открыть видеоотзыв: <?php echo esc_attr($title); ?>"
                        >
                            <img
                                src="<?php echo esc_url($image_url); ?>"
                                alt="Видеоотзыв: <?php echo esc_attr($title); ?>"
                                loading="<?php echo $index < 2 ? 'eager' : 'lazy'; ?>"
                            >

                            <span class="review-play" aria-hidden="true">
                                <span></span>
                            </span>
                        </a>

                        <div class="review-card-label">
                            Видеоотзыв
                        </div>

                        <h3 class="review-card-title">
                            <?php echo esc_html($title); ?>
                        </h3>

                        <a
                            class="review-card-link"
                            href="<?php echo esc_url($video_url); ?>"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            Смотреть видео <span aria-hidden="true">→</span>
                        </a>
                    </article>
                <?php endforeach; ?>
            </div>

            <?php if (count($reviews) > 4) : ?>
                <button
                    class="reviews-load-more"
                    type="button"
                    data-reviews-load-more
                >
                    Показать ещё отзывы
                </button>
            <?php endif; ?>
        </div>
    </section>

    <section class="reviews-banner" aria-label="Благодарность клиентам">
        <div class="container reviews-banner-inner">

            <img
                class="reviews-banner-monogram"
                src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/vector-8.png'); ?>"
                alt=""
                aria-hidden="true"
            >

            <div class="reviews-banner-content">
                <h2>Спасибо, что доверяете<br>нам свой дом</h2>

                <p>
                    Посмотрите проекты, которыми мы<br>
                    гордимся вместе с нашими заказчиками
                </p>
            </div>

            <a
                class="reviews-banner-button"
                href="<?php echo esc_url(get_post_type_archive_link('project')); ?>"
            >
                Смотреть проекты
            </a>

        </div>
    </section>

    <section class="cta reviews-page-cta" id="consult">
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
