
<<<<<<< HEAD
<div class="col-md-9" style="margin-top:-45px">
<div class="row">
<div class="col-md-5">
<h4>
  <?php echo ($this->session->userdata('lang')=='amh'?'ሁሉም ወንጀለኞችና ተጠርጣሪዎች':"All Criminal And Suspects");?>
  <input type="hidden" id="active_paggination_color" >
  <input type="hidden" id="active_paggination_number" value="1"></h4>
</div>


</div>

<ul id="myTab2" class="nav nav-pills boot-tabs">
<li class="active" id="posted"><a href="#home2" data-toggle="tab">  <?php echo ($this->session->userdata('lang')=='amh'?'ተፈላጊ ወንጀለኞችና ተጠርጣሪዎች':"Wanted Criminal And Suspects");?>
</a></li>
<li id="arrested"><a href="#profile2" data-toggle="tab" >
<?php echo ($this->session->userdata('lang')=='amh'?'በቁጥጥር ስር የዋሉና  የሚፈለጉ':"Arrested Criminal And Suspects");?></a></li>

<li style="float:right">
  <a  href="<?php echo base_url('add-new-wanted');?>">
    <button class="btn btn-xs main-color-bg">
    <i class="fa fa-plus fa-lg"></i>
   
    <?php echo ($this->session->userdata('lang')=='amh'?'አዲስ ወንጀለኞችና ተጠርጣሪዎች':"New Criminal And Suspects");?>
  </button>
  </a>
</li>

</ul>
<div id="myTabContent2" class="tab-content">
<div class="tab-pane fade in active" id="home2">
<div class="row">
<table class="table table-hover table-striped">
  <div class="form-group" style="float:right">
    <div class="input-group">
    <input type="text" id="automplete-6" style="height:31px"
    value="<?php if(isset($_GET['suspects_name']) and ($_GET['which']=='posted' or $_GET['which']=='both' or $_GET['which']=='')){echo $_GET['suspects_name'];}?>"

    name="suspects_name" class="form-control automplete-6" placeholder="<?php echo ($this->session->userdata('lang')=='amh'?'ወንጀለኛንና ተጠርጣሪ ስም':"criminal and suspects name");?>">
    <span class="input-group-addon" style="cursor:pointer" onclick="reloadPage()"><?php echo ($this->session->userdata('lang')=='amh'?'ፈልግ':"Search");?>
</span>
  </div>
  </div>
<thead>
  <tr>
    <td>#</td>
    <td><?php echo ($this->session->userdata('lang')=='amh'?'ሙሉ ስም':"Name");?></td>
    <td><?php echo ($this->session->userdata('lang')=='amh'?'ፆታ':"Gender");?></td>
    <td><?php echo ($this->session->userdata('lang')=='amh'?'የዕድሜ ክልል':"Age Range");?></td>
    <td><?php echo ($this->session->userdata('lang')=='amh'?'ቁመት':"Height");?></td>
    <td><?php echo ($this->session->userdata('lang')=='amh'?'ዜግነት':"Nationality");?></td>
    <td><?php echo ($this->session->userdata('lang')=='amh'?'የጉዳዩ ከተማ':"Case State");?></td>
    <td><?php echo ($this->session->userdata('lang')=='amh'?'የወንጀል አይነት':"Crime Category");?></td>
    <td class="text-center"><?php echo ($this->session->userdata('lang')=='amh'?'ድርጊት':"Action");?></td>
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
      <a class="btn btn-info btn-xs " title="<?php echo ($this->session->userdata('lang')=='amh'?'አስይ/አስተካክል':"View Or Edit");?>" href="<?php echo base_url('pages/edit_wanted_list/'.$row->crdoc_id);?>">
        <i class="fa fa-edit fa-sm"></i></a>
   <button class="btn btn-danger btn-xs delete"  data-id="<?php echo $row->crdoc_id;?>" data-name="<?php echo $row->criminal_name;?>" data-status="0">
     <?php echo ($this->session->userdata('lang')=='amh'?'በቁጥጥር ስር':"Arrest");?></button>
      <a class="btn btn-info btn-xs" href="<?php echo base_url('pages/all_reported?page=1'.'&suspects_id='.$row->crdoc_id.'&suspects_name='.$row->criminal_name);?>"><?php echo ($this->session->userdata('lang')=='amh'?'ረፖርት':"View Report");?></a>
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
  <div class="form-group" style="float:right">
    <div class="input-group">
    <input type="text" id="automplete-6" style="height:31px"
    value="<?php if(isset($_GET['suspects_name']) and $_GET['which']=='arrested'){echo $_GET['suspects_name'];}?>"

    name="suspects_name" class="form-control automplete-6" placeholder="<?php echo ($this->session->userdata('lang')=='amh'?'ወንጀለኛንና ተጠርጣሪ ስም':"criminal and suspects name");?>">
    <span class="input-group-addon" style="cursor:pointer" onclick="reloadPage()"><?php echo ($this->session->userdata('lang')=='amh'?'ፈልግ':"Search");?>
  </div>
  </div>
