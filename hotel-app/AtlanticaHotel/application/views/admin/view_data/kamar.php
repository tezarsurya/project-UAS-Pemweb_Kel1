<div class="row d-flex justify-content-between border-bottom mb-3">
    <h2><?php echo $page ?><?php if (isset($id)) { ?>
        <span class="badge text-white" style="background-color: #44bd32;">Lantai <?php echo $id ?></span>
    <?php } ?>
    </h2>
    <?php if (!isset($id)) { ?>
        <a href="<?php echo base_url($root) ?>/form/form_kamar"><button class="btn text-white float-right mb-3" style="background-color: #273c75;">Tambah Data <i class="fas fa-plus-square"></i></button></a>
    <?php } ?>
</div>
<div class="row justify-content-center mb-3">
    <table id="myTable" class="table table-bordered table-hover table-responsive table-striped">
        <thead>
            <th>No Kamar</th>
            <th>Tipe Tempat Tidur</th>
            <th>Tipe Kamar</th>
            <th>Status Kamar</th>
            <th>Harga</th>
            <th>Tindakan</th>
        </thead>
        <tbody>
            <?php foreach ($row_kamar->result() as $row) { ?>
                <tr>
                    <td><?php echo $row->no_kamar ?></td>
                    <td><?php echo $row->tipe_bed ?></td>
                    <td><?php echo $row->tipe_kamar ?></td>
                    <td>
                        <?php if ($row->occupied == 'True') { ?>
                            <span class="badge text-white" style="background-color: #c23616;">Occupied</span>
                        <?php } else { ?>
                            <span class="badge text-white" style="background-color: #44bd32;">Free</span>
                        <?php } ?>
                    </td>
                    <td><?php echo "Rp " . number_format($row->harga, 0, ',', '.') ?></td>
                    <td class="d-inline-block">
                        <a href="<?php echo base_url($root) ?>/form/form_kamar/<?php echo $row->no_kamar ?>"><button class="btn btn-sm text-white mx-1" style="background-color: #44bd32; ">Edit <i class="fas fa-pencil-alt"></i></button></a>
                        <button class="btn btn-sm text-white mx-1" style="background-color: #c23616; " data-toggle='modal' data-target="#deleteModal" data-href="<?php echo base_url($root) ?>/view_data/delete_kamar/<?php echo $row->no_kamar ?>">Delete <i class="fas fa-trash-alt"></i></button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>