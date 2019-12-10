<<<<<<< HEAD
<div class="col-md-9" style="margin-top:-45px">
=======
<div class="col-md-9">
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
	<?php if($this->session->userdata('success')) {?>
	<div class="col-md-12">
	<div class="alert alert-info alert-dismissable">
		<button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
	<?php echo $this->session->userdata('success');?>
	</div>
	</div>
	<?php $this->session->unset_userdata('success'); } ?>
	<?php if($this->session->userdata('error')) {?>
	<div class="col-md-12">
	<div class="alert alert-danger alert-dismissable">
		<button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
		<?php echo $this->session->userdata('error');?>
	</div>
	</div>
	<?php $this->session->unset_userdata('error'); } ?>
<div class="row">
<div class="col-md-4">
<h4>All Crime Category List<input type="hidden" id="active_paggination_color" ><input type="hidden" id="active_paggination_number" value="1"></h4>
</div>

</div>

<ul id="myTab2" class="nav nav-pills boot-tabs">
<li class="active" id="posted"><a href="#active" data-toggle="tab">Active Category</a></li>
<li id="arrested"><a href="#suspended" data-toggle="tab" >Suspended Category</a></li>
<li style="float:right"><button data-toggle="modal" data-target="#addNewCategory" class="btn btn-xs main-color-bg">
	<i class="fa fa-plus fa-lg"></i> Add Crime Category</button>
</li>

</ul>
<div class="row">
	<div class="col-md-12">
		<div id="myTabContent2" class="tab-content">
			<div class="tab-pane fade in active" id="active">
				<table class="table table-responsive">
						<thead>
							<th>Crime Category</th>
							<th>Crime Description</th>
							<th>Registered Date</th>
							<th>
							Action
							</th>
						</thead>
						<tbody>
							<?php foreach($crime_type_active as $row) {?>
							<tr id="<?php echo $row->setting_id;?>">
							<td><?php echo $row->setting_crime_name;?></td>
							<td><?php echo $row->setting_crime_description;?></td>
							<td><?php echo date('d/m/Y',strtotime($row->setting_registered_date));?></td>
							 <td>
								<button class="btn btn-info btn-xs suspend_reactivate" title="suspend"
								data-status="0" data-id="<?php echo $row->setting_id;?>">
								<i class="fa fa-minus "> </i></button>
<<<<<<< HEAD
								<button class="btn btn-info btn-xs edit" title="Edit"
								 data-id="<?php echo $row->setting_id;?>"
								 data-city="<?php echo $row->setting_crime_name;?>"
								 data-name="<?php echo $row->setting_crime_description?>">
							 <i class="icon icon_pencil "> </i></button>
=======
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
							</td>
						</tr>
					<?php } ?>
						</tbody>
				</table>
			</div>
			<div class="tab-pane fade " id="suspended">
				<table class="table table-responsive">
						<thead>
							<th>Crime Category</th>
							<th>Crime Description</th>
							<th>Registered Date</th>
							<th>
							Action
							</th>
						</thead>
						<tbody>
							<?php foreach($crime_type_suspend as $row) {?>
							<tr id="<?php echo $row->setting_id;?>">
							<td><?php echo $row->setting_crime_name;?></td>
							<td><?php echo $row->setting_crime_description;?></td>
							<td><?php echo date('d/m/Y',strtotime($row->setting_registered_date));?></td>
							 <td>
								<button class="btn btn-info btn-xs suspend_reactivate" title="Reactivate"
								data-status="1" data-id="<?php echo $row->setting_id;?>">
								 <i class="icon icon_refresh "> </i></button>
<<<<<<< HEAD
								 <button class="btn btn-info btn-xs edit" title="Edit"
								 data-id="<?php echo $row->setting_id;?>"
								 data-city="<?php echo $row->setting_crime_name;?>"
								 data-name="<?php echo $row->setting_crime_description?>">
							 <i class="icon icon_pencil "> </i></button>
=======
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
							</td>
						</tr>
					<?php } ?>
						</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


	</div>
</div>


<div class="modal fade" id="addNewCategory" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">New Crime Category
        <button type="button" class="close close_comment" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button></h5>
      </div>
      <!--  action="<?php echo base_url('criminal/saveComment');?>" -->
      <form role="form" method="post" action="<?php echo base_url('setting/registerCrimeType');?>">
      <div class="modal-body">
          <div class="form-group">
            <label for="message-text" class="col-form-label">Name: </label>
            <input type="text" class="form-control" placeholder="Add category here"
						name="setting_crime_name" required>
            <div class="response_email" style="color:red"></div>
            <label for="message-text" class="col-form-label">Description: </label>
            <textarea class="form-control" rows="5" placeholder="Crime Description" name="setting_crime_description"></textarea>
          </div>
      </div>
      <div class="modal-footer">
     <button type="submit" class="btn btn-border" onclick="saveComment()"><span class="fa fa-plus"></span> Add</button>
      </div>
    </form>
    </div>
  </div>
</div>
<<<<<<< HEAD
<div class="modal fade" id="editCrimeCategory" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Crime Category: <i class="crime_type"></i>
        <button type="button" class="close close_comment" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button></h5>
      </div>
      <!--  action="<?php echo base_url('criminal/saveComment');?>" -->
      <form role="form" method="post" action="<?php echo base_url('setting/udpateCrimeType');?>">
      <div class="modal-body">
          <div class="form-group">
            <label for="message-text" class="col-form-label">Name: </label>
						<input type="hidden" name="setting_id" id="setting_id">
            <input type="text" class="form-control" placeholder="Add category here"
						name="setting_crime_name" required id="setting_crime_name">
            <div class="response_email" style="color:red"></div>
            <label for="message-text" class="col-form-label">Description: </label>
            <textarea class="form-control"  id="setting_crime_description" rows="5" placeholder="Crime Description" name="setting_crime_description"></textarea>
          </div>
      </div>
      <div class="modal-footer">
     <button type="submit" class="btn btn-border" onclick="saveComment()"><span class="icon icon_pencil"></span> Edit</button>
      </div>
    </form>
    </div>
  </div>
</div>
<script>
$('.edit').click(function(){
	$('#setting_crime_name').val($(this).data('city'));
	$('.crime_type').text($(this).data('city'));
	$('#setting_id').val($(this).data('id'));
	$('#setting_crime_description').text($(this).data('name'));
	$('#editCrimeCategory').modal('show');
})
=======
<script>
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
$('.suspend_reactivate').click(function(){
	var id=$(this).data('id');
	var status=$(this).data('status');
	// alert(status);
$.ajax({
	url:'<?php echo base_url('setting/changeStatusCrimeType?id=');?>'+id+'&status='+status,
	success:function(response){
		if(response=='200'){
			$('#'+id).remove();
		}

	}
})
})
</script>
