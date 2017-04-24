    <?php if($this->session->flashdata('success')):?>
      &nbsp;
      <div class="alert alert success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong><?php echo $this->session->flashdata('success'); ?></strong>
      </div>
    <?php elseif($this->session->flashdata('error')):?>
      &nbsp;
      <div class="alert alert-warning">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong><?php echo $this->session->flashdata('error'); ?></strong>
      </div>
    <?php endif; ?>
  <div id="page-wrapper">

    <div class="row">
      <br>
      <br>
      <br>
      <div class="col-lg-12">
        <ol class="breadcrumb my-3">
          <li class="breadcrumb-item"><a href="<?php echo base_url()?>"><i class="glyphicon glyphicon-home"></i></a></li>
          <li class="breadcrumb-item active"><?php echo $title ?></li>
        </ol>
      </div>
    </div>
  <div class="row">
    <div class="col-lg-12">
      <h3 class="page-header"> Dashboard</h3>
    </div>
  </div>

  <!-- error fungsi mysql_num_rows *alias ga tau caranya :v -->
    <!-- <div class="row">
      <div class="col-lg-4 col-md-8">
          <div class="panel panel-primary">
              <div class="panel-heading">
                  <div class="row">
                      <div class="col-xs-3">
                          <i class="fa fa-check-square fa-4x"></i>
                      </div>
                      <div class="col-xs-9 text-right">
                          <div class="huge"><?php ?></div>
                          <div>Daftar Barang</div>
                      </div>
                  </div>
              </div>
              <a href="<?php ?>">
                  <div class="panel-footer">
                      <span class="pull-left">View Details</span>
                      <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                      <div class="clearfix"></div>
                  </div>
              </a>
          </div>
      </div>
      <div class="col-lg-4 col-md-8">
          <div class="panel panel-green">
              <div class="panel-heading">
                  <div class="row">
                      <div class="col-xs-3">
                          <i class="fa fa-check-square-o fa-4x"></i>
                      </div>
                      <div class="col-xs-9 text-right">
                          <div class="huge">12</div>
                          <div>New Tasks!</div>
                      </div>
                  </div>
              </div>
              <a href="#">
                  <div class="panel-footer">
                      <span class="pull-left">View Details</span>
                      <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                      <div class="clearfix"></div>
                  </div>
              </a>
          </div>
      </div>
      <div class="col-lg-4 col-md-8">
          <div class="panel panel-yellow">
              <div class="panel-heading">
                  <div class="row">
                      <div class="col-xs-3">
                          <i class="fa fa-shopping-cart fa-4x"></i>
                      </div>
                      <div class="col-xs-9 text-right">
                          <div class="huge">124</div>
                          <div>New Orders!</div>
                      </div>
                  </div>
              </div>
              <a href="#">
                  <div class="panel-footer">
                      <span class="pull-left">View Details</span>
                      <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                      <div class="clearfix"></div>
                  </div>
              </a>
          </div>
      </div>
  </div> -->
  </div>
