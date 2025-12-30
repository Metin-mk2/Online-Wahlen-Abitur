<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">  <!-- An attribute to display the website on a display -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  <!-- // name = An area of the window in which web content can be seen ;content = Parameter which changes the width depending on the viewing device -->
        <title>Wahlen</title>  <!-- // Name of the website which is displayed on the chrome tab -->
        <link rel="stylesheet" href="style_wahlen.css" href="button.js" href="button.js"> <!--// The link tag defines the relationship between the current document and an external resource. It is most often used to link to external style sheets or to add a favicon to your website. -->
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
							<img src="IMG_0028.png" height="25px" width="25px"> 
						</div>
					</div>
		            
		            </a>
		            
					<a class="headbar_link" href="https://www.bundestag.de/leichte_sprache">
						
					<div class="hover-underline-animation"> Leichte Sprache
					<div class="headbar_img_leicht">
						<img src="IMG_0029.png" height="25px" width="25px"> 
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
			


			
<!--                            Layer 4                      -->			
			<div class="layer4">
				<div class="ueberschrift">Stimmzettel</div>
				<div class="wahlkreis">
					<center> für die Wahl zum Deutschen Bundestag im Wahlkreis 232 Amberg am 26. September 2021
					</center>
					</div>
			</div>
					
			
			<div class="layer5">
			
				<div class="stimmen">Sie haben 2 Stimmen
					<div class="stimmen_img">
						<img src="IMG_0100.png" width="35px" height="35px"/>
						<img src="IMG_0100.png" width="35px" height="35px"/>
					</div>
				</div>
				<div class="infos">
				<div class="pfeil_img">
					<img src="IMG_0104.jpeg" height="80px" width="400px" />
				</div>
					<div class="hier_black">hier 1 Stimme</div>
					<div class="wahl_black">für die Wahl</div>
					<div class="abgeordneter">eines/einer Wahlkreisabgeordneten</div>
					
					<div class="hier_blau">hier 1 Stimme</div>
					<div class="wahl_blau">für die Wahl</div>
					<div class="landesliste">einer Landesliste (Partei)</div>
					<div class="verteilung">- maßgebende Stimme für die Verteilung der <br /> 
					Sitze insgesamt auf die einzelnen Parteien -</div>
				</div>
			</div>
				<!--
						<div class="grid-container">

  <div class="grid-item">
  	<div class="number">1</div>
  
  </div>
  <div class="grid-item">
	  <div class="partei">jubewj</div>
  </div>
  <div class="grid-item">3</div>  
  
  <div class="grid-item">4</div>
  <div class="grid-item">5</div>
  <div class="grid-item">6</div> 
 
  
  <div class="grid-item">7</div>
  <div class="grid-item">8</div>
  <div class="grid-item">9</div> 
 <div class="grid-item">9</div>

</div>				
			</div>
			
		durch loopen!!
		-->
			
		<script src="button.js" type="text/javascript"></script>
		
			
	<div class="layer6">		
			
