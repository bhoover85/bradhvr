<?php theme_include('header'); ?>

		<section class="content">
			<?php if(has_posts()) : while(posts()) : ?>
				<article>
			    	<h3>
			        	<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
			        </h3>
			        <h5><i class="fa fa-calendar"></i> <?php echo article_date(); ?> &emsp; <i class="fa fa-folder"></i> <?php echo article_category(); ?></h5>
					<p><?php echo article_description(); ?></p>
				</article>
			<?php endwhile; endif; ?>
		</section>
		
		<section class="pagination">
			<?php if(has_pagination()) : ?>
			    <nav class="pagination">
					<div class="row">
						<div class="container">
							<div class="pull-left">
								<?php echo posts_prev(); ?>
							</div>
							<div class="pull-right">
								<?php echo posts_next(); ?>
							</div>
						</div>
					</div>
				</nav>
			<?php endif; ?>
		</section>

<?php theme_include('footer'); ?>