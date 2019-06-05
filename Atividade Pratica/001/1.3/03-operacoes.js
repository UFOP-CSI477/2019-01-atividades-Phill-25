function checking(label, campo, msg){
var n = parseFloat($(campo).val());
  if(isNaN(n)){

    $(label).addClass("text-danger");
    $(msg).slideDown();
    $(campo).addClass("is-invalid");
    $(campo).val("");
    $(campo).focus();

    return false;
  }

    $(msg).hide();
    $(label).removeClass("text-danger");
    $(campo).removeClass("is-invalid");
    $(campo).addClass("is-valid");

    return true;
}

function escalaRichter(amplitude, tempo){
  return Math.log10(amplitude) + (3*(Math.log10((8*tempo)))) - 2.92;
}

function escala(mag){
console.log(mag);
  if(mag < 3.5){

    document.getElementById("rch1").appendChild(document.createTextNode(mag.toFixed(2)+" - na escala Richter"));

    var disp1 = document.getElementById("alerta1").style.display;
       if(disp1 == "none")
          document.getElementById("alerta1").style.display = 'block';

  }else if (mag >= 3.5 &&  mag <= 5.4) {

    document.getElementById("rch1").appendChild(document.createTextNode(mag.toFixed(2)+" - na escala Richter"));

    var disp1 = document.getElementById("alerta1").style.display;
       if(disp1 == "none")
          document.getElementById("alerta1").style.display = 'block';

  }else if (mag >= 5.0 && mag <= 6.0) {

    document.getElementById("rch2").appendChild(document.createTextNode(mag.toFixed(2)+", na escala Richter"));

    var disp1 = document.getElementById("alerta2").style.display;
       if(disp1 == "none")
          document.getElementById("alerta2").style.display = 'block';

  }else if (mag >= 6.1 && mag <= 6.9) {

    document.getElementById("rch3").appendChild(document.createTextNode(mag.toFixed(2)+",  na escala Richter"));

    var disp1 = document.getElementById("alerta3").style.display;
       if(disp1 == "none")
          document.getElementById("alerta3").style.display = 'block';

  }else if (mag >= 7.0 && mag <= 7.9) {

    document.getElementById("rch3").appendChild(document.createTextNode(mag.toFixed(2)+",  na escala Richter"));

    var disp1 = document.getElementById("alerta3").style.display;
       if(disp1 == "none")
          document.getElementById("alerta3").style.display = 'block';
  }else if (mag > 8.0) {

    document.getElementById("rch4").appendChild(document.createTextNode(mag.toFixed(2)+",  na escala Richter"));

    var disp1 = document.getElementById("alerta4").style.display;
       if(disp1 == "none")
          document.getElementById("alerta4").style.display = 'block';

  }


}


$("#calcular").click(function(){

  if (checking("#Lamplitude","input[name=amplitude]","#msg1") && checking("#tempo","input[name=tempo]","#msg2")) {
    escala(escalaRichter($("#amplitude").val(),$("#tempo").val()));
  }



});
