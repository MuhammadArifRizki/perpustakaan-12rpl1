<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <center><h1>Form Edit Data Anggota</h1></center>
        <form action="" method="post">
            <div class="form-group">
                <input class="form-control" type="text" name="nis" placeholder="Nomor Induk Siswa" required>
            </div>
            <div class="form-group mt-2">
                <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" required>
            </div>
            <div class="form-group mt-2">
                <select class="form-control" name="jk">
                    <option value="">--Pilih Jenis Kelamin--</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="form-group mt-2">
                            <input class="form-control" type="text" name="tpt_lahir" placeholder="Tempat Lahir">
            </div>
            <div class="form-group mt-2">
                <input class="form-control" type="date" name="tgl_lahir">
            </div>
            <div class="form-group mt-2">
                <select class="form-control" name="kelas" required>
                    <option value="">--Pilih Kelas--</option>
                    <?php
                    $query = mysqli_query($konek,"SELECT * FROM kelas");
                    foreach ($query as $row) {
                        ?>
                        <option value="<?php echo $row["id_kelas"]?>">
                            <?php echo $row["nama_kelas"]?>
                        </option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group mt-2">
                <select class="form-control" name="jurusan" required>
                    <option value="">--Pilih Jurusan--</option>
                    <?php
                    $query = mysqli_query($konek,"SELECT * FROM jurusan");
                    foreach ($query as $row) {
                        ?>
                        <option value="<?php echo $row["id_jurusan"]?>">
                            <?php echo $row["nama_jurusan"]?>
                        </option>
                        <?php
                    }
                    ?>
                </select>
            </div>
                        
            <div class="form-group mt-2">
                <input class="form-control" type="text" name="tlp" placeholder="Nomor Telepon">
            </div>
            <div class="form-group mt-2">
                <textarea name="alamat" class="form-control" placeholder="Alamat Lengkap"></textarea>
            </div>
            <br>
            <center>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="save" class="btn btn-primary">Save changes</button>
            </center>
            <br>
        </form>
    </div>
    <div class="col-3"></div>
</div>