<thead>

  <tr>
  <td>#</td>
    <td><?php echo ($this->session->userdata('lang')=='amh'?'ሙሉ ስም':"Name");?></td>
    <td><?php echo ($this->session->userdata('lang')=='amh'?'ፆታ':"Gender");?></td>
    <td><?php echo ($this->session->userdata('lang')=='amh'?'የዕድሜ ክልል':"Age Range");?></td>
    <td><?php echo ($this->session->userdata('lang')=='amh'?'ቁመት':"Height");?></td>
    <td><?php echo ($this->session->userdata('lang')=='amh'?'ዜግነት':"Nationality");?></td>
    <td><?php echo ($this->session->userdata('lang')=='amh'?'የጉዳዩ ከተማ':"Case State");?></td>
    <td><?php echo ($this->session->userdata('lang')=='amh'?'የወንጀል አይነት':"Crime Category");?></td>
    <td class="text-center"><?php echo ($this->session->userdata('lang')=='amh'?'ድርጊት':"Action");?></td>
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
      <a class="btn btn-info btn-xs " title="<?php echo ($this->session->userdata('lang')=='amh'?'አስይ/አስተካክል':"View Or Edit");?>" href="<?php echo base_url('pages/edit_wanted_list/'.$row->crdoc_id);?>">
        <i class="fa fa-edit fa-sm"></i></a>
      <button class="btn btn-success btn-xs delete" data-id="<?php echo $row->crdoc_id;?>" data-name="<?php echo $row->criminal_name;?>" data-status="1">
        <?php echo ($this->session->userdata('lang')=='amh'?'ጥቆማ':"Repost");?></button>
   <a class="btn btn-info btn-xs" href="<?php echo base_url('pages/all_reported?page=1'.'&suspects_id='.$row->crdoc_id.'&suspects_name='.$row->criminal_name);?>"><?php echo ($this->session->userdata('lang')=='amh'?'ረፖርት':"View Report");?></a>
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


=======
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


>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60

<div class="modal fade" id="deleteNo" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm-2" role="document">
<div class="modal-content">
<div class="modal-header">
<<<<<<< HEAD
<h5  class="modal-title" id="exampleModalLabel"><?php echo ($this->session->userdata('lang')=='amh'?'በመቀየሩ እርግጠኛ ነህ':"Are you sure to change");?> <i class="name" style="color:green"></i>?
=======
<h5  class="modal-title" id="exampleModalLabel">Are you sure to change <i class="name" style="color:green"></i>?
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button></h5>
</div>
<div class="modal-footer" >
<<<<<<< HEAD
<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:rgba(252, 0, 0, 252) !important" ><?php echo ($this->session->userdata('lang')=='amh'?'አይ':"No");?></button>
<button type="button" class="close click_yes_change"  aria-label="Close" style="color:green;">
  &nbsp; <?php echo ($this->session->userdata('lang')=='amh'?'አዎ':"Yes");?>|</button>
=======
<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:rgba(252, 0, 0, 252) !important" >No</button>
<button type="button" class="close click_yes_change"  aria-label="Close" style="color:green;">
  &nbsp; Yes|</button>
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
</div>
</div>
</div>
</div>
<<<<<<< HEAD
<link href = "<?php echo base_url()?>/autocomplete/theme.css" rel = "stylesheet">
<script src = "<?php echo base_url()?>/autocomplete/jquery-ui.js"></script>
<script>
function reloadPage(){
  if($("#automplete-6" ).val()){
window.location.reload(false);
}
else{
$("#automplete-6" ).css('border-color','red');
}
}
  $(function() {
     $( ".automplete-6" ).autocomplete({
        minLength: 2,
        source: '<?php echo base_url('pages/takeSuspectsName');?>',
        select: function( event, ui ) {
          var which=  $('#active_paggination_color').val();
           $( "#automplete-6" ).val(ui.item.label);
           window.location.href="<?php echo base_url('all-wanted?page='.$_GET['page']);?>"+'&which='+which+
           '&suspects_id='+ui.item.id+'&suspects_name='+ui.item.label;
          // alert(ui.item.id);
           return false;
        }
     })
$( ".automplete-6" ).autocomplete("option", "position",{ my : "right+1 top+33", at: "right top" })
  });
</script>
<script>
$(function(){
var ofset='<?php echo $_GET['page'];?>';

$('#'+ofset).css('background-color','#bf9e58');
})
</script>
=======
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
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
