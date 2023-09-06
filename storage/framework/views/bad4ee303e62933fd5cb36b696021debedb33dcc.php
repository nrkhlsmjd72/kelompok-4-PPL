<button class="btn btn-success" data-toggle="modal" data-target="#Tambah">
    <i class="fa fa-plus"></i> Tambah Baru
</button>
<div class="modal fade" id="Tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
	<h4 class="modal-title" id="myModalLabel">Tambah data?</h4>
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
</div>
<div class="modal-body">
    
<form action="<?php echo e(url('admin/kategori_produk/tambah')); ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
<?php echo e(csrf_field()); ?>


<div class="form-group row">
	<label class="col-md-3">Upload Gambar Kategori</label>
	<div class="col-md-9">
		<input type="file" name="gambar" class="form-control" placeholder="Upload Gambar" value="" required>
		<?php if($errors->has('gambar')): ?>
	      	<span class="text-danger"><?php echo e($errors->first('gambar')); ?></span>
	    <?php endif; ?>  
	</div>
</div>

<div class="form-group row">
	<label class="col-md-3">Nama Kategori</label>
	<div class="col-md-9">
		<input type="text" name="nama_kategori_produk" class="form-control" placeholder="Nama kategori berita" value="" required>
		<?php if($errors->has('nama_kategori_produk')): ?>
	      	<span class="text-danger"><?php echo e($errors->first('nama_kategori_produk')); ?></span>
	    <?php endif; ?>  
	</div>
</div>

<div class="form-group row">
	<label class="col-md-3">Keterangan</label>
	<div class="col-md-9">
		<textarea name="keterangan" class="form-control simple" placeholder="Keterangan"></textarea>
		<?php if($errors->has('keterangan')): ?>
	      	<span class="text-danger"><?php echo e($errors->first('keterangan')); ?></span>
	    <?php endif; ?>  
	</div>
</div>

<div class="form-group row">
	<label class="col-md-3">Nomor urut</label>
	<div class="col-md-9">
<input type="number" name="urutan" class="form-control" placeholder="Urutan" value="" required>
</div>
</div>

<div class="form-group row">
	<label class="col-md-3"></label>
	<div class="col-md-9">
<div class="btn-group">
<input type="submit" name="submit" class="btn btn-success " value="Simpan Data">
<button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
</div>
</div>
</div>
<div class="clearfix"></div>

</form>

</div>
</div>
</div>
</div>
<?php /**PATH C:\xampp\htdocs\TA_PPL\resources\views/admin/kategori_produk/tambah.blade.php ENDPATH**/ ?>