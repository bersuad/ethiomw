 <script type="text/javascript" src="<?php echo site_url()?>assets/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="<?php echo site_url()?>assets/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo site_url()?>assets/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="<?php echo site_url()?>assets/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="<?php echo site_url()?>assets/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="<?php echo site_url()?>assets/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="<?php echo site_url()?>assets/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="<?php echo site_url()?>assets/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="<?php echo site_url()?>assets/js/ckeditor/ckeditor.js"></script>
  <script>

        CKEDITOR.replace('editor2');
    </script>
    <div class="modal fade" id="change_password" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm-2" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <h5  class="modal-title" id="exampleModalLabel">Change Your Password <i class="name" style="color:green"></i>?
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button></h5>
    </div>
    <form  role="form" method="post"  id="change_password_form_submit" action="<?php echo base_url('pages/changePassword');?>" >
    <div class="modal-body">
        <div class="form-group">
          <label for="recipient-name" class="col-form-label">Old Password:</label>
          <div class="input-group">
          <input  type="password" autocomplete="off" id="old_password"class="form-control"
          name="old_password" placeholder="Type Old Password">
          <span class="input-group-addon"><a class="mouseup_mousedown_old"><i class="fa fa-eye-slash"></i></a></span>
        </div>

          <div style="color:red" class="old_password"></div>
        </div>
        <div class="form-group">
          <label for="recipient-name" class="col-form-label">New Password:</label>
            <div class="input-group">
          <input autocomplete="off" type="password"  id="new_password"class="form-control" name="new_password"
<<<<<<< HEAD
          placeholder="Create New Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters">
=======
          placeholder="Create New Password">
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
          <span class="input-group-addon"><a class="mouseup_mousedown_new"><i class="fa fa-eye-slash"></i></a></span>
        </div>
          <div style="color:red" class="new_password"></div>
        </div>
        <div class="form-group">
          <label for="recipient-name" class="col-form-label">Confirm Password:</label>
          <div class="input-group">
          <input autocomplete="off" type="password"  id="confirm_password"class="form-control" name="confirm_password"
          placeholder="Confirm Password">
          <span class="input-group-addon"><a class="mouseup_mousedown_confirm"><i class="fa fa-eye-slash"></i></a></span>
        </div>
          <div style="color:red" class="confirm_password"></div>
        </div>
      </div>
     <div class="modal-footer" >
     <button type="submit" class="btn btn-info" onclick="changePassword()" >Change <i class="change_click_password" ></i></button>
    </div>
  </form>
    </div>
    </div>
    </div>
    <script>
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
    
>>>>>>> 985f3f7a903ca11b74eae8fd99c9d3d3fc9280b3
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
    $('.mouseup_mousedown_confirm').on({
           mousedown: function() {
               $('#confirm_password').prop('type','text');
               $('.mouseup_mousedown_confirm').html('<i class="fa fa-eye"></i>');
           },
           mouseup: function() {
               $('#confirm_password').prop('type','password');
               $('.mouseup_mousedown_confirm').html('<i class="fa fa-eye-slash"></i>');

           }

         });
    $('.mouseup_mousedown_new').on({
           mousedown: function() {
               $('#new_password').prop('type','text');
               $('.mouseup_mousedown_new').html('<i class="fa fa-eye"></i>');
           },
           mouseup: function() {
               $('#new_password').prop('type','password');
               $('.mouseup_mousedown_new').html('<i class="fa fa-eye-slash"></i>');

           }

         });
    $('.mouseup_mousedown_old').on({
           mousedown: function() {
               $('#old_password').prop('type','text');
               $('.mouseup_mousedown_old').html('<i class="fa fa-eye"></i>');
           },
           mouseup: function() {
               $('#old_password').prop('type','password');
               $('.mouseup_mousedown_old').html('<i class="fa fa-eye-slash"></i>');

           }

         });
