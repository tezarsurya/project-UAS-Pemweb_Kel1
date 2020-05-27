<div class="row d-flex justify-content-between border-bottom mb-3">
    <h2><?php echo $page ?></h2>
</div>
<div class="row justify-content-center mb-3">
    <table id="myTable" class="table table-bordered table-hover table-responsive table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Pengunjung</th>
                <th>Nama Pengunjung</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($row_customer->result() as $row) { ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row->kode_customer ?></td>
                    <td><?php echo $row->nama_customer ?></td>
                    <td><?php echo $row->alamat ?></td>
                    <td><?php echo $row->jenis_kelamin ?></td>
                    <td>
                        <a href="<?php echo base_url($root) ?>/view_data/detail_customer/<?php echo $row->kode_customer ?>"><button class="btn btn-sm text-white" style="background-color: #40739e;">Details <i class="fas fa-book-open"></i></button></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>