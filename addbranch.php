<?php include("header.php");?>
<div class="container w-50 p-5">
        <form action="" method="post" class="mt-5">
            <h4 class="text-center">Add Branch</h4>
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama">
            <label for="kontak">Kontak</label>
            <input type="text" name="kontak" class="form-control" id="kontak">
            <label for="email">Email</label>
            <input type="text" name="kontak" class="form-control" id="email">
            <label for="nohp">No HP</label>
            <input type="text" name="nohp" class="form-control" id="nohp">
            <label for="website">Website</label>
            <input type="text" name="website" class="form-control" id="website">
            <label for="alamat1">Alamat 1</label>
            <input type="text" name="alamat1" class="form-control" id="alamat1">
            <label for="alamat2">Alamat 2</label>
            <textarea name="alamat2" class="form-control" id="alamat2" cols="30" rows="10"></textarea>
            <label for="kota">Kota</label>
            <input type="text" name="kota" class="form-control" id="kota">
            <label for="zipkode">Zipkode</label>
            <input type="text" name="zipkode" class="form-control" id="zipkode">
            <label for="negara">Negara</label>
            <input type="text" name="negara" class="form-control" id="negara">
            <label for="provinsi">Provinsi</label>
            <input type="text" name="provinsi" class="form-control" id="provinsi">
            <label for="note">Note</label>
            <input type="text" name="note" class="form-control" id="note">
            <button type="submit" class="btn btn-danger mt-2">Simpan</button>
        </form>
</div>
    <?php include("footer.php");?>