<!--               		function zweit_img_func2() {
			for (var i = 1 ; i < 27; i++){
				if (i!=2) {
				var change = document.getElementById('zweit_wahl_img' + i).style.display ="none"	
				}
			}
		}         ERSTSTIMME TABELLE                         -->
	<div class="erststimme">
	<div class="erstsimme_schrift">Erststimme</div>	
	
		<table>
			<div class="CSU">
			  <tr>
			    <td> <div class="number">1</div></td>
			    <td> <div class="grenze">
				<div class="name_bold"><strong>Hierl</strong>, Susanne</div>
				<div class="beschreibung">Rechtsanwältin <br />Berg b. Neumarkt i.d OPf.</div>
				<div class="erst_partei">CSU</div>
				<div class="partei_name">Christlich-Soziale Union <br /> in Bayern e.V.</div>
					</div>
				</td>
				<td> <div class="button"> 
						<button type="button" class="erst_wahl_eingabe" value="CSU" onclick="document.getElementById('wahl_img1').style.display='inline'; img_func1()""> 
						<div id="wahl_img1"> <img src="IMG_0100.png" height="45px" width="45px"/>
						</div>	
					</button> 
			
				</div> </td>
			  </tr>
			</div>
			
			
			<div class="SPD">
			  <tr>
			    <td> <div class="number" >2</div></td>
			    <td> <div class="grenze">
				<div class="name_bold"><strong>Foitzik</strong>, Johannes</div>
				<div class="beschreibung">Abteilungsleiter <br />Sengenthal</div>
				<div class="erst_partei">SPD</div>
				<div class="partei_name">Sozialdemokratische Partei <br /> Deutschlands</div>
					</div>
				</td>
				<td> <div class="button">
					<button type="button" class="erst_wahl_eingabe" value="SPD" onclick="document.getElementById('wahl_img2').style.display='inline' ;img_func2()""> 
						<div id="wahl_img2"> <img src="IMG_0100.png" height="45px" width="45px"/>
						</div>	
					</button> 
					</div> 
				</td>
				
			  </tr>
		  </div>
		  
		  	<div class="AFD">
			  <tr>
			    <td> <div class="number">3</div></td>
			    <td> <div class="grenze">
				<div class="name_bold"><strong>Boehringer</strong>, Peter</div>
				<div class="beschreibung">Kaufmann <br />Sengenthal</div>
				<div class="erst_partei">AfD</div>
				<div class="partei_name">Alternative für Deutschland</div>
					</div>
				</td>
				<td> <div class="button"> 
					<button type="button" class="erst_wahl_eingabe" value="AfD" onclick="document.getElementById('wahl_img3').style.display='inline' ;img_func3()""> 
						<div id="wahl_img3"> <img src="IMG_0100.png" height="45px" width="45px"/>
						</div>	
					</button>  
				</div> 
			</td>
			  </tr>
		  </div>
		  
		  	<div class="FDP">
			  <tr>
			    <td> <div class="number">4</div></td>
			    <td> <div class="grenze">
				<div class="name_bold"><strong>Gründer</strong>, Nils</div>
				<div class="beschreibung">Student <br />Neumarkt i.d. OPf.</div>
				<div class="erst_partei">FDP</div>
				<div class="partei_name">Freie Demokratische Partei</div>
					</div>
				</td>
				<td> 					
					<div class="button"> 
					<button type="button" class="erst_wahl_eingabe" value="FDP" onclick="document.getElementById('wahl_img4').style.display='inline' ;img_func4()""> 
						<div id="wahl_img4"> <img src="IMG_0100.png" height="45px" width="45px"/>
						</div>	
					</button>  
				</div> 
			</td>
		  </div>
		  
		    	<div class="GRÜNE">
			  <tr>
			    <td> <div class="number">5</div></td>
			    <td> <div class="grenze">
				<div class="name_bold"><strong>Herbst</strong>, Karl-Heinz</div>
				<div class="beschreibung">Finanzbeamter <br />Sulzbach-Rosenberg</div>
				<div class="erst_partei">GRÜNE</div>
				<div class="partei_name">BÜNDNIS 90/ <br />DIE GRÜNEN</div>
					</div>
				</td>
				<td>
				<div class="button"> 
					<button type="button" class="erst_wahl_eingabe" value="GRÜNE" onclick="document.getElementById('wahl_img5').style.display='inline';img_func5()""> 
						<div id="wahl_img5"> <img src="IMG_0100.png" height="45px" width="45px"/>
						</div>	
					</button>  
				</div> 
			</td>
		  </div>
		  
		    	<div class="LINKE">
			  <tr>
			    <td> <div class="number">6</div></td>
			    <td> <div class="grenze">
				<div class="name_bold"><strong>Sendelbeck</strong>, Markus</div>
				<div class="beschreibung">Hygieniker <br />Pyrbaum</div>
				<div class="erst_partei">DIE LINKE</div>
				<div class="partei_name">DIE LINKE</div>
					</div>
				</td>
				<td> 
					<div class="button"> 
					<button type="button" class="erst_wahl_eingabe" value="DIE LINKE" onclick="document.getElementById('wahl_img6').style.display='inline';img_func6()"""> 
						<div id="wahl_img6"> <img src="IMG_0100.png" height="45px" width="45px"/>
						</div>	
					</button>  
				</div> 
			</td>
		  </div>
		  
		    	<div class="FREIE_WÄHLER">
			  <tr>
			    <td> <div class="number">7</div></td>
			    <td> <div class="grenze">
				<div class="name_bold"><strong>Miranda</strong>, Daisy</div>
				<div class="beschreibung">Studentin <br />Lauterhofen</div>
				<div class="erst_partei">FREIE WÄHLER</div>
				<div class="partei_name">FREIE WÄHLER</div>
					</div>
				</td>
				<td> 
					<div class="button"> 
						<button type="button" class="erst_wahl_eingabe" value="FREIE WÄHLER" onclick="document.getElementById('wahl_img7').style.display='inline';img_func7()"""> 
						<div id="wahl_img7"> <img src="IMG_0100.png" height="45px" width="45px"/>
						</div>	
					</button>  </div> </td>
			  </tr>
		  </div>
		  
		  <div class="ÖDP">
			  <tr>
			    <td> <div class="number">8</div></td>
			    <td> <div class="grenze">
				<div class="name_bold"><strong>Witt</strong>, Susanne</div>
				<div class="beschreibung">Dipl. -Volkswirtin <br />Amberg</div>
				<div class="erst_partei">ÖDP</div>
				<div class="partei_name">Ökologisch-Demokratische <br /> Partei</div>
					</div>
				</td>
				<td> 
					<div class="button"> 
						<button type="button" class="erst_wahl_eingabe" value="ÖDP" onclick="document.getElementById('wahl_img8').style.display='inline';img_func8()"""> 
						<div id="wahl_img8"> <img src="IMG_0100.png" height="45px" width="45px"/>
						</div>	
					</button>  
				</div>
				</td>
			  </tr>
		  </div>
		  
		<div class="dieBASIS">
			  <tr>
			    <td> <div class="number">9</div></td>
			    <td> <div class="grenze">
				<div class="name_bold"><strong>Baumert</strong>, Alwin</div>
				<div class="beschreibung">Selbst. Sozial- und <br />Theaterpädagoge</div>
				<div class="erst_partei">dieBasis</div>
				<div class="partei_name">Basisdemokratische Partei <br /> Deutschland</div>
					</div>
				</td>
				<td> 
					<div class="button"> 
						<button type="button" class="erst_wahl_eingabe" value="dieBasis" onclick="document.getElementById('wahl_img9').style.display='inline';img_func9()"""> 
						<div id="wahl_img9"> <img src="IMG_0100.png" height="45px" width="45px"/>
						</div>	
					</button>  
					</div> 
				</td>
			  </tr>
		  </div>
		  
		  
		<div class="unabhängig">
			 <tr>
			    <td> <div class="number_2">10</div></td>
			    <td> <div class="grenze">
				<div class="name_bold"><strong>Gradl</strong>, Nikolaus</div>
				<div class="beschreibung">Geschäftsführer <br />Beratzhausen</div>
				<div class="erst_partei">Unabhängiger <br /> Direktkandidat</div>
					</div>
				</td>
				<td> 
					<div class="button"> 
					<button type="button" onclick="document.getElementById('wahl_img10').style.display='inline';img_func10()"""> 
						<div id="wahl_img10"> <img src="IMG_0100.png" height="45px" width="45px"/>
						</div>	
					</button>  
				</div> 
				</td>
			  </tr>
		  </div>
		  
		</table>
		</div>
		
		
		
		
		
		<!--           zweitstimme wahl-->
		
		
		
		
		<div class="zweitstimme">
		<div class="zweitstimme_schrift">Zweitstimme</div>
		
		<table>
			<div class="CSU">
			  <tr>
			    <td> <div class="number">1</div></td>
			    <td> <div class="grenze">
					<div class="zweit_partei">CSU</div>
					<div class="zweit_name">Christlich-Soziale Union </br> in Bayern e.V.</div>
					<div class="zweit_politiker">Alexander Dobrrindt, Dorothee Bär, <br />Andreas Scheuer, Daniel Ludwig, <br />Dr.Hans-Peter Friedrich </div>
					</div>
				</td>
				<td> <div class="button"> 
								<button type="button" class="wahl_eingabe" value="CSU" onclick="document.getElementById('zweit_wahl_img1').style.display='inline'; zweit_img_func1()""> 
						<div id="zweit_wahl_img1"> <img src="IMG_0100.png" height="45px" width="45px"/>
						</div>	
					</button> 
			
				</div> </td>
			  </tr>
			</div>
			
			
			<div class="SPD">
			  <tr>
			    <td> <div class="number" >2</div></td>
			    <td> <div class="grenze">
					<div class="zweit_partei">SPD</div>
					<div class="zweit_name">Sozialdemokratische Partei </br> Deutschlands</div>
					<div class="zweit_politiker">Ulrich Grötsch, Dr. Bärbel Kofler, <br />Carsten Träger, Anette Kramme, <br />Sebastian Roloff </div>
				</div>
					</div>
				</td>
				<td> <div class="button">
					<button type="button" class="wahl_eingabe" value="SPD" onclick="document.getElementById('zweit_wahl_img2').style.display='inline'; zweit_img_func2()"; > 
						<div id="zweit_wahl_img2"> <img src="IMG_0100.png" height="45px" width="45px"/>
						</div>	
					</button> 
					</div> 
				</td>
				
			  </tr>
		  </div>
		  
		  	<div class="AFD">
			  <tr>
			    <td> <div class="number">3</div></td>
			    <td> <div class="grenze">
										<div class="zweit_partei">AfD</div>
					<div class="zweit_name">Alternative für Deutschland</div>
					<div class="zweit_politiker">Peter Boehringer, Corinna Miazga,<br />Stephan Protschka, Petr Bystron,<br />Martin Sichert </div>
				</div>
			    </div>
				</td>
				<td> <div class="button"> 
					<button type="button" class="wahl_eingabe" value="AfD" onclick="document.getElementById('zweit_wahl_img3').style.display='inline' ;zweit_img_func3()""> 
						<div id="zweit_wahl_img3"> <img src="IMG_0100.png" height="45px" width="45px"/>
						</div>	
					</button>  
				</div> 
			</td>
			  </tr>
		  </div>
		  
		  	<div class="FDP">
			  <tr>
			    <td> <div class="number">4</div></td>
			    <td> <div class="grenze">
										<div class="zweit_partei">FDP</div>
					<div class="zweit_name">Frei Demokratische Partei</div>
					<div class="zweit_politiker">Daniel Föst, Katja Hessel, Karsten Klein, <br />Dr. Lukas Köhler, Thomas Sattelberger</div>
				</div>
					</div>
				</td>
				<td> 					
					<div class="button"> 
					<button type="button" class="wahl_eingabe" value="FDP"onclick="document.getElementById('zweit_wahl_img4').style.display='inline' ;zweit_img_func4()""> 
						<div id="zweit_wahl_img4"> <img src="IMG_0100.png" height="45px" width="45px"/>
						</div>	
					</button>  
				</div> 
			</td>
		  </div>
		  
		    	<div class="GRÜNE">
			  <tr>
			    <td> <div class="number">5</div></td>
			    <td> <div class="grenze">
										<div class="zweit_partei">GRÜNE</div>
					<div class="zweit_name">BÜNDNIS 90/DIE GRÜNEN</div>
					<div class="zweit_politiker">Alexander Dobrrindt, Dorothee Bär, <br />Andreas Scheuer, Daniel Ludwig, <br />Dr.Hans-Peter Friedrich </div>
				</div>
					</div>
				</td>
				<td>
				<div class="button"> 
					<button type="button" class="wahl_eingabe" value="GRÜNE" onclick="document.getElementById('zweit_wahl_img5').style.display='inline';zweit_img_func5()""> 
						<div id="zweit_wahl_img5"> <img src="IMG_0100.png" height="45px" width="45px"/>
						</div>	
					</button>  
				</div> 
			</td>
		  </div>
		  
		    	<div class="LINKE">
			  <tr>
			    <td> <div class="number">6</div></td>
			    <td> <div class="grenze">
					<div class="zweit_partei">DIE LINKE</div>
					<div class="zweit_name">DIE LINKE</div>
					<div class="zweit_politiker">Alexander Dobrrindt, Dorothee Bär, <br />Andreas Scheuer, Daniel Ludwig, <br />Dr.Hans-Peter Friedrich </div>
				</div>
					</div>
				</td>
				<td> 
					<div class="button"> 
					<button type="button" class="wahl_eingabe" value="DIE LINKE" onclick="document.getElementById('zweit_wahl_img6').style.display='inline';zweit_img_func6()"""> 
						<div id="zweit_wahl_img6"> <img src="IMG_0100.png" height="45px" width="45px"/>
						</div>	
					</button>  
				</div> 
			</td>
		  </div>
		  
		    	<div class="FREIE_WÄHLER">
			  <tr>
			    <td> <div class="number">7</div></td>
			    <td> <div class="grenze">
							<div class="zweit_partei_lang">FREIE <br />WÄHLER</div>
					<div class="zweit_name_lang">FREIE WÄHLER </div>
					<div class="zweit_politiker_lang">Alexander Dobrrindt, Dorothee Bär, <br />Andreas Scheuer, Daniel Ludwig, <br />Dr.Hans-Peter Friedrich </div>
				</div>
					</div>
				</td>
				<td> 
					<div class="button"> 
						<button type="button" class="wahl_eingabe" value="FREIE WÄHLER" onclick="document.getElementById('zweit_wahl_img7').style.display='inline';zweit_img_func7()"""> 
						<div id="zweit_wahl_img7"> <img src="IMG_0100.png" height="45px" width="45px"/>
						</div>	
					</button>  </div> </td>
			  </tr>
		  </div>
		  
		  <div class="ÖDP">
			  <tr>
			    <td> <div class="number">8</div></td>
			    <td> <div class="grenze">
										<div class="zweit_partei">ÖDP</div>
					<div class="zweit_name">Ökologisch-Demokratische</br>Partei</div>
					<div class="zweit_politiker">Alexander Dobrrindt, Dorothee Bär, <br />Andreas Scheuer, Daniel Ludwig, <br />Dr.Hans-Peter Friedrich </div>
				</div>
					</div>
				</td>
				<td> 
					<div class="button"> 
						<button type="button" class="wahl_eingabe" value="ÖDP" onclick="document.getElementById('zweit_wahl_img8').style.display='inline';zweit_img_func8()"""> 
						<div id="zweit_wahl_img8"> <img src="IMG_0100.png" height="45px" width="45px"/>
						</div>	
					</button>  
				</div>
				</td>
			  </tr>
		  </div>
		  
		<div class="dieBASIS">
			  <tr>
			    <td> <div class="number">9</div></td>
			    <td> <div class="grenze">
										<div class="zweit_partei_länger">Tier- <br />schutz- <br />partei</div>
					<div class="zweit_name_länger">PARTEI MENSCH UMWELT  </br> TIERSCHUTZ</div>
					<div class="zweit_politiker_länger">Alexander Dobrrindt, Dorothee Bär, <br />Andreas Scheuer, Daniel Ludwig, <br />Dr.Hans-Peter Friedrich </div>
				</div>
					</div>
				</td>
				<td> 
					<div class="button"> 
						<button type="button" class="wahl_eingabe" value="Tierschutzpartei" onclick="document.getElementById('zweit_wahl_img9').style.display='inline';zweit_img_func9()"""> 
						<div id="zweit_wahl_img9"> <img src="IMG_0100.png" height="45px" width="45px"/>
						</div>	
					</button>  
					</div> 
				</td>
			  </tr>
		  </div>
		  
		  
		<div class="unabhängig">
			 <tr>
			    <td> <div class="number_2">10</div></td>
			    <td> <div class="grenze">
										<div class="zweit_partei">BP</div>
					<div class="zweit_name">Bayernpartei</div>
					<div class="zweit_politiker">Alexander Dobrrindt, Dorothee Bär, <br />Andreas Scheuer, Daniel Ludwig, <br />Dr.Hans-Peter Friedrich </div>
				</div>
					</div>
				</td>
				<td> 
					<div class="button"> 
					<button type="button" class="wahl_eingabe" value="BP" onclick="document.getElementById('zweit_wahl_img10').style.display='inline';zweit_img_func10()"""> 
						<div id="zweit_wahl_img10"> <img src="IMG_0100.png" height="45px" width="45px"/>
						</div>	
					</button>  
				</div> 
				</td>
			  </tr>
		  
			  		<div class="unabhängig">
			 <tr>
			    <td> <div class="number_2">11</div></td>
			    <td> <div class="grenze">
										<div class="zweit_partei_lang">Die <br /> PARTEI</div>
					<div class="zweit_name_lang">Partei für Arbeit, Rechtstaat, <br /> Tierschutz, Elitenförderung und <br />basisdemokratische Initiative</div>
					<div class="zweit_politiker_lang">Alexander Dobrrindt, Dorothee Bär</div>
				</div>
					</div>
				</td>
				<td> 
					<div class="button"> 
					<button type="button" class="wahl_eingabe" value="Die PARTEI" onclick="document.getElementById('zweit_wahl_img11').style.display='inline';zweit_img_func11()"""> 
						<div id="zweit_wahl_img11"> <img src="IMG_0100.png" height="45px" width="45px"/>
						</div>	
					</button>  
				</div> 
				</td>
			</tr>
			
					<div class="unabhängig">
			 <tr>
			    <td> <div class="number_2">12</div></td>
			    <td> <div class="grenze">
										<div class="zweit_partei">PIRATEN</div>
					<div class="zweit_name">Piratenpartei Deutschland</div>
					<div class="zweit_politiker">Alexander Dobrrindt, Dorothee Bär, <br />Andreas Scheuer, Daniel Ludwig, <br />Dr.Hans-Peter Friedrich </div>
				</div>
					</div>
				</td>
				<td> 
					<div class="button"> 
					<button type="button" class="wahl_eingabe" value="Piraten" onclick="document.getElementById('zweit_wahl_img12').style.display='inline';zweit_img_func12()"""> 
						<div id="zweit_wahl_img12"> <img src="IMG_0100.png" height="45px" width="45px"/>
						</div>	
					</button>  
				</div> 
				</td>
			</tr>
			
					<div class="unabhängig">
			 <tr>
			    <td> <div class="number_2">13</div></td>
			    <td> <div class="grenze">
										<div class="zweit_partei">NPD</div>
					<div class="zweit_name">Nationaldemokratische Partei <br />Deutschlands</div>
					<div class="zweit_politiker">Alexander Dobrrindt, Dorothee Bär, <br />Andreas Scheuer, Daniel Ludwig, <br />Dr.Hans-Peter Friedrich </div>
				</div>
					</div>
				</td>
				<td> 
					<div class="button"> 
					<button type="button" class="wahl_eingabe" value="NPD" onclick="document.getElementById('zweit_wahl_img13').style.display='inline';zweit_img_func13()"""> 
						<div id="zweit_wahl_img13"> <img src="IMG_0100.png" height="45px" width="45px"/>
						</div>	
					</button>  
				</div> 
				</td>
			</tr>
			
					<div class="unabhängig">
			 <tr>
			    <td> <div class="number_2">14</div></td>
			    <td> <div class="grenze">
					 <div class="zweit_partei">V- Partei</div>
					<div class="zweit_name">Partei für Veränderung, </br> Vegetarier und Veganer</div>
					<div class="zweit_politiker">Alexander Dobrrindt, Dorothee Bär, <br />Andreas Scheuer, Daniel Ludwig, <br />Dr.Hans-Peter Friedrich </div>
				</div>
					</div>
				</td>
				<td> 
					<div class="button"> 
					<button type="button" class="wahl_eingabe" value="V- Partei" onclick="document.getElementById('zweit_wahl_img14').style.display='inline';zweit_img_func14()"""> 
						<div id="zweit_wahl_img14"> <img src="IMG_0100.png" height="45px" width="45px"/>
						</div>	
					</button>  
				</div> 
				</td>
			</tr>
			
					<div class="unabhängig">
			 <tr>
			    <td> <div class="number_2">15</div></td>
			    <td> <div class="grenze">
								<div class="zweit_partei_länger">Gesund- <br />heitsfor-<br />schung</div>
					<div class="zweit_name_länger">Partei für Gesundheitsforschung</div>
					<div class="zweit_politiker_länger">Alexander Dobrrindt, Dorothee Bär, <br />Andreas Scheuer, Daniel Ludwig, <br />Dr.Hans-Peter Friedrich </div>
				</div>
					</div>
				</td>
				<td> 
					<div class="button"> 
					<button type="button" class="wahl_eingabe" value="Gesundsheitsforschung" onclick="document.getElementById('zweit_wahl_img15').style.display='inline';zweit_img_func15()"""> 
						<div id="zweit_wahl_img15"> <img src="IMG_0100.png" height="45px" width="45px"/>
						</div>	
					</button>  
				</div> 
				</td>
			</tr>
			
					<div class="unabhängig">
			 <tr>
			    <td> <div class="number_2">16</div></td>
			    <td> <div class="grenze">
										<div class="zweit_partei">MLPD</div>
					<div class="zweit_name">Marxistisch-Leninistische Partei </br> Deutschlands</div>
					<div class="zweit_politiker">Alexander Dobrrindt, Dorothee Bär, <br />Andreas Scheuer, Daniel Ludwig, <br />Dr.Hans-Peter Friedrich </div>
				</div>
					</div>
				</td>
				<td> 
					<div class="button"> 
					<button type="button" class="wahl_eingabe" value="MLPD"  onclick="document.getElementById('zweit_wahl_img16').style.display='inline';zweit_img_func16()"""> 
						<div id="zweit_wahl_img16"> <img src="IMG_0100.png" height="45px" width="45px"/>
						</div>	
					</button>  
				</div> 
				</td>
			</tr>
			
					<div class="unabhängig">
			 <tr>
			    <td> <div class="number_2">17</div></td>
			    <td> <div class="grenze">
										<div class="zweit_partei">DKP</div>
					<div class="zweit_name">Deutsch Kommunistische Partei</div>
					<div class="zweit_politiker">Alexander Dobrrindt, Dorothee Bär, <br />Andreas Scheuer, Daniel Ludwig, <br />Dr.Hans-Peter Friedrich </div>
				</div>
					</div>
				</td>
				<td> 
					<div class="button"> 
					<button type="button" class="wahl_eingabe" value="DKP" onclick="document.getElementById('zweit_wahl_img17').style.display='inline';zweit_img_func17()"""> 
						<div id="zweit_wahl_img17"> <img src="IMG_0100.png" height="45px" width="45px"/>
						</div>	
					</button>  
				</div> 
				</td>
			</tr>
			
					<div class="unabhängig">
			 <tr>
			    <td> <div class="number_2">18</div></td>
			    <td> <div class="grenze">
										<div class="zweit_partei">dieBasis</div>
					<div class="zweit_name">Basisdemokratische Partei</br> Deutschland</div>
					<div class="zweit_politiker">Alexander Dobrrindt, Dorothee Bär, <br />Andreas Scheuer, Daniel Ludwig, <br />Dr.Hans-Peter Friedrich </div>
				</div>
					</div>
				</td>
				<td> 
					<div class="button"> 
					<button type="button" class="wahl_eingabe" value="dieBasis" onclick="document.getElementById('zweit_wahl_img18').style.display='inline';zweit_img_func18()"""> 
						<div id="zweit_wahl_img18"> <img src="IMG_0100.png" height="45px" width="45px"/>
						</div>	
					</button>  
				</div> 
				</td>
			</tr>
			
					<div class="unabhängig">
			 <tr>
			    <td> <div class="number_2">19</div></td>
			    <td> <div class="grenze">
										<div class="zweit_partei">Bündnis C</div>
					<div class="zweit_name">Christen für Deutschland</div>
					<div class="zweit_politiker">Alexander Dobrrindt, Dorothee Bär, <br />Andreas Scheuer, Daniel Ludwig, <br />Dr.Hans-Peter Friedrich </div>
				</div>
					</div>
				</td>
				<td> 
					<div class="button"> 
					<button type="button" class="wahl_eingabe" value="Bündnis C" onclick="document.getElementById('zweit_wahl_img19').style.display='inline';zweit_img_func19()"""> 
						<div id="zweit_wahl_img19"> <img src="IMG_0100.png" height="45px" width="45px"/>
						</div>	
					</button>  
				</div> 
				</td>
			</tr>
			
					<div class="unabhängig">
			 <tr>
			    <td> <div class="number_2">20</div></td>
			    <td> <div class="grenze">
										<div class="zweit_partei">III. Weg</div>
					<div class="zweit_name">DER DRITTE WEG</div>
					<div class="zweit_politiker">Alexander Dobrrindt, Dorothee Bär, <br />Andreas Scheuer, Daniel Ludwig, <br />Dr.Hans-Peter Friedrich </div>
				</div>
					</div>
				</td>
				<td> 
					<div class="button"> 
					<button type="button" class="wahl_eingabe" value="III. Weg" onclick="document.getElementById('zweit_wahl_img20').style.display='inline';zweit_img_func20()"""> 
						<div id="zweit_wahl_img20"> <img src="IMG_0100.png" height="45px" width="45px"/>
						</div>	
					</button>  
				</div> 
				</td>
			</tr>
			
					<div class="unabhängig">
			 <tr>
			    <td> <div class="number_2">21</div></td>
			    <td> <div class="grenze">
										<div class="zweit_partei">du.</div>
					<div class="zweit_name">Die Urbane. Eine HipHop Partei</div>
					<div class="zweit_politiker">Alexander Dobrrindt, Dorothee Bär, <br />Andreas Scheuer, Daniel Ludwig, <br />Dr.Hans-Peter Friedrich </div>
				</div>
					</div>
				</td>
				<td> 
					<div class="button"> 
					<button type="button" class="wahl_eingabe" value="du." onclick="document.getElementById('zweit_wahl_img21').style.display='inline';zweit_img_func21()"""> 
						<div id="zweit_wahl_img21"> <img src="IMG_0100.png" height="45px" width="45px"/>
						</div>	
					</button>  
				</div> 
				</td>
			</tr>
			
					<div class="unabhängig">
			 <tr>
			    <td> <div class="number_2">22</div></td>
			    <td> <div class="grenze">
										<div class="zweit_partei">LKR</div>
					<div class="zweit_name">Liberal-Konservative Reformer</div>
					<div class="zweit_politiker">Alexander Dobrrindt, Dorothee Bär, <br />Andreas Scheuer, Daniel Ludwig, <br />Dr.Hans-Peter Friedrich </div>
				</div>
					</div>
				</td>
				<td> 
					<div class="button"> 
					<button type="button" class="wahl_eingabe" value="LKR" onclick="document.getElementById('zweit_wahl_img22').style.display='inline';zweit_img_func22()"""> 
						<div id="zweit_wahl_img22"> <img src="IMG_0100.png" height="45px" width="45px"/>
						</div>	
					</button>  
				</div> 
				</td>
			</tr>
			
					<div class="unabhängig">
			 <tr>
			    <td> <div class="number_2">23</div></td>
			    <td> <div class="grenze">
										<div class="zweit_partei_lang">Die Human- <br />isten</div>
					<div class="zweit_name_lang">Partei der Humanisten</div>
					<div class="zweit_politiker_lang">Alexander Dobrrindt, Dorothee Bär, <br />Andreas Scheuer, Daniel Ludwig, <br />Dr.Hans-Peter Friedrich </div>
				</div>
					</div>
				</td>
				<td> 
					<div class="button"> 
					<button type="button" class="wahl_eingabe" value="Die Humanisten" onclick="document.getElementById('zweit_wahl_img23').style.display='inline';zweit_img_func23()"""> 
						<div id="zweit_wahl_img23"> <img src="IMG_0100.png" height="45px" width="45px"/>
						</div>	
					</button>  
				</div> 
				</td>
			</tr>
			
					<div class="unabhängig">
			 <tr>
			    <td> <div class="number_2">24</div></td>
			    <td> <div class="grenze">
										<div class="zweit_partei_länger">Team <br />Toden- <br />höfer</div>
					<div class="zweit_name_länger">Christlich-Soziale Union </br> in Bayern e.V.</div>
					<div class="zweit_politiker_länger">Alexander Dobrrindt, Dorothee Bär, <br />Andreas Scheuer, Daniel Ludwig, <br />Dr.Hans-Peter Friedrich </div>
				</div>
					</div>
				</td>
				<td> 
					<div class="button"> 
					<button type="button" class="wahl_eingabe" value="Team Todenhöfer" onclick="document.getElementById('zweit_wahl_img24').style.display='inline';zweit_img_func24()"""> 
						<div id="zweit_wahl_img24"> <img src="IMG_0100.png" height="45px" width="45px"/>
						</div>	
					</button>  
				</div> 
				</td>
			</tr>
			
					<div class="unabhängig">
			 <tr>
			    <td> <div class="number_2">25</div></td>
			    <td> <div class="grenze">
										<div class="zweit_partei_lang">UNAB- <br />HÄNGIGE</div>
					<div class="zweit_name_lang">UNABHÄNGIGE für </br> bürgernahe Demokratie</div>
					<div class="zweit_politiker_lang">Alexander Dobrrindt, Dorothee Bär, <br />Andreas Scheuer, Daniel Ludwig, <br />Dr.Hans-Peter Friedrich </div>
				</div>
					</div>
				</td>
				<td> 
					<div class="button"> 
					<button type="button" class="wahl_eingabe" value="UNABHÄNGIGE" onclick="document.getElementById('zweit_wahl_img25').style.display='inline';zweit_img_func25()"""> 
						<div id="zweit_wahl_img25"> <img src="IMG_0100.png" height="45px" width="45px"/>
						</div>	
					</button>  
				</div> 
				</td>
			</tr>
			
					<div class="unabhängig">
			 <tr>
			    <td> <div class="number_2">26</div></td>
			    <td> <div class="grenze">
										<div class="zweit_partei">Volt</div>
					<div class="zweit_name">Volt Deutschland </br> in Bayern e.V.</div>
					<div class="zweit_politiker">Alexander Dobrrindt, Dorothee Bär, <br />Andreas Scheuer, Daniel Ludwig, <br />Dr.Hans-Peter Friedrich </div>
				</div>
					</div>
				</td>
				<td> 
					<div class="button"> 
					<button type="button" class="wahl_eingabe" value="Volt" onclick="document.getElementById('zweit_wahl_img26').style.display='inline';zweit_img_func26()"""> 
						<div id="zweit_wahl_img26"> <img src="IMG_0100.png" height="45px" width="45px"/>
						</div>	
					</button>  
				</div> 
				</td>
			</tr>
			
			
		  </table>
		  <form>
		  		<button  name="wahl_bestaetigung" id="bestätigungs_button" disabled>Bestätigen</button>	
			</form>
			</div>

		</div>
		
	
		
	</div>	

