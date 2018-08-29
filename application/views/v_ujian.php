<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="icon" type="image/png" href="<?php echo base_url(); ?>___/img/logo-man.png">
<title>Dashboard - Aplikasi CAT (Computer Adaptive Test) Madrasah</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="<?php echo base_url(); ?>___/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>___/css/style.css" rel="stylesheet">
<!--<link href="<?php echo base_url(); ?>___/css/side_nav.css" rel="stylesheet">-->
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
#toggle-side {
    position: fixed;
    right:-15px;
    bottom:50%;
    cursor:pointer;
    width:50px;
    height:50px;
    background-color: transparent;
    -webkit-border-radius:60px;
    -moz-border-radius:60px;
    border-radius:60px;
    border-color: #006688;
    background-color: #e24c18;
}
#toggle-side:hover {
    background-color: #df7049;
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
            
            <!-- /.navbar-header -->
        <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="<?php echo site_url(); ?>/adm/logout" onclick="return confirm('Apakah anda yakin ingin logout?');" class="dropdown-toggle" style="color: #fff; font-style: italic;"><i class="fa fa-user"></i>&nbsp;&nbsp;<?php echo $this->session->userdata('admin_nama')." (".$this->session->userdata('admin_user').")"; ?> <span class=""></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#" onclick="return rubah_password();">Ubah Password</a></li>
                        <li><a href="<?php echo site_url(); ?>/adm/logout" onclick="return confirm('keluar..?');">Logout</a></li>
                    </ul>
                </li>
            </ul>
    </nav>

<div class="graphs">
    <div class="">
        <form role="form" name="_form" method="post" id="_form">
            <div class="panel panel-success">
                <div class="panel-heading">
                <div align="center">
                <img src="<?php echo base_url(); ?>___/img/bismillah.png" style="width: 100px; height: 50px"><div id="clock" style="font-weight: bold; font-size: 20px; font-style: italic;" class="btn btn-danger"></div><img src="<?php echo base_url(); ?>___/img/bismillah.png" style="width: 100px; height: 50px">
                </div></div>

                <span id="toggle-side" style="font-size:25px; cursor:pointer; text-align: left; padding-left: 7px; padding-top: 8px; color: #ffffff" onclick="openNav()"><i class="glyphicon glyphicon-chevron-left"></i></span>

                <div class="" style="margin-left: 15px; margin-top: 5px;"><b>Soal Ke</b> <div class="btn btn-info" id="soalke" style="font-style: italic; font-size: 15px;"></div></div>

                <div class="panel-body">
                <?php echo $html; ?>
                </div>

                <div class="panel-footer">
                    <a class="action back btn btn-success btn-lg" rel="0" onclick="return back();"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
                    <!--<a class="ragu_ragu btn btn-danger btn-lg" rel="1" onclick="return tidak_jawab();"><i class="glyphicon glyphicon-stop"></i> Ragu-ragu</a>-->
                    <a class="action next btn btn-warning btn-lg" rel="2" onclick="return next();"><i class="glyphicon glyphicon-chevron-right"></i> Next</a>
                    <a class="action submit btn btn-danger btn-lg pull-right" onclick="return simpan_akhir();"><i class="glyphicon glyphicon-stop"></i> Selesai Ujian</a>
                    <input type="hidden" name="jml_soal" value="<?php echo $no; ?>">
                </div>
            </div>
        </form>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="" align="center" style="font-family: Comic; font-size: 20px"><b><i>Navigasi Soal</i></b></div><br>
        <div id="tampil_jawaban" align="center" style="margin: 10px;"></div>
    </div>

</div>
<div class="clearfix"></div>
<div class="copy" style="border-top: solid 4px #ddd; text-align: center; padding-top: 10px; margin-top: 50px; margin-bottom: 20px">
  &copy; 2014 - <?php echo date('Y')?> Aplikasi CAT (Computer Assisted Test) Madrasah. This site loaded in {elapsed_time} seconds.<br><b><i> Waktu Server: </i></b> <?php echo tjs(date('Y-m-d H:i:s'),"s")." - <b><i> Waktu Database: </i></b>".tjs($this->waktu_sql,"s"); ?>.
</div>
<div class="clearfix"></div>
</div>
</div>

<script src="<?php echo base_url(); ?>___/js/jquery-1.11.3.min.js"></script> 
<script src="<?php echo base_url(); ?>___/js/bootstrap.js"></script>

