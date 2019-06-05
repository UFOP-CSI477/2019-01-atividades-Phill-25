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

function calculaIMC(peso, altura){
  return peso / (altura*altura);
}

function calculaPeso(imc, altura){
  return imc * (altura*altura);
}

function findFaixa(faixa){
console.log(faixa);
  if(faixa < 18.5){
    //subnutrição
    document.getElementById("imc2").appendChild(document.createTextNode(faixa.toFixed(2)+" - Subnutrição"));
    document.getElementById("faixapeso1").appendChild(document.createTextNode
      (calculaPeso(18.5,$("#altura").val()).toFixed(2)+"(Kg) - "+calculaPeso(24.9,$("#altura").val()).toFixed(2)+"(Kg)"));
    var disp1 = document.getElementById("alerta2").style.display;
       if(disp1 == "none")
          document.getElementById("alerta2").style.display = 'block';

  }else if (faixa >= 18.5 &&  faixa <= 24.9) {
    // Peso saudável
    document.getElementById("imc1").appendChild(document.createTextNode(faixa.toFixed(2).toFixed(2)+" - Sauldavel!"));

    document.getElementById("faixapeso0").appendChild(document.createTextNode
      (calculaPeso(18.5,$("#altura").val()).toFixed(2)+"(Kg) - "+calculaPeso(24.9,$("#altura").val()).toFixed(2)+"(Kg)"));
    var disp1 = document.getElementById("alerta1").style.display;
       if(disp1 == "none")
          document.getElementById("alerta1").style.display = 'block';

  }else if (faixa >= 25.0 && faixa <= 29.9) {
    //sobrepeso
    document.getElementById("imc3").appendChild(document.createTextNode(faixa.toFixed(2)+" - sobrepeso"));
    document.getElementById("faixapeso2").appendChild(document.createTextNode
      (calculaPeso(18.5,$("#altura").val()).toFixed(2)+"(Kg) - "+calculaPeso(24.9,$("#altura").val()).toFixed(2)+"(Kg)"));

    var disp1 = document.getElementById("alerta3").style.display;
       if(disp1 == "none")
          document.getElementById("alerta3").style.display = 'block';

  }else if (faixa >= 30 && faixa <= 34.9) {
    //obesidade grau 1
    document.getElementById("imc2").appendChild(document.createTextNode(faixa.toFixed(2)+" - Obesidade grau 1"));
    document.getElementById("faixapeso1").appendChild(document.createTextNode
      (calculaPeso(18.5,$("#altura").val()).toFixed(2)+"(Kg) - "+calculaPeso(24.9,$("#altura").val()).toFixed(2)+"(Kg)"));
    var disp1 = document.getElementById("alerta2").style.display;
       if(disp1 == "none")
          document.getElementById("alerta2").style.display = 'block';

  }else if (faixa >= 35 && faixa <= 39.9) {
    //obesidade grau 2
    document.getElementById("imc2").appendChild(document.createTextNode(faixa.toFixed(2)+" - Obesidade grau 2"));
    document.getElementById("faixapeso1").appendChild(document.createTextNode
      (calculaPeso(18.5,$("#altura").val()).toFixed(2)+"(Kg) - "+calculaPeso(24.9,$("#altura").val()).toFixed(2)+"(Kg)"));
    var disp1 = document.getElementById("alerta2").style.display;
       if(disp1 == "none")
          document.getElementById("alerta2").style.display = 'block';
  }else {
    //obesidade grau 3
    document.getElementById("imc2").appendChild(document.createTextNode(faixa.toFixed(2)+" - Obesidade grau 3"));
    document.getElementById("faixapeso1").appendChild(document.createTextNode
      (calculaPeso(18.5,$("#altura").val()).toFixed(2)+"(Kg) - "+calculaPeso(24.9,$("#altura").val()).toFixed(2)+"(Kg)"));
    var disp1 = document.getElementById("alerta2").style.display;
       if(disp1 == "none")
          document.getElementById("alerta2").style.display = 'block';
  }
}


$("#calcular").click(function(){


  if (checking("#Laltura","input[name=altura]","#msg1") && checking("#Lpeso","input[name=peso]","#msg2")) {
    findFaixa(calculaIMC($("#peso").val(),$("#altura").val()));
  }



});
