<?php
get_header()
?>

<section class="banner-mobile none-des">
	<div class="d-flex justify-content-around aligns-items-center">
		<div class="w-75 d-flex align-items-center position-relative">
			<input type="text" placeholder="Tìm kiếm công việc tại Hebela" class="search-job w-100">
			<button class="search-job-btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruitment/search.png" alt="search"></button>
		</div>
		<div class="job-filter">
			<button>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruitment/job-filter-mb.png" alt="filter">
			</button>
			<span>Bộ lọc</span>
		</div>
	</div>
</section>

<section class="banner none-mb">

	<div class="container">

		<div class="wellcome">

			<h2 class="title-h2 fw-700">Cơ hội việc làm</h2>

			<p class="desc color-black">Hebela mang đến mọi cơ hội việc làm tốt nhất dành cho các ứng viên của mọi ngành nghề, cùng nhau gia nhập Hebela để phát triển sự nghiệp.Tìm kiếm cơ hội việc làm với chúng tôi !</p>

			<form action="<?php echo get_home_url(); ?>/" method="get" class="d-flex align-items-center">
				<input type="text" id="s" name="s" class="form-control desc" placeholder="Tìm kiếm công việc tại Hebela" value="" autocomplete="off">
				<button type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruitment/search.png" alt="" class="w-100"></button>
			</form>
		</div>

	</div>

</section>
<section class="rs-search">
	<div class="container">
		<div id="searchResults" class="row">
			<h2 class="title-h2 fw-700">Kết quả tìm được:</h2>
			
			<?php if(have_posts()) : while(have_posts()) : the_post() ?>
					<div class="search col-lg-4 mb15 mt-25">
						<div class="post">
							<div class="post-image position-relative">
								<a href="<?php echo the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php the_post_thumbnail(); ?>
								</a>
								<button class="btn-job d-flex align-items-center position-absolute">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruitment/icon-gioi-thieu.png" alt="" class="img-btnjob">

									<div class="job-name"><?php the_title(); ?></div>

								</button>
							</div>
							<div class="post-info">
								<div class="location">Ngày đăng:<?php the_time('d/m/Y'); ?></div>
								<?php echo teaser(18); ?>
							</div>
						</div>
					</div>
				<?php endwhile; else : ?>
				<div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruitment/nosearch.png" alt="" class="w-100"></div>
			<?php endif; ?>
		</div>
	</div>

</section>
<?php

get_footer();

?>