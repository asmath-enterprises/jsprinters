<?php get_header();?>
   <div class="inner-banner inner-bg12">
      <div class="container">
        <div class="inner-title">
          <h3>Contact Us</h3>
          <ul>
            <li>
              <a href="index.html">Home</a>
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
            <form id="contactForm">
              <div class="row">
                <div class="col-lg-6 col-sm-6">
                  <div class="form-group">
                    <input
                      type="text"
                      name="name"
                      id="name"
                      class="form-control"
                      required
                      data-error="Please enter your name"
                      placeholder="Your Name"
                    />
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                  <div class="form-group">
                    <input
                      type="email"
                      name="email"
                      id="email"
                      class="form-control"
                      required
                      data-error="Please enter your email"
                      placeholder="Your Email"
                    />
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                  <div class="form-group">
                    <input
                      type="text"
                      name="phone_number"
                      id="phone_number"
                      required
                      data-error="Please enter your number"
                      class="form-control"
                      placeholder="Your Phone"
                    />
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                  <div class="form-group">
                    <input
                      type="text"
                      name="msg_subject"
                      id="msg_subject"
                      class="form-control"
                      required
                      data-error="Please enter your subject"
                      placeholder="Your Subject"
                    />
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12">
                  <div class="form-group">
                    <textarea
                      name="message"
                      class="form-control"
                      id="message"
                      cols="30"
                      rows="8"
                      required
                      data-error="Write your message"
                      placeholder="Your Message"
                    ></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 text-center">
                  <button
                    type="submit"
                    class="default-btn page-btn text-center"
                  >
                    Send Message
                  </button>
                  <div id="msgSubmit" class="h3 text-center hidden"></div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>



<?php get_footer();?>