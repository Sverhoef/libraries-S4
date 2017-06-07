<!-- https://toddmotto.com/mastering-the-module-pattern/-->

<html>
    <head>
        <title>library index</title>
        <script type="text/javascript" language="JavaScript" src="library.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">

    </head>
    	<body>
			<div id="lowercenter">
		 		<canvas id="hoofdCanvas" width="800%"; height="300px"; style="background-color:#d9d9d9;"></canvas><br>

				<script>
				//ROBOT HEAD
				  var canvas = document.getElementById('hoofdCanvas');
				  var ctx=canvas.getContext('2d');
				  drawRobot(300, 100, "#6F6E6D", "#FFD9AA"); 

				  function drawRobot(x,y, outlineColor, fillColor) {
					  ctx.save();
					  ctx.fillStyle = Module.hexToRgb(<?php echo $_GET["skintone"];?>);//hoofd
					  ctx.fillRect(x,y,200, 150);
					  ctx.strokeStyle = Module.hexToRgb(<?php echo $_GET["haircolor"];?>);
					  ctx.lineWidth = 6;
					  ctx.strokeRect(x,y,200,150);
					  drawMouth(x+50,y+100);//mond
					  drawEars(x,y, "#d9d9d9");//oren
					  drawEyes(x,y,"#d9d9d9");//ogen
					  drawAntenna(x,y, "#d9d9d9");//antenne
					  ctx.restore();
				}
			   function drawMouth(x,y) {
					  ctx.save();
					  ctx.lineWidth = 6;
					  ctx.strokeRect(x,y,100,20);
					  ctx.beginPath();//tanden
					  ctx.moveTo(x+25,y);
					  ctx.lineTo(x+25,y+20);
					  ctx.moveTo(x+50,y);
					  ctx.lineTo(x+50,y+20);
					  ctx.moveTo(x+75,y);
					  ctx.lineTo(x+75,y+20);
					  ctx.stroke();
					  ctx.restore();  
				}
				function drawEars(x,y,fillColor) {
					  ctx.save();
					  ctx.fillStyle = fillColor;
					  ctx.strokeRect(x-10,y+35,10,20);//Links
					  ctx.fillRect(x-7,y+37.5,4,15);
					  ctx.strokeRect(x+200,y+35,10,20);//Rechts
					  ctx.fillRect(x+203,y+37.5,4,15);
					  ctx.restore();  
				}

				function drawEyes(x,y, fillColor) {
					  ctx.save();
					  ctx.fillStyle = fillColor;
					  ctx.beginPath();//Links
					  ctx.arc(x+60,y+45,10,0,2*Math.PI);
					  ctx.fill();
					  ctx.stroke();
					  ctx.beginPath();//Rechts
					  ctx.arc(x+140,y+45,10,0,2*Math.PI);
					  ctx.fill();
					  ctx.stroke();
					  ctx.restore();
				}

				function drawAntenna(x,y, circleFillColor) {
					  ctx.save();
					  ctx.lineCap = "round";
					  ctx.lineJoin = "round";
					  ctx.beginPath();//rechte lijn
					  ctx.moveTo(x+100,y);
					  ctx.lineTo(x+100,y-25);
					  ctx.stroke();
					  ctx.beginPath(); //cirkel
					  ctx.arc(x+100,y-35,10,0,2*Math.PI);
					  ctx.fillStyle = circleFillColor;
					  ctx.fill();
					  ctx.stroke();
					  ctx.beginPath();//kronkel
					  ctx.moveTo(x+100,y-45);
					  ctx.lineTo(x+115,y-60);
					  ctx.lineTo(x+90,y-60);
					  ctx.lineTo(x+115,y-85);
					  ctx.stroke();
					  ctx.restore();
				}
				</script>

				<form action="" method="GET">
					hair color: <br><input name="haircolor" type="number" value="<?php if(isset($_GET["haircolor"])){echo $_GET["haircolor"];}else{echo "995000";}?>"><br>
					clothes color: <br><input name="skintone" type="number" value="<?php if(isset($_GET["skintone"])){echo $_GET["skintone"];}else{echo "678392";}?>"><br>
					BMI: <br><input type="number" name="BMI" value="<?php if(isset($_GET["BMI"])){echo $_GET["BMI"];}else{echo "20";}?>"><br>
					<select name="facialExpression">
						<option value="1">happy</option>
						<option value="2">shocked</option>
					</select>
					<input type="submit" value="Submit">
				</form>
				
				<div id="canvasdiv">
					<canvas id="haircolor" width="155%"; height="auto"; style="background-color:#d9d9d9;"></canvas>
					<script> //cirkel haircolor
						var c = document.getElementById("haircolor");
						var ctx = c.getContext("2d");
						ctx.beginPath();
						ctx.arc(75,75,Module.bmiToSize(<?php echo $_GET["BMI"];?>),0,2*Math.PI);
						ctx.fillStyle = Module.hexToRgb(<?php echo $_GET["haircolor"];?>);
						ctx.fill();		
						ctx.closePath
					</script>

					<canvas id="skintone" width="155%"; height="auto"; style="background-color:#d9d9d9;"> </canvas>
					<script> //cirkel skintone
						var c = document.getElementById("skintone");
						var ctx = c.getContext("2d");
						ctx.beginPath();
						ctx.arc(75,75,Module.bmiToSize(<?php echo $_GET["BMI"];?>),0,2*Math.PI);
						ctx.fillStyle = Module.hexToRgb(<?php echo $_GET["skintone"];?>);
						ctx.fill();
						ctx.closePath; 
					</script>

					<canvas id="emotion" width="155%"; height="auto"; style="background-color:#d9d9d9;"> </canvas>
					<script>
						var c = document.getElementById("emotion");
						var ctx = c.getContext("2d");
						ctx.beginPath(); //ogen
						Module.eyecolor(<?php echo $_GET["facialExpression"];?>);
						ctx.fillStyle = "White";
						ctx.fill();
						ctx.beginPath();//mond
						Module.emotion(<?php echo $_GET["facialExpression"];?>);	
						ctx.fillStyle = "White";
						ctx.fill();
						ctx.closePath;
					</script>
					
					<canvas id="BMI" width="155%"; height="auto"; style="background-color:#d9d9d9;"> </canvas>
					<script>
						Module.bmiToPicture(<?php echo $_GET["BMI"];?>);
					</script>
					
				</div>
		</div>
	</body>
</html>


