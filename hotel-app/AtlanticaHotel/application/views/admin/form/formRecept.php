<div class="row d-flex justify-content-between border-bottom mb-3">
    <h2><?php if (isset($id)) { ?>
            <?php echo $page ?><span class="badge text-white" style="background-color: #44bd32;"><?php echo $id ?></span>
        <?php } else {
            echo $page;
        } ?></h2>
    <?php if (isset($anchor)) { ?>
        <a href="<?php echo $anchor ?>"><button class="btn text-white mb-3" style="background-color: #273c75;">Kembali <i class="fas fa-arrow-left"></i></button></a>
    <?php } else { ?>
        <a href="<?php echo base_url($root) ?>/view_data/data_recept"><button class="btn text-white mb-3" style="background-color: #273c75;">Kembali <i class="fas fa-arrow-left"></i></button></a>
    <?php } ?>
</div>
<div class="row d-flex mb-3">
    <?php echo validation_errors() ?>
    <?php if (isset($row_recept)) {
        foreach ($row_recept->result() as $row) { ?>
            <?php echo form_open('admin/form/form_recept/' . $row->kode_recept, 'class=col-lg-12') ?>
            <div class="form-row mb-3">
                <div class="form-group col-sm-8">
                    <label for="">Nama Resepsionis</label>
                    <input type="text" class="form-control" name="nama_recept" value="<?php echo $row->nama_recept ?>" required>
                </div>
                <div class="form-group col-sm-4">
                    <label for="">Kode Resepsionis</label>
                    <input type="text" class="form-control" name="kode_recept" value="<?php echo $row->kode_recept ?>" readonly>
                </div>
            </div>

            <div class="form-row mb-3">
                <div class="form-group col-sm-4">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username" value="<?php echo $row->username ?>" required>
                </div>
                <div class="form-group col-sm-4">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" value="<?php echo base64_decode($row->password) ?>" required>
                </div>
                <div class="form-group col-sm-4">
                    <label for="">Confirm Password</label>
                    <input type="password" class="form-control" name="passconf" value="<?php echo set_value('passconf') ?>" required>
                </div>
            </div>

            <div class="form-row mb-3">
                <div class="form-group col-sm-6">
                    <label for="">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tmp_lahir" value="<?php echo $row->tmp_lahir ?>" required>
                </div>
                <div class="form-group col-sm-6">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $row->tgl_lahir ?>" required>
                </div>
            </div>

            <div class="form-row mb-3">
                <div class="form-group col-sm-5">
                    <label for="">Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group col-sm-7">
                    <label for="">Nomor Telepon</label>
                    <input type="text" class="form-control" name="no_telp" value="<?php echo $row->no_telp ?>" required>
                </div>
            </div>

            <div class="form-group">
                <label for="">Alamat</label>
                <textarea class="form-control" rows="3" name="alamat" value="<?php echo set_value('alamat') ?>" required><?php echo $row->alamat ?></textarea>
            </div>

            <button type="submit" class="btn text-white" style="background-color: #273c75;">Simpan <i class="fas fa-save"></i></button>
            </form>
        <?php }
    } else { ?>
        <?php echo form_open('admin/form/form_recept', 'class=col-lg-12') ?>
        <div class="form-row mb-3">
            <div class="form-group col-sm-8">
                <label for="">Nama Resepsionis</label>
                <input type="text" class="form-control" name="nama_recept" value="<?php echo set_value('nama_recept') ?>" required>
            </div>
            <div class="form-group col-sm-4">
                <label for="">Kode Resepsionis</label>
                <input type="text" class="form-control" name="kode_recept" value="<?php echo set_value('koce_recept') ?>" required>
            </div>
        </div>

        <div class="form-row mb-3">
            <div class="form-group col-sm-4">
                <label for="">Username</label>
                <input type="text" class="form-control" name="username" value="<?php echo set_value('username') ?>" required>
            </div>
            <div class="form-group col-sm-4">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password" value="<?php echo set_value('password') ?>" required>
            </div>
            <div class="form-group col-sm-4">
                <label for="">Confirm Password</label>
                <input type="password" class="form-control" name="passconf" value="<?php echo set_value('passconf') ?>" required>
            </div>
        </div>

        <div class="form-row mb-3">
            <div class="form-group col-sm-6">
                <label for="">Tempat Lahir</label>
                <input type="text" class="form-control" name="tmp_lahir" value="<?php echo set_value('tmp_lahir') ?>" required>
            </div>
            <div class="form-group col-sm-6">
                <label for="">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgl_lahir" value="<?php echo set_value('tgl_lahir') ?>" required>
            </div>
        </div>

        <div class="form-row mb-3">
            <div class="form-group col-sm-5">
                <label for="">Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group col-sm-7">
                <label for="">Nomor Telepon</label>
                <input type="text" class="form-control" name="no_telp" value="<?php echo set_value('no_telp') ?>" required>
            </div>
        </div>

        <div class="form-group">
            <label for="">Alamat</label>
            <textarea class="form-control" rows="3" name="alamat" value="<?php echo set_value('alamat') ?>" required></textarea>
        </div>

        <button type="submit" class="btn text-white" style="background-color: #273c75;">Simpan <i class="fas fa-save"></i></button>
        </form>
    <?php } ?>
</div>