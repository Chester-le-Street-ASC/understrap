<?php get_header(); ?>
    <div class="container">
      <div class="row">

        <div class="col-12 blog-main">

        <?php if (have_posts()) : ?>

		<!--<h1>

		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

		<?php if (is_category()) { ?>
			<?php echo single_cat_title(); ?>

		<?php } elseif( is_tag() ) { ?>
			<?php _e( 'Posts Tagged:', 'chester' ); ?> <?php single_tag_title(); ?>

		<?php } elseif (is_day()) { ?>
			<?php _e( 'Archive for', 'chester' ); ?> <?php echo get_the_date(); ?>

		<?php } elseif (is_month()) { ?>
			<?php _e( 'Archive for', 'chester' ); ?> <?php echo get_the_date( _x( 'F Y', 'monthly archives date format', 'chester' ) ) ?>

		<?php } elseif (is_year()) { ?>
			<?php _e( 'Archive for', 'chester' ); ?> <?php echo get_the_date( _x( 'Y', 'yearly archives date format', 'chester' ) ) ?>

		<?php } elseif (is_search()) { ?>
			<?php _e( 'Search Results', 'chester' ); ?>

		<?php } elseif (is_author()) { ?>
			<?php _e( 'Author Archive', 'chester' ); ?>

		<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<?php _e( 'Blog Archives', 'chester' ); ?>

		<?php } ?>
			</h1>-->

	<?php while (have_posts()) : the_post(); ?>

                <div class="flex-panel flex-panel-default flex-panel-body flex-panel-top-primary">
            		<a href="<?php the_permalink() ?>" rel="bookmark"><h2 class="blog-post-title"><?php the_title(); ?></h2></a>
           			<p class="blog-post-meta"><?php the_time( 'j F Y' ); ?> - <?php the_category(', ');?></p>

				<?php the_content( $more_link_text , $strip_teaser ); ?>
			</div>
	<?php endwhile; endif; ?>

	<?php
	  if ( function_exists('wp_bootstrap_pagination') )
		wp_bootstrap_pagination();
	?>

        </div><!-- /.blog-main -->

</div>
</div>
<?php get_footer(); ?>
