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
        <a href="javascript:;" class="icon arrow_back" data-original-title="Replay to email"
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
</div>
<script>
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
//
// function addLoadingAnimation() {
//   var load="";
//   load+='<div class="preloader-dot-loading">';
//   load+='<div class="cssload-loading"><i></i><i></i><i></i><i></i></div>';
//   load+='</div>';
//   return load;
//   }
//   function displayNoData() {
//     var load="";
//     load+='<div class="row">';
//     load+='<div class="alert alert-danger alert-dismissable">';
//     load+='<button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>';
//     load+='No data is found!';
//     load+='</div>';
//     load+='</div>';
//     return load;
//   }
// var ofset=2;
// $(window).scroll(function(){
//   // alert($(document).height() - $(window).height());
//       if(Math.round($(window).scrollTop()) == $(document).height() - $(window).height())
//      {
//        var result='';
//      $('#loading').html(addLoadingAnimation());
//        $.ajax({
//          url:'<?php// echo base_url('pages/getSomeComment?ofset=');?>'+ofset,
//          success:function(data){
//
//         data=JSON.parse(data);
//
//         if(data){
//         for(var respo in data){
//           result+='<div class="well blog clo-md-6" >';
//           result+='<div class="blog-pargraph">';
//           result+='<h5>Email: <label style="color: #000;">'+data[respo].comment_email+'</label></h5>';
//           result+='<label style="color: #000;">Message:</label>';
//           result+='<p class="add_more_crime_report" data-report="'+data[respo].comment_message+'">'+(data[respo].comment_message).substr(0,50)+'<a href="javascript:;" style="color:green">More</a></p>';
//           result+='</div>';
//           result+='<div align="right">';
//           result+='<small style="color:#A99FFB">Commented Date: '+data[respo].comment_date+'</small> <i class="fa fa-eye"></i> <a href="javascript:;" class="icon arrow_back"></a>';
//          result+='</div></div>';
//         }
//
//         $('.add_more_crime_report').click(function(){
//         $(this).html($(this).data('report'));
//         })
//        }
//        $('#load_data').append(result);
//        $('#loading').html(displayNoData());
//        ofset++;
//          }
//
//        })
//       }
//    });

</script>
