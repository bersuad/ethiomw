<div class="col-md-9">
    <div class="row" style="margin-top:-45px">
      <br>
        <div class="col-md-2" style="margin-top: 2%;">
            <h4>FIR Report</h4>
        </div>
        <form method="post" action="<?php echo base_url('all-crime-report?ofset='.$_GET['ofset']);?>">
                   <div class="col-lg-3">
                  <div class="form-group">
                    <span>From </span>
                    <div class="controls input-append date form_date" data-date="" data-date-format="d-mm-yyyy"
                    data-link-field="dtp_input2" data-link-format="d-mm-yyyy">
                        <input class="form-control" size="16" type="text" value="<?php echo set_value('start_date',date('d-m-Y'));?>"
                        name="start_date" readonly>
                        <span style="height:31px" class="add-on"><i class="icon-remove"></i></span>
    					<span class="add-on" style="height:31px"><i class="icon-th"></i></span>
                    </div>
                  </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <span>To</span>

                      <div class="controls input-append date form_date" data-date="" data-date-format="d-mm-yyyy"
                      data-link-field="dtp_input2" data-link-format="d-mm-yyyy">
                          <input class="form-control" name="end_date" size="16"
                          type="text" value="<?php  echo set_value('end_date',date('d-m-Y'));?>" readonly >
                          <span style="height:31px" class="add-on"><i class="icon-remove"></i></span>
      					<span class="add-on" style="height:31px"><i class="icon-th"></i></span>
                      </div>

                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <span>Crime Category</span>

                  <select name="crime_type" class="form-control">
                  <option value="all">All</option>
                  <?php foreach ($crime_type as $row) { ?>
                    <option   value="<?php echo $row->setting_id; ?>"
                    <?php echo set_select('crime_type',$row->setting_id,
                      (!empty($selected_value) && $selected_value==$row->setting_id? TRUE : FALSE )); ?>><?php echo $row->setting_crime_name;?></option>
                  <?php } ?>
                  </select>
                    </div>
                  </div>
                  <div class="col-lg-1">
                    <div class="form-group">
                    <button type="submit" class="btn btn-sm btn-info btn-block" style="margin-top:20px; height: 47px;" title="Filter"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                </form>


    </div>
    <?php if(!empty($crime)) {?>
    <?php foreach($crime as $row) {?>
    <div class="well blog col-lg-12" >

        <div class="row">
        <div class="col-md-12">
          <table class="table table-responsive">
          <thead>
          <tr>
          <th>Accuser Photo</th>
          <th>Accuser Name</th>
          <th>Reporter Name</th>
          <th>Reporter Phone</th>
          <th>Crime Type</th>
          <th>Location</th>
          </tr>
          </thead>
          <tbody>
            <tr>
             <td><img src="<?php echo $row->accuser_photo;?>"  style="min-width: auto; min-height: auto; max-width: 90%; max-height: 60px;" alt="no image"></td>
               <td><?php echo ucwords($row->accuser_name);?></td>
             <td><?php echo ucwords($row->contact_name_crime);?></td>
             <td><?php echo $row->contact_phone_crime;?></td>
             <td><?php echo ucwords($row->crime_type);?></td>
             <td><?php echo ucwords($row->city.','.$row->subcity);?></td>
            </tr>
          </tbody>
          </table>
          <label style="color: #000;">Detail Report:</label>
          <p data-report="<?php echo $row->report_crime;?>" class="add_more_crime_report">
            <?php echo substr($row->report_crime,0,50);?>
            <?php if (strlen($row->report_crime)>50) {?>
            <a style="color:green" href="javascript:;"
            > More</a>
          <?php } ?>
          </p>
            <div align="right">
                <small style="color:#A99FFB"><?php echo 'Reported Date:'.$row->report_date;?></small>
                <?php if($row->status=='0') {?>
                  <a href="javascript:;" class="to_seen seen<?php echo $row->crdoc_id;?>"
                    data-id="<?php echo $row->crdoc_id;?>">
                    <i class="icon icon_lock_alt" style="color:green" title="Unseen"></i></a>
                                <?php } else {?>
                <i class="fa fa-eye" title="Seen"></i>
              <?php } ?>
            </div>
        </div>

        </div>


    </div>

    <br>
  <?php } } else {?>
    <div class="col-md-12">
    <div class="alert alert-success alert-dismissable">
      New crime is not reported
    </div>
    </div>
  <?php }  ?>
 
</div>
<script type="text/javascript" src="<?php echo base_url()?>datepicker/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url()?>datepicker/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script>
$('.form_date').datetimepicker({
      format:'d-mm-yyyy',
      weekStart: 1,
      todayBtn:  1,
  autoclose: 1,
  todayHighlight: 1,
  startView: 2,
  minView: 2,
  forceParse: 0
  });
$(function(){
var ofset='<?php echo $_GET['ofset'];?>';
$('#'+ofset).css('background-color','#bf9e58');
})
$('.to_seen').click(function(){
  var crdoc_id=$(this).data('id');
  $(this).html('<img src = "<?php echo base_url('assets/spinner.gif'); ?>"  height="25px"/>');
  $.ajax({
    url:'<?php echo base_url('criminal/changeStatusCrime?crdoc_id=');?>'+crdoc_id,
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
