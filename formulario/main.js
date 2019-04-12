console.log("Olá Mundo!"); //printa olá mundo no console (F12 e console fica la em baixo)
//alert("Olá mundo!"); //printa assim que entra na pagina
var bSoma = document.querySelector('.soma'); //variavel global ou estatica, pode estar no fim do programa, mas pode participar de uma função no inicio

bSoma.addEventListener('click',function(e){ //addEventListener('evento',função(){oque vai acontecer quando o evento for realizado})
    let v1 = document.querySelector('.valor1');//let é uma variavel local só existe dentro da sua função
    alert(v1.value); //value = valor, printa o valor de v1
    e.preventDefault();
    console.log(e);
});
