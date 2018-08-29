<!DOCTYPE HTML>
<html lang="en">
<head>
<link rel="icon" type="image/png" href="<?php echo base_url(); ?>___/img/logo-man.png">
<title>Dashboard - Aplikasi CAT (Computer Adaptive Test) Madrasah</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS 
<link href="<?php echo base_url(); ?>___/css/bootstrap.min.css" rel='stylesheet' type='text/css' />-->
<link href="<?php echo base_url(); ?>___/css/bootstrap.css" rel="stylesheet" type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo base_url(); ?>___/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="<?php echo base_url(); ?>___/css/lines.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url(); ?>___/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="<?php echo base_url(); ?>___/js/jquery.min.js"></script>
<!-- Nav CSS -->
<link href="<?php echo base_url(); ?>___/css/custom.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>___/css/jquery.fancybox.css" media="screen" rel="stylesheet">

</head>

<style type="text/css">
/* BackToTop button css */
#scroll {
    position:fixed;
    right:10px;
    bottom:10px;
    cursor:pointer;
    width:50px;
    height:50px;
    background-color:#3498db;
    text-indent:-9999px;
    display:none;
    -webkit-border-radius:60px;
    -moz-border-radius:60px;
    border-radius:60px
}
#scroll span {
    position:absolute;
    top:50%;
    left:50%;
    margin-left:-8px;
    margin-top:-12px;
    height:0;
    width:0;
    border:8px solid transparent;
    border-bottom-color:#ffffff
}
#scroll:hover {
    background-color:#e74c3c;
    opacity:1;filter:"alpha(opacity=100)";
    -ms-filter:"alpha(opacity=100)";
}
</style>

<?php
$i = $this->db->query("SELECT * FROM tr_config LIMIT 1")->row();
?>

<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">Aplikasi CAT <?=strtoupper($i->nama)?></a>
            </div>
            
            <!-- /.navbar-header -->
        <ul class="nav navbar-nav navbar-right">
				
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-user"></i>&nbsp;&nbsp;<?php echo $this->session->userdata('admin_nama')." (".$this->session->userdata('admin_user').")"; ?></a>
          <ul class="dropdown-menu">
            <li class=""><a href="#" onclick="return rubah_password();">Ubah Password</a></li>
            <li class=""><a href="<?php echo site_url(); ?>/adm/logout" onclick="return confirm('keluar..?');">Logout</a></li>
          </ul>
            </li>
		</ul>

            <!-- SEARCH FORM
            <form class="navbar-form navbar-right">
              <input type="text" class="form-control" value="Pencarian..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Pencarian...';}">
            </form> -->

            <div class="navbar-default sidebar" role="navigation">
            
            <?php
            $sess_level = $this->session->userdata('admin_level');
            $uri2 = $this->uri->segment(2);

            $menu = array();

            if ($sess_level == "guru") {
            $menu = array(
            array("icon"=>"dashboard", "url"=>"", "text"=>"Dashboard"),
            array("icon"=>"table", "url"=>"m_soal", "text"=>"Soal"),
            array("icon"=>"file", "url"=>"m_ujian", "text"=>"Ujian"),
            array("icon"=>"file", "url"=>"h_ujian", "text"=>"Hasil Ujian"),
            array("icon"=>"lock", "url"=>"logout", "text"=>"Log Out"),
            );
                } else if ($sess_level == "siswa") {
            $menu = array(
            array("icon"=>"dashboard", "url"=>"", "text"=>"Dashboard"),
            array("icon"=>"file", "url"=>"ikuti_ujian", "text"=>"Ujian"),
            array("icon"=>"lock", "url"=>"logout", "text"=>"Log Out"),
            );
                } else if ($sess_level == "admin") {
            $menu = array(
            array("icon"=>"dashboard", "url"=>"", "text"=>"Dashboard"),
            array("icon"=>"list-alt", "url"=>"m_siswa", "text"=>"Data Siswa"),
            array("icon"=>"list-alt", "url"=>"m_guru", "text"=>"Data Guru/Dosen"),
            //array("icon"=>"file", "url"=>"m_kelas", "text"=>"Data Kelas/Jurusan"),
            array("icon"=>"list-alt", "url"=>"m_mapel", "text"=>"Data Mapel"),
            array("icon"=>"table", "url"=>"m_soal", "text"=>"Soal"),
            array("icon"=>"table", "url"=>"m_siswa_kartu_peserta", "text"=>"Kartu Peserta"),
            array("icon"=>"file", "url"=>"h_ujian", "text"=>"Hasil Ujian"),
            array("icon"=>"user", "url"=>"tr_profile", "text"=>"Setting Profile"),
            array("icon"=>"gear", "url"=>"tool", "text"=>"Tools"),
            array("icon"=>"lock", "url"=>"logout", "text"=>"Log Out"),
            );
                } else if ($sess_level == "operator") {
            $menu = array(
            array("icon"=>"dashboard", "url"=>"", "text"=>"Dashboard"),
            array("icon"=>"list-alt", "url"=>"m_siswa", "text"=>"Data Siswa"),
            //array("icon"=>"file", "url"=>"m_kelas", "text"=>"Data Kelas/Jurusan"),
            array("icon"=>"list-alt", "url"=>"m_mapel", "text"=>"Data Mapel"),
            array("icon"=>"table", "url"=>"m_siswa_kartu_peserta", "text"=>"Kartu Peserta"),
            array("icon"=>"file", "url"=>"h_ujian", "text"=>"Hasil Ujian"),
            array("icon"=>"lock", "url"=>"logout", "text"=>"Log Out"),
            );
                } else {
            $menu = array(
            array("icon"=>"dashboard", "url"=>"", "text"=>"Dashboard")
            );
            }

            ?>

            <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu" style="line-height: 25.0pt;">

            <?php 
                foreach ($menu as $m) {
                    if ($uri2 == $m['url']) {
                echo '<li class="active"><a href="'.site_url().'/adm/'.$m['url'].'"><i class="fa fa-'.$m['icon'].'"></i>&nbsp;&nbsp;'.$m['text'].' </a></li>';
                } else {
                echo '<li class=""><a href="'.site_url().'/adm/'.$m['url'].'"><i class="fa fa-'.$m['icon'].'"></i>&nbsp;&nbsp;'.$m['text'].' </a></li>';
                    }
                }
            ?>
            <!-- <li>
                <a href="#" onclick="return rubah_password();"><i class="fa fa-shield"></i>&nbsp;&nbsp;Ubah Password</a></li> -->
            </ul>                    
            </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
            </nav>
        <div id="page-wrapper">
        <div class="graphs">

    <?php echo $this->load->view($p); ?>
    
