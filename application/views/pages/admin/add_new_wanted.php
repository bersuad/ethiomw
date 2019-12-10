<?php if($this->session->userdata('success')) {?>
<div class="col-md-9">
<div class="alert alert-info alert-dismissable">
  <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
<?php echo $this->session->userdata('success');?>
</div>
</div>
<?php $this->session->unset_userdata('success'); } ?>
<?php if($this->session->userdata('error')) {?>
<div class="col-md-9">
<div class="alert alert-danger alert-dismissable">
  <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
  <?php echo $this->session->userdata('error');?>
</div>
</div>
<?php $this->session->unset_userdata('error'); } ?>
    <div class="col-lg-9" style="overflow: auto;">
        <div class="panel panel-default">
            <div class="panel-heading main-color-bg">
                <h3 class="panel-title" align="center"><?php echo ($this->session->userdata('lang')=='amh'?'አዲስ ወንጀለኞችና ተጠርጣሪዎች':"Add New Criminal And Suspects");?></h3>
            </div>
            <section  style="margin-top: 1%;">
				<div class="panel-body">
					<div class="section-content">
					  	<form action="<?php echo base_url('criminal/registerCriminal/')?>" method='post' enctype='multipart/form-data'>
				        	<div class="row">
                    <div class="col-md-3">
                      <div class="form-group">

                        <img data-rotate="90" id="dri_pro" src="<?php echo base_url('assets/default_logo.png');?>"
                         class="img-fullwidth img-responsive" style="min-width: auto; min-height: auto; max-height: 150px!important; max-width: 100%;">
                      <br>
              <div class="image-upload">
              <label for="images_vehicleh" class="vd_bg-blue col-md-10" style="cursor: pointer;">
              <sapn class ="icon-upload " style="border-radius:10px;border:1px solid;"> &nbsp;<?php echo ($this->session->userdata('lang')=='amh'?'የወንጀለኛው ፎቶ':"Criminal Photo");?> &nbsp; </span></label>

              <input type="file" required="required" id="images_vehicleh" name="criminal_image" accept="image/*"  onchange="driver(this)"
              class="form-control" oninput="image(this.value)"  value="" />
              </div>
                    <!-- <input type="file"  id="recipient-image"  placeholder="Height" class="form-control" name="criminal_image" value=""> -->
                  </div>
                    </div>
				        		<div class="col-md-5">
				        			<div class="form-group">
										<label for="recipient-name"><?php echo ($this->session->userdata('lang')=='amh'?'ሙሉ ስም':"Name");?>(*)</label>
										<input type="text" class="form-control" id="recipient-name" placeholder="<?php echo ($this->session->userdata('lang')=='amh'?'ምሳሌ':"e.g");?> <?php echo ($this->session->userdata('lang')=='amh'?'ዮሃን ጃክ ቶማስ':"John Jack Tom");?>" name="criminal_name"
                    value="<?php echo set_value('criminal_name') ?>">
                    <span style="color: red;"><?php echo form_error('criminal_name','<span style="color:red">','</span>') ?></span>

									</div>
				        		</div>
				        		<div class="col-md-4">
				        			<div class="form-group">
										<label for="recipient-gender" class="col-form-label"><?php echo ($this->session->userdata('lang')=='amh'?'ፆታ':"Gender");?></label>
										<select class="form-control" name="criminal_gender" id="recipient-gender">
											<option value="empty"><?php echo ($this->session->userdata('lang')=='amh'?'--ፆታ ይምረጡ--':"-- Select Gender --");?></option>
											<option><?php echo ($this->session->userdata('lang')=='amh'?'ወንድ':"Male");?></option>
											<option><?php echo ($this->session->userdata('lang')=='amh'?'ሴት':"Female");?></option>
										</select>
                    <span style="color: red;"><?php echo form_error('criminal_gender','<span style="color:red">','</span>') ?></span>

									</div>
				        		</div>
				        		<div class="col-md-5">
				        			<div class="form-group">
										<label for="recipient-dob" class="col-form-label"><?php echo ($this->session->userdata('lang')=='amh'?'የዕድሜ ክልል':"Age Range");?></label>
                    <select class="form-control" id="recipient-dob" name="criminal_birthdate">
                     <option value="10-20 Years"><?php echo ($this->session->userdata('lang')=='amh'?'10-20 ዓመታት':"10-20 Years");?></option>
                     <option value="20-30 Years"><?php echo ($this->session->userdata('lang')=='amh'?'20-30 ዓመታት':"20-30 Years");?></option>
                     <option value="30-40 Years"><?php echo ($this->session->userdata('lang')=='amh'?'30-40 ዓመታት':"30-40 Years");?></option>
                     <option value="40-50 Years"><?php echo ($this->session->userdata('lang')=='amh'?'40-50 ዓመታት':"40-50 Years");?></option>
                     <option value="50-60 Years"><?php echo ($this->session->userdata('lang')=='amh'?'50-60 ዓመታት':"50-60 Years");?></option>
                     <option value="60-70 Years"><?php echo ($this->session->userdata('lang')=='amh'?'60-70 ዓመታት':"60-70 Years");?></option>
                     <option value="70-80 Years"><?php echo ($this->session->userdata('lang')=='amh'?'70-80 ዓመታት':"70-80 Years");?></option>
                     <option value="Above 80 Years"><?php echo ($this->session->userdata('lang')=='amh'?'80 ዓመታት በላይ':"Above 80 Years");?></option>
                    </select>
                    <span style="color: red;"><?php echo form_error('criminal_birthdate','<span style="color:red">','</span>') ?></span>

									</div>
				        		</div>
				        		<div class="col-md-4">
				        			<div class="form-group">
										<label for="recipient-color" class="col-form-label"><?php echo ($this->session->userdata('lang')=='amh'?'የዓይን ቀለም':"Eye Color");?></label>
                    <select id="recipient-color" class="form-control" placeholder="Eye Color"
                    name="criminal_eye_color" >
                    <option value="Brown">Brown</option>
                    <option value="Blue">Blue</option>
                    <option value="Green">Green</option>
                    <option value="Gray">Gray</option>
                    <option value="Amber">Amber</option>
                    <option value="Hazel">Hazel</option>
                    <option value="Red and Violet">Red and Violet</option>
                    <option value="Spectrum of eye color">Spectrum of eye color</option>
                  </select>
                    <span style="color: red;"><?php echo form_error('criminal_eye_color','<span style="color:red">','</span>') ?></span>
                  </div>
				        		</div>
				        		<div class="col-md-5">
				        			<div class="form-group">
										<label for="recipient-height" class="col-form-label"><?php echo ($this->session->userdata('lang')=='amh'?'ቁመት':"Height");?></label>
										<input type="text" id="recipient-height"
                     placeholder="<?php echo ($this->session->userdata('lang')=='amh'?'ምሳሌ':"e.g");?> 1.50 cm" class="form-control" name="criminal_height"
                     value="<?php echo set_value('criminal_height') ?>">
                    <span style="color: red;"><?php echo form_error('criminal_height','<span style="color:red">','</span>') ?></span>

									</div>
				        		</div>
				        		<div class="col-md-4">
				        			<div class="form-group">
										<label for="recipient-nation" class="col-form-label"><?php echo ($this->session->userdata('lang')=='amh'?'ዜግነት':"Nationality");?></label>
										<input type="text" id="recipient-nation" class="form-control"
                     placeholder="Nationality" name="criminal_nationality" value="<?php echo ($this->session->userdata('lang')=='amh'?'ኢትዮጵያዊ':"Ethiopian");?>">
                    <span style="color: red;"><?php echo form_error('criminal_nationality','<span style="color:red">','</span>') ?></span>

									</div>
				        		</div>
				        		<div class="col-md-4">
				        			<div class="form-group">
										<label for="recipient-case" class="col-form-label"><?php echo ($this->session->userdata('lang')=='amh'?'የጉዳዩ':"Case State");?></label>
										<input type="text" id="recipient-case" class="form-control"
                     placeholder="<?php echo ($this->session->userdata('lang')=='amh'?'ምሳሌ':"e.g");?> <?php echo ($this->session->userdata('lang')=='amh'?'በምርመራ ላይ':"On Investigation");?>" name="criminal_state_ofcase" value="<?php echo set_value('criminal_state_ofcase') ?>">
                    <span style="color: red;"><?php echo form_error('criminal_state_ofcase','<span style="color:red">','</span>') ?></span>
                  </div>
				        		</div>
				        		<div class="col-md-4">
				        			<div class="form-group">
										<label for="recipient-type" class="col-form-label"><?php echo ($this->session->userdata('lang')=='amh'?'የወንጀል አይነት':"Crime Category");?></label>
                      <select id="recipient-type" class="form-control" name="criminal_type">
                     <option value=""><?php echo ($this->session->userdata('lang')=='amh'?'የወንጀል አይነት ይምረጡ':"Select Crime Type");?></option>
                     <?php foreach($crime_type as $crime) {?>
                     <option value="<?php echo $crime->setting_id;?>"><?php echo $crime->setting_crime_name;?></option>
                   <?php } ?>
                      </select>
                      <span style="color: red;">

                      <?php echo form_error('criminal_type','<span style="color:red">','</span>') ?></span>

									</div>
				        		</div>
				        		<div class="col-md-4">
				        			<div class="form-group">
										<label for="recipient-language" class="col-form-label"><?php echo ($this->session->userdata('lang')=='amh'?'የሚናገረው ቋንቋ':"Speaking Language");?></label>
										<input type="text" id="recipient-language" class="form-control"
                     placeholder="<?php echo ($this->session->userdata('lang')=='amh'?'ምሳሌ':"e.g");?> Amharic,Afaan Oromoo,---" name="criminal_language" value="<?php echo set_value('criminal_language') ?>">
                    <span style="color: red;"><?php echo form_error('criminal_language','<span style="color:red">','</span>') ?></span>

                	</div>
				        		</div>

				        		<div class="col-md-6">
				        			<div class="form-group">
										<label for="recipient-reward" class="col-form-label"><?php echo ($this->session->userdata('lang')=='amh'?'ወሮታ ክፍያ':"Reward Fee");?></label>
										<input type="text" id="recipient-reward" placeholder="<?php echo ($this->session->userdata('lang')=='amh'?'ምሳሌ':"e.g");?> 500" class="form-control phone_valid" name="criminal_reward"
                    value="<?php echo set_value('criminal_reward') ?>">
                    <span style="color: red;"><?php echo form_error('criminal_reward','<span style="color:red">','</span>') ?></span>

                  </div>
				        		</div>
                    <div class="col-md-6">
                      <div class="form-group">
                    <label for="recipient-reward" class="col-form-label"><?php echo ($this->session->userdata('lang')=='amh'?'የአካል ገጽታ':"Phyisical Apperance");?></label>
                    <input type="text" id="recipient-reward" placeholder="<?php echo ($this->session->userdata('lang')=='amh'?'ምሳሌ':"e.g");?> <?php echo ($this->session->userdata('lang')=='amh'?'የአካል ገጽታ':"Armed,---");?>" class="form-control" name="criminal_identifier"
                    value="<?php echo set_value('criminal_identifier') ?>">
                    <span style="color: red;"><?php echo form_error('criminal_reward','<span style="color:red">','</span>') ?></span>

                  </div>
                    </div>

				        		<div class="col-md-12">
						          <div class="form-group">
						            <label for="editor2" class="col-form-label"><?php echo ($this->session->userdata('lang')=='amh'?'ዝርዝር':"Description");?></label>
						            <textarea id="editor2"   placeholder="Add body" class="form-control" rows="5" name="criminal_description"></textarea>
						          </div>
				        		</div>
				        		<div class="col-md-4">

				        		</div>
				        		<div class="col-md-4">
				        			<button type="submit" class="btn btn-dark btn-block"><?php echo ($this->session->userdata('lang')=='amh'?'አስቀምጥ':"Save");?></button>
				        		</div>
				        		<div class="col-md-4">

				        		</div>
				        	</div>
				        </form>
					</div>
				</div>
			</section>
        </div>
    </div>
