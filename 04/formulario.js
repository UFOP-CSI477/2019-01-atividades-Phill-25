function validationInput(elemento, alerta, label){
  if(elemento.value.length == 0){

    alerta.style.display = "block";
    label.classList.add("text-danger");

    elemento.classList.add("is-invalid");

    elemento.value = "";
    elemento.focus();
    return false;

  }else {

    alerta.style.display = "none";
    elemento.classList.remove("is-invalid");
    elemento.classList.add("is-valid");

    label.classList.remove("text-danger");

    return true;
  }

}

function validationSelect(elemento, alerta, label){
  if(elemento.value == 0){

    alerta.style.display = "block";
    label.classList.add("text-danger");

    elemento.classList.add("is-invalid");

    elemento.focus();
    return false;

  }else {

    alerta.style.display = "none";
    elemento.classList.remove("is-invalid");
    elemento.classList.add("is-valid");

    label.classList.remove("text-danger");

    return true;
  }

}

function validationRadio(radio1, radio2, label){
  if(radio1.checked == false && radio2.checked == false){

    label.classList.add("text-danger");

    radio1.classList.add("is-invalid");
    radio2.classList.add("is-invalid");

    return false;

  }else if(radio1.checked){

    radio1.classList.remove("is-invalid");
    radio2.classList.remove("is-invalid");
    radio1.classList.add("is-valid");

    label.classList.remove("text-danger");

    return true;
  }else {

        radio2.classList.remove("is-invalid");
        radio1.classList.remove("is-invalid");
        radio2.classList.add("is-valid");

        label.classList.remove("text-danger");

        return true;
  }

}






function validaAllCadastro(){

validationInput( document.getElementById("nome"), document.getElementById("alerta1"), document.getElementById("lnome"));

validationInput( document.getElementById("peso"), document.getElementById("alerta2"), document.getElementById("lpeso"));

validationSelect( document.getElementById("slc1"), document.getElementById("alerta3"), document.getElementById("lpeso"));

validationInput( document.getElementById("estoque"), document.getElementById("alerta4"), document.getElementById("lestoque"));

validationRadio(document.getElementById("interno"), document.getElementById("externo"), document.getElementById("lmercado"));


validationSelect( document.getElementById("fornecedor"), document.getElementById("alerta5"), document.getElementById("lfornecedor"));

validationInput( document.getElementById("valor"), document.getElementById("alerta6"), document.getElementById("lalerta"));

}


function ValidadaAllVendas(){
  validationSelect( document.getElementById("produtos"), document.getElementById("alertaV1"), document.getElementById("lproduto"));

  validationInput( document.getElementById("quantidade"), document.getElementById("alertaV2"), document.getElementById("lquantidade"));

  validationRadio(document.getElementById("dinheiro"), document.getElementById("cartao"), document.getElementById("lpagamento"));

  validationRadio(document.getElementById("expresso"), document.getElementById("normal"), document.getElementById("lenvio"));

}
