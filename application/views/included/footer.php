 <footer id="footer" class="footer pb-10 bg-deep">
    <div class="container pb-10">

      <div class="row">
        <div class="col-md-12">
          <div class="horizontal-contact-widget dark mt-30 pt-30 text-center">
            <div class="col-sm-12 col-sm-4">
              <div class="each-widget"> <i class="pe-7s-phone font-36 mb-10 text-white"></i>
                <h5 class="text-theme-colored">Call Us</h5>
                <p class="text-white">Phone: <a href="#" class="text-white">6583</a></p>
              </div>
            </div>
            <div class="col-sm-12 col-sm-4 mt-sm-50">
              <div class="each-widget"> <i class="pe-7s-map font-36 mb-10 text-white"></i>
                <h5 class="text-theme-colored">Address</h5>
                <p class="text-white">ETHIOPIA/ ADDIS ABABA/ BOLE </p>
              </div>
            </div>
            <div class="col-sm-12 col-sm-4 mt-sm-50">
              <div class="each-widget"> <i class="pe-7s-mail font-36 mb-10 text-white"></i>
                <h5 class="text-theme-colored">Email</h5>
                <p><a href="#" class="text-white">contact@ethiomw.com</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <ul class="list-inline social-icons icon-hover-theme-colored icon-gray icon-circled text-center mt-50 mb-30">
            <li><a href="#"><i class="fa fa-facebook"></i></a> </li>
            <li><a href="#"><i class="fa fa-twitter"></i></a> </li>
            <li><a href="#"><i class="fa fa-pinterest"></i></a> </li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a> </li>
            <li><a href="#"><i class="fa fa-youtube"></i></a> </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container-fluid bg-black-222 p-20">
      <div class="row text-center">
        <div class="col-md-12">
          <p class="font-11 m-0">Copyright &copy; <?php echo date("Y") ?> EMW. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>

<!-- crime report -->
<div class="modal fade" id="crimeReport" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
 aria-hidden="true" style="position: absolute;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Please report if you have seen crime!
        <button type="button" class="close close_report" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button></h5>
      </div>
      <div class="modal-body">
      <form role="form" method="post" id="uploadFormCrimeReport" >
          <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Your Name</label>
                  <input type="text" class="form-control" placeholder="Your Name" name="contact_name_crime" id="crime_name">
                  <div class="crime_name" style="color:red"></div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Your Phone N<sup><u>o</u></sup></label>
                  <input type="text" maxlength="10" class="form-control phone_valid" placeholder="09---" name="contact_phone_crime" id="crime_phone">
                  <div class="crime_phone" style="color:red"></div>
                </div>
              </div>
            </div>
            <!-- <div class="form-group">
            <label for="message-text" class="col-form-label">Email:</label>
            <input type="email" class="form-control" placeholder="Email" name="contact_email_crime" >
          </div> -->
            <div class="row">
            <div class="col-sm-6">
              <label for="recipient-name" class="col-form-label">Accuser Name</label>
              <input type="text" class="form-control" placeholder="Accuser Name" name="accuser_name" id="accuser_name">
              <div class="accuser_name" style="color:red"></div>
          </div>
            <div class="col-sm-6">
              <label for="recipient-name" class="col-form-label">Crime Type</label>
              <!-- <input type="text" class="form-control" placeholder="Crime Type" name="crime_type" id="crime_type"> -->
              <select name="crime_type" id="crime_type" class="form-control">
           <option value="">Select Crime Type</option>
           <?php foreach($crime_type as $row) {?>
           <option value="<?php echo $row->setting_id?>"><?php echo ucwords($row->setting_crime_name);?></option>
         <?php } ?>
              </select>
              <div class="crime_type" style="color:red"></div>
          </div>
          </div>
            <div class="row">
            <div class="col-sm-6">
              <label for="recipient-name" class="col-form-label">Region
                <i style="color:red" class="icon icon_question_alt2"></i></label>
               <select class="form-control" placeholder="City" name="city" id="city">
                <option value="">Select Region Or City</option>
                <?php foreach($location as $row) {?>
                <option value="<?php echo $row->setting_id;?>"><?php echo ucwords($row->setting_region_name);?></option>
              <?php } ?>

               </select>
              <div class="city" style="color:red"></div>
          </div>
            <div class="col-md-6">
              <label for="recipient-name" class="col-form-label">Location  <i style="color:red" class="icon icon_question_alt2"></i></label>
              <input type="text" class="form-control" placeholder="Location" name="subcity" id="subcity">
              <div class="subcity" style="color:red"></div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="recipient-name" class="col-form-label" style="margin-top: 25%; margin-left: 4%;" > Code <span class="icon_refresh" aria-hidden="true" onclick="reloadPin()"></span>
              </label>
              <span ><strong><i id="labelCode"><?php echo $list; ?></i></span></strong>
            </div>

          </div>
          <div class="col-md-9">
            <div class="form-group">
              <label></label>
              <input name="code" type="text" class="form-control" placeholder="Enter the code here" id="inputedCode" onkeyup="pincode()">
              <div class="code" style="color:red"></div>
            </div>
          </div>
          </div>

          <div class="form-group">
            <label for="message-text" class="col-form-label">Detail Crime Report:</label>
            <textarea class="form-control" id="crime_message" rows="5" placeholder="Message" name="report_crime"></textarea>
            <div class="crime_message" style="color:red"></div>
          </div>
          <div class="form-group" style="padding-left:200px">
            <label for="message-text" class="col-form-label">
              <img data-rotate="90" id="user_pro" src="<?php echo base_url('assets/default_logo.png');?>" style="min-width: auto; min-height: auto; max-width: 90%; max-height: 60px;">
            </label>
            <div class="image-upload" >
            <label for="add_user_photo"  style="cursor: pointer;">
            <sapn class ="icon-upload " style="border-radius:10px;border:1px solid;"> &nbsp;Accuser Photo&nbsp; </span></label>

            <input type="file"  id="add_user_photo" name="accuser_photo" accept="image/*"  onchange="addUserImage(this)"
            class="form-control" oninput="image(this.value)"  value="" />
            </div>
            <!-- <input type="file" name="admin_image" class="form-control" required> -->
          </div>
      </div>
      <div class="modal-footer">

        <button type="submit" class="btn btn-border" onclick="crimeReport()">Report <span class="click_report"></span></button>
      </div>
    </form>
    </div>
  </div>
