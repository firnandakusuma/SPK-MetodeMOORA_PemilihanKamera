<a href="index.php">Kembali</a><br />
<style type="text/css">
<!--
body,td,th {
	font-family: Georgia, Times New Roman, Times, serif;
	font-size: 13px;
	color: #333333;
}
-->
</style>
<?php 
	function tampiltabel($arr)
	{
		echo '<table width="500" border="1" cellspacing="0" cellpadding="3">';
		  for ($i=0;$i<count($arr);$i++)
		  {
		  echo '<tr>';
			  for ($j=0;$j<count($arr[$i]);$j++)
			  {
			    echo '<td>'.$arr[$i][$j].'</td>';
			  }
		  echo '</tr>';
		  }
		echo '</table>';
	}

	function tampilbaris($arr)
	{
		echo '<table width="500" border="1" cellspacing="0" cellpadding="3">';
		echo '<tr>';
			  for ($i=0;$i<count($arr);$i++)
			  {
			    echo '<td>'.$arr[$i].'</td>';
			  }
		echo "</tr>";
		echo '</table>';
	}

	function tampilkolom($arr)
	{
		echo '<table width="500" border="1" cellspacing="0" cellpadding="3">';
	  for ($i=0;$i<count($arr);$i++)
	  {
			echo '<tr>';
			    echo '<td>'.$arr[$i].'</td>';
			echo "</tr>";
	   }
		echo '</table>';
	}
	
	$alternatif = array("Opo", "Xiomey", "Zenpon", "Xpera", "Glaxy", "Vio", "Ipone");
	$kriteria = array("RAM", "Kamera", "Storage", "Harga", "Ketebalan");
	$tipe = array("benefit", "benefit", "benefit", "cost", "cost");
	$bobot = array(2.2, 2.1, 2.1, 2.8, 0.8);
	$alternatifkriteria = array(
							array(3, 12, 32, 4000000, 8.8),											
							array(3, 10, 64, 3500000, 8),												                            
							array(2, 8, 64, 4000000, 8.8),					                           
							array(3, 12, 64, 6000000, 8.2),
							array(4, 12, 128, 5000000, 8.2),
							array(3, 8, 32, 3500000, 8.5),
							array(4, 12, 128, 7000000, 7.7)
						  ); 
	
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
<br />
alternatif =
<?php tampilbaris($alternatif); ?>
<br />
kriteria =
<?php tampilbaris($kriteria); ?>
<br />
tipe =
<?php tampilbaris($tipe); ?>
<br />
bobot =
<?php tampilbaris($bobot); ?>
<br />
nilai alternatifkriteria=
<?php tampiltabel($alternatifkriteria); ?>
<br />
pembagi =
<?php tampilbaris($pembagi); ?>
<br />
normalisasi=
<?php tampiltabel($normalisasi); ?>
<br />
optimasi=
<?php tampilkolom($optimasi); ?>
<br />
hasilranking=
<?php tampilkolom($optimasirangking); ?>
<br />
alternatifranking=
<?php tampilkolom($alternatifrangking); ?>
<br />
alternatif terbaik = <?php echo $alternatifrangking[0]; ?> dengan nilai optimasi terbesar = <?php echo $optimasirangking[0]; ?>
<br /><a href="index.php">Kembali</a>