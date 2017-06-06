<!-- https://toddmotto.com/mastering-the-module-pattern/-->

<html>
    <head>
        <title>library index</title>
        <script type="text/javascript" src="library.js"></script>
    </head>
    <body>
        
        <script>

       
        </script>
        
        
        
    <canvas id="visualisation" width="500%"; height="auto";>
    
    </canvas>
        
        
        <script>
        var c = document.getElementById("visualisation");
        var ctx = c.getContext("2d");


            
            ctx.beginPath();
            ctx.arc(100,75,Module.bmiToSize(<?php echo $_GET["BMI"];?>),0,2*Math.PI);
            ctx.fillStyle = Module.hexToRgb(<?php echo $_GET["haircolor"];?>);
            ctx.fill();
            /*
            //HAPPY
            //oog links
            ctx.beginPath();
            ctx.arc(90,75,5,0,2*Math.PI);
            ctx.fillStyle = "Black";
            ctx.fill();
            //oog rechts
            ctx.beginPath();
            ctx.arc(110,75,5,0,2*Math.PI);
            ctx.fillStyle = "Black";
            ctx.fill();
            //mond
            ctx.beginPath();
            ctx.arc(100, 90, 20, 0, Math.PI, false);
            ctx.fillStyle = "Black";
            ctx.fill();
            //HAPPY
            */
            /*
            //SHOCKED
            //oog links
            ctx.beginPath();
            ctx.arc(90,75,5,0,2*Math.PI);
            ctx.fillStyle = "Black";
            ctx.fill();
            //oog rechts
            ctx.beginPath();
            ctx.arc(110,75,5,0,2*Math.PI);
            ctx.fillStyle = "Black";
            ctx.fill();
            //mond
            ctx.beginPath();
            ctx.arc(100, 105, 20, 0, Math.PI, true);
            ctx.fillStyle = "Black";
            ctx.fill();
            //SHOCKED
            */
            
                 Module.emotion("<?php echo $_GET["facialExpression"];?>");
       
            
            ctx.beginPath();
            ctx.arc(250,75,Module.bmiToSize(<?php echo $_GET["BMI"];?>),0,2*Math.PI);
            ctx.stroke();
            ctx.fillStyle = Module.hexToRgb(<?php echo $_GET["skintone"];?>);
            ctx.fill();
            
        </script>
        
        <form action="" method="GET">
            hair color: <br><input type="text" name="haircolor" value="995000"><br>
            clothes color: <br><input type="text" name="skintone" value="678392"><br>
            BMI: <br><input type="text" name="BMI" value="20"><br>
            <select name="facialExpression">
                <option value="happy">happy</option>
                <option value="shocked">shocked</option>
            </select>
            <input type="submit" value="Submit">
        </form>
        
        
        
    </body>
</html>


