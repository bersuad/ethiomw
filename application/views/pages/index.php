

<section class="bg-lighter" style="background-color:#ffffff">
  <div class="container pb-30">
    <div class="section-title title-border icon-bg">
      <div class="row">
        <div class="col-md-12">
          <input type="hidden" id="take_id_pagination" value="1">
          <h4 class="mt-0 page-title"><i class="fa fa-bookmark"></i> &nbsp; Ethiopian Most Wanted Criminal And Suspects
          </h4>
          <span class="response_success"></span>

        </div>
        <div class="col-md-12">
          <div class="row">
            <div class="col-lg-3">
              <div class="form-group">
                <span>Filter By</span>
<<<<<<< HEAD
                <select class="form-control" onchange="filterByCrimeType(this.value,'crime')" id="filter_by_crime">
                  <option value="">--Crime Category--</option>
                  <?php foreach($crime_type as $row) {?>
                  <option value="<?php echo $row->setting_id?>"><?php echo ucwords($row->setting_crime_name);?></option>
                <?php } ?>
                </select>
              </div>
=======
                <select class="form-control">
                  <option value="empty">-- Category --</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>              
>>>>>>> 985f3f7a903ca11b74eae8fd99c9d3d3fc9280b3
            </div>

            <div class="col-lg-3">
              <div class="form-group">
                <span>Filter By</span>
<<<<<<< HEAD
                <select class="form-control" onchange="filterByCrimeType(this.value,'year')" id="filter_by_year">
                  <option value="">-- Year --</option>
                 <?php foreach($year as $row) {?>
                  <option  value="<?php echo $row->criminal_date;?>">
                    <?php echo $row->criminal_date;?>
                  </option>
<?php } ?>
                </select>
              </div>
              </div>
              <div class="col-lg-3" style="border-left: 2px solid #eee;">
                <div class="form-group">
                  <span>Search By</span>
                  <div class="input-group">
                    <input type="text" name="" class="form-control" placeholder="Criminal And Suspects Name" id="filter_by_name">

                  <span class="input-group-addon" onclick="filterDataByName()" style="cursor:pointer">
                    <a class="mouseup_mousedown_old" ><i class="icon icon_search">
                  </i></a></span>
                </div>
                </div>
              </div>

=======
                <select class="form-control">
                  <option value="empty">-- Year --</option>
                  <option>2019</option>
                  <option>2018</option>
                  <option>2017</option>
                </select>
              </div>
              </div> 
              <div class="col-lg-3" style="border-left: 2px solid #eee;">
                <div class="form-group">
                  <span>Search By</span>
                  <input type="text" name="" class="form-control" placeholder="Criminal Name">
                </div>              
              </div>
              <div class="col-lg-3">
              <div class="form-group">
                <span> </span>
                <button type="submit" class="btn btn-border form-control" style="margin-top: 8.5%;">Serach</button>
              </div>              
            </div>
>>>>>>> 985f3f7a903ca11b74eae8fd99c9d3d3fc9280b3
          </div>
        </div>
      </div>
    </div>
    <div class="section-content">
      <div class="row">
        <div id="load_fugitive"></div>
    <div class="col-md-12" id="loading"></div>
      </div>
      <?php if($pagination['posted_count']) {?>
      <div align="left">
      <nav>
      <ul class="pagination theme-colored">
      <li>
        <a href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <?php for($i=1;$i<=$pagination['posted_count'];$i++) {?>
      <?php if($i==1) {?>
<<<<<<< HEAD
      <li ><a style="background-color:#bf9e58;" id="<?php echo $i;?>" href="javascript:;" onclick="loadFugitive(<?php echo $i;?>,'all','all')"><?php echo $i;?></a></li>
      <?php } else {?>
      <li><a href="javascript:;" id="<?php echo $i;?>" onclick="loadFugitive(<?php echo $i;?>,'all','all')"><?php echo $i;?></a></li>
=======
      <li ><a style="background-color:#bf9e58;" id="<?php echo $i;?>" href="javascript:;" onclick="loadFugitive(<?php echo $i;?>)"><?php echo $i;?></a></li>
      <?php } else {?>
      <li><a href="javascript:;" id="<?php echo $i;?>" onclick="loadFugitive(<?php echo $i;?>)"><?php echo $i;?></a></li>
>>>>>>> 985f3f7a903ca11b74eae8fd99c9d3d3fc9280b3
      <?php } } ?>
      <li>
        <a href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
      </ul>
      </nav>
    <?php } ?>
      </div>
    </div>

  </div>
</section>
<<<<<<< HEAD
<script>


</script>
=======
>>>>>>> 985f3f7a903ca11b74eae8fd99c9d3d3fc9280b3
