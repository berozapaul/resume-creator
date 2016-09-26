jQuery( document ).ready(function( $ ) {
  $("#resume_accordion" ).accordion({
    heightStyle: "content"
  });

  $("#project_accordion, #previous_project, #earlier_employers, #rc_education, #rc_courses, #rc_solstice" ).accordion({
    active: -1,
    heightStyle: "content"
  });

  $('.action_save').on('click', function(){
      var formElm = $(this).parents('form');
      var dataStr = formElm.serialize();
      $.ajax({
         type : "post",
         dataType : "json",
         url : ajaxurl,
         data : {action: "rc_save_user_meta", user_id : $('#user_id').val(), data: dataStr},
         success: function(response) {
            if(response.success) {
              if($.inArray(response.meta_key, ['recent_projects', 'previous_projects', 'earlier_employers', 'rc_education', 'rc_courses', 'rc_solstice']) > -1){
                formElm.find('.last_accordion_header').before(response.html);
                formElm.find(".accordion_element").accordion( "refresh" );
                formElm.find('.last_accordion_content').find('input, textarea').val('');
              }
              formElm.find('.success_msg').show().html('Success! item has been saved.').fadeOut(6000);
            }
            else {
              formElm.find('.error_msg').show().html('Please fill the form and try again!').fadeOut(6000);
            }
         }
      });
  });


  $('form').on('click', '.action_delete', function() {
    if(confirm('Are you sure you want to delete this item?')){
      $(this).parent().next().remove();
      $(this).parents('form').find('.action_save').trigger('click');
      $(this).parent().remove();
    }
  });
}); // End of document ready function