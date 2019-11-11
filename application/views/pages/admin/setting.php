
            <div class="col-md-9">
              <div class="row">
                <div class="col-md-9">
                  <h4>Settings</h4>
                </div>
                <div class="col-md-3" align="right">
                 <a href="#" data-toggle="modal" data-target="#addModal">
                  <button class="btn btn-xs main-color-bg"><i class="fa fa-plus fa-lg"></i> Add Admin</button>
                </a>
                </div>
              </div>
              <div id="myTabContent2" class="tab-content">
                  <div class="tab-pane fade in active" id="home2">
                      <div class="row">
                          <table class="table table-hover table-striped">
                            <thead>
                              <tr>
                                <td>N<sup><u>o</u></sup></td>
                                <td>User Name</td>
                                <td>Email</td>
                              </tr>
                            </thead>
                            <tbody style="border:none;">
                              <tr>
                                <td>1</td>
                                <td>Abebe Kebede</td>
                                <td>mrx@gmail.com</td>
                                <td>
                                  <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit fa-sm"></i></button> <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteNo"><i class="fa fa-remove fa-sm"></i></button> 
                                </td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>Abebe Kebede</td>
                                <td>mrx@gmail.com</td>
                                <td>
                                  <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit fa-sm"></i></button> <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteNo"><i class="fa fa-remove fa-sm"></i></button> 
                                </td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>Abebe Kebede</td>
                                <td>mrx@gmail.com</td>
                                <td>
                                  <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit fa-sm"></i></button> <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteNo"><i class="fa fa-remove fa-sm"></i></button> 
                                </td>
                              </tr>
                            </tbody>
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
            <h5 class="modal-title" id="ModalLabel">Add New User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">User Name:</label>
                <input type="text" class="form-control" name="user_name" placeholder="User Name">
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Email:</label>
                <input type="email" class="form-control" name="email" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Password:</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Re-type Password:</label>
                <input type="password" name="" class="form-control" placeholder="Re-type Password">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            
            <button type="button" class="btn btn-border">Update</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="deleteNo" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 align="center" class="modal-title" id="exampleModalLabel">Are you sure you want to delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    
                    <div class="row">
                        
                    </div>
                    <div class="container">
                        
                    </div>
                
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="ModalLabel">Add New User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">User Name:</label>
                <input type="text" class="form-control" name="user_name" placeholder="User Name">
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Email:</label>
                <input type="email" class="form-control" name="email" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Password:</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Re-type Password:</label>
                <input type="password" name="" class="form-control" placeholder="Re-type Password">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            
            <button type="button" class="btn btn-border">Add</button>
          </div>
        </div>
      </div>
    </div>

   