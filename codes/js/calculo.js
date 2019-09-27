function validar(campo) {

  let n = campo.value;

  if( n.length == 0  || isNaN( parseFloat(n))){
    //ERRO
    window.alert("Informe o primeiro valor corretamente!");

    campo.value = "";
    campo.focus();

    return false;
  }
  //Correto
  return true;
}

function calcular() {

let n1 = document.dados.valor1
let n2 = document.dados.valor2

  if( validar(n1) && validar(n2)){

    let res = parseFloat(n1.value) + parseFloat(n2.value);
    document.dados.resultado.value = res;
  }

}
