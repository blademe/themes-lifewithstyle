<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner navbar-gevann">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
            <div class="nav-collapse collapse">
                <ul class="nav">


                    <?php wp_list_pages(array('title_li' => '')); ?>

                    <?php //wp_list_pages(array('title_li' => '', 'exclude' => 4)); ?>

                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>
