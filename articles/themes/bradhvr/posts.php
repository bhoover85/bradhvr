<?php theme_include('header'); ?>

		<section class="content">
			<?php if(has_posts()) : while(posts()) : ?>
				<article>
			    	<h3>
			        	<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
			        </h3>
			        <h5><?php echo article_date(); ?></h5>
					<p><?php echo article_description(); ?></p>
				</article>
			<?php endwhile; endif; ?>
		</section>
		
		<section class="pagination">
			<?php if(has_pagination()) : ?>
			    <nav class="pagination">
			        <?php echo posts_prev(); ?>
			        <?php echo posts_next(); ?>
			    </nav>
			<?php endif; ?>
		</section>

<?php theme_include('footer'); ?>