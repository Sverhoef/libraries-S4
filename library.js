var Module = (function () {
    "use strict";
    return {
    hexToRgb: function (hex) {
    var bigint = parseInt(hex, 16);
    var r = (bigint >> 16) & 255;
    var g = (bigint >> 8) & 255;
    var b = bigint & 255;
    return ("rgb(" + r + ", " + g + ", " + b + ")");
  },
      
    bmiToSize: function (bmi) {
      var Size = bmi * 2.5;
      return (Size);
  },
        
  emotion: function (FE) {
	  if (FE == 1) {
		var answer =  ctx.arc(85, 90, 20, 0, Math.PI, false);
	  }
	  if (FE == 2) {
		var answer = ctx.arc(85, 105, 20, 0, Math.PI, true);
	  }
	  return (answer);
  },
		
  eyecolor: function (FE) {
	  if (FE == 1 || FE == 2) {
		var answer =  ctx.arc(95,75,5,0,2*Math.PI);
		var answer =  ctx.arc(75,75,5,0,2*Math.PI);
	  }

	  return (answer);
  },
		
  bmiToPicture: function (bmi){
	  
	  var canvas = document.getElementById('BMI');
      var context = canvas.getContext('2d');
      var imageObj = new Image();
	  var link= "";

      imageObj.onload = function() {
        context.drawImage(imageObj, 0, 0, 154, 154 * imageObj.height / imageObj.width);
      };
	  
	  if (bmi <= 20){
		  var link = 'http://i335404.iris.fhict.nl/images/man.jpg'
	  }
	  if (bmi > 20 && bmi < 28){
		  var link = 'http://i335404.iris.fhict.nl/images/man-2.jpg'
	  } 
	  if (bmi >= 28){
		  var link = 'http://i335404.iris.fhict.nl/images/man-3.jpg'
	  } 
      imageObj.src = link;
  }


};
})();





    


    