var Radio = document.querySelector("#light");
var Radio2 = document.querySelector("#dark");
var bCalcula = document.querySelector("#ação");
var Qnt = document.querySelector("#quantidade").value;
var Cont = document.querySelector("#conteudo").value;

Radio.addEventListener("click",function(e){
    document.getElementById("contain").style.background = "white";
    document.getElementById("contain").style.color = "black";
    document.getElementById("ação").style.background = "lightgray";
    document.getElementById("ação").style.color = "black";
    let imagem = document.querySelectorAll("img");
    imagem[0].src = "bambuP.png";
    imagem[1].src = "bambuP.png";
})

Radio2.addEventListener("click",function(e){
    document.getElementById("contain").style.background = "#001";
    document.getElementById("contain").style.color = "white";
    document.getElementById("ação").style.background = "gray";
    document.getElementById("ação").style.color = "white";
    let imagem = document.querySelectorAll("img");
    imagem[0].src = "agua.png";
    imagem[1].src = "agua.png";

})
bCalcula.addEventListener("click",function(e){
    e.preventDefault();
    let necessario = 2;

    if (Qnt == 'ml') {
        necessario = necessario*1000;
    }
    let bebido = document.querySelector("#number").value;
    if (Cont == 'ba') {
        necessario = necessario + bebido;
    }else if (Cont == 'a') {
            necessario = necessario - bebido;
    }else{
            necessario = necessario + (bebido * 32);
    }

    if (Qnt == 'ml') {
        necessario = necessario/1000;
    }
    if (necessario > 0) {
        document.querySelector('#resultado').value = "Falta beber: " + necessario + " Litros";
    }else{
        document.querySelector('#resultado').value = "Água extra: " + necessario + " Litros";
    }
})