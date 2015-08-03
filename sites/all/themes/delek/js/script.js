(function ($, Drupal, window, document, undefined) {


// To understand behaviors, see https://drupal.org/node/756722#behaviors
Drupal.behaviors.my_custom_behavior = {
  attach: function(context, settings) {



/*
$(document).ready(function() {
    $('.form-managed-file input#edit-submitted-file-upload-button').css("visibility", "hidden");
    $('.form-managed-file input.form-file').change(function() {
        $(this).parent().find('input.form-submit').mousedown();
    });

});*/

$('#mmenu_right li.active-trail').parent().parent().addClass('active');

if ($('#mmenu_right li').hasClass('active')){
    $( "#mmenu_right li.active" ).addClass( "mm-opened" );
}




  }
};


})(jQuery, Drupal, this, this.document);