<section>
  <div class="container mt-30 mb-30 pt-30 pb-30">
    <div class="row">
      <div class="col-md-9 blog-pull-left">
        <!-- Section: About -->
        <section>
        	<div class="row">
        		<div class="col-md-3">
         		    <img class="img-fullwidth" src="<?php echo base_url().$single_fugitive[0]->criminal_image;?>" alt="Image Invisible">
        		</div>
        		<div class="col-md-9">
		          <div class="row">
		            <div class="col-md-12">
		              <div class="table-responsive">
					    <table class="table" style="border:none;">
					        <thead>
					            <tr>
		             			   	<th><h3 class="mt-0"><?php echo ucwords($single_fugitive[0]->criminal_name);?></h3></th>
					            </tr>
					        </thead>
					        <tbody style="border:none;">
					            <tr>
					                <th scope="row"><?php echo $this->lang->line('Crime');?>:</th>
					                <td><?php echo ucwords($single_fugitive[0]->criminal_type);?></td>

					            </tr>
					            <tr>
					                <th scope="row"><?php echo $this->lang->line('Gender');?></th>
					                <td><?php echo ucwords($single_fugitive[0]->criminal_gender);?></td>
					            </tr>
                      <?php if ($single_fugitive[0]->criminal_birthdate) {?>
					            <tr>
					                <th scope="row"><?php echo $this->lang->line('Age Range');?></th>
					                <td><?php echo ucwords($single_fugitive[0]->criminal_birthdate);?></td>
					            </tr>
                    <?php } ?>
                    <?php if ($single_fugitive[0]->criminal_nationality) {?>
					            <tr>
					                <th scope="row"><?php echo $this->lang->line('Nationality');?></th>
					                <td><?php echo ucwords($single_fugitive[0]->criminal_nationality);?></td>
					            </tr>
                    <?php } ?>
                    <?php if ($single_fugitive[0]->criminal_eye_color) {?>
					            <tr>
					                <th scope="row"><?php echo $this->lang->line('Eye Color');?></th>
					                <td><?php echo ucwords($single_fugitive[0]->criminal_eye_color);?></td>
					            </tr>
                    <?php } ?>
                    <?php if ($single_fugitive[0]->criminal_height) {?>
                      <tr>
                         <th scope="row"><?php echo $this->lang->line('Height');?></th>
                         <td><?php echo ucwords($single_fugitive[0]->criminal_height);?></td>
                     </tr>
                   <?php } ?>
                   <?php if ($single_fugitive[0]->criminal_state_ofcase) {?>
                     <tr>
                         <th scope="row"><?php echo $this->lang->line('State of case');?></th>
                         <td><?php echo ucwords($single_fugitive[0]->criminal_state_ofcase);?></td>
                     </tr>
                   <?php } ?>
                   <?php if ($single_fugitive[0]->criminal_identifier) {?>
                     <tr>
                         <th scope="row"><?php echo $this->lang->line('Physical Apperance');?></th>
                         <td><?php echo ucwords($single_fugitive[0]->criminal_identifier);?></td>
                     </tr>
                   <?php } ?>
                   <?php if ($single_fugitive[0]->criminal_reward) {?>
                     <tr>
                         <th scope="row"><?php echo $this->lang->line('Reward Price')?></th>
                         <td><?php echo ucwords($single_fugitive[0]->criminal_reward.' ETB');?></td>
                     </tr>
                   <?php } ?>
                   <?php if ($single_fugitive[0]->criminal_language) {?>
                     <tr>
                         <th scope="row"><?php echo $this->lang->line('Language Speaker');?> </th>
                         <td><?php echo ucwords($single_fugitive[0]->criminal_language);?></td>
                     </tr>
                   <?php } ?>
					        </tbody>
					    </table>
					</div>
		          </div>
		          <div class="row">
		            <div class="col-md-12">
		              <h3></h3>
		              <p>
                  <?php echo ucwords($single_fugitive[0]->criminal_description);?>
		              </p> <br>
		              <div class="row">
		              	<div class="col-md-6">
			              	<div align="center">
			              		<button class="btn btn-border btn-block" onclick="aggrement('report')" ><?php echo $this->lang->line('Report');?></button>
			              	</div>
		              	</div>
		              	<div class="col-md-3">

		              	</div>
		              	<div class="col-md-3">

		              	</div>
		              </div>
		            </div>
		          </div>

        		</div>
        	</div>
        </section>
      </div>
      <div class="col-sm-12 col-md-3" style="border-left: 2px solid #f1f1f1; height: 500px;">

		<div class="widget">
			<h5 class="widget-title line-bottom">Other Wanted</h5>
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="13000">

			  <div class="carousel-inner" role="listbox">
          <?php $i=1;foreach ($criminal_posted as $row) {?>
			    <div class="item <?php if($i==1){ echo 'active';}?> box-hover-effect effect2 bg-lightest-gray wow fadeInUp maxwidth400 p-10" data-wow-duration="1.5s" data-wow-offset="10">
		            <div class="thumb"> <img class="img-responsive img-fullwidth" src="<?php echo base_url().$row->criminal_image;?>"
                  alt="Image Invisible"  style="min-width: auto; min-height: auto; max-height: 320px!important; max-width: 95%;">
		              <div class="overlay black">
		                <div class="display-table">
		                  <div class="display-table-cell">
		                    <div class="overlay-details text-center">
		                      <h4 class="text-theme-colored mt-0"><?php echo ucwords($row->criminal_name);?></h4>
		                      <p class="pl-20 pr-20"><?php echo ucwords($row->criminal_type);?></p>
		                      <a class="btn btn-gray btn-theme-colored btn-xs" href="<?php echo base_url('frontController/get_single_view?id=').$row->crdoc_id;?>">Read more</a> </div>
		                  </div>
		                </div>
		              </div>

		            </div>
		        </div>
			  <?php $i++; } ?>