<script type="text/javascript" src="C:\xampp\htdocs\online_wahlen/button.js"></script>





<script>
	

	// -----------------Erstwahl


	const erstwahl = document.querySelectorAll('.erst_wahl_eingabe');

// Ein Array, um die ausgewählte Option zu speichern
let erststimme = null;

// Eine Schleife, um alle Choice-Buttons durchzugehen und einen Event-Listener hinzuzufügen
erstwahl.forEach(button => {
  button.addEventListener('click', () => {
	// Wenn der Button bereits ausgewählt ist, wird die Auswahl aufgehoben
	if (button.classList.contains('selected')) {
	  button.classList.remove('selected');
	  erststimme = null;
	  
	} else {
	  // Wenn der Button noch nicht ausgewählt ist, wird die Auswahl geändert
	  erstwahl.forEach(otherButton => {
		otherButton.classList.remove('selected');
	  });
	  button.classList.add('selected');
	  erststimme = button.value;
	  
	}
	
	// Der Bestätigen-Button wird aktiviert/deaktiviert, je nachdem, ob eine Auswahl getroffen wurde
	document.getElementById('bestätigungs_button').disabled = erststimme === null;
  });
});

// Der Event-Listener für den Bestätigen-Button
document.getElementById('bestätigungs_button').addEventListener('click', () => {
 if (erststimme != null)
 {alert(`Erststimme: ${erststimme}`);}
	
document.cookie= "erststimme=" + ersttimme;


  });



