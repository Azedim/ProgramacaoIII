var Radio = document.querySelector("#light");
var Radio2 = document.querySelector("#dark");
var bCalcula = document.querySelector("#ação");
Radio.addEventListener("click",function(e){
    document.getElementById("contain").style.background = "white";
    document.getElementById("contain").style.color = "black";
    document.getElementById("ação").style.background = "lightgray";
    document.getElementById("ação").style.color = "black";
})

Radio2.addEventListener("click",function(e){
    document.getElementById("contain").style.background = "#001";
    document.getElementById("contain").style.color = "white";
    document.getElementById("ação").style.background = "gray";
    document.getElementById("ação").style.color = "white";
    let imagem = document.querySelector("img");
    imagem.src = "bambuB.jpg";
})
bCalcula.addEventListener("click",function(e){

    e.preventDefault();
})