<!-- <div class="load_other_fugitive"></div> -->
			  </div>
			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev" style="background-color: transparent;">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next" style="background-color: transparent;">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">የ ተጠርጣሪ ማሳወቂያ ቅጽ
        <button type="button" class="close close_report" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button></h5>
      </div>
      <form method="post" role="form" id="report_fugitive">
      <div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label"><?php echo $this->lang->line('Your Name')?></label>
            <input type="hidden" name="crdoc_id" value="<?php echo $single_fugitive[0]->crdoc_id; ?>" name="crdoc_id" id="fugitive_id">
            <input type="text" class="form-control" placeholder="<?php echo $this->lang->line('Your Name')?>" name="reporter_name" id="reporter_name" onchange="loadView()">
            <div style="color:red" class="valid_name"></div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label"><?php echo $this->lang->line('Your Phone No')?>(*)</label>
            <input type="text" class="form-control phone_valid" maxlength="10" placeholder="09---" name="reporter_phone" id="reporter_phone">
            <div style="color:red" class="valid_phone"></div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label"><?php echo $this->lang->line('Your Email')?></label>
            <input type="text" class="form-control" placeholder="<?php echo $this->lang->line('Your Email')?>" name="reporter_email" id="reporter_email">
            <div style="color:red" class="valid_email"></div>
          </div>
          <div class="form-group">
            <label for="detail_crime_reporter" class="col-form-label"><?php echo $this->lang->line('Detail Report');?></label>
            <textarea class="form-control" id="detail_crime_reporter" rows="5" placeholder="ጥቆማ ...." name="detail_crime_reporter"></textarea>
            <div style="color:red" class="valid_crime_report"></div>

          </div>
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-border" onclick="reportFugitive()"><?php echo $this->lang->line('Report')?>
      <span class="click_report_fugitive"></span></button>
      </div>
    </form>
    </div>
  </div>
</div>
