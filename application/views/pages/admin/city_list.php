<div class="col-md-9" style="margin-top:-45px">
	<div class="row">
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
	</div>
<div class="row">
<div class="col-md-4">
<h4>All Location lists<input type="hidden" id="active_paggination_color" ><input type="hidden" id="active_paggination_number" value="1"></h4>
</div>
<!-- <div class="col-md-8" align="center">

<button data-toggle="modal" data-target="#addNewCategory" class="btn btn-xs main-color-bg">
	<i class="fa fa-plus fa-lg"></i> New Location</button>

</div> -->
</div>

<ul id="myTab2" class="nav nav-pills boot-tabs">
<li class="active" id="posted"><a href="#active" data-toggle="tab">Active Location</a></li>
<li id="arrested"><a href="#suspended" data-toggle="tab" >Suspended Locations</a></li>
<li style="float:right"><button hreff="javascript:;"  data-toggle="modal" data-target="#addNewCategory" class="btn btn-xs main-color-bg">Add Location</button></li>

</ul>

<div class="row">

	<div class="col-md-12">
		<div id="myTabContent2" class="tab-content">
			<div class="tab-pane fade in active" id="active">
				<table class="table table-responsive">
				  	<thead>
				  		<th>Location Name</th>
				  		<th>City or Region</th>
				  		<th>Registered Date</th>
				  		<th>
				  		Action
				  		</th>
				  	</thead>
				  	<tbody>
							<?php foreach($location_active as $row) {?>
							<tr id="<?php echo $row->setting_id;?>">
				  		<td><?php echo $row->setting_region_name;?></td>
				  		<td><?php echo $row->setting_city_or_region;?></td>
				  		<td><?php echo date('d/m/Y',strtotime($row->setting_registered_date));?></td>
               <td>
								 <button class="btn btn-info btn-xs suspend_reactivate" title="suspend"
						 		data-status="0" data-id="<?php echo $row->setting_id;?>">
						 		<i class="fa fa-minus "> </i></button>
								 <button class="btn btn-info btn-xs edit" title="Edit"
								 data-id="<?php echo $row->setting_id;?>"
								 data-city="<?php echo $row->setting_city_or_region;?>"
								 data-name="<?php echo $row->setting_region_name?>">
						 		<i class="icon icon_pencil "> </i></button>
							</td>
						</tr>
					<?php } ?>
				  	</tbody>
				</table>
			</div>
			<div class="tab-pane fade " id="suspended">
				<table class="table table-responsive">
				  	<thead>
				  		<th>Location Name</th>
				  		<th>City or Region</th>
				  		<th>Registered Date</th>
				  		<th>
				  		Action
				  		</th>
				  	</thead>
				  	<tbody>
							<?php foreach($location_suspend as $row) {?>
							<tr id="<?php echo $row->setting_id;?>">
				  		<td><?php echo $row->setting_region_name;?></td>
				  		<td><?php echo $row->setting_city_or_region;?></td>
				  		<td><?php echo date('d/m/Y',strtotime($row->setting_registered_date));?></td>
               <td>
								 <td>
									<button class="btn btn-info btn-xs suspend_reactivate" title="Reactivate"
									data-status="1" data-id="<?php echo $row->setting_id;?>">
									 <i class="icon icon_refresh "> </i></button>
									 <button class="btn btn-info btn-xs edit" title="Edit"
										data-id="<?php echo $row->setting_id;?>"
										data-city="<?php echo $row->setting_city_or_region;?>"
										data-name="<?php echo $row->setting_region_name?>">
									<i class="icon icon_pencil "> </i></button>
								</td>					  	</td>
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
        <h5 class="modal-title" id="ModalLabel">New Location
        <button type="button" class="close close_comment" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button></h5>
      </div>

      <form role="form" method="post" action="<?php echo base_url('setting/RegisterLocation');?>">
      <div class="modal-body">
          <div class="form-group">
            <label for="message-text" class="col-form-label">Location Name: </label>
            <input type="text" class="form-control" placeholder="Add category here" name="setting_region_name"
						 required>
        </div>
        <div class="form-group">
					<label for="message-text" class="col-form-label">City Or Region: </label>
  <select class="form-control" name="setting_city_or_region">
		<option value="Region">Region</option>
<option value="City">City</option>
	</select>
          </div>
      </div>
      <div class="modal-footer">
     <button type="submit" class="btn btn-border" onclick="saveComment()"><span class="fa fa-plus"></span> Add</button>
      </div>
    </form>
    </div>
  </div>
</div>

<div class="modal fade" id="editLocationModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Location Name: <i class="location_name"></i>
        <button type="button" class="close close_comment" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button></h5>
      </div>

      <form role="form" method="post" action="<?php echo base_url('setting/updateLocation');?>">
      <div class="modal-body">
          <div class="form-group">
            <label for="message-text" class="col-form-label">Location Name: </label>
						<input type="hidden" name="setting_id" id="setting_id">
            <input type="text" class="form-control" placeholder="Add category here" name="setting_region_name"
						 required id="setting_region_name">
        </div>
        <div class="form-group">
					<label for="message-text" class="col-form-label">City Or Region: </label>
  <select class="form-control" name="setting_city_or_region" id="setting_city_or_region">
		<option value="Region">Region</option>
<option value="City">City</option>
	</select>
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
	$('#setting_region_name').val($(this).data('name'));
	// $('#setting_city_or_region').val($(this).data('city'));
	$('.location_name').text($(this).data('name'));
	$('#setting_id').val($(this).data('id'));
	if($(this).data('city')=='City'){
		$('#setting_city_or_region').prop('selectedIndex',1)
	}
	else{
		$('#setting_city_or_region').prop('selectedIndex',0)
    }
	$('#editLocationModal').modal('show');
})
$('.suspend_reactivate').click(function(){
	var id=$(this).data('id');
	var status=$(this).data('status');
	// alert(status);
$.ajax({
	url:'<?php echo base_url('setting/changeStatusLocation?id=');?>'+id+'&status='+status,
	success:function(response){
		if(response=='200'){
			$('#'+id).remove();
		}

	}
})
})
</script>
