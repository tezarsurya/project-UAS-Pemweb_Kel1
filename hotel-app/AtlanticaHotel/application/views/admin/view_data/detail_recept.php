<div class="row d-flex justify-content-between border-bottom mb-3">
    <h2><?php echo $page ?><span class="badge text-white" style="background-color: #44bd32;"><?php echo $id ?></span></h2>
    <a href="<?php echo base_url() ?>admin/view_data/data_recept"><button class="btn text-white mb-3" style="background-color: #273c75;">Data Resepsionis <i class="fas fa-arrow-left    "></i></i></button></a>
</div>
<div class="row justify-content-center d-flex mb-3">
    <div class="card w-100">
        <div class="card-body" style="background-color: #dcdde1;">
            <table class="table table-hover">
                <?php foreach ($row_recept->result() as $row) { ?>
                    <tr>
                        <th>Kode Resepsionis</th>
                        <td><?php echo $row->kode_recept ?></td>
                    </tr>
                    <tr>
<<<<<<< HEAD
                        <th>Username</th>
                        <td><?php echo $row->username ?></td>
                    </tr>
                    <tr>
=======
>>>>>>> master
                        <th>Nama Resepsionis</th>
                        <td><?php echo $row->nama_recept ?></td>
                    </tr>
                    <tr>
<<<<<<< HEAD
=======
                        <th>Username</th>
                        <td><?php echo $row->username ?></td>
                    </tr>
                    <tr>
>>>>>>> master
                        <th>Tempat Lahir</th>
                        <td><?php echo $row->tmp_lahir ?></td>
                    </tr>
                    <tr>
                        <th>Tanggal Lahir</th>
                        <td><?php echo $row->tgl_lahir ?></td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td><?php echo $row->jenis_kelamin ?></td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td><?php echo $row->alamat ?></td>
                    </tr>
                    <tr>
                        <th>Nomor Telepon</th>
                        <td><?php echo $row->no_telp ?></td>
                    </tr>
                <?php } ?>
            </table>
<<<<<<< HEAD
=======
            <div class="row mx-2">
                <a href="<?php echo base_url($root) ?>/form/form_recept/<?php echo $row->kode_recept ?>"><button class="btn text-white" style="background-color: #44bd32;">Edit Data <i class="fas fa-pencil-alt"></i></button></a>
                <button class="btn text-white mx-2" style="background-color: #c23616;" data-toggle='modal' data-target="#deleteModal" data-href="<?php echo base_url($root) ?>/view_data/delete_recept/<?php echo $row->kode_recept ?>">Hapus Resepsionis <i class="fas fa-trash"></i></button>
            </div>
>>>>>>> master
        </div>
    </div>
</div>