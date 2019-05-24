var nome1 = document.querySelector("#jogador1");
var nome2 = document.querySelector("#jogador2");
var b = document.querySelector("#verificar");

b.addEventListener("click",function(e){
    let escolha = document.querySelector("input[name=escolha]:checked").value;
    let escolha2 = document.querySelector("input[name=escolha2]:checked").value;
    
    if (escolha == "pedra") {
        if (escolha2 == "pedra") {
            document.getElementById("vencedor").innerHTML = "EMPATE";
        }else if (escolha2 == "papel") {
            document.getElementById("vencedor").innerHTML = "VENCEDOR: " + nome2.value;
        }else if (escolha2 == "tesoura") {
            document.getElementById("vencedor").innerHTML = "VENCEDOR: " + nome1.value;
        }
    }else if (escolha == "papel") {
        if (escolha2 == "pedra") {
            document.getElementById("vencedor").innerHTML = "VENCEDOR: " + nome1.value;
        }else if (escolha2 == "papel") {
            document.getElementById("vencedor").innerHTML = "EMPATE";
        }else if (escolha2 == "tesoura") {
            document.getElementById("vencedor").innerHTML = "VENCEDOR: " + nome2.value;
        }
    }else if (escolha == "tesoura") {
        if (escolha2 == "pedra") {
            document.getElementById("vencedor").innerHTML = "VENCEDOR: " + nome2.value;
        }else if (escolha2 == "papel") {
            document.getElementById("vencedor").innerHTML = "VENCEDOR: " + nome1.value;
        }else if (escolha2 == "tesoura") {
            document.getElementById("vencedor").innerHTML = "EMPATE";
        }
    }
})