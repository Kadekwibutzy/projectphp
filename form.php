<?php
<form action="action.php" method="POST">
    <label for="nama_input_text">Nama:</label>
    <input type="text" name="nama_input_text" id="nama_input_text" />

    <br><br>

    <label for="JK">Jenis Kelamin:</label>
    <input type="radio" name="JK" value="Pria" /> Pria
    <input type="radio" name="JK" value="Wanita" /> Wanita

    <br><br>

    <label for="hobby">Hobi:</label>
    <input type="checkbox" name="hobby[]" value="Joging" /> Joging

    <br><br>

    <label for="hari">Hari:</label>
    <select name="hari" id="hari">
        <option value="senin">Senin</option>
        <option value="selasa">Selasa</option>
        <option value="rabu">Rabu</option>
        <option value="kamis">Kamis</option>
        <option value="jumat">Jumat</option>
        <option value="sabtu">Sabtu</option>
        <option value="minggu">Minggu</option>
    </select>

    <br><br>

    <label for="alamat">Alamat:</label>
    <textarea name="alamat" id="alamat"></textarea>

    <br><br>

    <label for="file">Upload File:</label>
    <input type="file" name="file" id="file" />

    <br><br>

    <label for="color">Pilih Warna:</label>
    <input type="color" name="color" id="color" />

    <br><br>

    <label for="date">Pilih Tanggal:</label>
    <input type="date" name="date" id="date" />

    <br><br>

    <label for="datetime-local">Pilih Tanggal dan Waktu Lokal:</label>
    <input type="datetime-local" name="datetime_local" id="datetime-local" />

    <br><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" />

    <br><br>

    <label for="hidden">Field Tersembunyi:</label>
    <input type="hidden" name="hidden" value="nilai_tersembunyi" />

    <br><br>

    <label for="image">Pilih Gambar:</label>
    <input type="file" name="image" id="image" accept="image/*" />

    <br><br>

    <label for="month">Pilih Bulan:</label>
    <input type="month" name="month" id="month" />

    <br><br>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" />

    <br><br>

    <label for="range">Range:</label>
    <input type="range" name="range" id="range" />

    <br><br>

    <label for="search">Cari:</label>
    <input type="search" name="search" id="search" />

    <br><br>

    <label for="tel">Telepon:</label>
    <input type="tel" name="tel" id="tel" />

    <br><br>

    <label for="time">Waktu:</label>
    <input type="time" name="time" id="time" />

    <br><br>

    <label for="url">URL:</label>
    <input type="url" name="url" id="url" />

    <br><br>

    <label for="week">Pilih Minggu:</label>
    <input type="week" name="week" id="week" />

    <br><br>

    <input type="submit" value="Daftar" />
</form>

<br>

<form action="">
    <label for="username">Username:</label>
    <input type="text" name="username" value="petanikode" disabled/>
    <input type="email" name="email" id="email" />
</form>

<br>

<form action="">
    <label for="tinggi">Tinggi (100-400):</label>
    <input type="number" name="tinggi" id="tinggi" min="100" max="400" />
    <input type="submit" value="Daftar" />
</form>

<br>

<form action="">
    <label for="name">Nama (4-8 karakter):</label><br>
    <input type="text" id="name" name="name" required minlength="4" maxlength="8">
</form>

<br>

<form action="">
    <label for="grade">Input Grade (A-F):</label>
    <input type="text" name="grade" id="grade" pattern="[A-F][+\-]?|D">
    <input type="submit" value="Simpan" />
</form>

<script>
    var gradeField = document.querySelector("input[name=grade]");
    gradeField.addEventListener("invalid", function() {
        this.setCustomValidity('');
        if (!this.validity.valid) {
            this.setCustomValidity('Nilai grade salah');
        }
    });
</script>
?>