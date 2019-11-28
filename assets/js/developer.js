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
          url: '<?php echo base_url('criminal/fugitiveReporter');?>',
          data: new FormData(this),
          contentType: false,
          cache: false,
          processData:false,
          timeout:30000,
        beforeSend: function(){
          $('.click_report_fugitive').html('<img src = "<?php echo base_url('assets/spinner.gif'); ?>"  height="25px"/>');
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
