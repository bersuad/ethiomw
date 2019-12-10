
	        <div class="col-lg-9" id="over_view">
	            <div class="panel panel-default" style="border:none;">
	                <div class="panel-heading main-color-bg">
	                    <h3 class="panel-title" align="center"> <?php echo ($this->session->userdata('lang')=='amh'?'አፍታ ዕይታ':"Overview");?></h3>
	                </div>
	                <div class="panel-body row" id="over_body">
	                    <a href="#" style="margin-left: -4%;"><div class="col-md-3">
	                        <div class="well dash-box" id="message">
	                            <h2 align="center"><span class="icon icon_archive_alt" aria-hidden></span>
																<?php echo $arrested['arrested_count']; ?></h2>
<<<<<<< HEAD
	                            <h6 align="center">
                                <?php echo ($this->session->userdata('lang')=='amh'?'በቁጥጥር ስር የዋሉ ወንጀለኞችና ተጠርጣሪዎች':"Arrested Criminals And Suspects");?></h6>
	                        </div>
	                    </div></a>
	                    <a href="#" style="margin-left: -4%;"><div class="col-md-3">
	                        <div class="well dash-box" id="message">
	                            <h2 align="center"><span class="icon icon_archive_alt" aria-hidden></span>
																<?php echo $arrested['posted_count']; ?></h2>
	                            <h6 align="center">
                                <?php echo ($this->session->userdata('lang')=='amh'?'ተፈላጊ ወንጀለኞችና ተጠርጣሪዎች':"Wanted Criminals And Suspects");?></h6>
	                        </div>
	                    </div></a>
											<a href="#"><div class="col-md-3">
												 <div class="well dash-box" id="quote_request">
														 <h2 align="center"><span class="fa fa-list" aria-hidden></span> <?php echo $criminal_count[0]->criminal_count; ?></h2>
														 <h6 align="center">
                                                            <?php echo ($this->session->userdata('lang')=='amh'?'በቁጥጥር ስር የዋሉና  የሚፈለጉ':"Arrested And Wanted");?></h6>
												 </div>
										 </div>
									 </a>
	                    <a href="#" data-toggle="modal" data-target="#client-answer"><div class="col-md-3">
	                        <div class="well dash-box" id="customer_question">
	                            <h2 align="center"><span class="fa fa-life-ring fa-lg" aria-hidden></span> </span> <?php echo $crime_count[0]->crime_count; ?></h2>
	                            <h6 align="center">
                                <?php echo ($this->session->userdata('lang')=='amh'?'አዲስ የወንጀል ጥቆማ':"New Crime Report");?></h6>
	                        </div>
	                    </div></a>


	                </div>
	                <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading main-color-bg">
                                    <h3 class="panel-title" align="center"><?php echo ($this->session->userdata('lang')=='amh'?'የወንጀል ስታስቲኪስ':"Crime Statistics");?></h3>
=======
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
<<<<<<< HEAD
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading main-color-bg">
                                    <h3 class="panel-title" align="center">Criminal And Suspects Reports</h3>
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
                                </div>
                                <section class="text-center" style="margin-top: -3%;">
									<div class="container" style="padding-top:30px;">
										<div class="section-content">
											<div class="row">
<<<<<<< HEAD
                                                <div class="col-lg-6" style="font-size: 25px"> <b><?php echo ($this->session->userdata('lang')=='amh'?'ስታስቲኪስ ከዜጎች':"Statistics From Citizen");?></b></div>
                                                <div class="col-lg-12"> </div>
												<div class="col-lg-5">
													<canvas id="myChart" width="300" height="300"></canvas>
                                            
                                                </div>

                                                <div class="col-lg-5">
                                                    <canvas id="myChart2" width="300" height="300"></canvas>
                                                
                                                </div>
                                               
                                                    <div class="col-lg-6" style="margin-top: 5%"> <b style="font-size: 25px">
                                                        <?php echo ($this->session->userdata('lang')=='amh'?'ስታስቲኪስ ከፖልስ':"Statistics From Police");?></b> </div>
                                                <div class="col-lg-12"> 
                                                    <hr /></div>
                                                <div class="col-lg-5">
                                                    <canvas id="age_range" width="300" height="300"></canvas>
                                                </div>
                                                <div class="col-lg-5">
                                                    <canvas id="gender" width="300" height="300"></canvas>
                                                </div>
                                                    <div class="col-lg-5">
													<canvas id="crime_type_suspects" width="300" height="300"></canvas>
												</div>
											</div>
										</div>
									</div>
								</section>

                            </div>
                        </div>
                    </div>


              </div>
          </div>
      </div>
