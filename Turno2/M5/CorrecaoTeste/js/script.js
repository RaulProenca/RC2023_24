function changeImg(){
    var imagem = document.getElementById("imagem");
    var numAleatorio = Math.floor(Math.random() * 4) + 1;
    imagem.src = "images/arv" + numAleatorio + ".jpg";
}

function mudaTexto(){
    var texto = document.getElementById("texto");
    texto.innerHTML = "Obrigado";
    texto.style.backgroundColor = "#ffaa55";
}

function textoInicial(){
    var texto = document.getElementById("texto");
    texto.innerHTML = "Passe o rato por cima";
    texto.style.backgroundColor = "#77aa00";
}

function maiusculas(){
    var txtFrase = document.getElementById("txtFrase");
    var lblFrase = document.getElementById("lblFrase");
    lblFrase.innerHTML = txtFrase.value.toUpperCase();
}

var listaNumeros = new Array();

function adicionar(){
    var txtArray = document.getElementById("txtArray");
    var num = txtArray.value;
    listaNumeros.push(num);
}

function imprimir(){
    var lblValues = document.getElementById("lblValues");
    for(let i=0; i<listaNumeros.length; i++){
        lblValues.innerHTML += "Elemento no index " 
                            + i + ": " + listaNumeros[i] + "<br>";
    }
}

function calcular(){
    var volumearea = document.getElementsByName("volumearea");
    var txtRaio = document.getElementById("txtRaio");
    var lblRes = document.getElementById("lblRes");

    if(volumearea[0].checked){
        lblRes.innerHTML = "Volume da esfera: " + 
                            (4/3) * Math.PI * Math.pow(txtRaio.value, 3) 
                            + " m<sup>3</sup>";
    }else{
        lblRes.innerHTML = "Área da esfera: " + 
                            4 * Math.PI * Math.pow(txtRaio.value, 2)
                            + " m<sup>2</sup>";
    }
}


