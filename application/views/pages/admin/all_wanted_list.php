
<div class="col-md-9">
<div class="row">
<div class="col-md-9">
<h4>All Posted Criminal And Suspects<input type="hidden" id="active_paggination_color" ><input type="hidden" id="active_paggination_number" value="1"></h4>
</div>
<div class="col-md-3" align="right">
<a href="<?php echo base_url()?>add-new-wanted">
<button class="btn btn-xs main-color-bg"><i class="fa fa-plus fa-lg"></i> New Criminal And Suspects</button>
</a>
</div>
</div>

<ul id="myTab2" class="nav nav-pills boot-tabs">
<li class="active" id="posted"><a href="#home2" data-toggle="tab">Posted Criminal And Suspects</a></li>
<li id="arrested"><a href="#profile2" data-toggle="tab" >Arrested  Criminal And Suspects</a></li>

</ul>
<div id="myTabContent2" class="tab-content">
<div class="tab-pane fade in active" id="home2">
<div class="row">
<table class="table table-hover table-striped">
<thead>
  <tr>
    <td>N<sup><u>o</u></sup></td>
    <td>Name</td>
    <td>Gender</td>
    <td>Age Average</td>
    <td>Height</td>
    <td>Nationality</td>
    <td>Case State</td>
    <td>Crime Type</td>
    <td>Action</td>
  </tr>
</thead>
<?php $i=1; foreach($criminal_posted as $row) {?>
<tbody style="border:none;">
  <tr id="<?php echo $row->crdoc_id?>">
    <td><?php echo $i;?></td>
    <td><?php echo ucwords($row->criminal_name);?></td>
    <td><?php echo $row->criminal_gender;?></td>
    <td><?php echo $row->criminal_birthdate;?></td>
    <td><?php echo $row->criminal_height;?></td>
    <td><?php echo ucwords($row->criminal_nationality);?></td>
    <td><?php echo ucwords($row->criminal_state_ofcase);?></td>
    <td><?php echo ucwords($row->criminal_type);?></td>

    <td>
      <a class="btn btn-info btn-xs " title="View Or Edit" href="<?php echo base_url('pages/edit_wanted_list/'.$row->crdoc_id);?>">
        <i class="fa fa-edit fa-sm"></i></a>
   <button class="btn btn-danger btn-xs delete"  data-id="<?php echo $row->crdoc_id;?>" data-name="<?php echo $row->criminal_name;?>" data-status="0">
     Arrest</button>
    </td>
  </tr>
 </tbody>
<?php $i++; } ?>
</table>
</div>
<div align="left">
<nav>
<ul class="pagination theme-colored">
<li>
  <a href="#" aria-label="Previous">
    <span aria-hidden="true">&laquo;</span>
  </a>
</li>
<?php for($i=1;$i<=$pagination['posted_count'];$i++) {?>
  <?php if($i==1) {?>
<li  class="get_to_click"><a id="<?php echo 'posted'.$i;?>" style="background-color:#bf9e58" href="<?php echo base_url('all-wanted?page='.$i.'&which=posted');?>"><?php echo $i;?></a></li>
<?php } else {?>
<li  class="get_to_click"><a id="<?php echo 'posted'.$i;?>" href="<?php echo base_url('all-wanted?page='.$i.'&which=posted');?>"><?php echo $i;?></a></li>
<?php } } ?>
<li>
  <a href="#" aria-label="Next">
    <span aria-hidden="true">&raquo;</span>
  </a>
</li>
</ul>
</nav>
</div>
</div>
<div class="tab-pane fade" id="profile2">
<div class="row">
<table class="table table-hover table-striped">
<thead>
  <tr>
    <td>N<sup><u>o</u></sup></td>
    <td>Name</td>
    <td>Gender</td>
    <td>DOB</td>
    <td>Height</td>
    <td>Nationality</td>
    <td>Case State</td>
    <td>Crime Type</td>
    <td>Action</td>
  </tr>
