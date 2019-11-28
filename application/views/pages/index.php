

<section class="bg-lighter">
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
                <select class="form-control">
                  <option value="empty">-- Category --</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>              
            </div>

            <div class="col-lg-3">
              <div class="form-group">
                <span>Filter By</span>
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
      <li ><a style="background-color:#bf9e58;" id="<?php echo $i;?>" href="javascript:;" onclick="loadFugitive(<?php echo $i;?>)"><?php echo $i;?></a></li>
      <?php } else {?>
      <li><a href="javascript:;" id="<?php echo $i;?>" onclick="loadFugitive(<?php echo $i;?>)"><?php echo $i;?></a></li>
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