</div>

  <!-- comment -->
<div class="modal fade" id="commentForm" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Your Comment</h5>
        <button type="button" class="close close_comment" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--  action="<?php echo base_url('criminal/saveComment');?>" -->
      <form role="form" method="post" id="uploadForm">
      <div class="modal-body">
          <div class="form-group">
            <label for="message-text" class="col-form-label">Email:</label>
            <input type="email" class="form-control" placeholder="Email" name="comment_email" id="message_email">
            <div class="response_email" style="color:red"></div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message_text" rows="5" placeholder="Message" name="comment_message"></textarea>
            <div class="response_message" style="color:red"></div>

          </div>
      </div>
      <div class="modal-footer">
     <button type="submit" class="btn btn-border" onclick="saveComment()">Send message<span class="checkAsFinishClicked"></span></button>
      </div>
    </form>
    </div>
  </div>
</div>

<div class="modal fade" id="Agreement" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel"><b>Warning</b> <i class="icon  icon_error-circle_alt"></i>
        <button type="button" class="close close_agreament_modal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button></h5>
      </div>

      <div class="modal-body">


        I understand that repeatedly providing tips with no investigative value will result in my tips not
        being considered.
       I understand that providing false information could subject me to fine, imprisonment.

      </div>
      <div class="modal-footer">
     <button type="button" class="btn btn-border" onclick="agree()">Agree</button>
     <button type="button" class="btn btn-border" onclick="disagree()">Disagree</button>
      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="view_image_modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close close_comment" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
      <img class="view_image" >
      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="success_response_modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title alert alert-success" id="ModalLabel" ><span id="response_text"></span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button></h5>
      </div>

    </div>
  </div>
</div>
</div>

<div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Your Comment</h5>
        <button type="button" class="close close_comment" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--  action="<?php echo base_url('criminal/saveComment');?>" -->
      <form role="form" method="post" id="uploadForm">
      <div class="modal-body">
          <div class="form-group">
            <label for="message-text" class="col-form-label">Email:</label>
            <input type="email" class="form-control" placeholder="Email" name="comment_email" id="message_email">
            <div class="response_email" style="color:red"></div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message_text" rows="5" placeholder="Message" name="comment_message"></textarea>
            <div class="response_message" style="color:red"></div>

          </div>
      </div>
      <div class="modal-footer">
     <button type="submit" class="btn btn-border" onclick="saveComment()">Send message<span class="checkAsFinishClicked"></span></button>
      </div>
    </form>
    </div>
  </div>
