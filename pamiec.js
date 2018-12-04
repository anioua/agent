var cards = ["flightplan.jpg","newspaper.jpg","whalter.jpg","aston.jpg","globus.jpg","waypoint.jpg","parachute.jpg","casino.jpg","rotorcraft.jpg","tuxedo.jpg","explosive.jpg","office.jpg",
					"flightplan.jpg","newspaper.jpg","whalter.jpg","aston.jpg","globus.jpg","waypoint.jpg","parachute.jpg","casino.jpg","rotorcraft.jpg","tuxedo.jpg","explosive.jpg","office.jpg"];
					
	function shuffle(a) {
    var j, x, i;
    for (i = a.length - 1; i > 0; i--) {
        j = Math.floor(Math.random() * (i + 1));
        x = a[i];
        a[i] = a[j];
        a[j] = x;
    }
    return a;
}

shuffle(cards);

var boss = []
boss [0] = ["Azja","odludna","ląd","bez roślinności","skały","obiekt naturalny","wysoko npm"];
boss [1] = ["Europa","miejska","ląd","miejsce bez drzew","pod powierzchnią","obiekt niemilitarny","wśród ludzi"];
boss [2] = ["Azja","pojazd","woda","bez roślinności","pod powierzchnią","nie wrak","brak śniegu"];
boss [3] = ["Azja","odludna","ląd","występuje roślinność","pod powierzchnią","obiekt niemilitarny","brak śniegu"];
boss [4] = ["Afryka","miejska","woda","na skałach","wśród ludzi","nad morzem","teren górzysty"];
boss [5] = ["Azja","pojazd","woda","miejsce bez drzew","wrak","nad morzem","brak śniegu"];
boss [6] = ["Afryka","odludna","ląd","miejsce bez drzew","na skałach","ruiny","niska roślinność"];
boss [7] = ["Europa","odludna","woda","obiekt militarny","zabytek","nad morzem","występuje roślinność"];
boss [8] = ["Europa","odludna","ląd","bez roślinności","występuje śnieg","na skałach","wysoko npm"];
boss [9] = ["Azja","miejska","ląd","wśród ludzi","nie zabytek","obiekt niemilitarny","brak śniegu","teren nizinny" ];
boss [10] = ["Ameryka","odludna","woda","miejsce bez drzew","skały","obiekt naturalny","nad morzem"];
boss [11] = ["Afryka","odludna","ląd","bez roślinności","na skałach","ruiny","miejsce kultu"];

boss [12] = ["Ameryka","pojazd","woda","wrak","obiekt militarny","brak śniegu","nad morzem"];
boss [13] = ["Europa","miejska","ląd","występuje roślinność","zabytek","brak śniegu","teren nizinny"];
boss [14] = ["Azja","odludna","ląd","występuje roślinność","pod powierzchnią","obiekt militarny","brak śniegu"];
boss [15] = ["Azja","odludna","ląd","występuje roślinność","na skałach","miejsce kultu","wysoko npm"];
boss [16] = ["Europa","pojazd","woda","miejsce bez drzew","występuje śnieg","obiekt militarny","nad morzem"];
boss [17] = ["Ameryka","miejska","woda","bez roślinności","na skałach","nie nad morzem","brak śniegu"];
boss [18] = ["Europa","odludna","ląd","występuje roślinność","obiekt militarny","brak śniegu","zabytek"];
boss [19] = ["Ameryka","odludna","woda","występuje roślinność","nie nad morzem","obiekt niemilitarny","brak śniegu"];
boss [20] = ["Afryka","pojazd","ląd","bez roślinności","wrak","obiekt niemilitarny","brak śniegu"];
boss [21] = ["Europa","odludna","woda","nad morzem","ruiny","obiekt militarny","obez roślinności"];
boss [22] = ["Ameryka","miejska","ląd","miejsce bez drzew","niska roślinność","obiekt niemiliatrny","brak śniegu"];
boss [23] = ["Afryka","pojazd","woda","obiekt niemilitarny","nad morzem","występuje roślinność","brak śniegu"];

boss [24] = ["Ameryka","miejska","ląd","ruiny","występuje roslinność","miejsce kultu","teren górzysty"];
boss [25] = ["Europa","odludna","ląd","miejsce bez drzew","na skałach","nie zabytek","wysoko npm"];
boss [26] = ["Europa","miejska","woda","zabytek","występuje roślinność","brak śniegu","teren nizinny"];
boss [27] = ["Ameryka","odludna","ląd","bez roślinności","występuje śnieg","wysoko npm","obiekt naturalny"];
boss [28] = ["Ameryka","miejska","ląd","występuje roślinność","obiekt niemilitarny","brak śniegu","nie nad morzem"];
boss [29] = ["Afryka","pojazd","ląd","miejsce bez drzew","wrak","obiekt niemiliatrny","brak śniegu"];
boss [30] = ["Ameryka","miejska","ląd","miejsce bez drzew","wśród ludzi","obiekt niemilitarny","brak śniegu"];
boss [31] = ["Azja","odludna","ląd","miejsce bez drzew","pod powierzchnią","występuje śnieg","wysoko npm"];
boss [32] = ["Afryka","pojazd","woda","bez roślinności","obiekt niemilitarny","nie wrak","nad morzem"];
boss [33] = ["Afryka","miejska","ląd","obiekt militarny","obiekt betonowy","brak sniegu","nie zabytek"];
boss [34] = ["Azja","odludna","ląd","ruiny","występuje roślinność","miejsce kultu"," teren nizinny"];
boss [35] = ["Afryka","miejska","ląd","nie zabytek","obiekt niemilitarny","brak śniegu","wśród ludzi"];

