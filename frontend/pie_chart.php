<?php 
include '../db/database.php';

$erst_parteien = array("CSU", "SPD", "AfD", "FDP", "GRÜNE", "DIE LINKE", "FREIE WÄHLER", "ÖDP", "dieBasis");
$ergebnis1[] = array('partei', 'Anzahl der Stimmen');

foreach ($erst_parteien as $erst_partei) {
    $erst_zählung = "SELECT COUNT(erststimme) FROM auszaehlung WHERE erststimme = '$erst_partei'";
    $erst_verbindung = mysqli_query($verbindung, $erst_zählung);

    if (mysqli_num_rows($erst_verbindung) > 0) {
        $row = mysqli_fetch_assoc($erst_verbindung);
        $erst_stimmen = $row["COUNT(erststimme)"];
        $ergebnis1[] = array($erst_partei, (int) $erst_stimmen);
    }
}
$zaehler1 = "SELECT COUNT(erststimme) FROM auszaehlung";

$zweit_parteien = array("CSU", "SPD", "AfD", "FDP", "GRÜNE", "DIE LINKE", "FREIE WÄHLER", "ÖDP", "dieBasis","Bündnis C","III. Weg","du.","LKR","Die Humanisten","Team Todenhöfer","UNABHÄNGIGE","Volt");
$data2[] = array('partei', 'Anzahl der Stimmen');

foreach ($zweit_parteien as $zweit_partei) {
    $zweit_zählung = "SELECT COUNT(zweitstimme) FROM auszaehlung WHERE zweitstimme = '$zweit_partei'";
    $result = mysqli_query($verbindung, $zweit_zählung);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $zweit_stimmen = $row["COUNT(zweitstimme)"];
        $data2[] = array($zweit_partei, (int) $zweit_stimmen);
    }
}
$zaehler2 = "SELECT COUNT(zweitstimme) FROM auszaehlung";

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">  <!-- An attribute to display the website on a display -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  <!-- // name = An area of the window in which web content can be seen ;content = Parameter which changes the width depending on the viewing device -->
        <title>Wahlen</title>  <!-- // Name of the website which is displayed on the chrome tab -->
        <link rel="stylesheet" href="../resources/css/style_wahlen.css"> 
		<meta http-equiv="refresh" content="200">
    <script type="text/javascript" charset="UTF-8"></script></head>
	
	<body>
		
		    <style>

    a{
        text-decoration: none;

    }
			</style>
	
			
<!--                                 Layer 1						-->
	
			<div class="layer1">
				
				
				
				<div class="headbar_link">
					
		            <a class="headbar_link" href="https://www.bundestag.de/webarchiv"> 
						<div class="hover-underline-animation"> Archiv</div>
					</a>
						
		            <a class="headbar_link" href="https://www.bundestag.de/gebaerdensprache">
						
		            <div class="hover-underline-animation"> Gebärdensprache
						<div class="headbar_img_gebärden">
							<img src="../resources/img/IMG_0028.png" height="25px" width="25px"> 
						</div>
					</div>
		            
		            </a>
		            
					<a class="headbar_link" href="https://www.bundestag.de/leichte_sprache">
						
					<div class="hover-underline-animation"> Leichte Sprache
					<div class="headbar_img_leicht">
						<img src="../resources/img/IMG_0029.png" height="25px" width="25px"> 
					</div>	
					</div>
					
					</a>
        		
				</div>
			</div>	

				
		
			
			
<!--                                 Layer 2						-->		
			
			<div class="layer2"> 
				<div class="title">
					<div class="img"></div>
						Deutscher Bundestag
					</div>	
				</div>
			</div>
			
		
			
<!--                                 Layer 3						-->			
			<div class="layer3">
				<div class="startseite">
					<a href="index.html">Startseite</a>
				</div>
			</div>
			


		
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(erststimmen);
  google.charts.setOnLoadCallback(zweitstimmen);

  function erststimmen() {
    var data = google.visualization.arrayToDataTable(<?php echo json_encode($ergebnis1); ?>);

    var titel = {
      title: 'Auswertung der Erststimmen:' 
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart1'));
    chart.draw(data, titel);
  }
// Quelle: https://developers.google.com/chart/interactive/docs/gallery/piechart

  function zweitstimmen() {
    var data2 = google.visualization.arrayToDataTable(<?php echo json_encode($data2); ?>);

    var titel = {
      title: 'Auswertung der Zweitstimmen:'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
    chart.draw(data2, titel);
  }


</script>




  </head>
  <body>
	<div class="charts">
		<div id="piechart1"></div>   
		<div id="piechart2"></div>   

	</div>


    <div class="layer7">

		<div class="hilfe"> 
			<a href="https://www.bundestag.de/services/hilfe">
				<div class="hover-underline-animation"> Hilfe
				</div>
				
			</a>
			
			<a href="https://www.bundestag.de/services/kontakt"><div class="hover-underline-animation"> Kontakt
			</div></a>
			<a href="https://www.bundestag.de/services/sitemap"><div class="hover-underline-animation"> Inhaltsübersicht
			</div></a>
		</div>
		
		<div class="deutscher_bundestag">
			© Deutscher Bundestag
		</div>
		
		<div class="impressum">
			<a href="https://www.bundestag.de/barrierefreiheit">Barrierefreiheit</a>
			<a href="https://www.bundestag.de/datenschutz">Datzenschutz</a>
			<a href="https://www.bundestag.de/impressum">Impressum</a>
		</div>
	</div>
  </body>
</html>
