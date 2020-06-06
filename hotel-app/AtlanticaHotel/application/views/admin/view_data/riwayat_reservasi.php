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
                <th>No Telepon</th>
                <th>No Kamar</th>
                <th>Tanggal Check-in</th>
                <th>Tanggal Checkout</th>
                <th>Kode Resepsionis</th>
                <th>Status Reservasi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($row_reservasi->result() as $row) { ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row->kode_customer ?></td>
                    <td><?php echo $row->nama_customer ?></td>
                    <td><?php echo $row->no_telp ?></td>
                    <td><?php echo $row->no_kamar ?></td>
                    <td><?php echo $row->tgl_checkin ?></td>
                    <td><?php echo $row->tgl_checkout ?></td>
                    <td><?php echo $row->kode_recept ?></td>
                    <td>
                        <?php
                        if ($row->status_reservasi == "Aktif") { ?>
                            <span class="badge text-white" style="background-color: #44bd32;">Aktif</span>
                        <?php } else { ?>
                            <span class="badge text-white" style="background-color: #c23616;">Tidak Aktif</span>
                        <?php } ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>