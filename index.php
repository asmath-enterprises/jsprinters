<?php get_header();?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="page-title"
	style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/404breadcrumb.png);">
	<div class="auto-container">
		<div class="content-box">
			<div class="content-wrapper">
				<div class="title">
					<h1><?php the_title();?></h1>
				</div>
				<ul class="bread-crumb clearfix">
					<li><a href="https://jsprinters.in/">Home</a></li>
					<li><?php the_title();?></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section class="sidebar-page-container">
	<div class="auto-container">
	
			<div class="inner-box">
				<div class="post-content">
					<?php the_content();?>
				</div>
			</div>

</section>


<?php endwhile; else : ?>

    <div class="page-wrapper">
        <!-- Preloader -->
    
	<!-- preloader - start -->
	<div class="preloader">
		<div class="animation_preloader">
			<div class="spinner"></div>
			<p class="text-center">Loading</p>
		</div>
		<div class="loader">
			<div class="row vh-100">
				<div class="col-3 loader_section section-left">
					<div class="bg"></div>
				</div>
				<div class="col-3 loader_section section-left">
					<div class="bg"></div>
				</div>
				<div class="col-3 loader_section section-right">
					<div class="bg"></div>
				</div>
				<div class="col-3 loader_section section-right">
					<div class="bg"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- preloader - end -->
		<!-- breadcrumb_section - start
			================================================== -->
<section class="breadcrumb_section d-flex align-items-center clearfix"
    data-background="<?php bloginfo('template_directory'); ?>/assets/img/404breadcrumb.png" >
    <div class="container">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-delay=".1s">
             
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInRight" data-wow-delay=".1s">
                <ul class="breadcrumb_nav ul_li_right clearfix">
                   
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb_section - end
			================================================== -->


        <div class="error-section">
            <div class="auto-container">
                <div class="text-center">
                    <div class="image" style=""><img src="<?php bloginfo('template_directory');?>/assets/img/404.png" alt="jsprinters"></div>
                    <div class="content" >
                        <h1>Page is not found</h1>
                        <div class="text">We're not being able to find this page.</div>
                        <div class="link-btn" style="margin-bottom: 50px;"><a href="https://designlyworld.com/" class="theme-btn btn-style-one" style="background-color: #fec931;padding: 10px;font-weight: 600;margin-top: 15px;color: black;"><span class="btn-title" ><i class="fa-solid fa-house"></i> BACK TO HOME</span></a></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php endif; ?>
<style>
    .product-images{
        display:none;
    }
</style>
<?php get_footer();?>