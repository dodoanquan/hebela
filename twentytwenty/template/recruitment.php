<?php

/*
 Template Name: Recruit
 */

?>
<div class="overlay-mb"></div>
<?php

get_header()

?>
<section class="banner-mobile none-des">
	<div class="d-flex justify-content-around aligns-items-center">
		<div class="w-75 d-flex align-items-center position-relative">
			<input type="text" placeholder="Tìm kiếm công việc tại Hebela?" class="search-job w-100">
			<button class="search-job-btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruitment/search.png" alt="search"></button>
		</div>
		<div class="job-filter">
			<button class="btn-filter">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruitment/job-filter-mb.png" alt="filter">
			</button>
			<span>Bộ lọc </span>
		</div>
	</div>
</section>

<section class="banner none-mb">

	<div class="container">

		<div class="wellcome">

			<h2 class="title-h2 fw-700">Cơ hội việc làm</h2>

			<p class="desc color-black">Hebela mang đến mọi cơ hội việc làm tốt nhất dành cho các ứng viên của mọi ngành

				nghề, cùng nhau gia nhập Hebela để phát triển sự nghiệp.Tìm kiếm cơ hội việc làm với chúng tôi !</p>
			
			<form action="<?php echo get_home_url(); ?>/" method="get" class="d-flex align-items-center">
				<input type="text" id="s" name="s" class="form-control desc" placeholder="Tìm kiếm công việc tại Hebela?" value="" autocomplete="off">
				<button type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruitment/search.png" alt="" class="w-100"></button>
			</form>
		</div>
	</div>

</section>
<section class="job">

	<div class="container">

		<div class="row">

			<div class="col-lg-3 mt-25 list-job-mb">

				<div class="option-job">
					<h5 class="fw-500 fs-18 none-mb">Danh mục</h5>

					<?php
					$categories = get_categories(
						array('parent' => 23)
					);
					foreach ($categories as $cat) {
					?>
						<div class="job-wrap">

							<h6 class="job-title d-flex justify-content-between align-items-center fs-14 ">
								<?php echo $cat->name; ?>
								<i class="fa-solid fa-angle-right"></i>
							</h6>

							<div class="job-list">

								<?php
								$cats_child = get_categories(
									array('parent' => $cat->term_id)
								);
								foreach ($cats_child as $cat_child) {
								?>
									<div class="check-input">

										<input class="form-check-input" type="checkbox" onclick="render_filter('<?php echo $cat_child->slug; ?>')" value="" id="<?php echo $cat_child->slug ?>">

										<label class="form-check-label fs-14 fw-400" for="<?php echo $cat_child->slug ?>" class="">
											<?php echo $cat_child->name; ?>
										</label>

									</div>
								<?php } ?>

							</div>

						</div>
					<?php
					}
					?>


				</div>

			</div>

			<div id="result_filter" class="col-lg-9 row">
				<?php
				$args = array(

					'post_type' => 'tuyen-dung',
					'posts_per_page' => -1,
					'order' => 'DESC',
					'orderby' => 'title',
				);
				$query = new WP_Query($args);
				if ($query->have_posts()) :
					while ($query->have_posts()) : $query->the_post();
				?>
						<div class="col-lg-4 mb15 mt-25">
							<a href="<?php the_permalink(); ?>">
								<div class="position-relative">

									<img src="<?php the_post_thumbnail_url() ?>" alt="" class="w-100">

									<button class="btn-job d-flex align-items-center position-absolute">

										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruitment/icon-gioi-thieu.png" alt="" class="img-btnjob">

										<div class="job-name"><?php the_title(); ?></div>

									</button>

								</div>

								<p><?php echo teaser(20); ?></p>
							</a>
						</div>
				<?php
					endwhile;
				endif;
				wp_reset_postdata();
				?>
			</div>

		</div>

	</div>

</section>




<script>
	jQuery(document).ready(function($) {

		$(".job-title").click(function() {

			var thisClassName = $(this).children("i").attr("class");

			if (thisClassName.includes("fa-angle-down")) {
				$(".job-wrap .job-title").removeClass("fw-700 color-orange")

				$(this).children("i").removeClass("fa-angle-down").addClass("fa-angle-right");

				$(this).next(".job-list").slideUp();

			} else {

				$(".job-wrap .job-title").removeClass("fw-700 color-orange")

				$(this).addClass("fw-700 color-orange")

				$(".job-wrap .job-title").children().removeClass("fa-angle-down").addClass("fa-angle-right");

				$(".job-wrap  .job-list").slideUp();

				$(this).children("i").removeClass("fa-angle-right").addClass("fa-angle-down");

				$(this).next(".job-list").slideDown();

			}

		})

	})
</script>


<script>
	jQuery(document).ready(function($) {

		$(".btn-filter").click(function() {
			$('.overlay-mb').show();
			$(".list-job-mb").slideDown();
		})

		$(".overlay-mb").click(function() {
			$('.overlay-mb').hide();
			$(".list-job-mb").slideUp();
		})

	})
</script>
<style>
	@keyframes pulse {
		from {
			opacity: 1;
			transform: scale(1)
		}

		to {
			opacity: .25;
			transform: scale(.75)
		}
	}

	@keyframes fade_in_show {
		0% {
			opacity: 0;
		}

		100% {
			opacity: 1;
		}
	}

	.pulse-container {
		width: 90px;
		display: flex;
		justify-content: space-between;
		align-items: center
	}

	.pulse-bubble {
		width: 15px;
		height: 15px;
		border-radius: 50%;
		background-color: #2f963f
	}

	.pulse-bubble-1 {
		animation: pulse .4s ease 0s infinite alternate
	}

	.pulse-bubble-2 {
		animation: pulse .4s ease .2s infinite alternate
	}

	.pulse-bubble-3 {
		animation: pulse .4s ease .4s infinite alternate
	}

	.spinner-box {
		display: flex;
		justify-content: center
	}
</style>
<script>
	function render_filter(cat) {

		(function($) {
			$.ajax({
				type: "post",
				dataType: "html",
				url: '<?php echo admin_url('admin-ajax.php') ?>',
				data: {
					action: "render_filter",
					cat: cat
				},
				context: this,
				beforeSend: function() {
					$('#result_filter').html('<div class="spinner-box"><div class="pulse-container"><div class="pulse-bubble pulse-bubble-1"></div><div class="pulse-bubble pulse-bubble-2"></div><div class="pulse-bubble pulse-bubble-3"></div></div></div>');
				},
				success: function(response) {
					$('#result_filter').html(response)
				},
				error: function(jqXHR, textStatus, errorThrown) {
					$('#result_filter').html('<div style="text-align:center;color: red">Error!</div>');
				}
			})
			return false;
		})(jQuery)
	}
</script>
<?php

get_footer();

?>
