<?php

?>




<div class="navbar navbar-fixed-top" style="background:none;">
    <div class="navbar-inner navbar-gevann" style="background:none;">
    	<div style="position:absolute; width:100%; height:100%; left:0px; top:0px; background:#3C78C8; opacity:0.8;"></div>
        <div class="container" style="z-index:10;">
        	<div class="row">
        		<div class="col-lg-4">

        			<!-- site logo -->
        			<!-- <a class="brand" href="<?php //echo site_url(); ?>"><?php //bloginfo('name'); ?></a> -->
        			<img src="<?php bloginfo('template_directory'); ?>/images/lws-logo.png" />


        		</div>
        		<div class="col-lg-8">



		            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </a>
		            
		            <div class="nav-collapse collapse">
		                <ul class="nav">


		                    <?php wp_list_pages(array('title_li' => '')); ?>

		                    <?php //wp_list_pages(array('title_li' => '', 'exclude' => 4)); ?>

		                </ul>
		            </div><!--/.nav-collapse -->



        		</div>
        	</div>

        </div>
    </div>
</div>




<?php

?>

