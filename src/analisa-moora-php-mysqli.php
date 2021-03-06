<?php
	include("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    SPK MOORA
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper">
    <div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-mini">
            A.D.M
          </a>
          <a href="javascript:void(0)" class="simple-text logo-normal">
            Creative Team
          </a>
        </div>
        <ul class="nav">
          <li>
            <a href="./index.php">
              <i class="tim-icons icon-bank"></i>
              <p>Home</p>
            </a>
          </li>
          <li>
            <a href="./moora-php-mysqli.php">
              <i class="tim-icons icon-notes"></i>
              <p>Analisa MOORA 1</p>
            </a>
          </li>
          <li class="active">
            <a href="./analisa-moora-php-mysqli.php">
              <i class="tim-icons icon-notes"></i>
              <p>Analisa MOORA 2</p>
            </a>
          </li>
          <li>
            <a href="./konsultasi-moora-php-mysqli.php">
              <i class="tim-icons icon-notes"></i>
              <p>Analisa MOORA 3</p>
            </a>
          </li>
          <li>
            <a href="./login.php">
              <i class="tim-icons icon-single-02"></i>
              <p>Login</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:void(0)">Analisa MOORA 2</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="photo">
                    <!-- <img src="../assets/img/anime3.png" alt="Profile Photo"> -->
                  </div>
                  <!-- <b class="caret d-none d-lg-block d-xl-block"></b> -->
                  <!-- <p class="d-lg-none">
                    Log out
                  </p> -->
                </a>
                <ul class="dropdown-menu dropdown-navbar">
                  <!-- <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Profile</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Settings</a></li>
                  <li class="dropdown-divider"></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Log out</a></li> -->
                </ul>
              </li>
              <li class="separator d-lg-none"></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
	  <!-- End Navbar -->

	  <div class="content">
        <div class="row">
          <!-- <div class="col-md-12"> -->
            <div class="card">
              <div class="card-header">
              <h3 class="title">Sistem Pendukung Keputusan</h3>
              </div>
              <div class="card-body">
                <div class="table-responsive">
				<table width="1000" border="1" align="center" cellpadding="1" cellspacing="1"  color="black">
				<tr>
					<td align="center" valign="top"><br />
					<h4 class="card-title">Analisa Menggunakan SPK Metode MOORA</h4>
					
<?php
	function tampiltabel($arr)
	{
		echo '<table width="500" border="0" cellspacing="1" cellpadding="3" bgcolor="#000099">';
		  for ($i=0;$i<count($arr);$i++)
		  {
		  echo '<tr>';
			  for ($j=0;$j<count($arr[$i]);$j++)
			  {
			    echo '<td bgcolor="#FFFFFF">'.$arr[$i][$j].'</td>';
			  }
		  echo '</tr>';
		  }
		echo '</table>';
	}

	function tampilbaris($arr)
	{
		echo '<table width="500" border="0" cellspacing="1" cellpadding="3" bgcolor="#000099">';
		echo '<tr>';
			  for ($i=0;$i<count($arr);$i++)
			  {
			    echo '<td bgcolor="#FFFFFF">'.$arr[$i].'</td>';
			  }
		echo "</tr>";
		echo '</table>';
	}

	function tampilkolom($arr)
	{
		echo '<table width="500" border="0" cellspacing="1" cellpadding="3" bgcolor="#000099">';
	  for ($i=0;$i<count($arr);$i++)
	  {
			echo '<tr>';
			    echo '<td bgcolor="#FFFFFF">'.$arr[$i].'</td>';
			echo "</tr>";
	   }
		echo '</table>';
	}

if (!isset($_POST['button']))
{
?>		
<form name="form1" method="post" action=""><br>
  <table align="center" width="400" border="1" cellspacing="0" cellpadding="5">
  <tr>
  <td id="ignore" bgcolor="#DBEAF5" width="400" colspan="2">
	  <div align="center">
		  <strong>
			  <font size="2" face="Arial, Helvetica, sans-serif">
				  <font size="2">BOBOT KRITERIA</font>
			 </font>
		</strong>
	</div>
</td>
  <?php
    $q = mysqli_query($db, "select * from kriteria ORDER BY id_kriteria");
    while ($r = mysqli_fetch_array($q)) 
	{ 
	?>        
    <tr>
      <td width="200"> 
		<?php echo $r['nama_kriteria']; ?> (<?php echo $r['tipe']; ?>)
	  </td>
	  <td width="200"> 
        <input id="bobot<?php echo $r['id_kriteria']; ?>" name="bobot<?php echo $r['id_kriteria']; ?>" type="text" value="<?php echo $r['bobot']; ?>">
        </td>
    </tr>
    <?php } ?>	
	<tr>
      <td colspan="2"><input type="submit" name="button" value="Proses"></td>
    </tr>
  </table>
  <br>
</form>
<?php	
} 
else 
{
	
	$alternatif = array(); 
	
	$queryalternatif = mysqli_query($db, "SELECT * FROM alternatif ORDER BY id_alternatif");
	$i=0;
	while ($dataalternatif = mysqli_fetch_array($queryalternatif))
	{
		$alternatif[$i] = $dataalternatif['nama_alternatif'];
		$i++;
	}
	
	$kriteria = array(); 
	
	$tipe = array(); 
	
	$bobot = array(); //array(2.2, 2.1, 2.1, 2.8, 0.8);
	
	$querykriteria = mysqli_query($db, "SELECT * FROM kriteria ORDER BY id_kriteria");
	$i=0;
	while ($datakriteria = mysqli_fetch_array($querykriteria))
	{
		$kriteria[$i] = $datakriteria['nama_kriteria'];
		$tipe[$i] = $datakriteria['tipe'];
		$bobot[$i] = @$_POST['bobot'.$datakriteria['id_kriteria']]; //$datakriteria['bobot'];
		$i++;
	}
	
	$alternatifkriteria = array();
						 /* array(
							array(3, 12, 32, 4000000, 8.8),											
							array(3, 10, 64, 3500000, 8),												                            
							array(2, 8, 64, 4000000, 8.8),					                           
							array(3, 12, 64, 6000000, 8.2),
							array(4, 12, 128, 5000000, 8.2),
							array(3, 8, 32, 3500000, 8.5),
							array(4, 12, 128, 7000000, 7.7)
						  );  */
	
	$queryalternatif = mysqli_query($db, "SELECT * FROM alternatif ORDER BY id_alternatif");
	$i=0;
	while ($dataalternatif = mysqli_fetch_array($queryalternatif))
	{
		$querykriteria = mysqli_query($db, "SELECT * FROM kriteria ORDER BY id_kriteria");
		$j=0;
		while ($datakriteria = mysqli_fetch_array($querykriteria))
		{
			$queryalternatifkriteria = mysqli_query($db, "SELECT * FROM alternatif_kriteria WHERE id_alternatif = '$dataalternatif[id_alternatif]' AND id_kriteria = '$datakriteria[id_kriteria]'");
			$dataalternatifkriteria = mysqli_fetch_array($queryalternatifkriteria);
			
			$alternatifkriteria[$i][$j] = $dataalternatifkriteria['nilai'];
			$j++;
		}
		$i++;
	}
	
	$pembagi = array();
	
	for ($i=0;$i<count($kriteria);$i++)
	{
		$pembagi[$i] = 0;
	
		for ($j=0;$j<count($alternatif);$j++)
		{
			$pembagi[$i] = $pembagi[$i] + ($alternatifkriteria[$j][$i] * $alternatifkriteria[$j][$i]);
		}
		
		$pembagi[$i] = sqrt($pembagi[$i]);
	}
	
	$normalisasi = array();
	
	for ($i=0;$i<count($alternatif);$i++)
	{
		for ($j=0;$j<count($kriteria);$j++)
		{
			$normalisasi[$i][$j] = $alternatifkriteria[$i][$j] / $pembagi[$j];
		}
	}
	
	$optimasi = array();
	
	for ($i=0;$i<count($alternatif);$i++)
	{
		$optimasi[$i] = 0;
		for ($j=0;$j<count($kriteria);$j++)
		{
			if ($tipe[$j] == "cost") {
				$optimasi[$i] = $optimasi[$i] - ($normalisasi[$i][$j] * $bobot[$j]);
			} else { //if ($tipe[$j] == "benefit") {
				$optimasi[$i] = $optimasi[$i] + ($normalisasi[$i][$j] * $bobot[$j]);				
			}
		}
	}
	
	$alternatifrangking = array();
	$optimasirangking = array();
	
	for ($i=0;$i<count($alternatif);$i++)
	{
		$optimasirangking[$i] = $optimasi[$i];
		$alternatifrangking[$i] = $alternatif[$i];
	}
	
	for ($i=0;$i<count($alternatif);$i++)
	{
		for ($j=$i;$j<count($alternatif);$j++)
		{
			if ($optimasirangking[$j] > $optimasirangking[$i])
			{
				$tmphasil = $optimasirangking[$i];
				$tmpalternatif = $alternatifrangking[$i];
				$optimasirangking[$i] = $optimasirangking[$j];
				$alternatifrangking[$i] = $alternatifrangking[$j];
				$optimasirangking[$j] = $tmphasil;
				$alternatifrangking[$j] = $tmpalternatif;
			}
		}
	}
?>
<div id="perhitungan" style="display:none;">
<br />
<h4 class="card-title"> alternatif = </h4>
<?php tampilbaris($alternatif); ?>
<br />
<h4 class="card-title"> kriteria = </h4>
<?php tampilbaris($kriteria); ?>
<br />
<h4 class="card-title"> tipe = </h4>
<?php tampilbaris($tipe); ?>
<br />
<h4 class="card-title"> bobot = </h4>
<?php tampilbaris($bobot); ?>
<br />
<h4 class="card-title"> nilai alternatifkriteria= </h4>
<?php tampiltabel($alternatifkriteria); ?>
<br />
<h4 class="card-title"> pembagi = </h4>
<?php tampilbaris($pembagi); ?>
<br />
<h4 class="card-title"> normalisasi= </h4>
<?php tampiltabel($normalisasi); ?>
<br />
<h4 class="card-title"> optimasi= </h4>
<?php tampilkolom($optimasi); ?>
<br />
<h4 class="card-title"> hasilranking= </h4>
<?php tampilkolom($optimasirangking); ?>
<br />
<h4 class="card-title"> alternatifranking= </h4>
<?php tampilkolom($alternatifrangking); ?>
<br />
<h4 class="card-title">alternatif terbaik = <?php echo $alternatifrangking[0]; ?> dengan nilai optimasi terbesar = <?php echo $optimasirangking[0]; ?> </h4>
</div>
<br />
<input type="button" value="Perhitungan" onclick="document.getElementById('perhitungan').style.display='block';"/>
<br />
<br />
<table width="500" border="0" cellspacing="1" cellpadding="3" bgcolor="#000099">
	<tr>
    	<td bgcolor="#FFFFFF">Ranking</td>
    	<td bgcolor="#FFFFFF">Alternatif</td>
    	<td bgcolor="#FFFFFF">Nilai Optimasi</td>
    </tr>
<?php
	for ($i=0;$i<count($optimasirangking);$i++)
	{	
?>
    <tr>
    	<td bgcolor="#FFFFFF"><?php echo ($i+1); ?></td>
    	<td bgcolor="#FFFFFF"><?php echo $alternatifrangking[$i]; ?></td>
    	<td bgcolor="#FFFFFF"><?php echo $optimasirangking[$i]; ?></td>
    </tr>
<?php
	}
?>
</table>
<br />
<br />
<h4 class="card-title"> Alternatif Produk Terbaik = <?php echo $alternatifrangking[0]; ?> dengan Nilai Optimasi Terbesar = <?php echo $optimasirangking[0]; ?> </h4>
<br />
<?php
}
?>
<br />
</td>
  </tr>
    </table></td>
</table>
</div>
              </div>
            </div>
          </div>
        </div>
      </div>
<footer class="footer">
        <div class="container-fluid">
          <ul class="nav">
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                A.D.M Creative Team
              </a>
            </li>
          </ul>
          <div class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script> <i class="tim-icons icon-heart-2"></i> by
            <a href="javascript:void(0)" target="_blank">A.D.M Creative Team</a> for a better web.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Background</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger background-color">
            <div class="badge-colors text-center">
              <span class="badge filter badge-primary active" data-color="primary"></span>
              <span class="badge filter badge-info" data-color="blue"></span>
              <span class="badge filter badge-success" data-color="green"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="adjustments-line text-center color-change">
          <span class="color-label">LIGHT MODE</span>
          <span class="badge light-badge mr-2"></span>
          <span class="badge dark-badge ml-2"></span>
          <span class="color-label">DARK MODE</span>
        </li>
      </ul>
    </div>
  </div>

  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/black-dashboard.min.js?v=1.0.0"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



        $('.fixed-plugin a').click(function(event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .background-color span').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data', new_color);
          }

          if ($main_panel.length != 0) {
            $main_panel.attr('data', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data', new_color);
          }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
          } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            blackDashboard.showSidebarMessage('Sidebar mini activated...');
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function() {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
          $('body').removeClass('white-content');
        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "black-dashboard-free"
      });
  </script>
</body>

</html>