</div>

<script src="<?php echo site_url()?>assets/js/custom.js"></script>
<script type="text/javascript" src="<?php echo site_url()?>assets/js/chart.min.js"></script>
<script type="text/javascript" src="<?php echo site_url()?>assets/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="<?php echo site_url()?>assets/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo site_url()?>assets/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="<?php echo site_url()?>assets/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="<?php echo site_url()?>assets/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="<?php echo site_url()?>assets/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="<?php echo site_url()?>assets/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="<?php echo site_url()?>assets/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="<?php echo site_url()?>assets/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

<script type="text/javascript">
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
function filterByCrimeType(by_value,type){
  if(by_value){
  $('#load_fugitive').html('');
  if(type=='crime'){
    $('#filter_by_year').prop('selectedIndex', 0);
    $('#filter_by_name').val('');
  }
  if(type=='year'){
    $('#filter_by_crime').prop('selectedIndex', 0);
    $('#filter_by_name').val('');
  }
  if(type=='name'){
    $('#filter_by_crime').prop('selectedIndex', 0);
    $('#filter_by_year').prop('selectedIndex', 0);
  }
  loadFugitive(0,by_value,type);
  topMostWanted(0,by_value,type);
}
}
function filterDataByName(){
  var name=$('#filter_by_name').val();
  if(name){
    $('#filter_by_crime').prop('selectedIndex', 0);
    $('#filter_by_year').prop('selectedIndex', 0);
    // loadFugitive(0,name,'name');
    topMostWanted(0,name,'name');
  }
  else{
    $('#filter_by_name').css('border-color','red');
  }

}
    function reloadPin()
    {
      $(':input[type="submit"]').prop('disabled', true);
      $.ajax({
            type: 'post',
            url: '<?php echo site_url()?>/FrontController/generate_pin',
            data:{

            },
            success: function(data){
              $('#labelCode').html(data);
                console.log(data);
            }
        });
      console.log('reload');
    }
  </script>

<!-- <script src="<?php echo base_url()?>assets/js/developer.js"></script> -->
<script type="text/javascript">
  function pincode(){
    var generatedCode = document.getElementById('labelCode').innerHTML ;
    var inputCode = document.getElementById('inputedCode').value;
    if (generatedCode == inputCode) {
      $(':input[type="submit"]').prop('disabled', false);
    } else {
      $(':input[type="submit"]').prop('disabled', true);
    }
  }
</script>
<script type="text/javascript">
  function  aggrement() {
      $(':input[type="submit"]').prop('disabled', true);
      const SwalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: 'btn btn-success btn-md',
          cancelButton: 'btn btn-danger btn-md'
        },
        buttonsStyling: true
      })
      SwalWithBootstrapButtons.fire({
        title: '<strong> Warning <i class="icon icon_error-oct_alt"></i> </strong>',
        showClass: {
          popup: 'animated fadeInDown faster'
        },
        hideClass: {
          popup: 'animated fadeOutUp faster'
        },
        text: 'Do you agree with our terms and conditions ?',
        html: '<br> <small> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</small>',
        showCancelButton: true,
        confirmButtonText: 'Agree',
        cancelButtonText: 'Disagree',
        showLoaderOnConfirm: true,
        preConfirm: (login) => {
          return fetch(``)
            .then(response => {
              if (response.ok) {
                swal( $('#crimeReport').modal('show') );
              } else {
                swal("Cancelled", $('.close_agreament_modal').click());
              }

              return response.json()
            })
            .catch(error => {
              Swal.showValidationMessage(
                `Request failed: ${error}`
              )
            })
        },
        allowOutsideClick: () => !Swal.isLoading()
      })

    }

</script>

<script>
function disagree(){
  $('.close_agreament_modal').click();
}
function agree(){
    $('.close_agreament_modal').click();
  $('#crimeReport').modal('show');
}

