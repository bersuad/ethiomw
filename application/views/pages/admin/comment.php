<div class="col-md-9" style="margin-top:-45px">
    <div class="row">
        <div class="col-md-9">
            <h4>Users Comment</h4>
        </div>
    </div>
    <?php foreach($comment as $row) {?>
        <div class="well blog clo-md-12" >
       <h5>Email: <label style="color: #000;"><?php echo $row->comment_email;?></label></h5>
        <label style="color: #000;">Message:</label>
        <p class="add_more_crime_report" data-report="<?php echo $row->comment_message;?>">
          <?php echo substr($row->comment_message,0,50);?>
          <?php if(strlen($row->comment_message)>50) {?>
          <a href="javascript:;" style="color:green">More</a>
        <?php } ?>
         </p>
        <div align="right">
        <small style="color:#A99FFB"><?php echo  'Commented Date: '.$row->comment_date;?></small>
        <?php if($row->status=='0') {?>
          <a href="javascript:;" class="to_seen seen<?php echo $row->crdoc_id;?>" data-id="<?php echo $row->crdoc_id;?>">
            <i class="icon icon_lock_alt" style="color:green" title="Unseen"></i></a>
      <?php } else {?>
      <i class="fa fa-eye" title="Seen"></i>
      <?php } ?>
        <a href="javascript:;" data-email="<?php echo $row->comment_email;?>" data-oldcomment="<?php echo $row->comment_message;?>" class="icon arrow_back replay_by_email" data-original-title="Replay to email"
        data-toggle="tootltip" data-placement="bottom" title="Reply by email"></a>
       </div></div>
    <?php } ?>
  <div align="left">
  <nav>
  <ul class="pagination theme-colored">
  <li>
    <a href="#" aria-label="Previous">
      <span aria-hidden="true">&laquo;</span>
    </a>
  </li>
  <?php for($i=1;$i<=$pagination;$i++) {?>
    <?php if($i==1) {?>
  <li  class="get_to_click">
    <a id="<?php echo $i;?>"  href="<?php echo base_url('comment?ofset='.$i);?>">
      <?php echo $i;?></a></li>
  <?php } else {?>
  <li  class="get_to_click">
    <a id="<?php echo $i;?>" href="<?php echo base_url('comment?ofset='.$i);?>"><?php echo $i;?></a></li>
  <?php } } ?>
  <li>
    <a href="#" aria-label="Next">
      <span aria-hidden="true">&raquo;</span>
    </a>
  </li>
  </ul>
  </nav>
  </div>
  <!-- <div id="load_data"></div>
  <div class="col-md-12" id="loading"></div> -->
  <div class="modal fade" id="replay_by_email" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="ModalLabel">Replay Comment To Email, <u class="take_email" style="color: #bf9e58"></u>
            <button type="button" class="close close_model_adduser" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button></h5>
          </div>
          <form role="form" method="post" id="submit_add_user" >
          <div class="modal-body">
             <div class="form-group">
              <input type="hidden" name="to_email" id="to_email">
                <label for="message-text" class="col-form-label">Somebody Comment:</label>
               <textarea name="somebody_comment" id="somebody_comment" class="form-control" readonly="readonly"></textarea>
                <div style="color:red" class="somebody_comment"></div>
              </div>
          
              <div class="form-group">
                <label for="message-text" class="col-form-label">Replay Comment:</label>
                <textarea name="replay_comment" id="replay_comment" class="form-control" required="required" pattern=".{50,}" title="Must more than 50 characters"></textarea>
                <div style="color:red" class="replay_comment"></div>
              </div>
             
              <div class="error_response_add_user" style="color:red"></div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-border" onclick="addUser()">Replay<span class="click_add"></span></button>
          </div>
        </form>
        </div>
      </div>
    </div>
</div>
<script>
  $('.replay_by_email').click(function(){
    $('#somebody_comment').html($(this).data('oldcomment'));
    $('.take_email').html($(this).data('email'));
    $('#to_email').val($(this).data('email'));
    $('#replay_by_email').modal('show');
  })
$(function(){
var ofset='<?php echo $_GET['ofset'];?>';
$('#'+ofset).css('background-color','#bf9e58');
})
$('.to_seen').click(function(){
  var crdoc_id=$(this).data('id');
  $(this).html('<img src = "<?php echo base_url('assets/spinner.gif'); ?>"  height="25px"/>');
  $.ajax({
    url:'<?php echo base_url('criminal/changeStatusComment?crdoc_id=');?>'+crdoc_id,
    success:function(response)
    {
      if(response=='200'){
        $('.seen'+crdoc_id).html('<i class="fa fa-eye" title="Seen"></i>');
      }
      else{
      $('.seen'+crdoc_id).html('<i class="icon icon_lock" title="Unseen"></i>');
      }
    }
  })
})
$('.add_more_crime_report').click(function(){
$(this).html($(this).data('report'));
})


</script>
