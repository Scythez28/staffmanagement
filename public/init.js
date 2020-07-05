$(document).ready(function() {
 /* $('.collapsible').collapsible({
    accordion: false
  });*/

  /*$('.modal-trigger').leanModal();*/
    
  /*$('delete').click(function(){
      var checkstr =  confirm('Are you sure you want to delete this?');
      if(checkstr == true){
  // do your code
      }else{
          return false;
      }
  });*/

  $(document).on('click', '.delete-option', function() {
    $(this).parent(".input-field").remove();
  });

  // will replace .form-g class when referenced
  var material = '<div class="md-form input-field col input-g mt-4">' +
    '<input class="form-control-lg" name="answers[][answer]" id="answers[][answer]" type="text" placeholder="Option" required>' +
    '<span style="float:right; cursor:pointer;"class="btn btn-danger delete-option">Delete</span>' +
    '<span class="add-option ml-3" style="cursor:pointer; color:#4ef23f;"><b>Add Another</b></span>' +
    '</div>';

  // for adding new option
  $(document).on('click', '.add-option', function() {
    $(".form-g").append(material);
  });
  // allow for more options if radio or checkbox is enabled
  $(document).on('change', '#question_type', function() {
    var selected_option = $('#question_type :selected').val();
    if (selected_option === "radio" || selected_option === "checkbox") {
      $(".form-g").html(material);
    } else {
      $(".input-g").remove();
    }
  });
});
