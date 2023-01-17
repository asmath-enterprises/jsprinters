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
                <li>Clients</li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
       <?php $outs = array(); if( have_rows('clientlogo','options') ):        
            while ( have_rows('clientlogo','options') ) : the_row();  ob_start();
            $images = get_sub_field('image');
            $contents = get_sub_field('content');
        ?>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <img class="clientlogo" src="<?php echo $images?>" alt="<?php echo $contents?>" />
        </div>
      <?php $outs[] = ob_get_clean(); endwhile; 
        else :
        endif;
        $outs = array_reverse($outs);
        echo implode($outs);
        ?>
</div>
<?php get_footer();?>