<script src="<?php echo base_url(); ?>___/js/jquery.countdown.min.js"></script>

<!--<script src="<?php echo base_url(); ?>___/js/jquery-1.10.1.min.js"></script>-->
<script src="<?php echo base_url(); ?>___/js/jquery.mousewheel-3.0.6.pack.js"></script>
<script src="<?php echo base_url(); ?>___/js/jquery.fancybox.js?v=2.1.5"></script>

<script src="<?php echo base_url(); ?>___/plugin/countdown/jquery.plugin.min.js"></script> 
<script src="<?php echo base_url(); ?>___/plugin/countdown/jquery.countdown.min.js"></script> 
<script src="<?php echo base_url(); ?>___/plugin/jquery_zoom/jquery.zoom.min.js"></script> 

<script type="text/javascript">
    var base_url = "<?php echo site_url(); ?>";
    id_tes = "<?php echo $id_tes; ?>";

    function getFormData($form){
        var unindexed_array = $form.serializeArray();
        var indexed_array = {};
        $.map(unindexed_array, function(n, i){
            indexed_array[n['name']] = n['value'];
        });
        return indexed_array;
    }
    
    $(document).on("ready", function(){
        $('.gambar').each(function(){
            var url = $(this).attr("src");
	$(this).zoom({url:url});
        });
            
        hitung();
    	simpan();
        buka(1);

        widget      = $(".step");
        btnnext     = $(".next");
        btnback     = $(".back"); 
        btnsubmit   = $(".submit");

        $(".step").hide();
        $(".back").hide();
        $(".submit").hide();
        $("#widget_1").show();
    });
      
    widget      = $(".step");
    total_widget = widget.length;
    
    hitung = function() {
        <?php 
        $tgl_selesai = $jam_selesai;
        $tgl_selesai = strtotime($tgl_selesai);
        $tgl_baru = date('F j, Y H:i:s', $tgl_selesai);
        ?>

        var waktu_selesai = new Date('<?php echo $tgl_baru; ?>');

        $('div#clock').countdown(
            {   
                until: waktu_selesai, 
                serverSync: dari_server,
                alwaysExpire: true, 
                format: 'HMS', 
                compact: true, 
                onExpiry: selesai
            }
        );
    }

    selesai = function() {
        alert('Waktu telah selesai....!')
        var f_asal  = $("#_form");
        var form  = getFormData(f_asal);
        simpan_akhir(id_tes);
        window.location.assign("<?php echo site_url(); ?>/adm/sudah_selesai_ujian/"+id_tes); 

        return false;
    }

    next = function() {
        var berikutnya  = $(".next").attr('rel');
        berikutnya = parseInt(berikutnya);
        berikutnya = berikutnya > total_widget ? total_widget : berikutnya;

        $("#soalke").html(berikutnya);

        $(".next").attr('rel', (berikutnya+1));
        $(".back").attr('rel', (berikutnya-1));

        var sudah_akhir = berikutnya == total_widget ? 1 : 0;

        $(".step").hide();
        $("#widget_"+berikutnya).show();

        if (sudah_akhir == 1) {
            $(".back").show();
            $(".next").hide();
            $(".submit").show();
        } else if (sudah_akhir == 0) {
            $(".next").show();
            $(".back").show();
        }
        simpan_sementara();
        simpan();
        cek_koneksi();
    }
    
    dari_server = function() { 
        var time = null; 
        $.ajax({url: base_url+'/adm/get_servertime', 
            async: false, 
            dataType: 'text', 
            success: function(text) { 
                time = new Date(text); 
            }, 
            error: function(http, message, exc) { 
                time = new Date(); 
            }
        }); 
        return time; 
    }

    back = function() {
        var back  = $(".back").attr('rel');
        back = parseInt(back);
        back = back < 1 ? 1 : back;

        $("#soalke").html(back);
        
        $(".back").attr('rel', (back-1));
        $(".next").attr('rel', (back+1));
        
        $(".step").hide();
        $("#widget_"+back).show();

        var sudah_awal = back == 1 ? 1 : 0;
         
        $(".step").hide();
        $("#widget_"+back).show();
        
        if (sudah_awal == 1) {
            $(".back").hide();
            $(".next").show();
            $(".submit").hide();
        } else if (sudah_awal == 0) {
            $(".next").show();
            $(".back").show();
            $(".submit").hide();
        }
        simpan_sementara();
        simpan();
        cek_koneksi();
    }

    tidak_jawab = function() {
        var id_step = $(".ragu_ragu").attr('rel');
        $("#widget_"+id_step+" input[type=radio]").attr("checked", false);
        simpan_sementara();
        simpan();
        cek_koneksi();
    }

    buka = function(id_widget) {
        $(".next").attr('rel', (id_widget+1));
        $(".back").attr('rel', (id_widget-1));

        $("#soalke").html(id_widget);
        
        $(".step").hide();
        $(".submit").hide();
        $("#widget_"+id_widget).show();
        cek_koneksi();
        simpan();
    }

    simpan_sementara = function() {
        var f_asal  = $("#_form");
        var form  = getFormData(f_asal);
        //form = JSON.stringify(form);
        var jml_soal = form.jml_soal;
        jml_soal = parseInt(jml_soal);

        var hasil_jawaban = "";
            

        for (var i = 1; i < jml_soal; i++) {
            var idx = 'opsi_'+i;
            var jawab = form[idx];

            if (jawab != undefined) {
                hasil_jawaban += '<a class="btn btn-success btn_soal btn-sm" onclick="return buka('+(i)+');">'+(i)+". "+jawab+"</a>";
            } else {
                hasil_jawaban += '<a class="btn btn-warning btn_soal btn-sm" onclick="return buka('+(i)+');">'+(i)+". -</a>";
            }
        }

        $("#tampil_jawaban").html(hasil_jawaban);
    }

    simpan = function() {
        var f_asal  = $("#_form");
        var form  = getFormData(f_asal);

        $.ajax({
            type: "POST",
            url: base_url+"/adm/ikut_ujian/simpan_satu/"+id_tes,
            data: JSON.stringify(form),
            dataType: 'json',
            contentType: 'application/json; charset=utf-8'
        }).done(function(response) {
          	var hasil_jawaban = "";
            var panjang       = response.data.length;

            for (var i = 0; i < panjang; i++) {
                if (response.data[i] != "") {
                    hasil_jawaban += '<a class="btn btn-danger btn_soal btn-sm" style="margin: 5px; width: 55px; height: 30px; -webkit-border-radius:50px; -moz-border-radius:50px; border-radius:50px;" onclick="return buka('+(i+1)+');">'+(i+1)+". "+response.data[i]+"</a>";
                } else {
                    hasil_jawaban += '<a class="btn btn-warning btn_soal btn-sm" style="margin: 5px; width: 55px; height: 30px; -webkit-border-radius:50px; -moz-border-radius:50px; border-radius:50px;" onclick="return buka('+(i+1)+');">'+(i+1)+". -</a>";
                }
            }

            $("#tampil_jawaban").html(hasil_jawaban);
        });
        return false;
    }

    simpan_akhir = function() {
        if (confirm('Anda yakin akan mengakhiri tes ini..?')) {
            var f_asal  = $("#_form");
            var form  = getFormData(f_asal);

            $.ajax({    
                type: "POST",
                url: base_url+"/adm/ikut_ujian/simpan_akhir/"+id_tes,
                data: JSON.stringify(form),
                dataType: 'json',
                contentType: 'application/json; charset=utf-8'
            }).done(function(r) {
                if(r.status == "ok") {
                    window.location.assign("<?php echo site_url(); ?>/adm/logout");
                    window.location.reload();
                }
            });
            cek_koneksi();
        }
        return false;
    }

    function cek_koneksi() {
        var xhr = new XMLHttpRequest();
        var file = "<?php echo base_url(); ?>___/img/back01.png";
        var randomNum = Math.round(Math.random() * 10000);
 
            xhr.open('HEAD', file + "?rand=" + randomNum, true);
            xhr.send();
            xhr.addEventListener("readystatechange", processRequest, false);
 
      function processRequest(e) {
        if (xhr.readyState == 4) {
        if (xhr.status >= 200 && xhr.status < 304) {
          //alert("Koneksi terhubung!");
        } else {
          alert("Ups!! Koneksi terputus!! Silahkan hubungi administrator jaringan.");
          window.location.reload(false);
          }
        }
      }
    }

</script>

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

function openNav() {
    document.getElementById("mySidenav").style.width = "30%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>

</body>
</html>