$('.phone_valid').keypress(function(evt){
   var charCode = (evt.which) ? evt.which : event.keyCode;
  if ((charCode > 31 && (charCode < 46 || charCode > 57))){
     return false;
  }
  else if(46<=charCode && charCode<=57){
   return true;
  }
});
function validFugitiveReport() {
  var name=$('#reporter_name').val();
  var phone=$('#reporter_phone').val();
  var report=$('#detail_crime_reporter').val();
  var id=$('#fugitive_id').val();
  if(name && phone && report && id){
    return name+phone+report+id;
  }
  else{
    if(!name){
    $('.valid_name').text('Your Name is required!');
    }
    if(!phone){
    $('.valid_phone').text('Your Phone is required!');
    }
    if(!report){
    $('.valid_crime_report').text('Detail Report is required!');
    }
    return;
  }
}
function removeValidatinText() {
  $('.valid_name').text('');
  $('.valid_phone').text('');
  $('.valid_crime_report').text('');
  $('#reporter_name').val('');
  $('#reporter_phone').val('');
  $('#reporter_email').val('');
  $('#detail_crime_reporter').val('');
}
function reportFugitive(e){
var nm=0;
var valid=validFugitiveReport();
if(valid)
{
$("#report_fugitive").on('submit', function(e){
      e.preventDefault();
     if(nm==0) {
    $.ajax({
          type: 'POST',
          url: '<?php echo base_url('frontController/fugitiveReporter');?>',
          data: new FormData(this),
          contentType: false,
          cache: false,
          processData:false,
          timeout:30000,
        beforeSend: function(){
          $('.click_report_fugitive').html('<i class="fa fa-spinner fa-spin"></i>');
          },
success: function(data){
if(data=='200'){
  $('.click_report_fugitive').text('');
$('.close_report').click();
$('#response_text').html('Thank you for your report!');
removeValidatinText();
$('#success_response_modal').modal('show');
}
nm++;
}
});
}
});
}
else{
$("#report_fugitive").on('submit', function(e){
e.preventDefault();
});
}
}
</script>
<script>
function commentEmailValidation(comment_email)
{
  if(comment_email){
    return comment_email;
  }
  else{
    $('.response_email').text('Email is required!')
    return;
  }
}
function commentTextValidation(comment_message)
{
  if(comment_message){
    return comment_message;
  }
  else{
    $('.response_message').text('Message is required!')
    return;
  }
}
</script>

<script type="text/javascript">
  function saveComment(e){
  var nm=0;
  var message_email=commentEmailValidation($('#message_email').val());
  var message_text=commentTextValidation($('#message_text').val());
if(message_email && message_text)
{
$("#uploadForm").on('submit', function(e){
        e.preventDefault();
       if(nm==0) {
      $.ajax({
            type: 'POST',
            url: '<?php echo base_url('frontController/saveComment');?>',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            timeout:30000,
          beforeSend: function(){
            $('.checkAsFinishClicked').html('<i class="fa fa-spinner fa-spin"></i>');
            },
success: function(data){
if(data=='200'){
  $('#uploadForm')[0].reset();
    $('.checkAsFinishClicked').text('');
  $('.close_comment').click();
  $('#response_text').html('Thank you for your comment!');
  $('#success_response_modal').modal('show');
  }
nm++;
}
});
}
  });
  }
else{
  $("#uploadForm").on('submit', function(e){
  e.preventDefault();
});
}
  }
</script>
<script>
function validCrimeReport(){
  var name=$('#crime_name').val();
  var phone=$('#crime_phone').val();
  var message=$('#crime_message').val();
  var crime_type=$('#crime_type').val();
  var city=$('#city').val();
  var subcity=$('#subcity').val();
  if(name && phone && message && crime_type && city && subcity ){
    return name+phone+message;
  }
  else{
    if(!name){
      $('.crime_name').text('Name is required!');
      }
    if(!phone){
      $('.crime_phone').text('Phone is required!');
      }
    if(!message){
      $('.crime_message').text('Detail crime report is required!');
    }

    if(!crime_type){
      $('.crime_type').text('Crime Type is required!');
    }
    if(!city){
      $('.city').text('City is required!');
    }
    if(!subcity){
      $('.subcity').text('Subcity is required!');
    }
    return;
  }
}
function removeValidation(){
    $('.crime_name').text('');
    $('.crime_phone').text('');
    $('.crime_message').text('');
}
</script>
<script type="text/javascript">
  function crimeReport(e){
  var nm=0;
  var validate=validCrimeReport();
if(validate)
{
$("#uploadFormCrimeReport").on('submit', function(e){
        e.preventDefault();
       if(nm==0) {
      $.ajax({
            type: 'POST',
            url: '<?php echo base_url('frontController/crimeReport');?>',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            timeout:30000,
          beforeSend: function(){
            $('.click_report').html('<i class="fa fa-spinner fa-spin"></i>');
            },
success: function(data){
if(data=='200'){
  $('#uploadFormCrimeReport')[0].reset();
    $('.click_report').text('');
  $('.close_report').click();
  $('#response_text').html('Thank you for your report!');
  $('#success_response_modal').modal('show');
  removeValidation();
  }
nm++;
}
});
}
  });
  }
else{
  $("#uploadFormCrimeReport").on('submit', function(e){
  e.preventDefault();
});
}
  }
