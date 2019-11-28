
            <div class="col-md-9" style="margin-top:-45px">
              <h4>All Reported Criminal And Suspects</h4>
                <div id="myTabContent2" class="tab-content">
                    <div class="tab-pane fade in active" id="home2">
                        <div class="row">
                            <div class="section-content">
                                <div class="row multi-row-clearfix" >

                                <?php foreach($reporter as $key) {?>
                                    <div class="col-sm-6">
                                      <div class="icon-box iconbox-theme-colored bg-lighter" style="margin-bottom:10px;height:40vh" >
                                        <div class="row">
                                          <div class="col-md-4">
                                            <img class="img-responsive img-fullwidth" src="<?php echo base_url().$key->criminal_image;?>" alt="featured project"
                                            style="padding-left:35% ;min-width: auto; min-height: auto; max-height: 100px!important; max-width: 100%;">
                                          </div>
                                          <div class="col-md-8" style="margin-top: -3%;">
                                            <h5 class="icon-box-title"><?php echo ucwords($key->criminal_name);?></h5>
                                            <h6 class="icon-box-title"><?php echo ucwords($key->criminal_state_ofcase);?></h6>
                                          </div>
                                        </div>
                                        <table class="table" style="border:none;">
                                          <tbody style="border:none;">
                                              <tr>
                                                  <th scope="row">Reporter:</th>
                                                  <td><?php echo ucwords($key->reporter_name);?></td>
                                               </tr>
                                               <tr>
                                                  <th scope="row">Phone N<sup><u>o</u></sup></th>
                                                  <td><?php echo $key->reporter_phone;?></td>
                                              </tr>
                                               <tr>
                                                  <th scope="row">Email</th>
                                                  <td><?php echo $key->reporter_email;?></td>
                                              </tr>
                                              <tr style="cursor:pointer" class="read_more" data-read="<?php echo $key->detail_crime_reporter;?>">
                                                  <th>Message</th>
                                                  <td><p style="text-align: justify;" class="add_message" >
                                                    <?php echo substr($key->detail_crime_reporter,0,50);?>
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
                    </div>
                    <div align="left">
                      <nav>
                        <ul class="pagination theme-colored">
                          <li>
                            <a href="javascript:;" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                            </a>
                          </li>
                          <?php for($i=1;$i<=$pagination_page;$i++) {?>
                            <?php if($i==1) {?>
                          <li ><a id="<?php echo $i;?>" href="<?php echo base_url('pages/all_reported?page='.$i);?>">
                            <?php echo $i;?></a></li>
                          <li>
                          <?php } else {?>
                            <li><a id="<?php echo $i;?>"  class="pagin" href="<?php echo base_url('pages/all_reported?page='.$i);?>"><?php echo $i;?></a></li>
                          <?php } } ?>
                            <li>
                            <a href="javascript:;" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                            </a>
                          </li>
                        </ul>
                      </nav>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <script>
    $(function(){
    var ofset='<?php echo $_GET['page'];?>';

    $('#'+ofset).css('background-color','#bf9e58');
    })
    </script>
