<br>
<br>
<br>
<div id="page-wrapper">
  <div class="row">

    <div class="col-lg-12">
      <h3 class="page-header"><?php echo $title ?></h3>
    </div>

    <div class="col-lg-12">
        <form action="<?php echo base_url('inventory/i_with_c/ganti') ?>" method="post">
          id:   <input type="text" name="id"   class="form-control" value="<?php echo $id?>" disabled><br>
          Kode: <input type="text" name="kode" class="form-control" value="<?php echo $kode; ?>" required><br>
          Nama: <input type="text" name="nama" class="form-control" value="<?php echo $nama; ?>" required><br>
          Asal: <input type="text" name="asal" class="form-control" value="<?php echo $asal; ?>" required><br>

          <input type="submit" name="save" value="Simpan" class="btn btn-primary">

		      <input type="hidden" name="id" value="<?php echo $id ?>"/>
          <input type="button" value="Batal" class="btn btn-danger" onclick="javascript:history.go(-1);">
        </form>
    </div>
  </div>
</div>
