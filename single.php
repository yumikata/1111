<?php get_header(); ?>
<main class="content">
<?php if(have_posts()): while(have_posts()): the_post(); ?>

<article class="article">
<?php the_content(); ?>

</article>
<?php endwhile; else: ?>
    <?php endif; ?>
<div class="page-top" id="js-page-top">
  <span class="material-icons-outlined">expand_less</span>
</div>
</main>

<?php get_footer();