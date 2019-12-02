
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
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading main-color-bg">
                                    <h3 class="panel-title" align="center">Criminal And Suspects Reports</h3>
                                </div>
                                <section class="text-center" style="margin-top: -3%;">
									<div class="container" style="padding-top:30px;">
										<div class="section-content">
											<div class="row">
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

<!-- select 
count(crdoc_data->> 'crime_type') ,
crdoc_data->>'city' as city 
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
                  
                    city_list.push(value.city);

                    crime_no.push(value.count);
                  

                 }); 
                 // var city_name = data.jsonarray.map(function(e) {
                 //       return e.city;
                 //    });
                 // var city_name=citys;
                
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
                          text:'City crime report',
                          fontSize: 25
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
                  
                crime_category.push(value.crime_type);

                crime_no.push(value.count);
              

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
                    title:{
                      display:true,
                      text:'Report in crime category',
                      fontSize: 25
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

    }
</script>
<script>
</script>