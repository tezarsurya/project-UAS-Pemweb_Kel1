<div class="row d-flex justify-content-between border-bottom mb-3">
    <h2><?php if (isset($id)) { ?>
            <?php echo $page ?><span class="badge text-white" style="background-color: #44bd32;"><?php echo $id ?></span>
        <?php } else {
            echo $page;
        } ?></h2>
    <?php if (isset($anchor)) { ?>
        <a href="<?php echo $anchor ?>"><button class="btn text-white mb-3" style="background-color: #273c75;">Kembali <i class="fas fa-arrow-left"></i></button></a>
    <?php } else { ?>
        <a href="<?php echo base_url($root) ?>/view_data/data_kamar"><button class="btn text-white mb-3" style="background-color: #273c75;">Kembali <i class="fas fa-arrow-left"></i></button></a>
    <?php } ?>
</div>
<div class="row d-flex mb-3">
    <?php echo validation_errors() ?>
    <?php if (isset($row_kamar)) { ?>
        <?php foreach ($row_kamar->result() as $row) { ?>
            <?php echo form_open('admin/form/form_kamar/' . $row->no_kamar, 'class=col-lg-12') ?>
            <div class="form-row mb-3">
                <div class="form-group col-sm-6">
                    <label for="">Lantai</label>
                    <select id="lantai" class="form-control" name="lantai" required disabled>
                        <option value="">--- Pilih Lantai ---</option>
                        <option value="1" <?php if (substr($row->no_kamar, 0, 1) == '1') {
                                                echo 'selected';
                                            } ?>>1</option>
                        <option value="2" <?php if (substr($row->no_kamar, 0, 1) == '2') {
                                                echo 'selected';
                                            } ?>>2</option>
                        <option value="3" <?php if (substr($row->no_kamar, 0, 1) == '3') {
                                                echo 'selected';
                                            } ?>>3</option>
                        <option value="4" <?php if (substr($row->no_kamar, 0, 1) == '4') {
                                                echo 'selected';
                                            } ?>>4</option>
                        <option value="5" <?php if (substr($row->no_kamar, 0, 1) == '5') {
                                                echo 'selected';
                                            } ?>>5</option>
                        <option value="6" <?php if (substr($row->no_kamar, 0, 1) == '6') {
                                                echo 'selected';
                                            } ?>>6</option>
                    </select>
                </div>
                <div class="form-group col-sm-6">
                    <label for="">Nomor Kamar</label>
                    <input type="text" class="form-control" name="no_kamar" value="<?php echo substr($row->no_kamar, 1) ?>" required readonly>
                </div>
            </div>
            <div class="form-row mb-3">
                <div class="form-group col-sm-4">
                    <label for="">Tipe Tempat Tidur</label>
                    <select class="form-control" name="tipe_bed">
                        <option value="Single Bed" <?php if ($row->tipe_bed == 'Single Bed') {
                                                        echo 'selected';
                                                    } ?>>Single Bed</option>
                        <option value="Double Bed" <?php if ($row->tipe_bed == 'Double Bed') {
                                                        echo 'selected';
                                                    } ?>>Double Bed</option>
                        <option value="Twin Bed" <?php if ($row->tipe_bed == 'Twin Bed') {
                                                        echo 'selected';
                                                    } ?>>Twin Bed</option>
                        <option value="Family Bed" <?php if ($row->tipe_bed == 'Family Bed') {
                                                        echo 'selected';
                                                    } ?>>Family Bed</option>
                    </select>
                </div>
                <div class="form-group col-sm-4">
                    <label for="">Tipe Kamar</label>
                    <select id="tipe_kamar" class="form-control" name="tipe_kamar" required>
                        <?php switch (substr($row->no_kamar, 0, 1)) {
                            case '1':
                                echo "<option value='Standard Room'>Standard Room</option>";
                                break;
                            case '2':
                                echo "<option value='Superior Room'>Superior Room</option>";
                                break;
                            case '3':
                                echo "<option value='Deluxe Room'>Deluxe Room</option>";
                                break;
                            case '4':
                                echo "<option value='Junior Suite Room'>Junior Suite Room</option>";
                                break;
                            case '5':
                                echo "<option value='Suite Room'>Suite Room</option>";
                                break;
                            case '6':
                                echo "<option value='Presidential Suite'>Presidential Suite</option>";
                                break;
                        } ?>
                    </select>
                </div>
                <div class="col-sm-4">
                    <label for="">Harga</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Rp</div>
                        </div>
                        <input type="number" class="form-control" name="harga" value="<?php echo $row->harga ?>" required>
                    </div>
                </div>
            </div>
            <input type="hidden" name="lantai" value="<?php echo substr($row->no_kamar, 0, 1) ?>">
            <button type="submit" class="btn text-white" style="background-color: #273c75;">Simpan <i class="fas fa-save"></i></button>
            </form>
        <?php } ?>
    <?php } else { ?>
        <?php echo form_open('admin/form/form_kamar', 'class=col-lg-12') ?>
        <div class="form-row mb-3">
            <div class="form-group col-sm-6">
                <label for="">Lantai</label>
                <select id="lantai" class="form-control" name="lantai" required>
                    <option value="">--- Pilih Lantai ---</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>
            <div class="form-group col-sm-6">
                <label for="">Nomor Kamar</label>
                <input type="text" class="form-control" name="no_kamar" value="<?php echo set_value('no_kamar') ?>" required>
            </div>
        </div>
        <div class="form-row mb-3">
            <div class="form-group col-sm-4">
                <label for="">Tipe Tempat Tidur</label>
                <select class="form-control" name="tipe_bed">
                    <option value="Single Bed">Single Bed</option>
                    <option value="Double Bed">Double Bed</option>
                    <option value="Twin Bed">Twin Bed</option>
                    <option value="Family Bed">Family Bed</option>
                </select>
            </div>
            <div class="form-group col-sm-4">
                <label for="">Tipe Kamar</label>
                <select id="tipe_kamar" class="form-control" name="tipe_kamar" required>
                    <option value="">--- Tipe Kamar ---</option>
                </select>
            </div>
            <div class="col-sm-4">
                <label for="">Harga</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Rp</div>
                    </div>
                    <input type="number" class="form-control" name="harga" value="<?php echo set_value('harga') ?>" required>
                </div>
            </div>
        </div>
        <button type="submit" class="btn text-white" style="background-color: #273c75;">Simpan <i class="fas fa-save"></i></button>
        </form>
    <?php } ?>
</div>