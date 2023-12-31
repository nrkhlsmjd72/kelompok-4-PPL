<p class="text-right">
	<a href="<?php echo e(asset('admin/produk')); ?>" class="btn btn-success btn-sm">
		<i class="fa fa-backward"></i> Kembali
	</a>
</p>
<hr>
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<form action="<?php echo e(asset('admin/produk/tambah_proses')); ?>" method="post" enctype="multipart/form-data" accept-charset="utf-8">
<?php echo e(csrf_field()); ?>


<div class="form-group row">
	<label class="col-sm-3 control-label text-right">Kategori </label>
	<div class="col-sm-3">
		<select name="id_kategori_produk" class="form-control">
			<?php foreach($kategori_produk as $kategori_produk) { ?>
				<option value="<?php echo $kategori_produk->id_kategori_produk ?>"><?php echo $kategori_produk->nama_kategori_produk ?></option>
			<?php } ?>
		</select>
	</div>
	<div class="col-sm-3">
		<select name="status_produk" class="form-control">
			<option value="Publish">Publikasikan</option>
			<option value="Draft">Simpan sebagai draft</option>
		</select>
	</div>
</div>

<div class="form-group row">
	<label class="col-sm-3 control-label text-right">Nama &amp; Kode <span class="text-danger">*</span></label>
	<div class="col-sm-6">
		<input type="text" name="nama_produk" class="form-control" placeholder="Nama Produk" required value="<?php echo e(old('nama_produk')); ?>">
		<small class="text-gray">Setiap awal kata gunakan huruf capital. Misal: <strong>Informasi Gaji </strong></small>
	</div>
	<div class="col-sm-2">
		<input type="text" name="kode_produk" class="form-control" placeholder="Kode Pengumuman" required value="<?php echo e(old('kode_produk')); ?>">
		<small class="text-gray">Huruf capital. Misal: <strong>WDEV</strong></small>
	</div>
</div>



<div class="form-group row">
	<label class="col-sm-3 control-label text-right">Deskripsi Pengumuman</label>
	<div class="col-sm-9">
		<textarea name="isi" id="isi"  class="form-control konten" placeholder="Deskripsi Produk"><?php echo e(old('isi')); ?></textarea>
	</div>
</div>

<div class="form-group row">
	<label class="col-sm-3 control-label text-right">Deskripsi Ringkas &amp; Keywords Produk (untuk pencarian Google)</label>
	<div class="col-sm-4">
		<textarea name="deskripsi" class="form-control" placeholder="Deskripsi Produk"><?php echo e(old('deskripsi')); ?></textarea>
		<small class="text-gray">Penjelasan secara ringkas produk</small>
	</div>
	<div class="col-sm-4">
		<textarea name="keywords" class="form-control" placeholder="Keywords (untuk pencarian Google)"><?php echo e(old('keywords')); ?></textarea>
		<small class="text-gray">Gunakan koma sebagai pemisah, misal: <strong>web design, desain grafis, produk web, produk android</strong></small>
	</div>
</div>

<div class="form-group row">
	<label class="col-sm-3 control-label text-right">Upload gambar</label>
	<div class="col-sm-9">
		<input type="file" name="gambar" class="form-control" required placeholder="Upload gambar" id="file">
		<div id="imagePreview"></div>
	</div>
</div>




<div class="form-group row">
	<label class="col-sm-3 control-label text-right"></label>
	<div class="col-sm-9">
		<div class="form-group btn-group pull-right">
			<button type="submit" name="submit" class="btn btn-success "><i class="fa fa-save"></i> Simpan Data</button>
			<input type="reset" name="reset" class="btn btn-info " value="Reset">
		</div>
	</div>
</div>
</form>
<?php /**PATH C:\xampp\htdocs\TA_PPL\resources\views/admin/produk/tambah.blade.php ENDPATH**/ ?>