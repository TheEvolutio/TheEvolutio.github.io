<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="Styleshit.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="FullScreenScript.js"></script>
		<script src="MapMove.js"></script>
		<script>
			//function Random(min, max) {
				
			//	return Math.floor(Math.random() * (max - min + 1)) + min;
			//};
			
				requestAnimationFrame(function movePointer() {  
					var pointerElem = document.getElementById('pointer1');				
						pointerElem.style.left = Random(100,709) + 'px';
						pointerElem.style.top = Random(50,300) + 'px';					
				});
		</script>
	</head>
	<body onLoad="coord();hw123();HpEp();hhh()">
		<script src="Vits.js"></script>
		<div id="Game">
		
			<div class="boxevo" id="MapE" onClick"getCoords(elem)"><img src="BetaMap12345.png" id="MapEi"></div>
			<div class="boxevo"><img src="black.png" id="black"></div>		
			<div class="boxevo" id="Fon"><img src="1.-2.jpg" id="fonI"></div>
			<div class="boxevo" id="Focus"><img src="1 (165).png" id="Focusi"></div>		
			<div class="boxevo" id="Tima"><img src="1421.png" id="Timai"></div>
			<div class="boxevo" id="Strel"><img src="2 (165).png" id="Streli"></div>			
			<div class="boxevo" id="HpEp"><img src="60.png" id="HpEpi"></div>
			<div class="boxevo" id="Vit"><img src="1433.png"></div>
			<div class="boxevo" id="Vit1"><img src="1433.png" id="Viti"></div>
			<div class="boxevo" id="Ter"><img src="1401.png" id="Teri"></div>
			<div class="boxevo" id="Map"><img src="1404.png" id="Mapi"></div>
			<div class="boxevo" id="Chat"><input id="inp" autocomplete="off" value="Стражник" maxlength="15" type="text"><img src="1406.png" id="Chati"></div>
			<div class="boxevo" id="Hp"><img src="1 (146).png" id="Hpi"></div>	
			<div class="boxevo" id="Ep"><img src="1 (145).png" id="Epi"></div>
			<div class="boxevo" id="Mus"><img src="1571.png" id="Musi"></div>
				<div class="VitsC Vits"><img src="1438.png" class="VitsI" id="A"></div>
				<div class="VitsC Vits1"><img src="1444.png" class="VitsI" id="B1"></div>
				<div class="VitsC Vits2"><img src="1447.png" class="VitsI" id="B2"></div>
				<div class="VitsC Vits3"><img src="1450.png" class="VitsI" id="B3"></div>
				<div class="VitsC Vits4"><img src="1457.png" class="VitsI" id="C"></div>
				<div class="VitsC Vits5"><img src="1460.png" class="VitsI" id="D"></div>
				<div class="VitsC Vits6"><img src="1441.png" class="VitsI" id="E"></div>
				<div class="VitsC Vits7"><img src="1435.png" class="VitsI" id="K"></div>
					<div class="VitsC Vits s1 VitsI" onClick="Achoose();"></div>
					<div class="VitsC Vits1 s1 VitsI" onClick="B1choose();"></div>
					<div class="VitsC Vits2 s1 VitsI" onClick="B2choose();"></div>
					<div class="VitsC Vits3 s1 VitsI" onClick="B3choose();"></div>
					<div class="VitsC Vits4 s1 VitsI" onClick="Cchoose();"></div>
					<div class="VitsC Vits5 s1 VitsI" onClick="Dchoose();"></div>
					<div class="VitsC Vits6 s1 VitsI" onClick="Echoose();"></div>
					<div class="VitsC Vits7 s1 VitsI" onClick="Kchoose();"></div>
			<div class="boxevo"><img src="1429.png"></div>
			<div class="boxevo" id="Question"><img src="1234.png" id="Questioni"></div>
			<div class="boxevo" id="Full"><img src="extra2.png" id="Fulli"></div>
			
				<div class="button" id="TopArrow" onClick="go_blockw(53)"></div>
				<div class="button" id="LeftArrow" onClick="go_block(57)"></div>
				<div class="button" id="RightArrow" onClick="go_block(-57)"></div>
				<div class="button" id="DownArrow" onClick="go_blockw(-53)"></div>
				<div id="button1" onclick="viewGame()"></div>
				
			<div id="coord"></div>	
			<!--<div id="NickNameButton"></div>-->
				<div id="box1">
				
					<div id="pointer1">
						<img src="hamb/11.png" class="Skins hamb" id="hamb">
						<img src="tail/7.png"  class="Skins tail"id="tail">
						<img src="skin/12.png"  class="Skins skin" id="skin">
						<div id="limb" class="Skins limb" >
							<svg width="73" height="72" class="path" id ="f12" style="height:100%;width:auto;animation-delay: 8s" version="1.1" xmlns="http://www.w3.org/2000/svg" 
								xmlns:xlink="http://www.w3.org/1999/xlink"  viewBox="0 0 72 73" >  
								<image id="man" xlink:href="limb/move.svg" x="0" y="0" width="584" height="72" >
								<animate attributeName="x" id="an1" values="-438;-365;-292;-219;-146;-73;0" begin="indefinity"  dur="1.17s"  calcMode="discrete" restart="whenNotActive" />
								<animate attributeName="x" id="an2" values="-438;-365;-292;-219;-146;-73;0" begin="an1.end"  dur="1.17s"  calcMode="discrete" restart="whenNotActive" />
								<animate attributeName="x" id="an3" values="-438;-365;-292;-219;-146;-73;0" begin="an2.end"  dur="1.17s"  calcMode="discrete" restart="whenNotActive" />
								<animate attributeName="x" id="an4" values="-438;-365;-292;-219;-146;-73;0" begin="an3.end"  dur="1.17s"  calcMode="discrete" restart="whenNotActive" />
								<animate attributeName="x" id="an5" values="-438;-365;-292;-219;-146;-73;0" begin="an4.end"  dur="1.17s"  calcMode="discrete" restart="whenNotActive" />
								<animate attributeName="x" id="an6" values="-438;-365;-292;-219;-146;-73;0" begin="an5.end"  dur="1.17s"  calcMode="discrete" restart="whenNotActive" />
								<animate attributeName="x" id="an7" values=" -511;-438;-365;-292;-219;-146;-73;0" begin="an6.end"  dur="1.17s"  calcMode="discrete" restart="whenNotActive" />	  
								</image>
							</svg>
						</div>
					</div>
				</div> 
				
		</div>
				<div id="centerS" style="border: 1px solid red; display: inline-block;position: absolute"></div>
				<div id="centerS1" style="border: 1px solid blue; display: inline-block;position: absolute"></div>
				<div style="margin-left: 807px">
				<input value="1000" id="lvl" onClick="hw123();">lvl<br>
				<input value="100" id="HpInp" onClick="HpEp();hhh()" style="">hp<br>
				<input value="100" id="HpMaxInp" onClick="HpEp();">hpmax<br>
				<input value="10" id="EpInp" onClick="HpEp();" style="">ep<br>
				<input value="10" id="EpMaxInp" onClick="HpEp();">epmax<br>
				<button id="hpminus" onClick="havk();">KNOPKA</button></div>
				 
				<script>
				
					var Hp = document.getElementById("HpInp").value;
					var HpMAX = document.getElementById("HpMaxInp").value;
					var HpImage = document.getElementById("Hp");
					function HpEp(){
						var Hp = document.getElementById("HpInp").value;
						var HpMAX = document.getElementById("HpMaxInp").value;
						var Ep = document.getElementById("EpInp").value;
						var EpMAX = document.getElementById("EpMaxInp").value;
						var HpImage = document.getElementById("Hp");
						var EpImage = document.getElementById("Ep");
						HpImage.style.width = (Hp/(HpMAX/100))*(150/100)+'px';
						EpImage.style.width = (Ep/(EpMAX/100))*(150/100)+'px';
						var RegHpStat = 5;
						var RegHp = (HpMAX/100)*RegHpStat;
					}
					
					function havk(){
						var Hp = document.getElementById("HpInp").value;
						var HpMAX = document.getElementById("HpMaxInp").value;
						var yron = 24
						if (Hp>=24){
							document.getElementById("HpInp").value = Hp-yron;
							Hp = Hp - yron;
							HpImage.style.width = (Hp/(HpMAX/100))*(150/100)+'px';
						}
						else {
							document.getElementById("HpInp").value = 0;
							Hp = 0;
							HpImage.style.width = (Hp/(HpMAX/100))*(150/100)+'px';
						}
						for (;Hp<HpMAX;){
							setTimeout(hpregen(),2000);
						}
						return Hp;
						
					}
					//function hpregen() {
							//if (Hp<HpMAX){
					//		document.getElementById("HpInp").value = Hp+10;
					//		Hp = document.getElementById("HpInp").value;
							//setTimeout(hpregen(),200);
							//	}
						//	return Hp;
					//	}
				</script>
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				<script>
					function hw123(){
						var lvl = document.getElementById("lvl").value;	
						var SkinSize = document.getElementsByClassName("Skins");
						for (var i=0; i < SkinSize.length; ++i) {
							SkinSize[i].style.zoom=100+0.15*lvl+'%';
							SkinSize[i].style.marginLeft='-'+1*(0.035*500)-1+'px';
							SkinSize[i].style.marginTop='-'+1*(0.035*500)-1+'px';
						}
					}
				</script>
		<script src="http://code.jquery.com/jquery-1.6.2.min.js"></script>		
		<script src="Vits.js"></script>
		<script src="ScriptsGame.js"></script>
	</body>
</html>