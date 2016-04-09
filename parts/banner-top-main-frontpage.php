<link rel="stylesheet" type="text/css" href="<?php get_template_directory_uri();
?>/wordpress/wordpress/wp-content/themes/testTheme/slick/slick.css" />
// Add the new slick-theme.css if you want the default styling
<link rel="stylesheet" type="text/css" href="<?php get_template_directory_uri(); ?>/wordpress/wordpress/wp-content/themes/testTheme/slick/slick-theme.css"/>

<!--<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>-->
<!--<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>-->
<script type="text/javascript" src="<?php get_template_directory_uri(); ?>/wordpress/wordpress/wp-content/themes/testTheme/slick/slick.min.js"></script>


<style>
.slider{
    position: absolute;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    /*background: red;*/
    margin-left:0px;
}

.slick-slide{

}

</style>

<!-- banner container -->
<div class="container-fluid banner_frontpage">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px;">


            <!--            --><?php //echo do_shortcode('[bxslider id="banner-frontpage"]'); ?>
            <!-- <div class="container"> -->
                <ul id="example-slick" class="slider">
                    <li rel="jKit[binding.viewport:selector=this">
                        <div style="position: relative; left: 0px; top:0px; width: 100%; height: 100%; background: #fff;" data-jkit="[show:onevent=viewport.true][hide:onevent=viewport.false]">slide1</div></li>
                    <!-- <li style="display:none; background: grey;" data-jkit="[show:onevent=this.css.left>100][show:onevent=this.css.left<0][hide:left>100;hide:left<0]"><div style="position: relative; left: 0px; top:0px; width: 100%; height: 100%; background: #fff;">slide1</div></li> -->
                    <li  rel="jKit[binding.viewport:selector=this" data-jkit="[show:onevent=viewport.true][hide:onevent=viewport.false]"><div style="position: relative; width: 100%; background: #3399ff;">slide 1</div></li>
                    <li rel="jKit[binding.viewport:selector=this" data-jkit="[show:onevent=viewport.true][hide:onevent=viewport.false]"><div style="position: relative; width: 100%; background: #a9bd4f;">slide 1</div></li>
                    <li rel="jKit[binding.viewport:selector=this" data-jkit="[show:onevent=viewport.true][hide:onevent=viewport.false]"><div style="position: relative; width: 100%; background: #D9534F;">slide 1</div></li>
                    <li rel="jKit[binding.viewport:selector=this" data-jkit="[show:onevent=viewport.true][hide:onevent=viewport.false]"><div style="position: relative; width: 100%; background: #DDFFBB;">slide 1</div></li>
                    <li rel="jKit[binding.viewport:selector=this" data-jkit="[show:onevent=viewport.true][hide:onevent=viewport.false]"><div style="position: relative; width: 100%; background: #000;">slide 1</div></li>
                </ul>
            <!-- </div> -->


        </div>
    </div>
</div>
<!-- end of banner container -->

<script language="javascript">
    $(document).ready(function(){

       var window_height = ($(window).height())-180;
        $('.banner_frontpage').css({
            'height': window_height
        });

        $(window).resize(function(){
            var window_height = ($(window).height())-180;
            $('.banner_frontpage').css({
                'height': window_height
            });
        });

        $('#example-slick').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        });
    });
</script>
    


<?php
?>