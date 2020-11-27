<?php get_header(); ?>
 <!-- dynamic sidebar for home banner using widget -->
 <?php dynamic_sidebar( 'home-banner' ); ?>



<!-- Main -->
<section id="main">
<div class="container">
			<div class="col-12">

				<!-- Blog -->
				<section>
					<header class="major">
						<h2>The Blog</h2>
					</header>
					<div class="row">
						<?php
							$blog_args = array(
								'post_type'  => 'post',
								'posts_per_page'   => 2               // we want to show only 2 posts
							);

							$blog_posts = new WP_Query($blog_args);
							while($blog_posts->have_posts(  ))        // while loop to take all posts
							{
								$blog_posts->the_post(  );
							
						?>
						<div class="col-6 col-12-small">
							<section class="box">
							 <!-- the_permalink and the_post_thumbnail is to set link and featured images -->
								<a href="<?php the_permalink(  ) ?>" class="image featured"><?php the_post_thumbnail('home-featured' ) ?></a>
								<header>
									<!-- to fetch title dynamically -->
									<h3><?php the_title( ) ?></h3>
									<!-- the_date and the_time of posts -->
									<p>Posted on : <?php the_date() ?> on <?php the_time() ?></p>
								</header>
								<!-- to show some description -->
								<?php the_excerpt(  ) ?>
								<footer>
									<ul class="actions">
										<li><a href="<?php the_permalink(  ) ?>" class="button icon solid fa-file-alt">Continue Reading</a></li>
										<li><a href="<?php comments_link( ) ?>" class="button alt icon solid fa-comment"><?php echo get_comments_number( ) ?> comments</a></li>
									</ul>
								</footer>
							</section>
						</div>
							<?php } ?> 
					</div>
				</section>

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>