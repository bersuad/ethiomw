
	        <div class="col-lg-9" id="over_view">
	            <div class="panel panel-default" style="border:none;">
	                <div class="panel-heading main-color-bg">
	                    <h3 class="panel-title" align="center"> Over View</h3>
	                </div>
	                <div class="panel-body row" id="over_body">
	                    <a href="#" style="margin-left: -4%;"><div class="col-md-4">
	                        <div class="well dash-box" id="message">
	                            <h2 align="center"><span class="icon icon_archive_alt" aria-hidden></span>
																<?php echo $arrested['arrested_count']; ?></h2>
	                            <h6 align="center">Arrested Criminals And Suspects</h6>
	                        </div>
	                    </div></a>
	                    <a href="#" data-toggle="modal" data-target="#client-answer"><div class="col-md-4">
	                        <div class="well dash-box" id="customer_question">
	                            <h2 align="center"><span class="fa fa-life-ring fa-lg" aria-hidden></span> </span> <?php echo $crime_count[0]->crime_count; ?></h2>
	                            <h6 align="center">New Crime Report</h6>
	                        </div>
	                    </div></a>
	                    <a href="#"><div class="col-md-4">
	                        <div class="well dash-box" id="quote_request">
	                            <h2 align="center"><span class="fa fa-list" aria-hidden></span> <?php echo $criminal_count[0]->criminal_count; ?></h2>
	                            <h6 align="center">All Wanted List</h6>
	                        </div>
	                    </div></a>

	                </div>
	                <div class="row">
	                        <div class="col-lg-8">
	                            <div class="panel panel-default">
	                                <div class="panel-heading main-color-bg">
	                                    <h3 class="panel-title" align="center">Criminal And Suspects Reports</h3>
	                                </div>
	                                <section class="text-center" style="margin-top: -3%;">
																		<div class="container" style="padding-top:30px;">
																			<div class="section-content">
																			  	<div class="row" style="width:47vw; overflow: auto;">
																						<?php foreach($reporter as $key) {?>
																				    <div class="col-sm-6 col-md-6 mb-sm-6 mb-md-6 col-lg-6">
																				      <div class="icon-box iconbox-theme-colored bg-lighter" style="padding:0px 17px;margin-bottom:auto;">
																				        <h5 class="icon-box-title"><?php echo ucwords($key->criminal_name);?></h5>
																				          <img class="img-responsive img-fullwidth" src="<?php echo base_url().$key->criminal_image;?>" alt="featured project"
																									style="padding-left:35% ;min-width: auto; min-height: auto; max-height: 100px!important; max-width: 100%;">

																						        <table class="table" style="border:none;">
																							        <tbody style="border:none;">
																							            <tr>
																							                <th scope="row">Reporter:</th>
																							                <td><?php echo $key->reporter_name;?></td>
																							             </tr>
																							             <tr>
																							                <th scope="row">Phone N<sup><u>o</u></sup></th>
																							                <td><?php echo $key->reporter_phone;?></td>
																							            </tr>
																							            <tr style="cursor:pointer" class="read_more" data-read="<?php echo $key->detail_crime_reporter;?>">
																							                <th>Message</th>
																							                <td><p style="text-align: justify;" class="add_message" >
																																<?php echo substr($key->detail_crime_reporter,0,20);?>
																																<a style="color:green" href="javascript:;"
																																	> More</a></p></td>
																							            </tr>
																													<tr>

																													</tr>
																							        </tbody>
																							    </table>

																				      </div>
																				    </div>

																				  <?php } ?>
																				</div>
																			</div>
																		</div>
																	</section>

	                            </div>
	                        </div>
	                        <div class="col-lg-4">

	                            <div class="panel panel-default">
	                                <div class="panel-heading main-color-bg">
	                                    <div class="row" align="right" style="display: inline-block;">
	                                    	<div class="col-md-12">
	                                    		<h6 class="panel-title" align="left">Recently Added Criminal And Suspects</h6>
	                                    	</div>
	                                    	<!-- <div class="col-md-3" align="right">
	                                        	<button class="btn btn-success btn-sm fa fa-plus fa-2x" data-toggle="modal" data-target="#addModal"></button>

	                                    	</div> -->
	                                    </div>
	                                </div>
                                  <?php foreach($fugitive as $row) {?>
	                                <div class="panel-footer">
	                                	<div class="row">
							        		<div class="col-md-3">
							         		    <img class="img-fullwidth" src="<?php echo base_url().$row->criminal_image?>" alt="" style="height: 50px; width: 50px;">
							        		</div>
							        		<div class="col-md-9">
									          <div class="row">
									            <div class="col-md-12">
									              <div class="table-responsive">
												    <table class="table" style="border:none;">
												        <thead>
												            <tr>
									             			   	<h6 class="mt-0"><?php echo $row->criminal_name;?></h6>
												            </tr>
												        </thead>
												        <tbody style="border:none;">
												            <tr>
												                <h6><?php echo $row->criminal_type;?></h6>
												            </tr>
												            <tr>
												              <h6><?php echo $row->criminal_state_ofcase;?></h6>
												            </tr>
												            <tr>
												              <h6><?php $bod=date('Y',strtotime($row->criminal_birthdate));
																			$cur_year=date('Y');
																			echo $row->criminal_birthdate;?></h6>
												            </tr>
												        </tbody>
												    </table>
												</div>
									          </div>
									      </div>
									  </div>
									</div>
							</div>
						<?php } ?>
              </div>
          </div>
      </div>
      </div>
  </div>
