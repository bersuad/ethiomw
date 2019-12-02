<?php if($this->session->userdata('success')) {?>
<div class="col-md-9">
<div class="alert alert-info alert-dismissable">
  <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
<?php echo $this->session->userdata('success');?>
</div>
</div>
<?php $this->session->unset_userdata('success'); } ?>
            <div class="col-md-9">
              <div class="row">
                <div class="col-md-9">
                  <h4>User Account As Admin</h4>
                </div>
                <div class="col-md-3" align="right">
                 <a href="#" data-toggle="modal" data-target="#addModal">
                  <button class="btn btn-xs main-color-bg"><i class="fa fa-plus fa-lg"></i> Add Admin</button>
                </a>
                </div>
              </div>
              <ul id="myTab2" class="nav nav-pills boot-tabs">
              <li class="active" id="posted"><a href="#home2" data-toggle="tab">Active User</a></li>
              <li id="arrested"><a href="#profile2" data-toggle="tab" >Suspended User</a></li>

              </ul>

              <div id="myTabContent2" class="tab-content">
                  <div class="tab-pane fade in active" id="home2">
                      <div class="row">
                          <table class="table table-hover table-striped">
                            <thead>
                              <tr>
                                <td>N<sup><u>o</u></sup></td>
                                <td>Photo</td>
                                <td>Full Name</td>
                                <td>Phone</td>
                                <td>Email</td>
                                <td>Action</td>
                              </tr>
                            </thead>
                            <?php $y=1; foreach($active_user as $row){?>
                            <tbody style="border:none;">
                              <tr id="<?php echo $row->crdoc_id;?>">
                                <td style="vertical-align:middle"><?php echo $y;?></td>
                                <td style="vertical-align:middle"><img src="<?php echo base_url().$row->admin_image;?>"
                                   style="min-width: auto; min-height: auto; max-width: 90%; max-height: 60px; border-radius: 110px"></td>
                                <td style="vertical-align:middle"><?php echo ucwords($row->admin_name);?></td>
                                <td style="vertical-align:middle"><?php echo ucwords($row->admin_phone);?></td>
                                <td style="vertical-align:middle"><?php echo $row->admin_email;?></td>
                                <td style="vertical-align:middle">
                                  <button class="btn btn-info btn-xs edit_user"
                                  data-name="<?php echo $row->admin_name;?>"
                                  data-phone="<?php echo $row->admin_phone;?>"
                                  data-email="<?php echo $row->admin_email;?>"
                                  data-password="<?php echo $row->admin_password;?>"
                                  data-status="<?php echo $row->admin_status;?>"
                                  data-date="<?php echo $row->created_date;?>"
                                  data-id="<?php echo $row->crdoc_id;?>"
                                  data-image="<?php echo $row->admin_image;?>" >
                                    <i class="fa fa-edit fa-sm"></i></button>
                                    <button class="btn btn-danger btn-xs suspend_user"
                                    data-status="0"
                                    data-id="<?php echo $row->crdoc_id;?>"
                                    data-name="<?php echo $row->admin_name;?>">Suspend</button>
                                </td>
                              </tr>

                            </tbody>
                          <?php $y++; } ?>
                          </table>
                      </div>
                  </div>
                  <div class="tab-pane fade" id="profile2">
                    <div class="row">
                        <table class="table table-hover table-striped">
                          <thead>
                            <tr>
                              <td>N<sup><u>o</u></sup></td>
                              <td>Photo</td>
                              <td>Full Name</td>
                              <td>Phone</td>
                              <td>Email</td>
                              <td>Action</td>
                            </tr>
                          </thead>
                          <?php $x=1; foreach($suspend_user as $row){?>
                          <tbody style="border:none;">
                            <tr id="<?php echo $row->crdoc_id;?>">
                              <td style="vertical-align:middle"><?php echo $x;?></td>
                              <td style="vertical-align:middle"><img src="<?php echo base_url().$row->admin_image;?>"  style="min-width: auto; min-height: auto; max-width: 90%; max-height: 60px; border-radius: 110px"></td>
                              <td style="vertical-align:middle"><?php echo ucwords($row->admin_name);?></td>
                              <td style="vertical-align:middle"><?php echo ucwords($row->admin_phone);?></td>
                              <td style="vertical-align:middle"><?php echo $row->admin_email;?></td>
                              <td style="vertical-align:middle">
                                <button class="btn btn-info btn-xs edit_user"
                                data-name="<?php echo $row->admin_name;?>"
                                data-phone="<?php echo $row->admin_phone;?>"
                                data-email="<?php echo $row->admin_email;?>"
                                data-password="<?php echo $row->admin_password;?>"
                                data-status="<?php echo $row->admin_status;?>"
                                data-date="<?php echo $row->created_date;?>"
                                data-id="<?php echo $row->crdoc_id;?>"
                                data-image="<?php echo $row->admin_image;?>" >
                                  <i class="fa fa-edit fa-sm"></i></button>
                                  <button class="btn btn-success btn-xs suspend_user"
                                  data-status="1"
                                  data-id="<?php echo $row->crdoc_id;?>"
                                  data-name="<?php echo $row->admin_name;?>">Reactivate</button>
                              </td>
                            </tr>

                          </tbody>
                        <?php $x++; } ?>
                        </table>
                    </div>
              </div>
              </div>
            </div>
        </div>
    </div>

    <div class="modal fade " id="editModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="ModalLabel">

              Edit New User
            <button type="button" class="close close_model_edit_user" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button></h5>
          </div>
          <div class="modal-body">
            <form role="form" method="post" enctype="multipart/form-data" id="edit_submit_add_user">
            <div class="modal-body">
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Full Name:</label>
                  <input type="text"  id="edit_name"class="form-control" name="admin_name" placeholder="Full Name">
                  <input type="hidden" id="edit_admin_password" name="admin_password">
                  <input type="hidden" id="edit_admin_status" name="admin_status">
                  <input type="hidden" id="created_date" name="created_date">
                  <input type="hidden" id="crdoc_id" name="crdoc_id">
                  <div style="color:red" class="edit_admin_name"></div>
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Phone:</label>
                  <input type="text" id="edit_phone" class="form-control phone_valid" name="admin_phone"
                  placeholder="09--" maxlength="10">
                  <div style="color:red" class="edit_admin_phone"></div>
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Email:</label>
                  <input type="email" id="edit_email" class="form-control" name="admin_email" placeholder="Email">
                  <div style="color:red" class="edit_admin_email"></div>
                </div>
                <div class="form-group" style="padding-left:200px">
                  <label for="message-text" class="col-form-label">
                    <img data-rotate="90" id="dri_pro" src="<?php echo base_url('assets/default_logo.png');?>"
                    style="min-width: auto; min-height: auto; max-width: 90%; max-height: 60px;">
                  </label>
                  <div class="image-upload" >
                  <label for="images_edit_user"  style="cursor: pointer;">
                  <sapn class ="icon-upload " style="border-radius:10px;border:1px solid;"> &nbsp;Upload &nbsp; </span></label>

                  <input type="file"  id="images_edit_user" name="admin_image" accept="image/*"  onchange="driver(this)"
                  class="form-control"  value="" />
                  </div>
                  <!-- <input type="file" name="admin_image" class="form-control" required> -->
                </div>
                <div class="error_response_edit_user" style="color:red"></div>
            </div>
            <div class="modal-footer">

              <button type="submit" class="btn btn-border" onclick="editUser()" >Update <i class="edit_click_add"></i></button>
            </div>
          </form>
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

    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="ModalLabel">Add New User
            <button type="button" class="close close_model_adduser" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button></h5>
          </div>
          <form role="form" method="post" enctype="multipart/form-data" id="submit_add_user" >
          <div class="modal-body">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Full Name:</label>
                <input type="text"  id="name"class="form-control" name="admin_name" placeholder="Full Name">
                <div style="color:red" class="admin_name"></div>
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Phone:</label>
                <input type="text" id="phone" class="form-control phone_valid" name="admin_phone"
                placeholder="09--" pattern="[0-9]{10}" maxlength="10">
                <div style="color:red" class="admin_phone"></div>
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Email:</label>
                <input type="email" id="email" class="form-control" name="admin_email" placeholder="Email">
                <div style="color:red" class="admin_email"></div>
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Password:</label>
                <input type="password" id="password" class="form-control" name="admin_password" placeholder="Password">
                <div style="color:red" class="admin_password"></div>
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Re-type Password:</label>
                <input type="password" id="repassword" name="admin_repassword" class="form-control" placeholder="Re-type Password">
                <div style="color:red" class="admin_repassword"></div>
              </div>
              <div class="form-group" style="padding-left:200px">
                <label for="message-text" class="col-form-label">
                  <img data-rotate="90" id="user_pro" src="<?php echo base_url('assets/default_logo.png');?>" style="min-width: auto; min-height: auto; max-width: 90%; max-height: 60px;">
                </label>
                <div class="image-upload" >
                <label for="add_user_photo"  style="cursor: pointer;">
                <sapn class ="icon-upload " style="border-radius:10px;border:1px solid;"> &nbsp;Upload &nbsp; </span></label>

                <input type="file"  id="add_user_photo" name="admin_image" accept="image/*"  onchange="addUserImage(this)"
                class="form-control" oninput="image(this.value)"  value="" />
                </div>
                <!-- <input type="file" name="admin_image" class="form-control" required> -->
              </div>
              <div class="error_response_add_user" style="color:red"></div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-border" onclick="addUser()">Add<span class="click_add"></span></button>
          </div>
        </form>
        </div>
      </div>
    </div>

<script>
$('.suspend_user').click(function(){
  var status=$(this).data('status');
  var crdoc_id=$(this).data('id');
  $('.name').text(($(this).data('name')).toUpperCase());
  $('#deleteNo').modal('show');
  $('.click_yes_change').click(function(){
    $.ajax({
     url:'<?php echo base_url('criminal/changeStatusUser?crdoc_id=');?>'+crdoc_id+'&status='+status,
      success:function(response){
        if(response=='200'){
          $('#'+crdoc_id).remove();
        $('#deleteNo').modal('hide');
        }
      }
    })
  })

})
</script>
