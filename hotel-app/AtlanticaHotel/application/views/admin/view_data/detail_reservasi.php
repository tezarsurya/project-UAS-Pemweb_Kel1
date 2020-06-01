<div class="row d-flex justify-content-between border-bottom mb-3">
    <h2><?php echo $page ?><span class="badge text-white" style="background-color: #44bd32;">ID <?php echo $id ?></span></h2>
    <a href="<?php echo base_url() ?>admin/view_data/data_reservasi"><button class="btn text-white mb-3" style="background-color: #273c75;">Data Reservasi <i class="fas fa-arrow-left"></i></button></a>
</div>
<div class="row justify-content-center d-flex mb-3">
    <div class="card w-100">
        <div class="card-body" style="background-color: #dcdde1;">
            <table class="table table-hover">
                <?php foreach ($row_reservasi->result() as $row) {
                    $diff = (strtotime($row->tgl_checkout) - strtotime($row->tgl_checkin)) / 60 / 60 / 24;
                ?>
                    <tr>
                        <th>ID Pengunjung</th>
                        <td><?php echo substr($row->kode_customer, 8) ?></td>
                    </tr>
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
                        <th>E-Mail</th>
                        <td><?php echo $row->email ?></td>
                    </tr>
                    <tr>
                        <th>Nomor Kamar</th>
                        <td><?php echo $row->no_kamar ?></td>
                    </tr>
                    <tr>
                        <th>Tipe Tempat Tidur</th>
                        <td><?php echo $row->tipe_bed ?></td>
                    </tr>
                    <tr>
                        <th>Tipe Kamar</th>
                        <td><?php echo $row->tipe_kamar ?></td>
                    </tr>
                    <tr>
                        <th>Harga</th>
                        <td><?php echo "Rp " . number_format($row->harga, 0, ',', '.') ?></td>
                    </tr>
                    <tr>
                        <th>Tanggal Check-in</th>
                        <td><?php echo date('d-m-Y', strtotime($row->tgl_checkin)) ?></td>
                    </tr>
                    <tr>
                        <th>Tanggal Check-out</th>
                        <td><?php echo date('d-m-Y', strtotime($row->tgl_checkout)) ?></td>
                    </tr>
                    <tr>
                        <th>Lama Menginap</th>
                        <td>
                            <?php echo $diff ?> malam
                        </td>
                    </tr>
                    <tr>
                        <th>Total Harga</th>
                        <td><?php echo "Rp " . number_format($row->harga * $diff, 0, ',', '.') ?></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>
                            <?php
                            if ($row->status_reservasi == "Aktif") { ?>
                                <span class="badge text-white" style="background-color: #44bd32;">Aktif</span>
                            <?php } else { ?>
                                <span class="badge text-white" style="background-color: #c23616;">Tidak Aktif</span>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Kode Resepsionis</th>
                        <td><?php echo $row->kode_recept ?></td>
                    </tr>
                    <tr>
                        <th>Nama Resepsionis</th>
                        <td><?php echo $row->nama_recept ?></td>
                    </tr>
                    <tr>
                        <td>
                            <a href="<?php echo base_url() ?>admin/view_data/detail_customer/<?php echo $row->kode_customer ?>"><button class="btn text-white" style="background-color: #273c75;"><i class="fa fa-arrow-right"></i> Menuju Detail Pengunjung</button></a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>