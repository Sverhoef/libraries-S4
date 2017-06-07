<!-- https://toddmotto.com/mastering-the-module-pattern/-->

<html>
    <head>
        <title>library index</title>
        <script type="text/javascript" language="JavaScript" src="library.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">

    </head>
    <body>
     <div id="lowercenter">
		 <canvas id="canvas" width="800%"; height="300px"; style="background-color:#d9d9d9;"></canvas><br>
	
		<form action="" method="GET">
            hair color: <br><input type="text" name="haircolor" value="<?php if(isset($_GET["haircolor"])){echo $_GET["haircolor"];}else{echo "995000";}?>"><br>
            clothes color: <br><input type="text" name="skintone" value="<?php if(isset($_GET["skintone"])){echo $_GET["skintone"];}else{echo "678392";}?>"><br>
            BMI: <br><input type="text" name="BMI" value="<?php if(isset($_GET["BMI"])){echo $_GET["BMI"];}else{echo "20";}?>"><br>
            <select name="facialExpression">
                <option value="1">happy</option>
                <option value="2">shocked</option>
            </select>
            <input type="submit" value="Submit">
        </form>
        
		
		
		
		<div id="canvasdiv">
    	<canvas id="haircolor" width="155%"; height="auto"; style="background-color:#d9d9d9;"> </canvas>
        <script>
        var c = document.getElementById("haircolor");
        var ctx = c.getContext("2d");

		ctx.beginPath();
		ctx.arc(75,75,Module.bmiToSize(<?php echo $_GET["BMI"];?>),0,2*Math.PI);
		ctx.fillStyle = Module.hexToRgb(<?php echo $_GET["haircolor"];?>);
		ctx.fill();		
		ctx.closePath
		
		</script>
		
		
		<canvas id="skintone" width="155%"; height="auto"; style="background-color:#d9d9d9;"> </canvas>
		<script>
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
		

		//ogen
		ctx.beginPath();
		Module.eyecolor(<?php echo $_GET["facialExpression"];?>);
		ctx.fillStyle = "Black";
		ctx.fill();
		//mond 
		ctx.beginPath();
		Module.emotion(<?php echo $_GET["facialExpression"];?>);	//THAFUQ
		ctx.fillStyle = "Black";
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


