var bMax = document.querySelector(".max");
var bMin = document.querySelector(".min");
bMax.addEventListener("click",function(e){
    e.preventDefault()
    let numbers1 = document.querySelector(".valor1");
    let numbers2 = document.querySelector(".valor2");
    let numbers3 = document.querySelector(".valor3");
    let numbers4 = document.querySelector(".valor4");
    let numbers5 = document.querySelector(".valor5");
    let numbers6 = document.querySelector(".valor6");
    let numbers7 = document.querySelector(".valor7");
    let numbers8 = document.querySelector(".valor8");
    let maximo = Math.max(parseInt(numbers1.value),parseInt(numbers2.value),parseInt(numbers3.value),parseInt(numbers4.value),parseInt(numbers5.value),parseInt(numbers6.value),parseInt(numbers7.value),parseInt(numbers8.value));
    document.querySelector('.resposta').innerHTML = "O maior é: " + maximo;
})
bMin.addEventListener("click",function(e){
    e.preventDefault()
    let numbers1 = document.querySelector(".valor1");
    let numbers2 = document.querySelector(".valor2");
    let numbers3 = document.querySelector(".valor3");
    let numbers4 = document.querySelector(".valor4");
    let numbers5 = document.querySelector(".valor5");
    let numbers6 = document.querySelector(".valor6");
    let numbers7 = document.querySelector(".valor7");
    let numbers8 = document.querySelector(".valor8");
    let minimo = Math.min(parseInt(numbers1.value),parseInt(numbers2.value),parseInt(numbers3.value),parseInt(numbers4.value),parseInt(numbers5.value),parseInt(numbers6.value),parseInt(numbers7.value),parseInt(numbers8.value));
    document.querySelector('.resposta').innerHTML = "O maior é: " + minimo;
})