<?php get_header();?>
<div class="inner-banner inner-bg7">
    <div class="container">
        <div class="inner-title">
            <h3>Product</h3>
            <ul>
                <li>
                    <a href="https://jsprinters.in/">Home</a>
                </li>
                <li>
                   <i class="fa-solid fa-angle-right"></i>
                </li>
                <li>Brochure Box Printing</li>
            </ul>
        </div>
    </div>
</div>
<div class="section-title text-center" style="margin: 40px auto;">
    <span>Recent Works </span>
    <h2>Some of our Recent Works</h2>
    <p>
        What indication best sick be project proposal in attempt, train of
        the showed some a forth. That homeless, won't many of goals thoughts
        volumes felt.
    </p>
</div>
<div class="product_selection_bar wow fadeInUp2 clearfix" data-wow-delay=".1s"
    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp2; margin-bottom:15px">
    <div class="row" style="float: right;padding-right: 60px;">
        <div class="">
            <div class="select_option mb-0">
                <div class="nice-select" tabindex="0"><span class="current">Brochure</span>
                    <ul class="list">

                        <li data-value="1" class="option"><a href="https://jsprinters.in/shirt-box-printing/">Shirt box</a>
                        </li>
                        <li data-value="2" class="option"><a href="https://jsprinters.in/sweet-box-printing/">Sweet Box</a>
                        </li>
                        <li data-value="3" class="option"><a
                                href="https://jsprinters.in/inner-box-printing/">Inner Box</a></li>

                        <li data-value="4" class="option"><a href="https://jsprinters.in/tag-printing/">Tag</a>
                        </li>
                          <li data-value="5" class="option"><a href="https://jsprinters.in/visiting-card/">Visting Card</a>
                        </li>
                          <li data-value="6" class="option"><a href="https://jsprinters.in/notebook-printing/">Notebook</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="gallerycontainer">
    <div class="gallery-item">
        <?php if( have_rows('brochure','options') ):?>
        <?php while( have_rows('brochure','options') ) : the_row();
            $image = get_sub_field('image');
            $imagename = get_sub_field('image_name');?>
        <div class="item wow fadeInUp2">
            <img data-src="<?php echo $image?>" alt="<?php echo $imagename?>">
        </div>
        <?php endwhile;?>
        <?php endif; ?>

    </div>
</div>
<?php get_footer();?>
<style>
    .buy-now-btn{
        display:none
    }
</style>