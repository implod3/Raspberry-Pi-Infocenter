<!DOCTYPE html>
<html>
	
	<head>
		
		<link rel="stylesheet" href="./style/style.css" type="text/css">
		<script src="./js/script.js" defer> </script>
		<script src="./js/nav.js" defer> </script>
		<meta charset="utf-8">
		<title> Raspberry Pi </title>
		
	</head>
	
	<body onscroll="control()">
		
		<div class="nav"> <div id="start" class="nav_text"> Start </div> <div id="info" class="nav_text"> Info </div> <div class="nav_text"> Test </div> </div>
		
		<div class="on_top" onclick="scroll_to_top()"> </div>
		
		<center> <div class="form_text" id="start_con"> Raspberry Pi </div> </center>
		
		<div class="form_bottom"> </div>
		<div class="form_middle"> </div>

		<div class="pic"> </div>
		
		<div class="tab_color">
			
			<table class="table_text">
				
				<tr>
					
					<td class="table_td" id="info_con">
						
						<center>
						
							<div class="tab_text">
						
								<div class="cap"> Himbeerkuchen? </div>
								
								Der Raspberry Pi ist ein Mini-Computer, der ursprünglich für Schüler und Studenten gedacht ist,
								aus diesem Grund sehr günstig ist und nur ca. 35 Euro kostet.
								Dieser Mini-Computer ermöglicht den Erstkontakt zu Linux, Shell Scripting, Programmieren, Physical Computing und kann auch im Produktiveinsatz verwendet werden. 
						
							</div>
					
						</center>
					
					</td>
					
					<td class="table_td">

						<center>
							
							<div class="tab_text">
						
								<div class="cap"> Raspbian </div>
								
								Raspbian ist ein freies Betriebssystem, das auf Debian basiert und für die Raspberry Pi-Hardware optimiert ist.
								Ein Betriebssystem ist eine Reihe von grundlegenden Programmen und Dienstprogrammen, die Ihren Raspberry Pi zum Laufen bringen.
								Raspbian bietet jedoch mehr als ein reines Betriebssystem: Es wird mit über 35.000 Paketen geliefert, vorkompilierter Software, die in einem schönen Format gebündelt ist und eine einfache Installation auf Ihrem Raspberry Pi ermöglicht. 
						
							</div>
						
						</center>
						
					</td>
					
				</tr>

			</table>

		</div>
		
		<div class="tab" id="info_con">
			Test
		</div>
		
		<script>
			
			var start = document.getElementById("start_con");
			var info = document.getElementById("info_con");

			var bodyRect = document.body.getBoundingClientRect(),
			elemRect = start.getBoundingClientRect(),
			start_offset   = elemRect.top - bodyRect.top;
			
			var bodyRect = document.body.getBoundingClientRect(),
			elemRect = info.getBoundingClientRect(),
			info_offset   = elemRect.top - bodyRect.top;
			
			function control() {
			
				if(window.pageYOffset > start_offset && window.pageYOffset < info_offset) {
				
					document.getElementById("start").classList.add("active");
					document.getElementById("info").classList.remove("active");
				
				} else if(window.pageYOffset > info_offset) {
					
					document.getElementById("start").classList.remove("active");
					document.getElementById("info").classList.add("active");
					
				}
			
			}
			
		</script>
		
	</body>
	
</html>