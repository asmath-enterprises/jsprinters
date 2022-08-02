<?php get_header();?>
<div class="inner-banner inner-bg12">
  <div class="container">
    <div class="inner-title">
      <h3>Contact Us</h3>
      <ul>
        <li>
          <a href="https://jsprinters.in/">Home</a>
        </li>
        <li>
          <i class="fa-solid fa-chevron-right"></i>
        </li>
        <li>Contact Us</li>
      </ul>
    </div>
  </div>
</div>

<div class="contact-area ptb-100">
  <div class="section-title text-center">
    <span>Contact Us</span>
    <h2>Drop Your Message</h2>
    <p>
      It is a long established fact that a reader will be distracted by the
      readable content of a page when looking at its layout.
    </p>
  </div>
  <div class="container">
    <div class="contact-wrap pt-45">
      <div class="contact-wrap-form">

          <div class="row" >
            <?php echo do_shortcode('[contact-form-7 id="64" title="Contact form 1"]'); ?>
          </div>

      </div>
    </div>
  </div>
</div>



<?php get_footer();?>