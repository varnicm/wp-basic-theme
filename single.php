<?php
/**
 * The template for displaying single posts.
 *
 * @package YourThemeName
 * @since 1.0
 */

get_header();
?>
<div class="section">
<div class="container">
  <div class="row">
    <div class="col-md-8">

      <?php
      if ( have_posts() ) :
        while ( have_posts() ) :
          the_post();
          ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
              <h1 class="entry-title"><?php the_title(); ?></h1>
              <div class="entry-meta">
                <span class="posted-on">Posted on <?php the_time( 'F j, Y' ); ?></span>
                <span class="byline"> by <?php the_author(); ?></span>
              </div>
            </header>

            <div class="entry-content">
              <?php the_content(); ?>
            </div>

            <footer class="entry-footer">
              <?php the_tags( 'Tags: ', ', ', '' ); ?>
            </footer>
          </article>

          <?php
        endwhile;
      else:
        ?>
        <p><?php _e( 'Sorry, no posts were found.', 'yourthemename' ); ?></p>
      <?php
      endif;
      ?>

    </div><!-- .col-md-8 -->

    <div class="col-md-4" style="border:1px solid #333">
      <?php dynamic_sidebar('left sidebar'); ?>

    </div><!-- .col-md-4 -->
  </div><!-- .row -->
</div><!-- .container -->
    </div>
<?php get_footer(); ?>
