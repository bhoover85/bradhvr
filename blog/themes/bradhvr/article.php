<?php theme_include('header'); ?>

		<section class="content">
			<article>
			    <?php echo article_markdown(); ?>
			    <?php echo article_custom_field('attribution'); ?>
			</article>
		</section>
	
		<section class="comments">
			<!-- Comment List -->
			<?php if(comments_open() and has_comments()): ?>
			    <?php while(comments()): ?>
			        <?php echo comment_text(); ?>
			        <?php echo comment_date(); ?>
			    <?php endwhile; ?>
			<?php endif; ?>
			
			<!-- Comment Form -->
			<?php if(comments_open()): ?>
				<form id="comment" method="post" action="<?php echo comment_form_url(); ?>#comment">
					<?php echo comment_form_notifications(); ?><!-- Error notifications -->
					<?php echo comment_form_input_name('placeholder="Your Name"'); ?>
					<?php echo comment_form_input_email('placeholder="Your Email"', $extra = ''); ?>
					<?php echo comment_form_input_text('placeholder="Your comment"'); ?>
					<?php echo comment_form_button($text = 'Post Comment', $extra = ''); ?>
				</form>
			<?php endif; ?>
		</section>

		<nav class="prev_next">
			<div class="row">
				<div class="container">
					<div class="pull-left">
						<?php if (article_next_url()) { ?>
								<a href="<?php echo article_next_url(); ?>"><i class="arrow fa fa-long-arrow-left"></i><?php echo article_next_title(); ?></a>
						<?php } ?>
					</div>

					<div class="pull-right">
						<?php if (article_previous_url()) { ?>
								<a href="<?php echo article_previous_url(); ?>"><?php echo article_previous_title(); ?><i class="arrow fa fa-long-arrow-right"></i></a>
						<?php } ?>
					</div>
				</div>
			</div>
		</nav>

<?php theme_include('footer'); ?>