=======
												<div class="col-lg-5">
													<canvas id="myChart" width="300" height="300"></canvas>
												</div>
												
												<div class="col-lg-5">
													<canvas id="myChart2" width="300" height="300"></canvas>
												</div>
											</div>
										</div>
									</div>
								</section>

                            </div>
                        </div>
                    </div>
	                        
						
=======
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
>>>>>>> 985f3f7a903ca11b74eae8fd99c9d3d3fc9280b3
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
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
      </div>
  </div>
</div>
<<<<<<< HEAD
</div>

<!-- modal -->


<!-- select
count(crdoc_data->> 'crime_type') ,
crdoc_data->>'city' as city
=======
<<<<<<< HEAD

<!-- select 
count(crdoc_data->> 'crime_type') ,
crdoc_data->>'city' as city 
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
from criminal_document where crdoc_data->>'type' ='crime'
group by  city -->

<script type="text/javascript" src="<?php echo site_url()?>assets/js/Chart.min.js"></script>

<script>
    function graphData(){
        $.ajax({
            type: 'post',
            url: '<?php echo site_url()?>Criminal/graph_data',
            data:{

            },
            success: function(data){
                var city_list = [];
                var crime_no = [];
                var ctx = document.getElementById('myChart').getContext('2d');

                $.each(jQuery.parseJSON(data), function(index, value){
<<<<<<< HEAD

                    city_list.push(value.city);

                    crime_no.push(value.count);


                 });
=======
                  
                    city_list.push(value.city);

                    crime_no.push(value.count);
                  

                 }); 
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
                 // var city_name = data.jsonarray.map(function(e) {
                 //       return e.city;
                 //    });
                 // var city_name=citys;
<<<<<<< HEAD

                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: city_list,
                        datasets: [{
                            label: 'Crime number',
                            data: crime_no,
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        },
                        legend:{
                          display:false,
                        },
                        title:{
                          display:true,
                          text:'<?php echo ($this->session->userdata('lang')=='amh'?'የወንጀል ሪፖርት በከተማ':"City crime report");?>',
                          fontSize: 20
                        },
                    }
                });
            }
        });
         $.ajax({
            type: 'post',
            url: '<?php echo site_url()?>Criminal/dashboardSuspectsByCrimeType',
            data:{

            },
            success: function(data){
                var city_list = [];
                var crime_no = [];
                var ctx = document.getElementById('crime_type_suspects').getContext('2d');

                $.each(jQuery.parseJSON(data), function(index, value){

                    city_list.push(value.crime_type);

                    crime_no.push(value.count);


                 });
         

                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: city_list,
                        datasets: [{
                            label: 'Crime number',
                            data: crime_no,
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        },
                        legend:{
                          display:false,
                        },
                        title:{
                          display:true,
                          text:'<?php echo ($this->session->userdata('lang')=='amh'?'ሪፖርት በወንጀል አይነቶች':"Criminal and Suspects by crime category");?>',
                          fontSize: 20
                        },
                    }
                });
            }
        });
          $.ajax({
            type: 'post',
            url: '<?php echo site_url()?>Criminal/dashboardByAge',
            data:{

            },
            success: function(data){
                var city_list = [];
                var crime_no = [];
                var ctx = document.getElementById('age_range').getContext('2d');
                  
                $.each(jQuery.parseJSON(data), function(index, value){
                   if(value.years_10_20>0){
                    city_list.push('10-20 Years');
                    crime_no.push(value.years_10_20);
                }
                   if(value.years_20_30>0){
                     city_list.push('20-30 Years');
                    crime_no.push(value.years_20_30);
                }
                 if(value.years_30_40>0){
                     city_list.push('30-40 Years');
                    crime_no.push(value.years_30_40);
                }
                if(value.years_40_50>0){
                     city_list.push('40-50 Years');
                    crime_no.push(value.years_40_50);
                }
                 if(value.years_50_60>0){
                     city_list.push('50-60 Years');
                    crime_no.push(value.years_50_60);
                }
                if(value.years_60_70>0){
                     city_list.push('60-70 Years');
                    crime_no.push(value.years_60_70);
                }
                  if(value.years_70_80>0){

                     city_list.push('70-80 Years');
                    crime_no.push(value.years_70_80);
                }
                if(value.years_above_80>0){
                     city_list.push('Above 80 Years');
                    crime_no.push(value.years_above_80);
                }

                  


                 });
               

                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: city_list,
                        datasets: [{
                            label: 'Crime number',
                            data: crime_no,
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        },
                        legend:{
                          display:false,
                        },
                        title:{
                          display:true,
                          text:'<?php echo ($this->session->userdata('lang')=='amh'?'የወንጀለኞችና የተጠርጣሪዎች ሪፖርት በ ዕድሜ':"Criminal and Suspects by age range");?>',
                          fontSize: 20
                        },
                    }
                });
            }
        });
          $.ajax({
            type: 'post',
            url: '<?php echo site_url()?>Criminal/dashboardByGender',
            data:{

            },
            success: function(data){
                var city_list = [];
                var crime_no = [];
                var ctx = document.getElementById('gender').getContext('2d');
                 
                    
                $.each(jQuery.parseJSON(data), function(index, value){
                      if(value.male>0){

                    city_list.push('Male');

                    crime_no.push(value.male);
                         }
                       if(value.female>0){

                     city_list.push('Female');
                     crime_no.push(value.female);
                            } });
               

=======
                
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: city_list,
                        datasets: [{
                            label: 'Crime number',
                            data: crime_no,
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        },
                        legend:{
                          display:false,
                        },
                        title:{
                          display:true,
<<<<<<< HEAD
                          text:'<?php echo ($this->session->userdata('lang')=='amh'?'የወንጀለኞችና የተጠርጣሪዎች ሪፖርት በ ዾታ':"Criminal and Suspects by gender");?>',
                          fontSize: 20
=======
                          text:'City crime report',
                          fontSize: 25
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
                        },
                    }
                });
            }
        });


    $.ajax({
        type: 'post',
        url: '<?php echo site_url()?>Criminal/crime_category_report',
        data:{

        },

        success: function(data){
            var crime_category = [];
            var crime_no = [];
            var ctx = document.getElementById('myChart2').getContext('2d');
            $.each(jQuery.parseJSON(data), function(index, value){
<<<<<<< HEAD

                crime_category.push(value.crime_type);

                crime_no.push(value.count);

=======
                  
                crime_category.push(value.crime_type);

                crime_no.push(value.count);
              
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60

             });
            var myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: crime_category,
                    datasets: [{
                        label: 'No of crime',
                        data: crime_no,
                        backgroundColor: [
                            'rgba(163, 37, 37, 0.7)',
                            'rgba(10, 41, 132, 0.7)',
<<<<<<< HEAD
                            'rgba(209, 161, 4, 0.6)',
                            'rgba(2, 213, 224, 0.6)',
                            'rgba(145, 8, 175, 0.6)',
=======
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    title:{
                      display:true,
<<<<<<< HEAD
                      text:'<?php echo ($this->session->userdata('lang')=='amh'?'የወንጀለኞችና የተጠርጣሪዎች ሪፖርት በወንጀል አይነት':"Report in crime category");?>',
                      fontSize: 20
=======
                      text:'Report in crime category',
                      fontSize: 25
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
                    },
                    scales: {
                        yAxes: [{
                          gridLines: {
                            display: false,
                          },
                            ticks: {
                                display: false ,//this will remove only the label
                            },
                        }],
                        xAxes: [{
                          gridLines: {
                            display: false,
                          },
                          ticks: {
                                display: false ,//this will remove only the label
                            }
                        }],
                    }
                }
            });
        }
    });
<<<<<<< HEAD
   
=======
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60

    }
</script>
<script>
</script>
<<<<<<< HEAD
=======
=======
>>>>>>> 985f3f7a903ca11b74eae8fd99c9d3d3fc9280b3
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