function validChangePassword() {
var old_pass=$('#old_password').val();
var new_pass=$('#new_password').val();
var confirm_pass=$('#confirm_password').val();
if(old_pass && new_pass && confirm_pass && (confirm_pass==new_pass)){
  return old_pass+new_pass+confirm_pass;
}
else{
  if(!old_pass){
    $('.old_password').text('Old password is required!');
  }
  else{
    $('.old_password').text('');
     }
  if(!new_pass){
    $('.new_password').text('New password is required!');
  }
  else{
    $('.new_password').text('');
   }
  if(confirm_pass!=new_pass){
    $('.confirm_password').text('Confirm password miss matched with New Password!');
  }
  else{
    $('.confirm_password').text('');
    }
return;
}
}
function changePassword(){
$("#change_password_form_submit").on('submit', function(e){
        e.preventDefault();
        if(validChangePassword()){
          $.ajax({
                type: 'POST',
                url: '<?php echo base_url('pages/changePassword');?>',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                timeout:30000,
              beforeSend: function(){
              $('.change_click_password').html('<i class="fa fa-spinner fa-spin"></i>');
                },
    success: function(data){
    if(data=='200'){
<<<<<<< HEAD
  window.location.href='<?php echo base_url('login');?>';
=======
  window.location.href='<?php echo base_url('/');?>';
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
      }
      else if(data=='503'){
        $('.confirm_password').text('Old password does not exist, try again!');
        $('.change_click_password').html('');
         }
      else{
        $('.confirm_password').text("You haven't changed the password, try again!");
        $('.change_click_password').html('');
       }
    }
    })
        }
        else{
          e.preventDefault();
        }
      });
    }
    </script>
  <script>
    $('.change_password').click(function(){
      $('#change_password').modal('show');
    })
     $('.phone_valid').keypress(function(evt){
        var charCode = (evt.which) ? evt.which : event.keyCode;
       if ((charCode > 31 && (charCode < 46 || charCode > 57))){
          return false;
       }
       else if(46<=charCode && charCode<=57){
        return true;
       }
    });

    </script>
    <script type="text/javascript">
               function driver(fileInput) {
               var files = fileInput.files;

               for (var i = 0; i < files.length; i++) {
                   var file = files[i];
                   var imageType = /image.*/;
                   if (!file.type.match(imageType)) {
                       continue;
                   }
                   var img=document.getElementById("dri_pro");
                   img.file = file;
                   var reader = new FileReader();
                   reader.onload = (function(aImg) {
                       return function(e) {
                           aImg.src = e.target.result;
                       };
                   })(img);
                   reader.readAsDataURL(file);
                 }
                }


               function addUserImage(fileInput) {
               var files = fileInput.files;

               for (var i = 0; i < files.length; i++) {
                   var file = files[i];
                   var imageType = /image.*/;
                   if (!file.type.match(imageType)) {
                       continue;
                   }
                   var img=document.getElementById("user_pro");
                   img.file = file;
                   var reader = new FileReader();
                   reader.onload = (function(aImg) {
                       return function(e) {
                           aImg.src = e.target.result;
                       };
                   })(img);
                   reader.readAsDataURL(file);
                 }
                }


           </script>
    <script>
   $('.click_active').click(function(){
   $(this).toggleClass("active");
   })
    </script>
    <script>
