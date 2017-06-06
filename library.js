

var Module = (function () {
  
    return {
    hexToRgb: function (hex) {
    var bigint = parseInt(hex, 16);
    var r = (bigint >> 16) & 255;
    var g = (bigint >> 8) & 255;
    var b = bigint & 255;
    return("rgb(" + r + ", " + g + ", " + b + ")");
  },
      
    bmiToSize: function (bmi) {
      var Size = bmi * 2.5;
      return(Size);
  },
        
  emotion: function (FE) {
      var happy = "ctx.beginPath(); ctx.arc(90,75,5,0,2*Math.PI); ctx.fillStyle = 'Black'; ctx.fill(); ctx.beginPath(); ctx.arc(110,75,5,0,2*Math.PI); ctx.fillStyle = 'Black'; ctx.fill(); ctx.beginPath(); ctx.arc(100, 90, 20, 0, Math.PI, false); ctx.fillStyle = 'Black'; ctx.fill();";
      var shocked = " ctx.beginPath(); ctx.arc(90,75,5,0,2*Math.PI); ctx.fillStyle = 'Black'; ctx.fill(); ctx.beginPath(); ctx.arc(110,75,5,0,2*Math.PI); ctx.fillStyle = 'Black'; ctx.fill(); ctx.beginPath(); ctx.arc(100, 105, 20, 0, Math.PI, true); ctx.fillStyle = 'Black'; ctx.fill();";
      
      if(FE = "happy"){
          return(happy);
      } else if (FE = "shocked")
          return(shocked);
      }
  
      

  };
})();





    


    