<div class="clearfix"> </div>
<div class="copy" style="border-top: solid 4px #ddd; text-align: center; padding-top: 10px; margin-top: 50px; margin-bottom: 20px">
  &copy; 2014 - <?php echo date('Y')?> <a href="<?php echo site_url(); ?>">Aplikasi CAT (Computer Adaptive Test) Madrasah.</a> This site loaded in {elapsed_time} seconds. 
</div>
<div class="clearfix"></div>
        </div>
    </div>
</div>

<!-- insert modal -->
<div id="tampilkan_modal"></div>

<script src="<?php echo base_url(); ?>___/js/jquery-1.11.3.min.js"></script> 
<script src="<?php echo base_url(); ?>___/js/ajaxFileUpload.js"></script> 
<script src="<?php echo base_url(); ?>___/js/bootstrap.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url(); ?>___/js/metisMenu.min.js"></script>
<script src="<?php echo base_url(); ?>___/js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="<?php echo base_url(); ?>___/js/d3.v3.js"></script>
<script src="<?php echo base_url(); ?>___/js/rickshaw.js"></script>

<script src="<?php echo base_url(); ?>___/js/jquery.mousewheel-3.0.6.pack.js"></script>
<script src="<?php echo base_url(); ?>___/js/jquery.fancybox.js"></script>

<script type="text/javascript">

$('.fancybox').fancybox({
        wrapCSS    : 'fancybox-custom',
        closeClick : true,

        openEffect : 'none',

        helpers : {
          title : {
            type : 'inside'
          },
          overlay : {
            css : {
              'background' : 'rgba(238,238,238,0.85)'
            }
          }
        }
      });

$(function() {
    $('#preview-gambar').fancybox();
  });

$(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('#scroll').fadeIn(); 
        } else { 
            $('#scroll').fadeOut(); 
        } 
    }); 
    $('#scroll').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});

</script>

<script type="text/javascript">
var site_url = "<?php echo site_url(); ?>";
</script>
<script src="<?php echo base_url(); ?>___/js/aplikasi.js"></script>
<script src="<?php echo base_url(); ?>___/js/bootstrap.min.js"></script>
</body>
</html>