</script>
<script>
function validLogin(username,password){
  if(username && password ){
    return username+password;
  }
  else{
    if(!username){
      $('.username').text('User Name is required!');
      }
    if(!password){
      $('.password').text('Password is required!');
      }

    return;
  }
}
</script>
<script type="text/javascript">
  function login(e){
  var nm=0;
  var validate=validLogin($('#username').val(),$('#password').val());
if(validate)
{
$("#loginToAdmin").on('submit', function(e){
        e.preventDefault();
       if(nm==0) {
      $.ajax({
            type: 'POST',
            url: '<?php echo base_url('login/Login');?>',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            timeout:30000,
          beforeSend: function(){
            $('.click_login').html('<i class="fa fa-spinner fa-spin"></i>');
            },
success: function(data){
if(data=='200'){
window.location.href='<?php echo base_url('pages/admin');?>';
  }
  else{
    $('.error_response_login').text('Username or Password Is Wrong!');
    $('.click_login').html('');
    $('.username').text('');
    $('.password').text('');
  }
nm++;
}
});
}
  });
  }
else{
  $("#loginToAdmin").on('submit', function(e){
  e.preventDefault();
});
}
  }
</script>
<script>
function response(response){
  $('.response_success').html('<div class="alert alert-info alert-dismissable">'+
      '<button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>'+response+
      '</div>');
}
</script>
<script>
$(function(){
loadFugitive(0,'all','all');
topMostWanted(0,'all','all');
})

function addLoadingAnimation() {
  var load="";
  load+='<div class="preloader-dot-loading">';
  load+='<div class="cssload-loading"><i></i><i></i><i></i><i></i></div>';
  load+='</div>';
  return load;
  }
  function displayNoData() {
    var load="";
    load+='<div class="row">';
    load+='<div class="alert alert-danger alert-dismissable">';
    load+='<button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>';
    load+='No data is found!';
    load+='</div>';
    load+='</div>';
    return load;
  }
