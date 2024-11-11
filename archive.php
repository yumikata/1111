<?php get_header(); ?>
<main>
    <div class="container">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <h1><a class="arch-ttl" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <?php the_excerpt(); ?>
        <?php endwhile; else: ?>
    <?php endif; ?>
    </div>
</main>
<?php get_footer();