ile = 2; // ile elementów losujemy podpowiedzi
 elementy = [3,4,5,6];
 
l=new Array();
for (i=0;i<ile;i++) {
  los = Math.round(Math.random()*(elementy.length-1));
  jest = false;
  for (j=0;j<l.length;j++) if (l[j]==los) jest=true;
  if (jest) i--; else l[i] = los;
}



var losowyBoss = Math.round(Math.random() * boss.length - 1);


var oneVisible = false;
var punktyAkcji = 10;
var visible_nr;
var lock = false;
var pairsLeft = 12;
var podpowiedzLock0 = false;
var podpowiedzLock1 = false;
var podpowiedzLock2 = false;
var podpowiedzLock3 = false;
var podpowiedzLock4 = false;
var losowaPodpowiedz1 = l[0]+3;
var losowaPodpowiedz2 = l[1]+3;



//Odsłanianie lokacji

for (var i=0; i<36; i++) {
	(function (e){
		$("#loc"+e).click(function() {revealBoss(e); });
	})(i);
	
}


function revealBoss(nr)
{
	var odgadujBossa = confirm("Chesz odgadnąć to miejsce?");

	if (odgadujBossa == true){
		if (nr == losowyBoss){
			$('.planszaogolna').html('<h1> Wygrałeś! <br>Udało Ci się rozwiązać posiadając <br>'+punktyAkcji+' punktów akcji!</h1>');
			$('.boardlokacja').html('<a href="javascript:location.reload();"><div class="jeszczeraz">Jeszcze raz?</div></a>');
		}else {
			$('.planszaogolna').html('<h1> Przegrałeś! <br> Twój przeciwnik krył się w innej lokacji... </h1>');
			$('.boardlokacja').html('<a href="javascript:location.reload();"><div class="jeszczeraz">Jeszcze raz?</div></a>');
		}
		
		
		
		
		
	}
}

var poszlaka0  = document.getElementById('poszlaka0');
var poszlaka1  = document.getElementById('poszlaka1');
var poszlaka2  = document.getElementById('poszlaka2');
var poszlaka3  = document.getElementById('poszlaka3');
var poszlaka4  = document.getElementById('poszlaka4');


poszlaka0.addEventListener("click", function() { kupPodpowiedz(0); });
poszlaka1.addEventListener("click", function() { kupPodpowiedz(1); });
poszlaka2.addEventListener("click", function() { kupPodpowiedz(2); });
poszlaka3.addEventListener("click", function() { kupPodpowiedz(3); });
poszlaka4.addEventListener("click", function() { kupPodpowiedz(4); });


