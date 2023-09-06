<!-- ======= Hero Section ======= -->
<section id="hero" class="team">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
        <div class="kotak">
          <div class="row" data-aos="fade-left">
            <div class="col-md-12 text-center">
              <h1>Daftar Santri Miftahul Jannah</h1>
              <hr>
            </div>

            <table id="example1" class="display table table-bordered table-sm" cellspacing="0" width="100%">
            <thead>
          <tr class="bg-info">
            <th width="5%">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-info btn-sm checkbox-toggle"><i class="far fa-square"></i>
                </button>
              </div>
            </th>
            <hr>
            <th width="8%">Nama</th>
            <th width="30%">Alamat</th>
            <th width="15%">No Telepon</th>
            <!-- <th width="5%">STATUS</th>  -->
            <!-- <th width="7%">STOK</th> -->
            <!-- <th width="20%">Action</th> -->
          </tr>
        </thead><tbody>

<?php $i=1; foreach($videos as $video) { ?>

    <td class="text-center">
    <div class="icheck-primary">
              <input type="checkbox" class="icheckbox_flat-blue " name="id_video[]" value="<?php echo $video->id_video ?>" id="check<?php echo $i ?>">
               <label for="check<?php echo $i ?>"></label>
    </div>
</td>

<td><?php echo $video->judul ?></td>
<td><small><?php echo $video->keterangan ?></small></td>
<td><?php echo $video->video ?>
</td>
<!-- <td>
    <div class="btn-group">
    <a href="{{ asset('admin/video/edit/'.$video->id_video) }}" 
      class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>

      <a href="{{ asset('admin/video/delete/'.$video->id_video) }}" class="btn btn-danger btn-sm  delete-link">
        <i class="fa fa-trash"></i></a>
    </div>

</td> -->
</tr>

<?php $i++; } ?>

</tbody></table>

          <div class="col-md-12">
            <br><br>
            <hr>
                <p class="text-center">
                  {{ $videos->links() }}
                </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>