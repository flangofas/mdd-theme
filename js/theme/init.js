jQuery(document).ready(function ($) {
    /**
     * @todo Height should be dynamic per viewport.
     */
    $('.slider').slider({full_width: true, height: 700, indicators: false});
    $('.carousel').carousel();
    $('.materialboxed').materialbox();
    $(".button-collapse").sideNav();
    //Removes span wrapper and br tags in the form of CF7 plugin
    //@link: http://gmkhussain.blogspot.com.cy/2015/12/remove-span-elements-from-contact-form.html
    var cf7input = $( ".wpcf7-form-control" );
    if (cf7input.parent().is("span")) {
        cf7input.unwrap();
    } else {
        cf7input.wrap( "<div></div>" );
    }

    // main dropdown initialization
    $('.dropdown-button.main-menu-item').dropdown({
        constrain_width: true, // Does not change width of dropdown to that of the activator
        hover: true, // Activate on hover
        belowOrigin: true, // Displays dropdown below the button
        alignment: 'left', // Displays dropdown with edge aligned to the left of button
    });

    $('.input-field br').remove();
});
