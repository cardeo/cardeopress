	<div class="row">
		<div class="col-lg-7">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		
			<div class="row">
				<div class="post col-lg-12" id="post-<?php the_ID(); ?>">
					<div class="row">
						<div class="postTitle col-lg-12">
							<h1><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
						</div>
					</div>
					<div class="row">
						<div class="postMeta col-lg-12">
							<p><small>By <?php the_author() ?> on <?php the_time('F jS, Y') ?> in <?php if (function_exists('parentless_categories')) parentless_categories(','); else the_category( ', ', 'multiple' ); ?></small></p>
						</div>
					</div>
					<div class="row">
						<div class="postBody col-lg-12">
							<?php the_content('Continue Reading &rarr;'); ?>
						</div>
					</div>
				</div>
			</div><!-- .row //-->
			<?php endwhile; else: ?>
					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</div>

		<div class="col-lg-3 col-lg-offset-1">
			<?php get_sidebar(); ?>
		</div>
	</div><!-- row //-->

	<div class="row">
		<div class="col-lg-7">
  		<div id="postNav">
				<?php posts_nav_link('&nbsp;//&nbsp;','Newer Posts','Older Posts'); ?>
			</div>
		</div>
	</div>
</div><!-- .container //-->
