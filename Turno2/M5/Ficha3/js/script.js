function calcula() {
    

    var txtvalor1 = document.getElementById("txtvalor1");
    var txtvalor2 = document.getElementById("txtvalor2");
    var txttotal =  document.getElementById("txttotal");

    txttotal.value = parseFloat(txtvalor1.value) 
                    + parseFloat(txtvalor2.value);
    

}

function adicionar(){

    var lista1 = document.getElementById('lista1');
    var lista2 = document.getElementById('lista2');

    var indice = lista1.options.selectedIndex;
    var opcao = lista1.options[indice];

    lista2.add(opcao);
    lista2.selectedIndex = -1;
}

function remover(){

    var lista1 = document.getElementById('lista1');
    var lista2 = document.getElementById('lista2');

    var indice = lista2.options.selectedIndex;
    var opcao = lista2.options[indice];

    lista1.add(opcao);
    lista1.selectedIndex = -1;
}

function mudaImagem() {
    var smile = document.getElementById("smile");
    smile.src = "smile2.png";
}

function mudaImagem2() {
    var smile = document.getElementById("smile");
    smile.src = "smile1.png";
}

function mudaEstilo() {
    var palavras = document.getElementsByClassName("negrito");
    for (let i = 0; i < palavras.length; i++) {
        palavras[i].classList.toggle("normal");
    }
}


function carrinho() {
    let item = document.getElementById("item");
    let listaIng = document.getElementById("listaIng");
    //Cria um elemento img
    let img = document.createElement("img");
    img.src = "lixo.png";
    //Cria um elemento li
    let li = document.createElement("li");
    //Adiciona o ingrediente ao elemento li
    li.innerHTML = item.value;
    //Adiciona o evento onclick ao elemento img
    img.onclick = function() {
        li.remove();
    }
    //Adiciona o elemento img ao li
    li.appendChild(img);
    //Adiciona o elemento li à lista
    listaIng.appendChild(li); 
}


function formulario(){
    var nome = document.getElementById("inputNome");
    var morada = document.getElementById("inputMorada");
    var genero = document.getElementsByName("gridRadios");
    var pais = document.getElementById("selectPais");
    var hobbies = document.getElementsByName("hobbies");
    var msg = document.getElementById("mensagem");

    var gen = "";
    genero.forEach(element => {
       if(element.checked){
           gen = element.value;
       } 
    });

    var hobb = "";
    hobbies.forEach(element => {
        if(element.checked){
            hobb += element.value + " ";
        } 
     });

    //Obter o índice da opção selecionada
    var indice = pais.options.selectedIndex;
    //Obter a opção selecionada
    var opcao = pais.options[indice];

    msg.innerHTML = "Nome: " + nome.value + "<br>" + 
                    "Morada: " + morada.value + "<br>" + 
                    "Género: " + gen  + "<br>" +
                    "País: " + opcao.text + "<br>" +
                    "Hobbies: " + hobb + "<br>";
}