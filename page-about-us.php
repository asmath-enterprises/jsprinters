<?php get_header();?>
<div class="inner-banner inner-bg7">
    <div class="container">
        <div class="inner-title">
            <ul>
                <li>
                    <a href="https://jsprinters.in/">Home</a>
                </li>
                <li>
                    <i class="fa-solid fa-angle-right"></i>
                </li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</div>
    <div class="about-area pt-100 pb-70">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="about-img">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/about/1.png" alt="About Images">
                        <div class="about-bg-shape">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/about/bg-shape.png" alt="About Shape">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about-content">
                        <span>About Us</span>
                        <h2>We Are Leading Our Agency for 15 Years</h2>
                        <p>
                            What indication best sick be project proposal in attempt, train of the showed some a forth. That homeless, won't many of goals thoughts volumes felt with of as he this its tend broad. Well, were make come when from would area page.
                        </p>
                        <p>
                            What indication best sick be project proposal in attempt, train of the showed some a forth. That homeless, won't many of goals thoughts volumes felt with of as he this its tend broad. Well, were make come when from would area page puzzles hell in is through
                            on the in more rent mountains.
                        </p>
             
                    </div>
                </div>
            </div>
        </div>
    </div>
<section class="choose-area ptb-70">
  <div class="container">
    <div class="section-title text-center">
      <span>Why Choose Us</span>
      <h2>JS Printers is a Trusted Printing Service</h2>
      <p>
        What indication best sick be project proposal in attempt, train of
        the showed some a forth. That homeless, won't many of goals thoughts
        volumes felt.
      </p>
    </div>
    <div class="row pt-45">
      <div class="col-lg-3 col-sm-6">
        <div class="choose-card">
          <i class="fa-solid fa-box-archive"></i>
          <h3>Trusted Company</h3>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="choose-card">
          <i class="fa-solid fa-user-gear"></i>
          <h3>Expertised Work</h3>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="choose-card">
          <i class="fa-solid fa-layer-group"></i>
          <h3>Budget Oriented</h3>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="choose-card">
          <i class="fa-solid fa-truck"></i>
          <h3>Fast Service</h3>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="choose-card">
          <i class="fa-brands fa-creative-commons"></i>
          <h3>Quality Work</h3>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="choose-card">
          <i class="fa-solid fa-thumbs-up"></i>
          <h3>Satisfaction Revisions</h3>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="choose-card">
          <i class="fa-solid fa-pen-nib"></i>
          <h3>Talented Designers</h3>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="choose-card">
          <i class="fa-solid fa-money-bill"></i>
          <h3>Easy Payment</h3>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="product-area pt-70 pb-70">
  <div class="container">

    <div class="section-title text-center">
      <div data-aos="fade-up" data-aos-offset="200" data-aos-delay="40" data-aos-duration="1200" data-aos-mirror="true"
        data-aos-once="true">
        <span>Our Services</span>

      </div>
      <div data-aos="fade-up" data-aos-offset="200" data-aos-delay="80" data-aos-duration="1200" data-aos-mirror="true"
        data-aos-once="true">

        <h2>Some of our services</h2>
      </div>

      <div data-aos="fade-up" data-aos-offset="200" data-aos-delay="100" data-aos-duration="1200" data-aos-mirror="true"
        data-aos-once="true">

        <p>
          What indication best sick be project proposal in attempt, train of
          the showed some a forth. That homeless, won't many of goals thoughts
          volumes felt.
        </p>
      </div>
    </div>


    <div class="row pt-45">

      <?php if( have_rows('product','options') ):?>
      <?php while( have_rows('product','options') ) : the_row();
            $image = get_sub_field('image');
            $imagename = get_sub_field('image_name');
            $productlink = get_sub_field('product_link');
            ?>

      <div class="col-lg-4 col-md-6">
        <div data-aos="fade-up" data-aos-offset="200" data-aos-delay="<?php echo get_row_index(); ?>00"
          data-aos-duration="1500" data-aos-mirror="true" data-aos-once="true">
          <div class="product-card">
            <a href="<?php echo esc_url( $productlink ); ?>">
              <img data-src="<?php echo $image?>" alt="<?php echo $imagename?>" />
            </a>
            <div class="product-content">
              <a href="<?php echo esc_url( $productlink ); ?>">
                <h3><?php echo $imagename?></h3>
              </a>
              <div class="product-cart">
                <ul>
                  <li>
                    <a href="<?php echo esc_url( $productlink ); ?>">
                      <i class="fa-solid fa-chevron-right"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile;?>
      <?php endif; ?>

    </div>
  </div>
  <div class="product-shape">
    <img data-src="<?php bloginfo('template_directory'); ?>/assets/img/shape/shape.png" alt="Products Shape" />
  </div>
</section>
<div class="testimonial-area-two ptb-70">
  <div class="container">
    <div class="testimonial-slider-two owl-carousel owl-theme pt-45">
      <?php if( have_rows('testimonial','options') ):?>
      <?php while( have_rows('testimonial','options') ) : the_row();
            $image = get_sub_field('image');
            $testimonialname = get_sub_field('testimonial_name');
            $testimonialtext = get_sub_field('testimonial_text');
            ?>
      <div class="testimonial-card">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <div class="testimonial-card-content">
              <h3><?php echo $testimonialname?></h3>
              <p>
                <?php echo $testimonialtext?>
              </p>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile;?>
      <?php endif; ?>
    </div>
  </div>
  <div class="testimonial-icon">
    <i class="fa-solid fa-quote-right"></i>
  </div>
</div>
<div class="product-images">
  <div class="container">
    <div class="product-images-slider owl-carousel owl-theme">
      <?php $outs = array(); if( have_rows('clientlogo','options') ):        
            while ( have_rows('clientlogo','options') ) : the_row();  ob_start();
            $images = get_sub_field('image');
            $contents = get_sub_field('content');
        ?>
      <div class="product-images-item">
        <img class="clientlogo" src="<?php echo $images?>" alt="<?php echo $contents?>" />
      </div>
      <?php $outs[] = ob_get_clean(); endwhile; 
        else :
        endif;
        $outs = array_reverse($outs);
        echo implode($outs);
        ?>
    </div>
  </div>
</div>


<?php get_footer();?>
<style>
    .buy-now-btn {
        display: none
    }
</style>