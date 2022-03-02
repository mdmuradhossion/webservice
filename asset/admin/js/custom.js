/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 * 
 */

"use strict";

$("#loginform").on('submit',function(e){
  e.preventDefault();
  $('button.submit-btn').prop('disabled',true);
  $('#message').show();
  $('#message').html($('#authdata').val());
      $.ajax({
       method:"POST",
       url:$(this).prop('action'),
       data:new FormData(this),
       dataType:'JSON',
       contentType: false,
       cache: false,
       processData: false,
       success:function(data)
       {
          if ((data.errors)) {
          $('#message').hide();
          $('#message').hide();
          $('#message').show();
          $('#message').html('');
            for(var error in data.errors)
            {
              $('#message').html(data.errors[error]);
            }
          }
          else
          {
            $('#message').hide();
            $('#message').hide();
            $('#message').show();
            $('#message').html('<div class="alert alert-success">Success !</div>');
            window.location = data;
          }
          $('button.submit-btn').prop('disabled',false);
       }

      });

});



$(document).on('submit','#geniusform',function(e){
e.preventDefault();

  //$('.gocover').show();
   $('#message').html("<div class='alert alert-secondary'>Loading..... please wait</div>");
  var fd = new FormData(this);

  var geniusform = $(this);
  $('button.geniusSubmit-btn').prop('disabled',true);
    $.ajax({
     method:"POST",
     url:$(this).prop('action'),
     data:fd,
     contentType: false,
     cache: false,
     processData: false,
     success:function(data)
     {
        
        if ((data.errors)) {
          $('#message').hide();
          $('#message').hide();
          $('#message').show();
          $('#message').html('');
            for(var error in data.errors)
            {
              $('#message').html(data.errors[error]);
            }
        }
        else
        {
          $(".loader").fadeOut("slow");
          $('#message').hide();
          $('#message').hide();
          $('#message').show();
          $('#message').html(data);
          
          $("#reload").load(" #reload");
        }
        
        //$('.gocover').hide();
        

        $('button.geniusSubmit-btn').prop('disabled',false);


        $(window).scrollTop(0);

     }

    }); 

});

function convertToSlug( str ) {  
  //replace all special characters | symbols with a space
  str = str.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ').toLowerCase();  
  // trim spaces at start and end of string
  str = str.replace(/^\s+|\s+$/gm,'');  
  // replace space with dash/hyphen
  str = str.replace(/\s+/g, '-'); 
  //document.getElementById("slug-text").innerHTML= str;
  $('#slug-text').val(str);
  //return str;
}

function _delete(url){
  swal({
    title: 'Are you sure?',
    text: 'Once deleted, you will not be able to recover this imaginary file!',
    icon: 'warning',
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      $.ajax({
         method:"get",
         url:url,    
         success:function(data){
            swal('Poof! Your imaginary file has been deleted!', {          
              icon: 'success',
            });
            //$('#message').html(data);
            $('#reload').load(document.URL + ' #reload');
         }
      });
    } else {
      swal('Your imaginary file is safe!');
    }
  });
}