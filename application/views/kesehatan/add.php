<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <?php
                    //create form
                    $attributes = array('id' => 'FrmAddKesehatan', 'method' => "post", "autocomplete" => "off");
                    echo form_open('', $attributes);
                    ?>
                    <div class="form-group row">
                        <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value=" <?= set_value('nama_lengkap'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('nama_lengkap') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_orang_tua" class="col-sm-2 col-form-label">Nama Orang Tua</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_orang_tua" name="nama_orang_tua" value=" <?= set_value('nama_orang_tua'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('nama_orang_tua') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ttl" class="col-sm-2 col-form-label">TTL</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ttl" name="ttl" value=" <?= set_value('ttl'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('ttl') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="umur" class="col-sm-2 col-form-label">Umur</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="umur" name="umur" value=" <?= set_value('ttl'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('umur') ?>
                            </small>
                        </div>
                    </div>
                     
                   
                     <div class="form-group row">
                        <label for="Alamat" class="col-sm-2 col-form-label">Golongan Darah</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="golongan_darah" name="golongan_darah">
                                <option value="A" selected disabled>Pilih</option>
                                <option value="A" <?php if (set_value('golongan_darah') == "A") : echo "selected";
                                                        endif; ?>>A</option>
                                <option value="B" <?php if (set_value('golongan_darah') == "B") : echo "selected";
                                                            endif; ?>>B</option>
                                <option value="AB" <?php if (set_value('golongan_darah') == "AB") : echo "selected";
                                                        endif; ?>>AB</option>
                                <option value="O" <?php if (set_value('golongan_darah') == "O") : echo "selected";
                                                        endif; ?>>O</option>
                                >
                                
                            </select>

                            <small class="text-danger">
                                <?php echo form_error('golongan_darah') ?>
                            </small>
                        </div>
                    </div>

                     <div class="form-group row">
                        <label for="riwayat_penyakit" class="col-sm-2 col-form-label">Riwayat Penyakit</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="riwayat_penyakit" name="riwayat_penyakit" value="<?= set_value('riwayat_penyakit'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('riwayat_penyakit') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10 offset-md-2">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>