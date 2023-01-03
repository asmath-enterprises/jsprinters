<?php get_header();?>

<div class="home-slider owl-carousel owl-theme">
  <?php if( have_rows('slider','options') ):?>
  <?php while( have_rows('slider','options') ) : the_row();
            $backimage = get_sub_field('sliderimage');
            ?>
  <div class="slider-item" style="background-image: url(<?php echo $backimage?>)">

  </div>

  <?php endwhile;?>
  <?php endif; ?>
</div>

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
        <div data-aos="fade-right" data-aos-offset="200" data-aos-delay="100" data-aos-duration="1500"
          data-aos-mirror="true" data-aos-once="true">
          <div class="choose-card">
            <i class="fa-solid fa-box-archive"></i>
            <h3>Trusted Company</h3>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div data-aos="fade-right" data-aos-offset="200" data-aos-delay="200" data-aos-duration="1500"
          data-aos-mirror="true" data-aos-once="true">
          <div class="choose-card">
            <i class="fa-solid fa-user-gear"></i>
            <h3>Expertised Work</h3>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div data-aos="fade-right" data-aos-offset="200" data-aos-delay="300" data-aos-duration="1500"
          data-aos-mirror="true" data-aos-once="true">
          <div class="choose-card">
            <i class="fa-solid fa-layer-group"></i>
            <h3>Budget Oriented</h3>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div data-aos="fade-right" data-aos-offset="200" data-aos-delay="400" data-aos-duration="1500"
          data-aos-mirror="true" data-aos-once="true">
          <div class="choose-card">
            <i class="fa-solid fa-truck"></i>
            <h3>Fast Service</h3>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div data-aos="fade-right" data-aos-offset="200" data-aos-delay="100" data-aos-duration="1500"
          data-aos-mirror="true" data-aos-once="true">
          <div class="choose-card">
            <i class="fa-brands fa-creative-commons"></i>
            <h3>Quality Work</h3>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div data-aos="fade-right" data-aos-offset="200" data-aos-delay="200" data-aos-duration="1500"
          data-aos-mirror="true" data-aos-once="true">
          <div class="choose-card">
            <i class="fa-solid fa-thumbs-up"></i>
            <h3>Satisfaction Revisions</h3>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div data-aos="fade-right" data-aos-offset="200" data-aos-delay="300" data-aos-duration="1500"
          data-aos-mirror="true" data-aos-once="true">
          <div class="choose-card">
            <i class="fa-solid fa-pen-nib"></i>
            <h3>Talented Designers</h3>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div data-aos="fade-right" data-aos-offset="200" data-aos-delay="400" data-aos-duration="1500"
          data-aos-mirror="true" data-aos-once="true">
          <div class="choose-card">
            <i class="fa-solid fa-money-bill"></i>
            <h3>Easy Payment</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="service-area pt-70 pb-70">
  <div class="container">
    <div class="section-title text-center">
      <span>Features</span>
      <h2>JS Printers Provide various features of printing like</h2>
    </div>
    <div class="row pt-45">
      <?php if( have_rows('features','options') ):?>
      <?php while( have_rows('features','options') ) : the_row();
            $image = get_sub_field('image');
            $imagename = get_sub_field('image_name');
            $featurestext= get_sub_field('features_text');
            $featureslink = get_sub_field('features_link');
            ?>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div data-aos="fade-up" data-aos-offset="200" data-aos-delay="<?php echo get_row_index(); ?>00"
          data-aos-duration="1500" data-aos-mirror="true" data-aos-once="true">
          <div class="service-card">
            <a href="<?php echo esc_url( $featureslink ); ?>" style="border-bottom: 1px solid #d9d9d9">
              <img data-src="<?php echo $image?>" alt="<?php echo $imagename?>" />
            </a>
            <div class="service-content">
              <a href="<?php echo esc_url( $featureslink ); ?>">
                <h3><?php echo $imagename?></h3>
              </a>
              <p>
                <?php echo $featurestext?>
              </p>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile;?>
      <?php endif; ?>
    </div>
  </div>
  <div class="product-shape">
    <img data-src="<?php bloginfo('template_directory'); ?>/assets/img/products/shape.png" alt="Products Shape" />
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