

<section class="bg-lighter">
  <div class="container pb-30">
    <div class="section-title title-border icon-bg">
      <div class="row">
        <div class="col-md-12">
          <input type="hidden" id="take_id_pagination" value="1">
<<<<<<< HEAD
          <h4 class="mt-0 page-title"><i class="fa fa-bookmark"></i> &nbsp;&nbsp;<?php echo $this->lang->line('Ethiopian');?> <?php echo $this->lang->line('Most');?> <?php echo $this->lang->line('Wanted Criminal And Suspects');?>
=======
          <h4 class="mt-0 page-title"><i class="fa fa-bookmark"></i> &nbsp; Ethiopian Most Wanted Criminal And Suspects
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
          </h4>
          <span class="response_success"></span>

        </div>
        <div class="col-md-12">
          <div class="row">
<<<<<<< HEAD
            <div class="col-lg-4">
              <div class="form-group">
                <span><?php echo $this->lang->line('Filter By Category');?></span>
                <select class="form-control" onchange="filterByCrimeType(this.value,'crime')" id="filter_by_crime">
                  <option value="">--Crime Category--</option>
                  <option value="all">All</option>
=======
            <div class="col-lg-3">
              <div class="form-group">
                <span>Filter By</span>
                <select class="form-control" onchange="filterByCrimeType(this.value,'crime')" id="filter_by_crime">
                  <option value="">--Crime Category--</option>
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
                  <?php foreach($crime_type as $row) {?>
                  <option value="<?php echo $row->setting_id?>"><?php echo ucwords($row->setting_crime_name);?></option>
                <?php } ?>
                </select>
              </div>
            </div>

<<<<<<< HEAD
            <div class="col-lg-4">
              <div class="form-group">
                <span><?php echo $this->lang->line('Filter By Year');?></span>
                <select class="form-control" onchange="filterByCrimeType(this.value,'year')" id="filter_by_year">
                  <option value="">-- Year --</option>
                  <option value="all">All</option>
=======
            <div class="col-lg-3">
              <div class="form-group">
                <span>Filter By</span>
                <select class="form-control" onchange="filterByCrimeType(this.value,'year')" id="filter_by_year">
                  <option value="">-- Year --</option>
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
                 <?php foreach($year as $row) {?>
                  <option  value="<?php echo $row->criminal_date;?>">
                    <?php echo $row->criminal_date;?>
                  </option>
                      <?php } ?>
                </select>
              </div>
              </div>
<<<<<<< HEAD
              <div class="col-lg-4" style="border-left: 2px solid #eee;">
                <div class="form-group">
                  <span><?php echo $this->lang->line('Filter By Name');?></span>
=======
              <div class="col-lg-3" style="border-left: 2px solid #eee;">
                <div class="form-group">
                  <span>Search By</span>
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
                  <div class="input-group">
                    <input type="text" name="" class="form-control" placeholder="Criminal And Suspect Name" id="filter_by_name">

                  <span class="input-group-addon" onclick="filterDataByName()" style="cursor:pointer">
                    <a class="mouseup_mousedown_old" ><i class="icon icon_search">
                  </i></a></span>
                </div>                </div>
              </div>

          </div>
        </div>
      </div>
    </div>
    <div class="section-content">
      <div class="row">
        <div id="load_fugitive_top_most"></div>
    <div class="col-md-12" id="loading"></div>
      </div>
<<<<<<< HEAD
<?php if($pagination['mw_count']) {?>
      <div align="left">
      <nav>
      <ul class="pagination theme-colored">
      <li>
        <a href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <?php for($i=1;$i<=$pagination['mw_count'];$i++) {?>
      <?php if($i==1) {?>
      <li ><a  id="<?php echo $i;?>" href="javascript:;" onclick="topMostWanted(<?php echo $i;?>,'all','all')"><?php echo $i;?></a></li>
      <?php } else {?>
      <li><a href="javascript:;" id="<?php echo $i;?>" onclick="topMostWanted(<?php echo $i;?>,'all','all')"><?php echo $i;?></a></li>
      <?php } } ?>
      <li>
        <a href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
      </ul>
      </nav>
    <?php } ?>
=======

>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
      </div>
    </div>

  </div>
</section>
