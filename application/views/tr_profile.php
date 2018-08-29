<?php echo $this->session->flashdata("k");?>
<div class="panel panel-info">
   <div class="panel-heading">Profile</div>
    <div class="panel-body">

<?php
	$act			= "simpan";
	$id				= $data->id;
	$nama			= $data->nama;
	$id_server		= $data->id_server;
	$nama_server	= $data->nama_server;
	$alamat			= $data->alamat;
	$website		= $data->website;
	$tlp			= $data->tlp;
	$pimpinan		= $data->pimpinan;
	$pimpinan_nip	= $data->pimpinan_nip;
	$petugas		= $data->petugas;
	$petugas_nip	= $data->petugas_nip;
	
?>

<form action="<?php echo site_URL()?>/adm/tr_profile/<?php echo $act?>" method="post" accept-charset="utf-8" enctype="multipart/form-data" id="tr_profile" style='line-height: 20px;'>
 <table class="table table-form">
	<input type="hidden" name="id" value="<?php echo $id?>">

	<label style="width: 150px; font-weight: bold">Nama Instansi</label><input type="text" style="width: 300px;" class="form-control" name="nama" class="form-control" placeholder="Nama Instansi" value="<?php echo $nama?>" required><br>
	<label style="width: 150px; font-weight: bold">ID Server</label><input type="text" style="width: 300px;" class="form-control" name="id_server" class="form-control" placeholder="ID Server" value="<?php echo $id_server?>" required><br>
	<label style="width: 150px; font-style: italic">Nama Server</label><input type="text" style="width: 300px;" class="form-control" name="nama_server" class="form-control" placeholder="Nama Server" value="<?php echo $nama_server?>" required><br>
	<label style="width: 150px;">Alamat</label><input type="text" style="width: 500px;" class="form-control" name="alamat" placeholder="Alamat Instansi" value="<?php echo $alamat?>" required><br>
	<label style="width: 150px;">Website</label><input type="text" style="width: 500px;" class="form-control" name="website" placeholder="Website" value="<?php echo $website?>" required><br>
	<label style="width: 150px;">Logo Instansi</label><input type="file" style="width: 250px;" class="form-control" name="logo"><label style="font-size:10px; color:#f0000f;">*max : 1Mb dan resolusi : 1000px</label><br>
	<label style="width: 150px;">Telepon</label><input type="text" style="width: 175px;" class="form-control" name="tlp" placeholder="Telepon" value="<?php echo $tlp?>" required><br>
	<label style="width: 150px; font-weight: bold">Pimpinan</label><input type="text" style="width: 300px;" class="form-control" name="pimpinan" placeholder="Nama Pimpinan" value="<?php echo $pimpinan?>" required><br>
	<label style="width: 150px;">NIP Pimpinan</label><input type="text" style="width: 300px;" class="form-control" name="pimpinan_nip" placeholder="NIP Pimpinan" value="<?php echo $pimpinan_nip?>" required><br>
	<label style="width: 150px; font-weight: bold">Petugas</label><input type="text" style="width: 300px;" class="form-control" name="petugas" placeholder="Nama Petugas" value="<?php echo $petugas?>" required><br>
	<label style="width: 150px;">NIP Petugas</label><input type="text" style="width: 300px;" class="form-control" name="petugas_nip" placeholder="NIP Petugas" value="<?php echo $petugas_nip?>" required><br>
	
	<button type="submit" class="btn btn-primary">Submit</button>
	
</table>
</form>

</div>
</div>

<script src="<?php echo site_URL()?>/aset/editor/nicEdit.js"></script>
<script type="text/javascript">
bkLib.onDomLoaded(function() { nicEditors.allTextAreas({fullPanel : true}) });
</script>