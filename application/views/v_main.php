<div class="panel panel-info">
    <div class="panel-heading">Selamat datang di Sistem Ujian Online</div>
    <div class="panel-body">
        <div class="alert alert-info">Selamat datang <b><?php echo $this->session->userdata('admin_nama')."</b>. Username : <b>".$sess_user; ?></b></div>

        <?php
        if ($this->session->userdata('admin_level') == "siswa") {
			echo "<h4><i>TAHAPAN UNTUK MEMULAI UJIAN :</i></h4><ul>";
			echo '<li>1. Pilih <b>MAPEL</b> yang akan di kerjakan.</li>
					<li>2. Masuk ke menu <b>UJIAN</b>.</li>
					<li>3. Masukkan <b>TOKEN</b> yang sudah di set oleh petugas / guru mapel.</li>
					<li>4. Tunggu hingga waktu yang di tentukan untuk memulai ujian, hingga tombol <b>MULAI</b> berwarna hijau. </li>
					<li>5. Untuk soal yang berisikan <b>AUDIO / VIDEO</b>, jika tidak keluar suara / tidak bisa play silahkan tekan tombol <i>F5</i> untuk refresh halaman soal.</li>
					<li>6. <u><b>JANGAN LUPA!!!</b></u> untuk mengakhiri ujian dengan menekan tombol <b>SELESAI UJIAN</b> yang berada pada nomor terakhir di setiap ujian, jika tidak maka nilai menjadi <b>NOL / tidak dapat di proses oleh sistem</b>.</li>';
			echo '</ul>';
		} else {
			echo "<h4><i>TAHAPAN INPUT SOAL :</i></h4><ul>";
			echo '<li>1. Masuk menu <b>SOAL</b>.</li>
					<li>2. Pilih <b>TAMBAH DATA</b>.</li>
					<li>3. Pilih <b>MAPEL</b> yang sudah di set oleh petugas.</li>
					<li>4. Pilih <b>GURU</b> yang sudah di set oleh petugas. </li>
					<li>5. Isi soal dengan mode text di bagian kotak teks soal.</li>
					<li>6. Isi jawaban dengan mode text di bagian jawaban.</li>
					<li>7. Untuk <b>GAMBAR / AUDIO / VIDEO</b> bisa di input di bagian <i>Choose file</i>.</li>
					<li>8. Untuk kunci soal dan bobot bisa di set di bagian bawah.</li>
					<li>9. Jika sudah soal sudah siap, bisa langsung di pilih <b>SIMPAN</b>.</li>';
			echo '</ul>';
		}

		?>

      </div>
    </div>