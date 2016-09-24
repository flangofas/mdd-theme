jQuery(document).ready(function ($) {
    /**
     * @todo Height should be dynamic per viewport.
     */
    $('.slider').slider({full_width: true, height: 700, indicators: false});
    $('.carousel').carousel();
    $('.materialboxed').materialbox();
});