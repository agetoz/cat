<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <link rel="icon" type="image/png" href="<?php echo base_url(); ?>___/img/logo-man.png">
      <title>Dashboard - Aplikasi CAT (Computer Assisted Test) Madrasah</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
      <link href="<?php echo base_url(); ?>___/css/bootstrap.css" rel="stylesheet" type='text/css' />
      <link href="<?php echo base_url(); ?>___/css/style.css" rel='stylesheet' type='text/css' />
      <link href="<?php echo base_url(); ?>___/plugin/fa/css/font-awesome.min.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>___/plugin/datatables/dataTables.bootstrap.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>___/css/lines.css" rel='stylesheet' type='text/css' />
      <script src="<?php echo base_url(); ?>___/js/jquery.min.js"></script>
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
<nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"><i><b><?=strtoupper($i->nama_server)?></b></i> <?=strtoupper($i->nama)?></a>
            </div>

        <div class="navbar-collapse collapse" id="navbar">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="<?php echo site_url(); ?>/adm/logout" onclick="return confirm('Apakah anda yakin ingin logout?');" class="dropdown-toggle" style="color: #fff; font-style: italic;"><i class="fa fa-user"></i>&nbsp;&nbsp;<?php echo $this->session->userdata('admin_nama')." (".$this->session->userdata('admin_user').")"; ?> <span class=""></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#" onclick="return rubah_password();">Ubah Password</a></li>
                        <li><a href="<?php echo site_url(); ?>/adm/logout" onclick="return confirm('keluar..?');">Logout</a></li>
                    </ul>
                </li>
            </ul>
        
    <div class="navbar-default sidebar" role="navigation">
      <?php gen_menu(); ?>
    </div>
</div>
</nav>
            <!-- <li>
                <a href="#" onclick="return rubah_password();"><i class="fa fa-shield"></i>&nbsp;&nbsp;Ubah Password</a></li> -->
            
                <!-- /.sidebar-collapse -->
            
            <!-- /.navbar-static-side -->
<div id="page-wrapper">
<div class="graphs">

    <?php echo $this->load->view($p); ?>


<div class="clearfix"> </div>
<div class="copy" style="border-top: solid 4px #ddd; text-align: center; padding-top: 10px; margin-top: 50px; margin-bottom: 20px">
  &copy; 2014 - <?php echo date('Y')?> Aplikasi CAT (Computer Assisted Test) Madrasah. This site loaded in {elapsed_time} seconds. 
</div>
<div class="clearfix"></div>
    </div>
    </div>
</div>

<!-- insert modal -->
<div id="tampilkan_modal"></div>

<script src="<?php echo base_url(); ?>___/js/jquery-1.11.3.min.js"></script> 
<script src="<?php echo base_url(); ?>___/js/bootstrap.js"></script>

<?php 
if ($this->uri->segment(2) == "m_soal" && $this->uri->segment(3) == "edit") {
?>

<script src="<?php echo base_url(); ?>___/plugin/ckeditor/ckeditor.js"></script>
<?php
}
?>
<!-- editor
<script src="<?php echo base_url(); ?>___/plugin/editor/nicEdit.js"></script>
 -->

<script src="<?php echo base_url(); ?>___/plugin/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>___/plugin/datatables/dataTables.bootstrap.min.js"></script>


<script src="<?php echo base_url(); ?>___/plugin/countdown/jquery.plugin.min.js"></script> 
<script src="<?php echo base_url(); ?>___/plugin/countdown/jquery.countdown.min.js"></script> 
<script src="<?php echo base_url(); ?>___/plugin/jquery_zoom/jquery.zoom.min.js"></script> 

<script type="text/javascript">
var base_url = "<?php echo site_url(); ?>";
var editor_style = "<?php echo $this->config->item('editor_style'); ?>";
var uri_js = "<?php echo $this->config->item('uri_js'); ?>";
</script>
<script src="<?php echo base_url(); ?>___/js/aplikasi.js"></script> 
<script src="<?php echo base_url(); ?>___/js/bootstrap.min.js"></script>

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
</body>
</html>