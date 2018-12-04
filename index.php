<!DOCTYPE html>

<html lang="pl">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Agent - memory game</title>

<link rel="stylesheet" href="main.css">
<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet"> 

</head>
<body>

	<header>
	
		<h1>Agent - memory game  <a href="#" class="dymek1"><img src="img/question-mark.jpg"><span><strong>Instrukcja: </strong>Celem gry jest odgadnięcie, w której lokacji ukrywa się Twój przeciwnik. Odkrywaj poprawnie pary kart aby zdobyć cenne punkty akcji (PA). <br><br>
		Każda odkryta para dodaje do Twojej puli 5 punktów akcji. Każdy błąd odejmuje 1 punkt akcji. <br><br>Kupuj podpowiedzi, które pomogą ci wskazać miejsce ukrycia przeciwnika. Spróbuj to zrobić majać na końcu jak najwięcej punktów akcji(PA). Utrata wszystkich punktów akcji oznacza automatyczną przegraną.
		<br><br> Kliknij na powiększoną kartę lokacji aby wskazać odganięte miejsce. </span></a> </h1>
		
	</header>
	
	<main>
	
		<article>
		
		<div class="planszaogolna">
		
			<div class="board">
			
				<div class="card" id="c0"></div>
				<div class="card" id="c1"></div>
				<div class="card" id="c2"></div>
				<div class="card" id="c3"></div>
				<div class="card" id="c4"></div>
				<div class="card" id="c5"></div>
				
				<div class="card" id="c6"></div>
				<div class="card" id="c7"></div>
				<div class="card" id="c8"></div>
				<div class="card" id="c9"></div>
				<div class="card" id="c10"></div>
				<div class="card" id="c11"></div>
				
				<div class="card" id="c12"></div>
				<div class="card" id="c13"></div>
				<div class="card" id="c14"></div>
				<div class="card" id="c15"></div>
				<div class="card" id="c16"></div>
				<div class="card" id="c17"></div>
				
				<div class="card" id="c18"></div>
				<div class="card" id="c19"></div>
				<div class="card" id="c20"></div>
				<div class="card" id="c21"></div>
				<div class="card" id="c22"></div>
				<div class="card" id="c23"></div>
				
				
				
			
			</div>
			
			<div class="boardhint">
			
			Podpowiedzi:
			<div class="podpowiedz" id="poszlaka0">kontynent: kup za 10 PA</div>
			<div class="podpowiedz" id="poszlaka1">okolica: kup za 5 PA</div>
			<div class="podpowiedz" id="poszlaka2">teren: kup za 5 PA</div>
			<div class="podpowiedz" id="poszlaka3">losowa: kup za 15 PA</div>
			<div class="podpowiedz" id="poszlaka4">losowa: kup za 15 PA</div>

			
			</div>
			
			<div class="informacje">
			
			<div class="score">Punkty Akcji (PA): 10</div>	
			<div class="komunikat"> </div>
			</div>
			
			
			
		</div>
		
			<!-- odludny 16  , pojazd 8 ,  miejski 12 -->
			
			<div class="boardlokacja">
			
				<div class="lokacja" id="locat0"><a href="#" class="dymek"><img src="img/volcano.jpg"><span id="loc0"><strong><img src="img/volcanomidi.jpg">Wulkan</strong><font color=grey>kontynent: </font color> Azja<br><font color=grey>okolica: </font color>odludna<br><font color=grey>teren: </font color>ląd</span></a></div>
				<div class="lokacja" id="locat1"><a href="#" class="dymek"><img src="img/underground.jpg"><span id="loc1"><strong><img src="img/undergroundmidi.jpg">Stacja metra</strong><font color=grey>kontynent: </font color>Europa<br><font color=grey>okolica: </font color>miejska<br><font color=grey>teren: </font color>ląd</span></a></div>
				<div class="lokacja" id="locat2"><a href="#" class="dymek"><img src="img/underwaterbase.jpg"><span id="loc2"><strong><img src="img/underwaterbasemidi.jpg">Podwodna baza</strong><font color=grey>kontynent: </font color>Azja<br><font color=grey>okolica: </font color>pojazd<br><font color=grey>teren: </font color>woda</span></a></div>
				<div class="lokacja" id="locat3"><a href="#" class="dymek"><img src="img/oldtunel.jpg"><span id="loc3"><strong><img src="img/oldtunelmidi.jpg">Stary tunel</strong><font color=grey>kontynent: </font color>Azja<br><font color=grey>okolica: </font color>odludna<br><font color=grey>teren: </font color>ląd</span></a></div>
				<div class="lokacja" id="locat4"><a href="#" class="dymek"><img src="img/coastalvillage.jpg"><span id="loc4"><strong><img src="img/coastalvillagemidi.jpg">Nadmorska wioska</strong><font color=grey>kontynent: </font color>Afryka<br><font color=grey>okolica: </font color>miejska<br><font color=grey>teren: </font color>woda</span></a></div>
				<div class="lokacja" id="locat5"><a href="#" class="dymek"><img src="img/shipwreck.jpg"><span id="loc5"><strong><img src="img/shipwreckmidi.jpg">Wrak statku</strong><font color=grey>kontynent: </font color>Azja<br><font color=grey>okolica: </font color>pojazd<br><font color=grey>teren: </font color>woda</span></a></div>
				<div class="lokacja" id="locat6"><a href="#" class="dymek"><img src="img/mountainvillage.jpg"><span id="loc6"><strong><img src="img/mountainvillagemidi.jpg">Opuszczona górska wioska</strong><font color=grey>kontynent: </font color>Afryka<br><font color=grey>okolica: </font color>odludna<br><font color=grey>teren: </font color>ląd</span></a></div>
				<div class="lokacja" id="locat7"><a href="#" class="dymek"><img src="img/coastalcastle.jpg"><span id="loc7"><strong><img src="img/coastalcastlemidi.jpg">Nadmorska twierdza</strong><font color=grey>kontynent: </font color>Europa<br><font color=grey>okolica: </font color>odludna<br><font color=grey>teren: </font color>woda</span></a></div>
				<div class="lokacja" id="locat8"><a href="#" class="dymek"><img src="img/peakbase.jpg"><span id="loc8"><strong><img src="img/peakbasemidi.jpg">Baza na szczycie góry</strong><font color=grey>kontynent: </font color>Europa<br><font color=grey>okolica: </font color>odludna<br><font color=grey>teren: </font color>ląd</span></a></div>
				<div class="lokacja" id="locat9"><a href="#" class="dymek"><img src="img/downtown.jpg"><span id="loc9"><strong><img src="img/downtownmidi.jpg">Śródmieście</strong><font color=grey>kontynent: </font color>Azja<br><font color=grey>okolica: </font color>miejska<br><font color=grey>teren: </font color>ląd</span></a></div>
				<div class="lokacja" id="locat10"><a href="#" class="dymek"><img src="img/volcanicisland.jpg"><span id="loc10"><strong><img src="img/volcanicislandmidi.jpg">Wyspa wulkaniczna</strong><font color=grey>kontynent: </font color>Ameryka<br><font color=grey>okolica: </font color>odludna<br><font color=grey>teren: </font color>woda</span></a></div>
				<div class="lokacja" id="locat11"><a href="#" class="dymek"><img src="img/monastery.jpg"><span id="loc11"><strong><img src="img/monasterymidi.jpg">Klasztor</strong><font color=grey>kontynent: </font color>Afryka<br><font color=grey>okolica: </font color>odludna<br><font color=grey>teren: </font color>ląd</span></a></div>
				
				<div class="lokacja" id="locat12"><a href="#" class="dymek"><img src="img/abandonedship.jpg"><span id="loc12"><strong><img src="img/abandonedshipmidi.jpg">Opuszczony okręt wojenny</strong><font color=grey>kontynent: </font color>Ameryka<br><font color=grey>okolica: </font color>pojazd<br><font color=grey>teren: </font color>woda</span></a></div>
				<div class="lokacja" id="locat13"><a href="#" class="dymek"><img src="img/mansion.jpg"><span id="loc13"><strong><img src="img/mansionmidi.jpg">Rezydencja</strong><font color=grey>kontynent: </font color>Europa<br><font color=grey>okolica: </font color>miejska<br><font color=grey>teren: </font color>ląd</span></a></div>
				<div class="lokacja" id="locat14"><a href="#" class="dymek"><img src="img/bunkier.jpg"><span id="loc14"><strong><img src="img/bunkiermidi.jpg">Bunkier</strong><font color=grey>kontynent: </font color>Azja<br><font color=grey>okolica: </font color>odludna<br><font color=grey>teren: </font color>ląd</span></a></div>
				<div class="lokacja" id="locat15"><a href="#" class="dymek"><img src="img/temple.jpg"><span id="loc15"><strong><img src="img/templemidi.jpg">Świątynia</strong><font color=grey>kontynent: </font color>Azja<br><font color=grey>okolica: </font color>odludna<br><font color=grey>teren: </font color>ląd</span></a></div>
				<div class="lokacja" id="locat16"><a href="#" class="dymek"><img src="img/frozensubmarine.jpg"><span id="loc16"><strong><img src="img/frozensubmarinemidi.jpg">Zamarznięta łódź podwodna</strong><font color=grey>kontynent: </font color>Europa<br><font color=grey>okolica: </font color>pojazd<br><font color=grey>teren: </font color>woda</span></a></div>
				<div class="lokacja" id="locat17"><a href="#" class="dymek"><img src="img/dam.jpg"><span id="loc17"><strong><img src="img/dammidi.jpg">Zapora wodna</strong><font color=grey>kontynent: </font color>Ameryka<br><font color=grey>okolica: </font color>miejska<br><font color=grey>teren: </font color>woda</span></a></div>
				<div class="lokacja" id="locat18"><a href="#" class="dymek"><img src="img/castle.jpg"><span id="loc18"><strong><img src="img/castlemidi.jpg">Zamek</strong><font color=grey>kontynent: </font color>Europa<br><font color=grey>okolica: </font color>odludna<br><font color=grey>teren: </font color>ląd</span></a></div>
				<div class="lokacja" id="locat19"><a href="#" class="dymek"><img src="img/lakeside.jpg"><span id="loc19"><strong><img src="img/lakesidemidi.jpg">Dom nad jeziorem</strong><font color=grey>kontynent: </font color>Ameryka<br><font color=grey>okolica: </font color>odludna<br><font color=grey>teren: </font color>woda</span></a></div>
				<div class="lokacja" id="locat20"><a href="#" class="dymek"><img src="img/abandonedtrain.jpg"><span id="loc20"><strong><img src="img/abandonedtrainmidi.jpg">Stary pociąg</strong><font color=grey>kontynent: </font color>Afryka<br><font color=grey>okolica: </font color>pojazd<br><font color=grey>teren: </font color>ląd</span></a></div>
				<div class="lokacja" id="locat21"><a href="#" class="dymek"><img src="img/oldbunkier.jpg"><span id="loc21"><strong><img src="img/oldbunkiermidi.jpg">Stary bunkier</strong><font color=grey>kontynent: </font color>Europa<br><font color=grey>okolica: </font color>odludna<br><font color=grey>teren: </font color>woda</span></a></div>
				<div class="lokacja" id="locat22"><a href="#" class="dymek"><img src="img/mine.jpg"><span id="loc22"><strong><img src="img/minemidi.jpg">Budynek kopalni</strong><font color=grey>kontynent: </font color>Ameryka<br><font color=grey>okolica: </font color>miejska<br><font color=grey>teren: </font color>ląd</span></a></div>
				<div class="lokacja" id="locat23"><a href="#" class="dymek"><img src="img/yacht.jpg"><span id="loc23"><strong><img src="img/yachtmidi.jpg">Jacht</strong><font color=grey>kontynent: </font color>Afryka<br><font color=grey>okolica: </font color>pojazd<br><font color=grey>teren: </font color>woda</span></a></div>
				
				<div class="lokacja" id="locat24"><a href="#" class="dymek"><img src="img/graveyard.jpg"><span id="loc24"><strong><img src="img/graveyardmidi.jpg">Stary cmentarz</strong><font color=grey>kontynent: </font color>Ameryka<br><font color=grey>okolica: </font color>miejska<br><font color=grey>teren: </font color>ląd</span></a></div>
				<div class="lokacja" id="locat25"><a href="#" class="dymek"><img src="img/observatory.jpg"><span id="loc25"><strong><img src="img/observatorymidi.jpg">Obserwatorium</strong><font color=grey>kontynent: </font color>Europa<br><font color=grey>okolica: </font color>odludna<br><font color=grey>teren: </font color>ląd</span></a></div>
				<div class="lokacja" id="locat26"><a href="#" class="dymek"><img src="img/palace.jpg"><span id="loc26"><strong><img src="img/palacemidi.jpg">Pałac</strong><font color=grey>kontynent: </font color>Europa<br><font color=grey>okolica: </font color>miejska<br><font color=grey>teren: </font color>woda</span></a></div>
				<div class="lokacja" id="locat27"><a href="#" class="dymek"><img src="img/frozenvolcano.jpg"><span id="loc27"><strong><img src="img/frozenvolcanomidi.jpg">Nieczynny wulkan</strong><font color=grey>kontynent: </font color>Ameryka<br><font color=grey>okolica: </font color>odludna<br><font color=grey>teren: </font color>ląd</span></a></div>
				<div class="lokacja" id="locat28"><a href="#" class="dymek"><img src="img/rancho.jpg"><span id="loc28"><strong><img src="img/ranchomidi.jpg">Ranczo</strong><font color=grey>kontynent: </font color>Ameryka<br><font color=grey>okolica: </font color>miejska<br><font color=grey>teren: </font color>ląd</span></a></div>
				<div class="lokacja" id="locat29"><a href="#" class="dymek"><img src="img/abandonedplane.jpg"><span id="loc29"><strong><img src="img/abandonedplanemidi.jpg">Stary samolot</strong><font color=grey>kontynent: </font color>Afryka<br><font color=grey>okolica: </font color>pojazd<br><font color=grey>teren: </font color>ląd</span></a></div>
				<div class="lokacja" id="locat30"><a href="#" class="dymek"><img src="img/warehouse.jpg"><span id="loc30"><strong><img src="img/warehousemidi.jpg">Magazyny</strong><font color=grey>kontynent: </font color>Ameryka<br><font color=grey>okolica: </font color>miejska<br><font color=grey>teren: </font color>ląd</span></a></div>
				<div class="lokacja" id="locat31"><a href="#" class="dymek"><img src="img/cave.jpg"><span id="loc31"><strong><img src="img/cavemidi.jpg">Śnieżna jaskinia</strong><font color=grey>kontynent: </font color>Azja<br><font color=grey>okolica: </font color>odludna<br><font color=grey>teren: </font color>ląd</span></a></div>
				<div class="lokacja" id="locat32"><a href="#" class="dymek"><img src="img/ship.jpg"><span id="loc32"><strong><img src="img/shipmidi.jpg">Statek badawczy</strong><font color=grey>kontynent: </font color>Afryka<br><font color=grey>okolica: </font color>pojazd<br><font color=grey>teren: </font color>woda</span></a></div>
				<div class="lokacja" id="locat33"><a href="#" class="dymek"><img src="img/militarybase.jpg"><span id="loc33"><strong><img src="img/militarybasemidi.jpg">Baza wojskowa</strong><font color=grey>kontynent: </font color>Afryka<br><font color=grey>okolica: </font color>miejska<br><font color=grey>teren: </font color>ląd</span></a></div>
				<div class="lokacja" id="locat34"><a href="#" class="dymek"><img src="img/oldtemple.jpg"><span id="loc34"><strong><img src="img/oldtemplemidi.jpg">Ruiny świątyni</strong><font color=grey>kontynent: </font color>Azja<br><font color=grey>okolica: </font color>odludna<br><font color=grey>teren: </font color>ląd</span></a></div>
				<div class="lokacja" id="locat35"><a href="#" class="dymek"><img src="img/skyscrapter.jpg"><span id="loc35"><strong><img src="img/skyscraptermidi.jpg">Drapacz chmur</strong><font color=grey>kontynent: </font color>Afryka<br><font color=grey>okolica: </font color>miejska<br><font color=grey>teren: </font color>ląd</span></a></div>
			
			</div>
			
		</article>
	
	</main>
		
		
<script src="jquery-3.3.1.min.js"></script>
<script src="pamiec.js"></script>

</body>
</html>