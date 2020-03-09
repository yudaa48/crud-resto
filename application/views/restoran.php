  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Jenis Restoran</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Jenis Restoran</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <a href="#modal-default" class="btn btn-primary" data-toggle="modal" data-target="#modal-default" data-backdrop="static"><i class="fa fa-plus"></i> Tambah Data POI</a>
              <table id="example2" class="table table-bordered table-hover">
                <thead><br><br>
                <tr align="center">
                  <th>No</th>
                  <th>Nama Restoran</th>
                  <th>Jenis Restoran</th>
                  <th>Alamat Restoran</th>
                  <th>Waktu Buka</th>
                  <th colspan="2">Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                    $no=1;
                    foreach($poi_resto as $t){
                      ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?= $t['nama'];?></td>
                  <td><?= $t['jenis'];?></td>
                  <td><?= $t['alamat'];?></td>
                  <td><?= $t['waktu'];?></td>
                  <td>
                    <center>
                      <button class="fa fa-edit btn btn-warning" title="Edit" data-toggle="modal" data-target="#ModalEdit<?= $t['id_poi'];?>"></button>
                  </center>
                  </td>
                  <td>
                    <center>
                      <a href="<?= base_url('awal/delete_data/').$t['id_poi'];?>" onclick="return confirm('Kamu yakin akan menghapus data <?= $t['id_poi'];?> ?');"><button class="fa fa-trash btn btn-danger" title="Hapus"></button></a>
                    </center>
                  </td>
                </tr>
                <?php 
              }
              ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data POI Google MAPS</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="<?php echo base_url().'awal/simpan_data';?>" method="post">
            <div class="col-lg-12">
              <fieldset class="form-group">
                <label class="form-label semibold" for="exampleInput">Nama Restoran</label>
                <input type="text" name="nama" class="form-control" id="exampleInput" placeholder="Nama Restoran">
              </fieldset>
              <fieldset class="form-group">
                <label class="form-label semibold" for="exampleInput">Jenis Restoran</label>
                <input type="text" name="jenis" class="form-control" id="exampleInput" placeholder="Jenis Restoran">
              </fieldset>
              <fieldset class="form-group">
                <label class="form-label semibold" for="exampleInput">Alamat Restoran</label>
                <input type="text" name="alamat" class="form-control" id="exampleInput" placeholder="Alamat Restoran">
              </fieldset>
              <fieldset class="form-group">
                <label class="form-label semibold" for="exampleInput">Waktu Buka</label>
                <input type="time" name="waktu" class="form-control" id="exampleInput" >
              </fieldset>
            </div>
        </div>
            <div class="modal-footer">
              <input type="submit" class="btn btn-primary"></input>
            </div>
          </div>
          <!-- /.modal-content -->
          </form>
        </div>
        <!-- /.modal-dialog -->
      </div> 

      <?php foreach ($poi_resto as $i) : 
                       $id=$i['id_poi'];
                       $nama=$i['nama'];
                       $jenis=$i['jenis'];
                       $alamat=$i['alamat'];
                       $waktu=$i['waktu'];
      ?>

      <div class="modal fade" id="ModalEdit<?php echo $id;?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Data POI Google Maps</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="<?php echo base_url().'awal/update_data';?>" method="post">
                <input type="hidden" name="id" class="form-group" value="<?php echo $id;?>">
                <div class="col-lg-12">
              <fieldset class="form-group">
                <label class="form-label semibold" for="exampleInput">Nama Restoran</label>
                <input type="text" name="nama" class="form-control" id="exampleInput" value="<?php echo $nama;?>">
              </fieldset>
              <fieldset class="form-group">
                <label class="form-label semibold" for="exampleInput">Jenis Restoran</label>
                <input type="text" name="jenis" class="form-control" id="exampleInput" value="<?php echo $jenis;?>" ">
              </fieldset>
              <fieldset class="form-group">
                <label class="form-label semibold" for="exampleInput">Alamat Restoran</label>
                <input type="textfield" name="alamat" class="form-control" id="exampleInput" value="<?php echo $alamat;?>">
              </fieldset>
              <fieldset class="form-group">
                <label class="form-label semibold" for="exampleInput">Waktu Buka</label>
                <input type="time" name="waktu" class="form-control" id="exampleInput" value="<?php echo $waktu;?>">
              </fieldset>
            </div>
        </div>
            <div class="modal-footer">
              <input type="submit" class="btn btn-primary"></input>
            </div>
          </div>
          </form>
        </div>
      </div>
      <?php endforeach;?>
