  <?php if($this->session->flashdata('success')):?>
    &nbsp;<div class="alert alert success">
      <a href="#" class="close" data-dismiss="alert">&times;</a>
      <strong><?php echo $this->session->flashdata('success'); ?></strong>
    </div>
  <?php elseif($this->session->flashdata('error')):?>
    &nbsp;<div class="alert alert-warning">
      <a href="#" class="close" data-dismiss="alert">&times;</a>
      <strong><?php echo $this->session->flashdata('error'); ?></strong>
    </div>
  <?php endif; ?>

<div id="page-wrapper">
<br>
  <div class="row">
    <br>
    <br>
    <div class="col-lg-12">
      <ol class="breadcrumb my-3">
        <li class="breadcrumb-item"><a href="<?php echo base_url()?>"><i class="glyphicon glyphicon-home"></i></a></li>
        <li class="breadcrumb-item active"><?php echo $title ?></li>
      </ol>
    </div>
    <div class="col-lg-12">
     <div class="panel panel-info">
      <div class="panel-heading"> Data Barang
       <div class="tombol-kanan">
        <a class="btn btn-success btn-sm" data-toggle="modal" data-target="#tambah"><i class="glyphicon glyphicon-plus"></i> &nbsp;&nbsp;Create</a>
       </div>
      </div>
     </div>
    </div>

    <div class="col-lg-12">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Kode</th>
              <th>Asal</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=1; ?>
            <?php foreach($table as $row): ?>
              <tr>
                <td><center><?php echo $no++; ?></center></td>
                <td><center><?php echo $row->nama; ?></center></td>
                <td><center><?php echo $row->kode; ?></center></td>
                <td><center><?php echo $row->asal; ?></center></td>
                <td>
                  <center>
                    <a class="btn btn-warning btn-sm" href="i_with_c/ganti/<?php echo $row->id;?>">Update</a>
                    <a class="btn btn-danger btn-sm" onclick="return confirm('are you sure')" href="i_with_c/hapus/<?php echo $row->id ?>"> Delete</a>
                  </center>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

 <!-- MODAL tambah-->
  <div class="modal fade" id="tambah" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <?php echo form_open('inventory/i_with_c/tambah', 'class="myForm"'); ?>
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
          <h4 class="modal-title"><?php echo $title?></h4>
        </div>

        <div class="modal-body">
          <div class="row">
            <div class="col-xs-3">
              <input type="text" class="form-control" placeholder="Kode" name="ko" required>
            </div>
            <div class="col-xs-5">
              <input type="text" class="form-control" placeholder="Nama Barang" name="na" required>
            </div>
            <div class="col-xs-4">
              <input type="text" class="form-control" value="Gudang Batam" name="as" required>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <input type="submit" class="btn btn-primary" name="tambah" value="Tambah">
        </div>

      </div>
      <?php echo form_close(); ?>
    </div>
  </div>


<script src="<?= base_url() ?>assets/js/view/iwithc.js"></script>
