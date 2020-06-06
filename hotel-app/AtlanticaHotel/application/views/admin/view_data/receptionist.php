<div class="row d-flex justify-content-between border-bottom mb-3">
    <h2><?php echo $page ?></h2>
    <a href="<?php echo base_url($root) ?>/form/form_recept"><button class="btn text-white" style="background-color: #273c75;">Tambah Data <i class="fas fa-plus-square"></i></button></a>
</div>
<div class="row justify-content-center mb-3">
    <table id="myTable" class="table table-bordered table-hover table-responsive table-striped">
        <thead>
            <tr>
                <td>Kode Resepsionis</td>
                <td>Nama Resepsionis</td>
                <td>Username</td>
                <td>Tindakan</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($row_recept->result() as $row) { ?>
                <tr>
                    <td><?php echo $row->kode_recept ?></td>
                    <td><?php echo $row->nama_recept ?></td>
                    <td><?php echo $row->username ?></td>
                    <td>
                        <a href="<?php echo base_url($root) ?>/view_data/detail_recept/<?php echo $row->kode_recept ?>"><button class="btn btn-sm text-white" style="background-color: #40739e;">Details <i class="fas fa-book-open"></i></button></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>