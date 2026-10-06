<?php get_header(); ?>
<main class="section"><div class="container"><h1 class="section-title display"><?php bloginfo('name'); ?></h1><?php if(have_posts()): while(have_posts()): the_post(); ?><article><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><?php the_excerpt(); ?></article><?php endwhile; else: ?><p>Контент не найден.</p><?php endif; ?></div></main>
<?php get_footer(); ?>
