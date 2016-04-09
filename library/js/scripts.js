
// as the page loads, call these scripts
jQuery(document).ready(function($) {
	// load Foundation

    jQuery('.make-booking').find('a')
        .attr("data-reveal-id","bookingModal");

	jQuery(document).foundation();


 jQuery.ready(function() {
        setTimeout(function() {
            $("#orbit").click();
        }, 4000);
    });

    // load gravatars
    $('.comment img[data-gravatar]').each(function(){
        $(this).attr('src',$(this).attr('data-gravatar'));
    });

    if ($('#map').length > 0) {
        initMap();
    }


// add all your scripts here

}); /* end of as page load scripts */


/*! A fix for the iOS orientationchange zoom bug.
 Script by @scottjehl, rebound by @wilto.
 MIT License.
*/
(function(w){
	// This fix addresses an iOS bug, so return early if the UA claims it's something else.
	if( !( /iPhone|iPad|iPod/.test( navigator.platform ) && navigator.userAgent.indexOf( "AppleWebKit" ) > -1 ) ){ return; }
    var doc = w.document;
    if( !doc.querySelector ){ return; }
    var meta = doc.querySelector( "meta[name=viewport]" ),
        initialContent = meta && meta.getAttribute( "content" ),
        disabledZoom = initialContent + ",maximum-scale=1",
        enabledZoom = initialContent + ",maximum-scale=10",
        enabled = true,
		x, y, z, aig;
    if( !meta ){ return; }
    function restoreZoom(){
        meta.setAttribute( "content", enabledZoom );
        enabled = true; }
    function disableZoom(){
        meta.setAttribute( "content", disabledZoom );
        enabled = false; }
    function checkTilt( e ){
		aig = e.accelerationIncludingGravity;
		x = Math.abs( aig.x );
		y = Math.abs( aig.y );
		z = Math.abs( aig.z );
		// If portrait orientation and in one of the danger zones
        if( !w.orientation && ( x > 7 || ( ( z > 6 && y < 8 || z < 8 && y > 6 ) && x > 5 ) ) ){
			if( enabled ){ disableZoom(); } }
		else if( !enabled ){ restoreZoom(); } }
	w.addEventListener( "orientationchange", restoreZoom, false );
	w.addEventListener( "devicemotion", checkTilt, false );
})( this );



// LOGIN

if (jQuery(".logged-in").length > 0) {
    jQuery(".login-nav-item a").text('Dashboard').attr('href', '/dashboard/');
    jQuery(".signup-nav-item a").text('Logout').attr('href', '/?action=logout');
}

function show_form(X) {
    if (X === "#loginbox") {
        jQuery("#resetbox").hide(0);
        jQuery(X).fadeIn(300);
    }
    if (X === "#resetbox") {
        jQuery("#loginbox").hide(0);
        jQuery(X).fadeIn(300);
    }
}

jQuery("#login-btn").click(function() {
    if (jQuery("#log_name").val() != '' && jQuery("user_pass").val() != '') {
    jQuery('#result').html('Loading ...').fadeIn();
    var input_data = jQuery('#loginform').serialize();
    jQuery("#errormsg").html("");
    jQuery.ajax({
        type: "POST",
        url: "/wp-login.php",
        data: input_data,
        dataType: 'html',
        success: function(data) {
            jQuery('#result').hide();
            jQuery("#errormsg").html(jQuery("#login_error", jQuery(data)).html());
            if (jQuery("#errormsg").html().length > 0) {
                jQuery('#errormsg').show();
                jQuery("#errormsg a").attr("href", "javascript:show_form('#resetbox');");
                alert(data);
            } else {
                jQuery('#errormsg').hide();
                jQuery('#successmsg').show();
                /*jQuery('#loginform').hide();*/
                window.location.replace("/?action=login_success");
            }

        }
    });
    }
    return false;

});


jQuery("#wp-submit").click(function() {
    jQuery('#reset_result').html('Loading ...').fadeIn();
    var input_data = jQuery('#lostpasswordform').serialize();
    jQuery.ajax({
        type: "POST",
        url: "/wp-login.php?action=lostpassword&redirect_to=" + document.referrer,
        data: input_data,
        dataType: 'html',
        success: function(data) {
            jQuery('#reset_result').hide();
            jQuery("#reset_successmsg").html(jQuery(".message", jQuery(data)).html());
            jQuery("#reset_errormsg").html(jQuery("#login_error", jQuery(data)).html());
            if (jQuery("#reset_errormsg").html().length > 0) {
                jQuery('#reset_errormsg').show();
            } else jQuery("#reset_errormsg").hide();
        }

    });
    return false;
});


jQuery(document).ready(function(){
    // This button will increment the value
    $('.qtyplus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If is not undefined
        if (!isNaN(currentVal)) {
            // Increment
            $('input[name='+fieldName+']').val(currentVal + 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
    // This button will decrement the value till 0
    $(".qtyminus").click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 0) {
            // Decrement one
            $('input[name='+fieldName+']').val(currentVal - 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
});

