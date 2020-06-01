<div class="row d-flex justify-content-between border-bottom mb-3">
    <h2><?php echo $page ?><span class="badge text-white" style="background-color: #44bd32;"><?php echo $id ?></span></h2>
    <a href="<?php echo base_url() ?>admin/view_data/data_customer"><button class="btn text-white mb-3" style="background-color: #273c75;">Data Pengunjung <i class="fas fa-arrow-left    "></i></i></button></a>
</div>
<div class="row justify-content-center d-flex mb-3">
    <div class="card w-100">
        <div class="card-body" style="background-color: #dcdde1;">
            <table class="table table-hover">
                <?php foreach ($row_customer->result() as $row) { ?>
                    <tr>
                        <th>Kode Pengunjung</th>
                        <td><?php echo $row->kode_customer ?></td>
                    </tr>
                    <tr>
                        <th>Nomor Identitas</th>
                        <td><?php echo $row->no_identitas ?></td>
                    </tr>
                    <tr>
                        <th>Nama Pengunjung</th>
                        <td><?php echo $row->nama_customer ?></td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td><?php echo $row->alamat ?></td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td><?php echo $row->jenis_kelamin ?></td>
                    </tr>
                    <tr>
                        <th>Nomor Telepon</th>
                        <td><?php echo $row->no_telp ?></td>
                    </tr>
                    <tr>
                        <th>E-mail</th>
                        <td><?php echo $row->email ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
<div class="row d-flex justify-content-between border-bottom mb-3">
    <h2>Reservasi Pengunjung <span class="badge text-white" style="background-color: #44bd32;"><?php echo $id ?></span></h2>
</div>
<div class="row justify-content-center d-flex mb-3">
    <div class="card w-100">
        <div class="card-body" style="background-color: #dcdde1;">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Kamar</th>
                        <th>Tanggal Check-in</th>
                        <th>Tanggal Checkout</th>
                        <th>Nama Resepsionis</th>
                        <th>Status</th>
                        <th>Total Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($row_reservasi->result() as $row) {
                        $diff = (strtotime($row->tgl_checkout) - strtotime($row->tgl_checkin)) / 60 / 60 / 24; ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row->no_kamar ?></td>
                            <td><?php echo $row->tgl_checkin ?></td>
                            <td><?php echo $row->tgl_checkout ?></td>
                            <td><?php echo $row->nama_recept ?></td>
                            <td>
                                <?php
                                if ($row->status_reservasi == "Aktif") { ?>
                                    <span class="badge text-white" style="background-color: #44bd32;">Aktif</span>
                                <?php } else { ?>
                                    <span class="badge text-white" style="background-color: #c23616;">Tidak Aktif</span>
                                <?php } ?>
                            </td>
                            <td><?php echo "Rp " . number_format($row->harga * $diff, 0, ',', '.') ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>