function loadFugitive(ofset,by_value,type)
{
  if(ofset!=0){
    var take_pagination_id=$('#take_id_pagination').val();
  $('#'+take_pagination_id).css('background-color','#fff');
  $('#'+ofset).css('background-color','#bf9e58');
  $('#take_id_pagination').val(ofset);
  }
  if(ofset!=1){
    $('#loading').html(addLoadingAnimation());
  var i=1;
  var result="";
$.ajax({
  type:'POST',
  url:'<?php echo base_url('frontController/getFugitive?page=');?>'+ofset+"&by_value="+by_value+"&type="+type,
  success:function(data)
  {
    var othe_result_list='';
    data=JSON.parse(data);
    if(data.length){
for(var take in data){
result+='<div class="col-xs-12 col-sm-6 col-md-3 mb-30">';
   result+='<div class="box-hover-effect effect2 bg-lightest-gray wow fadeInUp maxwidth400 p-10" data-wow-duration="1.5s" data-wow-offset="10" style="box-shadow: 0 5px 35px -16px #888888; height: 340px;">';
    if(data[take].criminal_reward){
    result+='<div class="" style="position: absolute; z-index: 1000; background-color: rgba(173, 6, 6, 0.6); width: 92%; text-align: center; color: #fff;">';
    result+='<h6 align="center" style="color: #fff;"><b> Reward </b></h6>';
  result+='</div>';
}
     result+='<div class="thumb"> <img class="img-responsive img-fullwidth" src="<?php echo base_url()?>'+data[take].criminal_image+'" alt="Image Invisible"  style="min-width: auto; min-height: auto; max-height: 292.3px!important; max-width: 92%;">';
      result+='<div class="overlay black">';
        result+='<div class="display-table">';
          result+='<div class="display-table-cell">';
            result+='<div class="overlay-details text-center">';
              result+='<h4 class="text-theme-colored mt-0">'+(data[take].criminal_name).toUpperCase()+'</h4>';
              result+='<p class="pl-20 pr-20">'+data[take].criminal_type+'</p>';
              result+='<a class="btn btn-gray btn-theme-colored btn-xs" href="<?php echo base_url('frontController/get_single_view?id=')?>'+data[take].crdoc_id+'">Read more</a>&nbsp;';
              result+='<a data-image='+data[take].criminal_image+'  class="open_image btn btn-gray btn-theme-colored btn-xs" href="javascript:;"><i class="fa fa-eye"></i></a>';
            result+='</div>';
          result+='</div>';
        result+='</div>';
      result+='</div>';
      result+='<div class="details" align="center" style="margin-top: 5%;">';
        result+='<h5>'+(data[take].criminal_name).toUpperCase()+'</h5>';
      result+='</div>';
    result+='</div>';
  result+='</div>';
result+='</div>';
}
$('#load_fugitive').html(result);
i++;
$('#loading').html('');
}
else{
  $('#loading').html('');
  $('#load_fugitive').html('');
}
$('.open_image').click(function(){
  $('.view_image').attr('src','<?php echo base_url();?>'+$(this).data('image'));
  $('#view_image_modal').modal('show');
})
}

})
}
else{
  $('#loading').html('');
}
}
function topMostWanted(ofset,by_value,type)
{
  if(ofset!=0){
    var take_pagination_id=$('#take_id_pagination').val();
  $('#'+take_pagination_id).css('background-color','#fff');
  $('#'+ofset).css('background-color','#bf9e58');
  $('#take_id_pagination').val(ofset);
  }
  if(ofset!=1){
    $('#loading').html(addLoadingAnimation());
  var i=1;
  var result="";
$.ajax({
  type:'POST',
  url:'<?php echo base_url('frontController/getFugitive?page=');?>'+ofset+"&by_value="+by_value+"&type="+type,
  success:function(data)
  {
    var othe_result_list='';
    data=JSON.parse(data);
    if(data.length){
for(var take in data){
if(data[take].criminal_reward){
result+='<div class="col-xs-12 col-sm-6 col-md-3 mb-30">';
   result+='<div class="box-hover-effect effect2 bg-lightest-gray wow fadeInUp maxwidth400 p-10" data-wow-duration="1.5s" data-wow-offset="10" style="box-shadow: 0 5px 35px -16px #888888; height: 340px;">';
    if(data[take].criminal_reward){
    result+='<div class="" style="position: absolute; z-index: 1000; background-color: rgba(173, 6, 6, 0.6); width: 92%; text-align: center; color: #fff;">';
    result+='<h6 align="center" style="color: #fff;"><b> Reward </b></h6>';
  result+='</div>';
}
     result+='<div class="thumb"> <img class="img-responsive img-fullwidth" src="<?php echo base_url()?>'+data[take].criminal_image+'" alt="Image Invisible"  style="min-width: auto; min-height: auto; max-height: 292.3px!important; max-width: 92%;">';
      result+='<div class="overlay black">';
        result+='<div class="display-table">';
          result+='<div class="display-table-cell">';
            result+='<div class="overlay-details text-center">';
              result+='<h4 class="text-theme-colored mt-0">'+(data[take].criminal_name).toUpperCase()+'</h4>';
              result+='<p class="pl-20 pr-20">'+data[take].criminal_type+'</p>';
              result+='<a class="btn btn-gray btn-theme-colored btn-xs" href="<?php echo base_url('frontController/get_single_view?id=')?>'+data[take].crdoc_id+'">Read more</a>&nbsp;';
              result+='<a data-image='+data[take].criminal_image+'  class="open_image btn btn-gray btn-theme-colored btn-xs" href="javascript:;"><i class="fa fa-eye"></i></a>';
            result+='</div>';
          result+='</div>';
        result+='</div>';
      result+='</div>';
      result+='<div class="details" align="center" style="margin-top: 5%;">';
        result+='<h5>'+(data[take].criminal_name).toUpperCase()+'</h5>';
      result+='</div>';
    result+='</div>';
  result+='</div>';
result+='</div>';
}
// else{
//   $('#loading').html(displayNoData());
// }
}
$('#load_fugitive_top_most').html(result);
i++;
$('#loading').html('');
}
else{
  // $('#load_fugitive').html(displayNoData());
  $('#loading').html('');
  $('#load_fugitive').html('');

}
$('.open_image').click(function(){
  $('.view_image').attr('src','<?php echo base_url();?>'+$(this).data('image'));
  $('#view_image_modal').modal('show');
})
  }

})
}
else{
  $('#loading').html('');
}
}

</script>

<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>

</body>
</html>
