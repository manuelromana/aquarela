<?php 
get_header(); ?>
<div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg')?>)"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title">
            <?php 
            the_archive_title();
        ?>
        </h1>
        <div class="page-banner__intro">
          <?php 
                    the_archive_description();

          ?>
        </div>
      </div>
    </div>

<div class="container container--narrow page-section">
  <?php 
    while(have_posts()) {
      the_post(); ?>
      <div >
        <h2 class="headline headline--medium headline--post-title" >
        <a href="<?php the_permalink(); ?>"> <?php the_title() ?></a>
        </h2>
      </div>

      <div class="metabox">
        <p> Posté par <?php the_author_posts_link() ?> le <?php the_time('j F, Y'); ?> à <?php the_time('g:i a'); ?> in <?php echo get_the_category_list(', ')?> </p>
      </div>

       <div class="generic-content">
        <?php  the_excerpt();?>
        <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">
          lire plus
        </a></p>
      </div>
    <br>
    <br>
    <hr/>

    <?php
    }
    echo paginate_links();
  ?>

</div>

    <?php
get_footer();
?>