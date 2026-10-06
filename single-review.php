<?php get_header(); ?>

<?php
$video_url = get_post_meta(get_the_ID(), '_nabitek_review_video_url', true);
$title = get_the_title();
$content = get_the_content();

$embed_url = '';
if ($video_url && preg_match('~(?:youtube\.com/watch\?v=|youtu\.be/|youtube\.com/embed/)([^&?/]+)~i', $video_url, $matches)) {
    $embed_url = 'https://www.youtube.com/embed/' . sanitize_text_field($matches[1]);
}
?>

<main class="review-single-page">
    <div class="container review-single-container">
        <div class="reviews-breadcrumbs">
            <a href="<?php echo esc_url(home_url('/')); ?>">Главная</a>
            <span aria-hidden="true">/</span>
            <a href="<?php echo esc_url(get_post_type_archive_link('review')); ?>">Отзывы</a>
            <span aria-hidden="true">/</span>
            <span><?php echo esc_html($title); ?></span>
        </div>

        <h1 class="review-single-title display">
            <?php echo esc_html($title); ?>
        </h1>

        <?php if ($embed_url) : ?>
            <div class="review-video-frame">
                <iframe
                    src="<?php echo esc_url($embed_url); ?>"
                    title="Видеоотзыв: <?php echo esc_attr($title); ?>"
                    loading="lazy"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen
                ></iframe>
            </div>
        <?php elseif ($video_url) : ?>
            <div class="review-video-link-wrap">
                <a class="btn" href="<?php echo esc_url($video_url); ?>" target="_blank" rel="noopener">
                    Открыть видео →
                </a>
            </div>
        <?php endif; ?>

        <?php if (trim(wp_strip_all_tags($content))) : ?>
            <div class="review-single-content">
                <?php the_content(); ?>
            </div>
        <?php endif; ?>

        <a class="review-back-link" href="<?php echo esc_url(get_post_type_archive_link('review')); ?>">
            ← Вернуться к отзывам
        </a>
    </div>
</main>

<?php get_footer(); ?>
