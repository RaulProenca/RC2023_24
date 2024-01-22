function mudaImagem(){
    var imagem = document.getElementById("imagem");
    var numAleatorio = Math.floor(Math.random() * 4) + 1;
    imagem.src = "images/arv" + numAleatorio + ".jpg";
}

function mudaTexto(){
    var texto = document.getElementById("texto");
    texto.innerText = "Obrigado";
    texto.style.backgroundColor = "#ffaa55";
}

function textoInicial(){
    var texto = document.getElementById("texto");
    texto.innerText = "Passe o rato por cima da imagem";
    texto.style.backgroundColor = "#77aa00";
}

function maiusculas(){
    var txtFrase = document.getElementById("txtFrase");
    var lblFrase = document.getElementById("lblFrase");
    lblFrase.innerText = txtFrase.value.toUpperCase();
}

var listaNumeros = new Array();

function adicionar(){
    var txtArray = document.getElementById("txtArray");
    listaNumeros.push(txtArray.value);
}

function imprimir(){
    
    var lblValues = document.getElementById("lblValues");
    lblValues.innerHTML = "";

    for(var i = 0; i < listaNumeros.length; i++){
        lblValues.innerHTML += "Elemento no index " + i + ": " 
                                + listaNumeros[i] + "<br>";
    }
}

function calcular(){
    var volumearea = document.getElementsByName("volumearea");
    var txtRaio = document.getElementById("txtRaio");
    var lblRes = document.getElementById("lblRes");

    if(volumearea[0].checked){
        lblRes.innerHTML = "Volume da Esfera: " + 
                (4/3) * Math.PI * Math.pow(txtRaio.value, 3) + " m<sup>3</sup>";
    }else{
        lblRes.innerHTML = "Área da Esfera: " + 
                4 * Math.PI * Math.pow(txtRaio.value, 2) + " m<sup>2</sup>";
    }
        
}