</div>
</div>

<!-- modal -->
<div class="modal fade " id="addModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Add New Fugitive</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
        	<div class="row">
        		<div class="col-md-4">
        			<div class="form-group">
						<label for="recipient-name" class="col-form-label">Name:</label>
						<input type="text" class="form-control" id="recipient-name" placeholder="Full Name">
					</div>
        		</div>
        		<div class="col-md-4">
        			<div class="form-group">
						<label for="recipient-name" class="col-form-label">Gender:</label>
						<select class="form-control">
							<option value="empty">-- Select Gender --</option>
							<option>Male</option>
							<option>Female</option>
						</select>
					</div>
        		</div>
        		<div class="col-md-4">
        			<div class="form-group">
						<label for="recipient-name" class="col-form-label">DOB:</label>
						<input type="date" class="form-control" id="recipient-name">
					</div>
        		</div>
        		<div class="col-md-4">
        			<div class="form-group">
						<label for="recipient-name" class="col-form-label">Eye Color:</label>
						<input type="text" class="form-control" name="eye_color" placeholder="Eye Color">
					</div>
        		</div>
        		<div class="col-md-4">
        			<div class="form-group">
						<label for="recipient-name" class="col-form-label">Height</label>
						<input type="text" name="height" placeholder="Height" class="form-control">
					</div>
        		</div>
        		<div class="col-md-4">
        			<div class="form-group">
						<label for="recipient-name" class="col-form-label">Nationality</label>
						<input type="text" class="form-control" name="nationality" placeholder="Nationality">
					</div>
        		</div>
        		<div class="col-md-4">
        			<div class="form-group">
						<label for="recipient-name" class="col-form-label">Case State</label>
						<input type="text" class="form-control" name="case_type" placeholder="Case State">
					</div>
        		</div>
        		<div class="col-md-4">
        			<div class="form-group">
						<label for="recipient-name" class="col-form-label">Crime Type</label>
						<input type="text" name="crime_type" placeholder="Crime Type" class="form-control">
					</div>
        		</div>
        		<div class="col-md-4">
        			<div class="form-group">
						<label for="recipient-name" class="col-form-label">Speaking Language</label>
						<input type="text" class="form-control" name="language" placeholder="Speaking Language">
					</div>
        		</div>

        		<div class="col-md-6">
        			<div class="form-group">
						<label for="recipient-name" class="col-form-label">Crime Type</label>
						<input type="text" name="" placeholder="Crime Type" class="form-control">
					</div>
        		</div>

        		<div class="col-md-6">
        			<div class="form-group">
						<label for="recipient-name" class="col-form-label">Image</label>
						<input type="file" name="userfile" placeholder="Height" class="form-control">
					</div>
        		</div>
        		<div class="col-md-12">
		          <div class="form-group">
		            <label for="message-text" class="col-form-label">Description:</label>
		            <textarea id="editor2" name="description" placeholder="Add body" class="form-control" rows="5"></textarea>
		          </div>
        		</div>
        	</div>
        </form>
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-border">Send message</button>
      </div>
    </div>
  </div>
</div>
