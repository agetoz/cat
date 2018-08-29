<div class="panel panel-info">
    <div class="panel-heading">Kartu Peserta Siswa</div>

<form action="<?php echo site_URL()?>/adm/m_siswa_kartu_peserta/cari_siswa_kartu" method="post">
  <table class="table table-form">
    <tr>
    <td style="width: 25%;"><input type="text" class="form-control" name="q" placeholder="Masukkan kata kunci"></td>
    <td><input type="submit" value="Cari" class="btn btn-primary" style=""></td>
    </tr>
    </table>
</form>

<div class="panel-body">
<div class="tombol-kanan">
    <a href="#null" onclick="printContent('printTable')" class='btn btn-info btn-sm' target='_blank'><i class='glyphicon glyphicon-print'></i> Cetak</a>
</div>

<div id="printTable">
<style type="text/css">
table { font-size: 11px; font-family: arial }
tr, td { vertical-align: top; padding: 0px }
</style>

<?php
$i = $this->db->query("SELECT * FROM tr_config LIMIT 1")->row();

foreach ($data as $d) {
?>

<div style="; margin-right: 10px; margin-top: 10px; margin-bottom: 22px; width: 88mm; height: 64mm; display: inline; float: left; border: solid 1px;">

<table width="100%">
<tr style="">
<td style="padding: 6px;"><img src="<?=base_URL()?>___/img/<?=$i->logo?>" style="width: 50px; height: 50px">
</td>
<td style="padding: 5px;" colspan="3"><b style="font-size: 15px">UBK <?=strtoupper($i->nama)?></b><br><span style="font-size: 10px">Alamat : <?=$i->alamat?></span><br><span style="font-size: 10px">Tlp : <?=$i->tlp?> <i>| <?=$i->website?></i></span></td>
</tr>
<tr><td colspan="3" style="text-align: center; margin-top: 2px; border-top: solid 1px;"><b style="font-size: 14px"><u><br>KARTU PESERTA</u></b><br>Nomor : <?=$d->id?><br><br></td></tr>
<tr><td style="padding-left: 25px;">Nama</td><td>: <b><?=$d->nama?></b></td></tr>
<tr><td style="padding-left: 25px;">Username</td><td>: <b><?=$d->nim?></b></td></tr>
<tr><td style="padding-left: 25px;">Password</td><td>: <b><?=$d->password?></b></td></tr>
<tr><td style="padding-left: 25px;">Kelas</td><td>: <b><?=$d->jurusan?></b></td></tr>
<tr><td style="padding-left: 25px;">Akses</td><td>: <b><?=strtoupper($i->nama_server)?></b></td></tr>
<tr><td style="padding-left: 25px;">&nbsp;</td><td></td></tr>
<tr><td colspan="3" style="text-align: center; margin-top: 10px; border-top: solid 1px;"></td></tr>
<table width="100%"><td style="font-size: 9px; text-align: center; padding: 2px;">&copy;Copyright by Pusiskom <?=strtoupper($i->nama)?></td>
</table>
</div>
<a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>

<?php 
}
?>
</div>
</div>
</div>

<script type="text/javascript">
<!--
function printContent(id){
str=document.getElementById(id).innerHTML
newwin=window.open('','printwin','left=100,top=100,width=750,height=700')
newwin.document.write('<HTML>\n<HEAD>\n')
newwin.document.write('<TITLE>Daftar Kartu Peserta UBK</TITLE>\n')
newwin.document.write('<script>\n')
newwin.document.write('function chkstate(){\n')
newwin.document.write('if(document.readyState=="complete"){\n')
newwin.document.write('window.close()\n')
newwin.document.write('}\n')
newwin.document.write('else{\n')
newwin.document.write('setTimeout("chkstate()",2000)\n')
newwin.document.write('}\n')
newwin.document.write('}\n')
newwin.document.write('function print_win(){\n')
newwin.document.write('window.print();\n')
newwin.document.write('chkstate();\n')
newwin.document.write('}\n')
newwin.document.write('<\/script>\n')
newwin.document.write('</HEAD>\n')
newwin.document.write('<BODY onload="print_win()">\n')
newwin.document.write(str)
newwin.document.write('</BODY>\n')
newwin.document.write('</HTML>\n')
newwin.document.close()
}
//-->
</script>