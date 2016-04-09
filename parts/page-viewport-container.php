
<!-- banner container -->
<div class="container-fluid banner_frontpage">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px;">


            <!-- <div class="container"> -->
                <ul id="example-slick2" class="slider">
                    <li class="demobox" rel="jKit[binding.viewport:selector=this;source=clearance;mode=css.opacity;condition=value>3;if=1;else=0.2]"><p class="demobox" style="display:none; background: red;" data-jkit="[show:onevent=viewport.true][hide:onevent=viewport.false]">
	reacting on viewport binding events
</p>
                    	<!-- <div style="position: relative; left: 0px; top:0px; width: 100%; height: 100%; background: red;" class="demobox" rel="jKit[binding.viewport:selector=this;source=clearance;mode=css.opacity;condition=value>3;if=1;else=0.2]"> -->
							<!-- <p> -->
								<!-- viewport detecting box -->
							<!-- </p> -->
                    	<!-- </div> -->
                    </li>
                    <li class="demobox" rel="jKit[binding.viewport:selector=this;source=clearance;mode=css.opacity;condition=value>3;if=1;else=0.2]"><p class="demobox" style="display:none; background: green;" data-jkit="[show:onevent=viewport.true][hide:onevent=viewport.false]">
	reacting on viewport binding events
</p>
                    	<!-- <div style="position: relative; left: 0px; top:0px; width: 100%; height: 100%; background: green;" class="demobox" rel="jKit[binding.viewport:selector=this;source=clearance;mode=css.opacity;condition=value>3;if=1;else=0.2]"> -->
							<!-- <p> -->
								<!-- viewport detecting box -->
							<!-- </p> -->
                    	<!-- </div> -->
                    </li>
                    <li class="demobox" rel="jKit[binding.viewport:selector=this;source=clearance;mode=css.opacity;condition=value>3;if=1;else=0.2]"><p class="demobox" style="display:none; background: yellow;" data-jkit="[show:onevent=viewport.true][hide:onevent=viewport.false]">
	reacting on viewport binding events
</p>
                    	<!-- <div style="position: relative; left: 0px; top:0px; width: 100%; height: 100%; background: yellow;" class="demobox" rel="jKit[binding.viewport:selector=this;source=clearance;mode=css.opacity;condition=value>3;if=1;else=0.2]"> -->
							<!-- <p> -->
								<!-- viewport detecting box -->
							<!-- </p> -->
                    	<!-- </div> -->
                    </li>
                    <li class="demobox" rel="jKit[binding.viewport:selector=this;source=clearance;mode=css.opacity;condition=value>3;if=1;else=0.2]"><p class="demobox" style="display:none; background: blue;" data-jkit="[show:onevent=viewport.true][hide:onevent=viewport.false]">
	reacting on viewport binding events
</p>
                    	<!-- <div style="position: relative; left: 0px; top:0px; width: 100%; height: 100%; background: blue;" class="demobox" rel="jKit[binding.viewport:selector=this;source=clearance;mode=css.opacity;condition=value>3;if=1;else=0.2]"> -->
							<!-- <p> -->
								<!-- viewport detecting box -->
							<!-- </p> -->
                    	<!-- </div> -->
                    </li>
                    <li class="demobox" rel="jKit[binding.viewport:selector=this;source=clearance;mode=css.opacity;condition=value>3;if=1;else=0.2]">
                    	<p class="demobox" style="display:none; background: grey;" data-jkit="[show:onevent=viewport.true][hide:onevent=viewport.false]">
	reacting on viewport binding events
</p>
                    	<div style="position: relative; left: 0px; top:0px; width: 100%; height: 100%; background: grey;">
							<p>
								viewport detecting box
							</p>
                    	</div>
                    </li>
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

        $('#example-slick2').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        });
    });
</script>
    


	<script type="text/javascript">

	$(document).ready(function(){

		$('body').jKit({ 
			'plugins': {
				date: { 'path': "plugins/datepicker/js/datepicker.js", 'fn': 'DatePicker' },
				hint: { 'path': "plugins/jquery.ztinputhint-1.2.js", 'fn': 'ztInputHint' },
				maxlength: { 'path': "plugins/maxlength/jquery.maxlength-min.js", 'fn': 'maxlength' },
				confirm: { 'path': "plugins/jquery.confirm-1.3.js", 'fn': 'confirm' }
			},
			'replacements': {
				'encode': specialEncodeCommand
			}
		});

	});

	function specialEncodeCommand(that, type, options){

		var s = this.settings; // we don't need this one, but I'll leave it here so you know how to get the plugin settings in case you need them
		var $that = $(that);

		this.executeCommand(that, type, options); // execute the original command

		// now add some additional functionality:

		if (options.format == 'uppercase'){
			$that.html($that.html().toUpperCase());
		}

	}

	</script>
	