$('.read_more').click(function(){
  var message=$(this).data('read');
  $(this).html('<td colspan="2">'+$(this).data('read')+'<a style="color:red" class="back_to"></a></td>');
  $('.back_to').click(function(){
    alert(message);
  })
})
    </script>
  <script>
  function countNewCrime(){
    $.ajax({
      url:'<?php echo base_url('criminal/countCommentNewCrime');?>',
      success:function(data){
        data=JSON.parse(data);
<<<<<<< HEAD
        $('.crime_report_count').html('<sup><small><b class="badge" style="background-color: black; color: #fff;">'+data.crime+
                            '</b></small></sup>');
        $('#comment_count').html('<span class="badge main-color-bg">'+data.comment+'</span>');
        // $('#criminal_count_report').html('<span class="badge main-color-bg">'+data.criminal_report+'</span>');
=======
        $('.fir_count').html('<sup><small><b class="badge" style="background-color: #d60808; color: #fff;">'+data.crime+
                            '</b></small></sup>');
        $('#comment_count').html('<span class="badge main-color-bg">'+data.comment+'</span>');
        $('#criminal_count_report').html('<span class="badge main-color-bg">'+data.criminal_report+'</span>');
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
      }
    })
  }
  function redundencyRequest(){
<<<<<<< HEAD
    // alert("data.new_crime_text");
=======
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
    $.ajax({
      url:'<?php echo base_url('API/redundencyRequest');?>',
      success:function(data){
        data=JSON.parse(data);
<<<<<<< HEAD
        $('#alert_text').html(data.new_crime_text);
        $('.fir_count').html('<sup><small><b class="badge" style="background-color: red; color: #fff;">'+data.new_crime_count+
                            '</b></small></sup>');
      // alert(data.new_crime_count);
=======
        $('#crime_report_count').html('<span class="badge main-color-bg">'+data.new_crime_count+'</span>');
        $('#alert_text').html(data.new_crime_text);

>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
      }
    })
  }
  (function loop(){
   setTimeout(function() {
   redundencyRequest();
   loop();
 }, 5000);
 })();
  $(function(){
    countNewCrime();
    redundencyRequest();
    })
    </script>
    <script>
   function validUserForm()
   {
     var name=$('#name').val();
     var phone=$('#phone').val();
     var email=$('#email').val();
     var password=$('#password').val();
     var repassword=$('#repassword').val();
    if(name && phone && email && password && repassword &&(repassword==password))
    {
      return name+phone+email+password;
    }
    else{
      if(!name){
        $('.admin_name').text('Full name is required!');
      }
      else{
        $('.admin_name').text('');
      }
      if(!phone){
        $('.admin_phone').text('Phone is required!');
      }
      else{
      $('.admin_phone').text('');
      }
      if(!email){
        $('.admin_email').text('Email is required!');
      }
      else{
        $('.admin_email').text('');
      }
      if(!password){
        $('.admin_password').text('Password is required!');
      }
      else{
        $('.admin_password').text('');
      }
      if(repassword!=password){
        $('.admin_repassword').text('Re-type password miss matched with Password!');
      }

  return;
    }
   }
   function validUserFormEdit()
   {
     var name=$('#edit_name').val();
     var phone=$('#edit_phone').val();
     var email=$('#edit_email').val();

    if(name && phone && email )
    {
      return name+phone+email;
    }
    else{
      if(!name){
        $('.edit_admin_name').text('Full name is required!');
      }
      if(!phone){
        $('.edit_admin_phone').text('Phone is required!');
      }
      if(!email){
        $('.edit_admin_email').text('Email is required!');
      }
    return;
    }
   }
    </script>
    <script>
    $('.edit_user').click(function(){
      $('#editModal').modal('show');
      $('#edit_name').val($(this).data('name'));
      $('#edit_phone').val($(this).data('phone'));
      $('#edit_email').val($(this).data('email'));
      $('#edit_admin_password').val($(this).data('password'));
      $('#created_date').val($(this).data('date'));
      $('#crdoc_id').val($(this).data('id'));
      $('#edit_admin_status').val($(this).data('status'));
      $('#dri_pro').attr('src',$(this).data('image'));
      var image=$(this).data('image');
    })
    </script>
    <script>
    function addUser(e){
    var nm=0;
    var validate=validUserForm();
  if(validate)
  {
  $("#submit_add_user").on('submit', function(e){
          e.preventDefault();
         if(nm==0) {
        $.ajax({
              type: 'POST',
              url: '<?php echo base_url('pages/addUser');?>',
              data: new FormData(this),
              contentType: false,
              cache: false,
              processData:false,
              timeout:30000,
            beforeSend: function(){
            $('.click_add').html('<i class="fa fa-spinner fa-spin"></i>');
              },
  success: function(data){
  if(data=='200'){
    window.location.href='<?php echo base_url('account_user');?>';
    }
    else if(data=='503'){
      $('.error_response_add_user').text('Email or Password already existed, try other email or password!');
      $('.click_add').html('');
    }
    else{
      $('.error_response_add_user').text('User is not added, try again!');
      $('.click_add').html('');

    }
  nm++;
  }
  });
  }
    });
    }
  else{
    $("#submit_add_user").on('submit', function(e){
    e.preventDefault();
  });
  }
  }
    function editUser(e){
    var nm=0;
    var validate=validUserFormEdit();
  if(validate)
  {
  $("#edit_submit_add_user").on('submit', function(e){
          e.preventDefault();
         if(nm==0) {
        $.ajax({
              type: 'POST',
              url: '<?php echo base_url('pages/editUser');?>',
              data: new FormData(this),
              contentType: false,
              cache: false,
              processData:false,
              timeout:30000,
            beforeSend: function(){
            $('.edit_click_add').html('<i class="fa fa-spinner fa-spin"></i>');
              },
  success: function(data){
  if(data=='200'){
window.location.href='<?php echo base_url('account_user');?>';
    }
    else{
      $('.error_response_edit_user').text('User is not added, try again!');
     }
  nm++;
  }
  });
  }
    });
    }
  else{
    $("#edit_submit_add_user").on('submit', function(e){
    e.preventDefault();
  });
  }
  }
</script>
</body>

</html>
