jQuery(document).ready(function ($) {
  //initializes the JQuery needed to trigger the side sliding navigation for mobile
  $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 240
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
    }
  );
});
