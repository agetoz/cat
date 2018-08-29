<div class="panel">
<?php echo $this->session->flashdata("k");?>
<div class="panel panel-info">
<div class="panel-heading">Maintenance Database</div>
<div style="padding: 10px;">
<legend>Backup Database</legend>
	
Klik pada tombol "Backup" disamping untuk memulai proses backup &nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo site_URL()?>/adm/tool/backup" class="btn btn-success">Backup</a>

<br>
<legend>Optimize Database</legend>		
Klik pada tombol "Optimize" disamping untuk memulai proses optimize database &nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo site_URL()?>/adm/tool/optimize" class="btn btn-warning">Optimize</a>

<br>
<legend>Sinkronasi Database Pusat</legend>
Klik pada tombol "Sinkron!" disamping untuk memulai proses sinkronasi database &nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="btn btn-warning">Sinkron!!</a>
<br>

<legend>Restore Database</legend>		
<form action="<?php echo site_URL()?>/adm/tool/restore" method="post" accept-charset="utf-8" enctype="multipart/form-data">	
	
	<label style="width: 150px; float: left">File Backup</label><input class="span3" type="file" name="file_backup" required>
	<button type="submit" class="btn btn-info" onclick="return confirm('Anda yakin..? Hati-hati, semua data akan terhapus');">Restore</button>
</form>
<br>
</div>
</div>

<div class="panel panel-info">
<div class="panel-heading">DeleteAll Data Setting dan Gambar Soal</div>
<div style="padding: 10px;">
Klik pada tombol "Delete All" disamping untuk memulai proses Delete Data Setting &nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo site_URL()?>/adm/tool/deleteall_datasetting" onclick="return confirm('Apakah anda yakin akan menghapus semua data?')" class="btn btn-success">Delete All</a>
<br><br>
Klik pada tombol "Delete All" disamping untuk memulai proses Delete Gambar Soal &nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo site_URL()?>/adm/tool/deleteall_gambarsoal" onclick="return confirm('Apakah anda yakin akan menghapus semua file gambar?')" class="btn btn-success">Delete All</a>
</div>
</div>

</div>