// --------------- zweitwahl

const zweitwahl = document.querySelectorAll('.wahl_eingabe');

  // Ein Array, um die ausgewählte Option zu speichern
  let zweitstimme = null;

  // Eine Schleife, um alle Choice-Buttons durchzugehen und einen Event-Listener hinzuzufügen
  zweitwahl.forEach(button => {
    button.addEventListener('click', () => {
      // Wenn der Button bereits ausgewählt ist, wird die Auswahl aufgehoben
      if (button.classList.contains('selected')) {
        button.classList.remove('selected');
        zweitstimme = null;
		
      } else {
        // Wenn der Button noch nicht ausgewählt ist, wird die Auswahl geändert
        zweitwahl.forEach(otherButton => {
          otherButton.classList.remove('selected');
        });
        button.classList.add('selected');
        zweitstimme = button.value;
		
      }
	  
      // Der Bestätigen-Button wird aktiviert/deaktiviert, je nachdem, ob eine Auswahl getroffen wurde
      document.getElementById('bestätigungs_button').disabled = zweitstimme === null;
    });
  });

  // Der Event-Listener für den Bestätigen-Button
  document.getElementById('bestätigungs_button').addEventListener('click', () => {
	if (zweitstimme != null)
 {alert(`Zweitstimme: ${zweitstimme}`);}
 document.cookie= "zweitstimme=" + zweitstimme;


	});




</script>




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