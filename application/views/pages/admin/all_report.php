
            <div class="col-md-9" style="margin-top:-45px">
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
              <div class="row">
                <br>
                <div class="col-md-8">
                  <h4>All Reported Criminal And Suspects</h4>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
<<<<<<< HEAD
                    <div class="input-group">
                    <input type="text" id="automplete-6"
                    value="<?php if(isset($_GET['suspects_name'])){echo $_GET['suspects_name'];}?>"

                    name="suspects_name" class="form-control" placeholder="Search by criminal and suspects name">
                    <span class="input-group-addon" style="cursor:pointer" onclick="reloadPage()">Search</span>
                  </div>
                  </div>
                </div>
              </div>
           
=======
                <span>Filter By</span>
                <select class="form-control" onchange="filterByCrimeType(this.value,'crime')" id="filter_by_crime">
                  <option value="">--Crime Category--</option>
                  <?php foreach($crime_type as $row) {?>
                  <option value="<?php echo $row->setting_id?>"><?php echo ucwords($row->setting_crime_name);?></option>
                <?php } ?>
                </select>
              </div>
                </div>
              </div>
=======
              <h4>All Reported Criminal And Suspects</h4>
>>>>>>> 985f3f7a903ca11b74eae8fd99c9d3d3fc9280b3
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
                <div id="myTabContent2" class="tab-content">
                    <div class="tab-pane fade in active" id="home2">
                        <div class="row">
                            <div class="section-content">
                                <div class="row multi-row-clearfix" >
<<<<<<< HEAD
                                <?php if($reporter) {?>
=======

>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
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
<<<<<<< HEAD

                                              </tr>
                                          </tbody>
                                      </table>

                                      </div>
                                    </div>
                                  <?php } } else {?>
                                    <div class="col-md-12">
                                    <div class="alert alert-success alert-dismissable">
                                    Criminal and suspects report does not exist!
                                    </div>
                                    </div>
                                  <?php }  ?>
=======

                                              </tr>
                                          </tbody>
                                      </table>

                                      </div>
                                    </div>
                                  <?php } ?>
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if(!isset($_GET['suspects_id'])) {?>
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
<<<<<<< HEAD
                  <?php } ?>
=======

>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60

                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
     <link href = "<?php echo base_url()?>/autocomplete/theme.css" rel = "stylesheet">
  
 <script src = "<?php echo base_url()?>/autocomplete/jquery-ui.js"></script>
     <script>
     function reloadPage(){
       if($("#automplete-6" ).val()){
window.location.reload(false);
 }
 else{
  $("#automplete-6" ).css('border-color','red'); 
 }
     }
       $(function() {
          $( "#automplete-6" ).autocomplete({
             minLength: 2,
             source: '<?php echo base_url('pages/takeSuspectsName');?>',
             select: function( event, ui ) {
                $( "#automplete-6" ).val(ui.item.label);
                window.location.href="<?php echo base_url('pages/all_reported?page='.$_GET['page']);?>"+
                '&suspects_id='+ui.item.id+'&suspects_name='+ui.item.label;
               // alert(ui.item.id);
                return false;
             }
          })
$( "#automplete-6" ).autocomplete("option", "position",{ my : "right+1 top+45", at: "right top" })
       });
    </script>
=======
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
    <script>
    $(function(){
    var ofset='<?php echo $_GET['page'];?>';

    $('#'+ofset).css('background-color','#bf9e58');
    })
    </script>
