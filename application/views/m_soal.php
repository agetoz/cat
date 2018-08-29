<?php 
$uri4 = $this->uri->segment(4);
?>
  <div class="panel panel-info">
    <div class="panel-heading"><b>Data Soal</b></div>
      <div>&nbsp;</div>
      <div class="tombol-kanan" style ="margin-left: 15px;">
        <a class="btn btn-success btn-sm" href="<?php echo site_url(); ?>/adm/m_soal/edit/0"><i class="glyphicon glyphicon-plus" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Tambah Data</a>        
        <a class="btn btn-warning btn-sm tombol-kanan" href="<?php echo base_url(); ?>upload/format_soal_download.xlsx" ><i class="glyphicon glyphicon-download"></i> &nbsp;&nbsp;Download Format Import</a>
        <a class="btn btn-info btn-sm tombol-kanan" href="<?php echo site_url(); ?>/adm/m_soal/import" ><i class="glyphicon glyphicon-upload"></i> &nbsp;&nbsp;Import</a>
        <a href='<?php echo site_url(); ?>/adm/m_soal/cetak/<?php echo $uri4; ?>' class='btn btn-info btn-sm' target='_blank'><i class='glyphicon glyphicon-print'></i> Cetak</a>
      </div>

    <div class="panel-body">
        
        <?php echo $this->session->flashdata('k'); ?>
        
        <table class="table table-bordered" id="datatabel">
          <thead>
            <tr>
              <td width="5%">No</td>
              <td width="40%">Soal</td>
              <td width="10%">File</td>
              <td width="10%">Mapel/Guru</td>
              <td width="5%">Jwb</td>
              <td width="15%">Analisa</td>
              <td width="15%">Aksi</td>
            </tr>
          </thead>

          <tbody>

          </tbody>
        </table>
        <a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>
      </div>
    </div>