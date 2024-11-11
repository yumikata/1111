<?php get_header(); ?>
<main class="content">
<?php if(have_posts()): while(have_posts()): the_post(); ?>

<article class="article">
<?php the_content(); ?>

</article>
<?php endwhile; else: ?>
    <?php endif; ?>
</main>

<?php get_footer();