<?php get_header(); ?>

	<main role="main">
		<!-- Blog Hero Grid -->
		<section class="blog-hero">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="cover-post hero-post">
							<div class="featured-section">

								<div class="featured-section__col cover-post">
									<?php
									  $args = array(
									        'posts_per_page' => 1,
									        'meta_key' => 'meta-checkbox',
									        'meta_value' => 'yes'
									    );
									    $featured = new WP_Query($args);

									if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post(); ?>

									<div class="featured-post">
										<div class="featured-post__cover">
											<a href="<?php the_permalink(); ?>" class="d-block">
												<?php the_post_thumbnail('large', array('class' => 'd-block w-100 img-fluid cover-img')); ?>
											</a>
										</div>
										<div class="post-content">
											<a href="<?php the_permalink(); ?>" class="d-block">
												<h1 class="featured-post__title">
													<?php the_title(); ?>
												</h1>
												<p class="featured-post__desc">
													<?php the_excerpt();?>
												</p>
											</a>
											<div class="post-content__links">
												<div class="post-tags mb-1 d-flex">
													<div class="post-tags__data">
														<?php
														    $categories = get_the_category();
														    $separator = ' ';
														    $output = '';
														    if ( ! empty( $categories ) ) {
														        foreach( $categories as $category ) {
														            $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '"><span>' . esc_html( $category->name ) . '</span></a>' . $separator;
														        }
														        echo trim( $output, $separator );
														    }
														?>
													</div>
												</div>
											</div>
										</div>
									</div>

									<?php

									endwhile; else:
									endif;
									?>

								</div>

								<div class="d-flex flex-column flex-md-row no-cover-post">
									<?php
									  $args = array(
									        'posts_per_page' => 2,
									        'meta_key' => 'meta-checkbox',
									        'offset'=> 1,
									        'meta_value' => 'yes'
									    );
									    $featured = new WP_Query($args);

									if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post(); ?>
									<div class="featured-section__col">
										<div class="featured-post">
											<div class="featured-post__cover">
												<a href="<?php the_permalink(); ?>" class="d-block">
													<?php the_post_thumbnail('large', array('class' => 'd-block w-100 img-fluid cover-img')); ?>
												</a>
											</div>
											<div class="post-content">
												<a href="<?php the_permalink(); ?>" class="d-block text-black">
													<h1 class="featured-post__title">
														<?php the_title(); ?>
													</h1>
													<p class="featured-post__desc">
														<?php the_excerpt();?>
													</p>
												</a>
												<div class="post-content__links">
													<div class="post-tags mb-1 d-flex">
														<!-- <p class="post-tags__title">Category :</p> -->
														<div class="post-tags__data">
															<?php
															    $categories = get_the_category();
															    $separator = ' ';
															    $output = '';
															    if ( ! empty( $categories ) ) {
															        foreach( $categories as $category ) {
															            $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '"><span>' . esc_html( $category->name ) . '</span></a>' . $separator;
															        }
															        echo trim( $output, $separator );
															    }
															?>
														</div>
													</div>
													<!-- <div class="post-tags d-flex">
														<p class="post-tags__title">Tags :</p>
														<div class="post-tags__data">
															<a href="#"><span>Shoes</span></a><a href="#"><span>Shoes</span></a>
														</div>
													</div> -->
												</div>
											</div>
											<!-- <div class="post-action my-3 px-4">
												<button class="btn kss-btn">Read More</button>
											</div> -->
										</div>
									</div>

									<?php

									endwhile; else:
									endif;
									?>
									<!-- <div class="featured-section__col">
										<div class="featured-post">
											<div class="featured-post__cover">
												<a href="#" class="d-block">
													<img class="d-block w-100 img-fluid lazyload blur-up cover-img"
													     src="{{CDN::asset('/img/home-category/category_grid13_10px.jpg') }}"
													     data-srcset="{{CDN::asset('/img/home-category/category_grid13_medium.jpg') }}"
													     title=""
													     alt=""/>
												</a>
											</div>
											<div class="post-content">
												<a href="#" class="d-block text-black">
													<h1 class="featured-post__title">
														New Year super sale - FLAT 50% OFF on selected merchandise.
													</h1>
													<p class="featured-post__desc">
														Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed sunt et doloremque eligendi deleniti ab quos est earum tempora natus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed sunt et doloremque eligendi deleniti ab quos est earum tempora natus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed sunt et doloremque eligendi deleniti ab quos est earum tempora natus!
													</p>
												</a>
												<div class="post-content__links">
													<div class="post-tags mb-1 d-flex">
														<div class="post-tags__data">
															<a href="#"><span>Super Sale</span></a><a href="#"><span>50% OFF</span></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- section -->
		<section>


			<?php
				/* get_template_part('loop'); */
			?>

			<?php
				/* get_template_part('pagination'); */
			?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
