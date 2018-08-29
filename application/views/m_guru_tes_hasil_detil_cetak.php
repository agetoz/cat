<link href='<?php echo base_url(); ?>___/css/style_print.css' rel='stylesheet' media='' type='text/css'/>

<h3>Laporan Hasil Ujian</h3>
<hr style="border: solid 1px #000"><br>

<?PHP
  // filename for download
  $filename = "hasil_" .$detil_tes->nama_ujian. "_" .date('Ymd'). ".xls";

  header("Content-Disposition: attachment; filename=\"$filename\"");
  header("Content-Type: application/vnd.ms-excel");
?>

<h4>Detil Ujian</h4>
<table class="table-bordered" style="margin-bottom: 0px">
  <tr><td width="30%">Mata Kuliah</td><td><b><?php echo $detil_tes->namaMapel; ?></b></td></tr>
  <tr><td>Nama Guru</td><td width="70%"><b><?php echo $detil_tes->nama_guru; ?></b></td></tr>
  <tr><td>Nama Ujian</td><td width="70%"><b><?php echo $detil_tes->nama_ujian; ?></b></td></tr>
  <tr><td>Jumlah Soal</td><td><b><?php echo $detil_tes->jumlah_soal; ?></b></td></td></tr>
  <tr><td>Waktu</td><td><b><?php echo $detil_tes->waktu; ?> menit</b></td></tr>
  <tr><td>Tertinggi</td><td><b><?php echo $statistik->max_; ?></b></td></tr>
  <tr><td>Terendah</td><td><b><?php echo $statistik->min_; ?></b></td></tr>
  <tr><td>Rata-rata</td><td><b><?php echo number_format($statistik->avg_); ?></b></td></tr>
</table>
<br><br>
<h4>Hasil Ujian</h4>
<table class="table-bordered">
  <thead>
    <tr>
      <th width="5%">No</th>
      <th width="6%">NIS</th>
      <th width="50%">Nama Peserta</th>
      <th width="15%">Jurusan</th>
      <th width="5%">Jumlah Benar</th>
      <th width="10%">Nilai</th>
      <th width="10%">Waktu awal</th>
      <th width="10%">Waktu Selesai</th>
    </tr>
  </thead>

  <tbody>
    <?php 
      if (!empty($hasil)) {
        $no = 1;
        foreach ($hasil as $d) {
          echo '<tr>
                <td class="ctr">'.$no.'</td>
                <td class="ctr">'.$d->nim.'</td>
                <td>'.$d->nama.'</td>
                <td class="ctr">'.$d->jurusan.'</td>
                <td class="ctr">'.$d->jml_benar.'</td>
                <td class="ctr">'.$d->nilai.'</td>
                <td class="ctr">'.$d->tgl_mulai.'</td>
                <td class="ctr">'.$d->tgl_selesai.'</td>
                </tr>
                ';
        $no++;
        }
      } else {
        echo '<tr><td colspan="5">Belum ada data</td></tr>';
      }
    ?>
  </tbody>
</table>