</thead>
<?php $y=1; foreach($criminal_arrested as $row) {?>
<tbody style="border:none;">
  <tr id="<?php echo $row->crdoc_id?>">
    <td><?php echo $y;?></td>
    <td><?php echo ucwords($row->criminal_name);?></td>
    <td><?php echo $row->criminal_gender;?></td>
    <td><?php echo $row->criminal_birthdate;?></td>
    <td><?php echo $row->criminal_height;?></td>
    <td><?php echo ucwords($row->criminal_nationality);?></td>
    <td><?php echo ucwords($row->criminal_state_ofcase);?></td>
    <td><?php echo ucwords($row->criminal_type);?></td>

    <td>
      <a class="btn btn-info btn-xs" href="<?php echo base_url('pages/edit_wanted_list/'.$row->crdoc_id);?>"><i class="fa fa-edit fa-sm"></i></a>
      <button class="btn btn-success btn-xs delete" data-id="<?php echo $row->crdoc_id;?>" data-name="<?php echo $row->criminal_name;?>" data-status="1">
        Repost</button>
    </td>
  </tr>
 </tbody>
<?php $y++; } ?>
</table>
</div>
<div align="left">
<nav>
<ul class="pagination theme-colored">
<li>
  <a href="#" aria-label="Previous">
    <span aria-hidden="true">&laquo;</span>
  </a>
</li>
<?php for($i=1;$i<=$pagination['arrested_count'];$i++) {?>
  <?php if($i==1) {?>
<li  class="get_to_click"><a id="<?php echo 'arrested'.$i;?>" style="background-color:#bf9e58" href="<?php echo base_url('all-wanted?page='.$i.'&which=arrested');?>"><?php echo $i;?></a></li>
<?php } else {?>
<li  class="get_to_click"><a id="<?php echo 'arrested'.$i;?>" href="<?php echo base_url('all-wanted?page='.$i.'&which=arrested');?>"><?php echo $i;?></a></li>
<?php } } ?>
<li>
  <a href="#" aria-label="Next">
    <span aria-hidden="true">&raquo;</span>
  </a>
</li>
</ul>
</nav>
</div>
</div>

</div>
</div>
</div>
</div>



<div class="modal fade" id="deleteNo" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm-2" role="document">
<div class="modal-content">
<div class="modal-header">
<h5  class="modal-title" id="exampleModalLabel">Are you sure to change <i class="name" style="color:green"></i>?
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button></h5>
</div>
<div class="modal-footer" >
<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:rgba(252, 0, 0, 252) !important" >No</button>
<button type="button" class="close click_yes_change"  aria-label="Close" style="color:green;">
  &nbsp; Yes|</button>
</div>
</div>
</div>
</div>
<script>
$('#posted').click(function(){
  $('#active_paggination_color').val('posted');
})
$('#arrested').click(function(){
  $('#active_paggination_color').val('arrested');
})

$('.delete').click(function(){
  var status=$(this).data('status');
  var crdoc_id=$(this).data('id');
  $('.name').text(($(this).data('name')).toUpperCase());
  $('#deleteNo').modal('show');
  $('.click_yes_change').click(function(){
    $.ajax({
     url:'<?php echo base_url('criminal/changeStatusCriminal?crdoc_id=');?>'+crdoc_id+'&status='+status,
      success:function(response){
        if(response=='200'){
          $('#'+crdoc_id).remove();
        $('#deleteNo').modal('hide');
        }
      }
    })
  })

})
$(function(){
var which='<?php echo $_GET['which'];?>';
var page='<?php echo $_GET['page'];?>';
$('#active_paggination_color').val(page);
if(which=='posted'){
$('#posted').addClass('active');
$('#home2').addClass('in active');
$('#arrested').removeClass('active');
$('#profile2').removeClass(' in active');
$('#active_paggination_color').val('posted');
$('#posted1').css('background-color','#fff');
$('#posted'+page).css('background-color','#bf9e58');
}
else if(which=='arrested'){
$('#posted').removeClass('active');
$('#home2').removeClass('in active');
$('#arrested').addClass('active');
$('#profile2').addClass(' in active');
$('#active_paggination_color').val('arrested');
$('#arrested1').css('background-color','#fff');
$('#arrested'+page).css('background-color','#bf9e58');

}
else{
$('#posted').addClass('active');
$('#home2').addClass('in active');
$('#arrested').removeClass('active');
$('#profile2').removeClass(' in active');
$('#active_paggination_color').val('posted');
$('#posted1').css('background-color','#bf9e58');
$('#posted'+page).css('background-color','#bf9e58');

}
})
</script>
