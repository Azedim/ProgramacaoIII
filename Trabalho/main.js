var Radio = document.querySelector("#light");
var Radio2 = document.querySelector("#dark");
Radio.addEventListener("click",function(e){
    document.getElementById("contain").style.background = "#001";
    document.getElementById("contain").style.color = "white";

    
})

Radio2.addEventListener("click",function(e){
    document.getElementById("contain").style = 'background-color : 001';

    
})