<style>
.lws_logo_container{
	position: relative;
}
</style>


<div class="navbar navbar-inverse navbar-fixed-top" style="position:relative;background:none;">
    <div class="navbar-inner navbar-gevann" style="position:relative;background:none; display:flex;">
    	<div style="position:absolute; width:100%; height:100%; left:0px; top:0px; background:#3C78C8; opacity:0.8; z-index:1;"></div>

		<div class="lws_container" style="display:flex; position:relative; width:80%; z-index:2; margin:auto;">

			<div style="width:40%">
				<img src="<?php bloginfo('template_directory'); ?>/images/lws-logo.png" />
			</div>

			<div class="text-right" style="width:60%">

	            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </a>
	            
	            <div class="nav-collapse collapse">
	                <ul class="nav">


	                    <?php wp_list_pages(array('title_li' => '')); ?>


	                </ul>
	            </div><!--/.nav-collapse -->

			</div>

			









		</div>





    </div>
</div>



<!--


<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 lws_logo_container">

			<div style="position:absolute; width:100%; height:100%; left:0px; top:0px; background:#3C78C8; opacity:0.8; z-index:1;"></div>

			<div class="container" style="position:absolute; width:100%; height:100%; left:0px; top:0px; z-index:10;">
				<div class="row">

					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">



	        			<img src="<?php bloginfo('template_directory'); ?>/images/lws-logo.png" />


        			</div>



					<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">

			            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			            </a>
			            
			            <div class="nav-collapse collapse">
			                <ul class="nav">


			                    <?php wp_list_pages(array('title_li' => '')); ?>


			                </ul>
			            </div>

			        </div>
			    </div>
			</div>



		</div>
	</div>
</div>

-->