function kupPodpowiedz(nr) 
{
	if (punktyAkcji>10 && nr==0 && podpowiedzLock0==false){
		if (nr==0){
			$('#poszlaka0').html('kontynent: '+boss[losowyBoss][0]);
			punktyAkcji = punktyAkcji-10;
			$('.score').html('Punkty Akcji (PA): '+punktyAkcji);
			
			$('#poszlaka0').addClass('podpowiedzUnactive');
			$('#poszlaka0').removeClass('podpowiedz');
			
			$('.komunikat').html('');
			
			var kontynenty=boss[losowyBoss][0];
				for (let i=0; i<boss.length; i++) {
					if (kontynenty!=boss[i][0]) 
						{
							$('#locat'+i).addClass('lokacjaUnactive');
							$('#locat'+i).removeClass('lokacja');
						}
				}
				podpowiedzLock0 = true;
		}
	}else if(punktyAkcji<11 && nr==0 && podpowiedzLock0==false){
		$('.komunikat').html('Nie możesz kupić podpowiedzi, musisz mieć więcej niż 10 PA. ');
	}	
		
	if (punktyAkcji>5){	
		
		if (nr==1  && podpowiedzLock1==false){
			$('#poszlaka1').html('okolica: '+boss[losowyBoss][1]);
			punktyAkcji = punktyAkcji-5;
			$('.score').html('Punkty Akcji (PA): '+punktyAkcji);
			
			$('#poszlaka1').addClass('podpowiedzUnactive');
			$('#poszlaka1').removeClass('podpowiedz');
			
			$('.komunikat').html('');
			
			var okolica=boss[losowyBoss][1];
				for (let i=0; i<boss.length; i++) {
					if (okolica!=boss[i][1]) 
						{
							$('#locat'+i).addClass('lokacjaUnactive');
							$('#locat'+i).removeClass('lokacja');
						}
				}
				podpowiedzLock1 = true;
		}
		
		
		
		
		if (nr==2  && podpowiedzLock2==false){
			$('#poszlaka2').html('teren: '+boss[losowyBoss][2]);
			punktyAkcji = punktyAkcji-5;
			$('.score').html('Punkty Akcji (PA): '+punktyAkcji);
			
			$('#poszlaka2').addClass('podpowiedzUnactive');
			$('#poszlaka2').removeClass('podpowiedz');
			
			$('.komunikat').html('');
			
			var teren=boss[losowyBoss][2];
				for (let i=0; i<boss.length; i++) {
					if (teren!=boss[i][2]) 
						{
							$('#locat'+i).addClass('lokacjaUnactive');
							$('#locat'+i).removeClass('lokacja');
							
							
						}
				}
				podpowiedzLock2=true;
		}
	}else if(punktyAkcji<6 && nr==1  && podpowiedzLock1==false ){
		$('.komunikat').html('Nie możesz kupić podpowiedzi, musisz mieć więcej niż 5 PA. ');
		
	}
	else if(punktyAkcji<6 && nr==2 && podpowiedzLock2==false ){
		$('.komunikat').html('Nie możesz kupić podpowiedzi, musisz mieć więcej niż 5 PA. ');
	}

	
	
	
	
		if (punktyAkcji>15 && nr==3 && podpowiedzLock3==false){
		if (nr==3){
			$('#poszlaka3').html('losowa: '+boss[losowyBoss][losowaPodpowiedz1]);
			punktyAkcji = punktyAkcji-15;
			$('.score').html('Punkty Akcji (PA): '+punktyAkcji);
			
			$('#poszlaka3').addClass('podpowiedzUnactive');
			$('#poszlaka3').removeClass('podpowiedz');
			
			$('.komunikat').html('');
			
			
				podpowiedzLock3 = true;
		}
	}else if(punktyAkcji<16 && nr==3 && podpowiedzLock3==false){
		$('.komunikat').html('Nie możesz kupić podpowiedzi, musisz mieć więcej niż 15 PA. ');
	}

	
	
	
	
	
		if (punktyAkcji>15 && nr==4 && podpowiedzLock4==false){
		if (nr==4){
			$('#poszlaka4').html('losowa: '+boss[losowyBoss][losowaPodpowiedz2]);
			punktyAkcji = punktyAkcji-15;
			$('.score').html('Punkty Akcji (PA): '+punktyAkcji);
			
			$('#poszlaka4').addClass('podpowiedzUnactive');
			$('#poszlaka4').removeClass('podpowiedz');
			
			$('.komunikat').html('');
			
			
				podpowiedzLock4 = true;
		}
	}else if(punktyAkcji<16 && nr==4 && podpowiedzLock4==false){
		$('.komunikat').html('Nie możesz kupić podpowiedzi, musisz mieć więcej niż 15 PA. ');
	}  	
}

/* odsłanianie kart */
for (var i=0; i<cards.length; i++) {
	(function (e){
		$("#c"+e).click(function() {revealCard(e); });
	})(i);
	
}


function revealCard(nr)
{
	var opacityValue = $('#c'+nr).css('opacity');
	
	if (opacityValue != 0 && lock == false) {
		
		lock = true;
		
		var obraz = "url(img/" + cards[nr] + ")";
	$('#c'+nr).css('background-image',obraz);
	$('#c'+nr).addClass('cardActive');
	$('#c'+nr).removeClass('card');
	
	if (oneVisible == false) {
		//pierwsza karta
		
		oneVisible = true;
		visible_nr = nr;
		lock = false;
		
		$('.komunikat').html('');
		}
	else
	{
		//druga karta

		if(cards[visible_nr] == cards[nr] && visible_nr != nr){
			//para
			
			setTimeout(function() { hide2Cards(nr, visible_nr) } , 750);
			punktyAkcji=punktyAkcji+5;
			}
		else {
			//pudło			
			setTimeout(function() { restore2Cards(nr, visible_nr) } , 750);
			punktyAkcji--;
			if (punktyAkcji==0){
				$('.planszaogolna').html('<h1> Przegrałeś! <br> Skończyły się Tobie punkty Akcji</h1>');
				$('.boardlokacja').html('<a href="javascript:location.reload();"><div class="jeszczeraz">Jeszcze raz?</div></a>');
			}
		}
		

		
		$('.score').html('Punkty Akcji (PA): '+punktyAkcji);
		oneVisible = false;
	}
		
	}
	
	
	
}

function hide2Cards(nr1, nr2)
{
	$('#c'+nr1).css('opacity', '0');
	$('#c'+nr2).css('opacity', '0');
	
	pairsLeft--;
	
	if (pairsLeft == 0){
		
		$('.board').html('<h1> Wskaż miejsce, w którym kryje się przeciwnik</h1>');
	}
	
	
	lock = false;
}

function restore2Cards(nr1,nr2){
	
	$('#c'+nr1).css('background-image', 'url(img/karta.png)');
	$('#c'+nr1).addClass('card');
	$('#c'+nr1).removeClass('cardActive');
	
	$('#c'+nr2).css('background-image', 'url(img/karta.png)');
	$('#c'+nr2).addClass('card');
	$('#c'+nr2).removeClass('cardActive');
	
	lock = false;
}