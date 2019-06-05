var nome = [];
var tempos = [];
var auxT = [];
var i = 0;

function checking(label, campo, msg){

  if($(campo).val().length == 0){

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

function apuração(){
auxT.sort();
var s = 1;

auxT.forEach(function(el){
  var pos = tempos.indexOf(el);
  var n = nome[pos];
console.log(s);
console.log(pos);
console.log(n);


  //criação das linhas da tabela
  var posicao = document.createElement("td");
  posicao.appendChild(document.createTextNode(s));
  var largada = document.createElement("td");
  largada.appendChild(document.createTextNode(++pos));
  var compedidor = document.createElement("td");
  compedidor.appendChild(document.createTextNode(n));
  var temp = document.createElement("td");
  temp.appendChild(document.createTextNode(el));
  var win = document.createElement("td");
  var tRow = document.createElement("tr");
  tRow.appendChild(posicao);
  tRow.appendChild(largada);
  tRow.appendChild(compedidor);
  tRow.appendChild(temp);

  if(s == 1){
    win.appendChild(document.createTextNode("VENCEDOR(a)"));
    tRow.appendChild(win);
  }else if (tempos[0] == tempos[1]) {
        win.appendChild(document.createTextNode("VENCEDOR(a)"));
      tRow.appendChild(win);
  }
  document.getElementById("tb").appendChild(tRow);
  s+= 1;
});

console.log(auxT);
console.log(tempos);

var disp1 = document.getElementById("for").style.display;
   if(disp1 == "block")
       document.getElementById("for").style.display = 'none';

var disp2 = document.getElementById("tabela_D").style.display;
   if(disp2 == "none")
       document.getElementById("tabela_D").style.display = 'block';

}



$(document).ready(function(){






$("#correr").click(function(){
  if(checking("#Lnome","input[name=nome]","#msg1") && checking("#Ltempo","input[name=tempo]","#msg2") ){
  var x = nome.push($("input[name=nome]").val());
  var y = tempos.push($("input[name=tempo]").val());
  var z = auxT.push($("input[name=tempo]").val());

  alert("Entrou na corrida!");

  //var disp3 = document.getElementById("alerta1").style.display;
     //if(disp3 == "none")
         //document.getElementById("alerta1").style.display = 'block';


    $("input[name=nome]").val("");
    $("input[name=nome]").focus();
    $("input[name=tempo]").val("");

if(i++ == 1){

apuração();



}

    //console.log($("input[name=nome]").val());
  }


});

});
