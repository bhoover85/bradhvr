<?php theme_include('header'); ?>

<div class="row">
	<div class="container">

		<div class="col-sm-9">
			<section class="content">
				<?php if(has_posts()) : while(posts()) : ?>
					<article>
				    	<h3>
				        	<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
				        </h3>

				        <h5>
				        	<div class="published-info">
				        		<i class="fa fa-calendar"></i><?php echo article_date(); ?>
				        	</div>

				        	<div class="published-info">
				        		<a href="/blog/category/<?php echo substr(article_category_slug(), strrpos(article_category_slug(), '/')); ?>"><i class="fa fa-folder"></i><?php echo article_category(); ?></a>
				        	</div>
			        	</h5>

						<p><?php echo article_description(); ?></p>
					</article>
				<?php endwhile; endif; ?>
			</section>
		</div>

		<div class="col-sm-3">
			<h3 class="categories">Categories</h3>
			<?php while(categories()) { ?>
				<div class="category-name"><a href="/blog/category/<?php echo substr(category_slug(), strrpos(category_slug(), '/')); ?>"><?php echo category_title(); ?></a> (<?php echo category_count(); ?>)</div>
			<?php } ?>
		</div>

	</div>
</div>
	
<div class="row">
	<div class="container">
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
	</div>
</div>

<?php theme_include('footer'); ?>