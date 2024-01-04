function maiusculas(){
    var frase = prompt("Insira uma frase");
    //Separar as palavras da frase e coloca-as num array
    var palavras = frase.split(" ");
    for (var i = 0; i < palavras.length; i++) {
        //Colocar a primeira letra da palavra em maiuscula
        palavras[i] = palavras[i].charAt(0).toUpperCase() + palavras[i].slice(1);
    }
    //Juntar as palavras do array numa string
    var novaFrase = palavras.join(" ");
    document.write(novaFrase);
}

function ordenarString(){
    var palavra = prompt("Insira uma palavra");
    //Separar as letras da palavra e coloca-as num array
    var letras = palavra.split("");
    //Ordenar o array por ordem alfabetica
    var letrasOrd = letras.sort();
    //Juntar as letras do array numa string
    var novaPalavra = letrasOrd.join(""); 
    document.write(novaPalavra);
}

function calculaIdade() {
    var dataNasc = new Date(prompt("Insira a data de nascimento (aaaa/mm/dd)"));
    var dataAtual = new Date();
    var idade = dataAtual.getFullYear() - dataNasc.getFullYear();
    if (dataAtual.getMonth() < dataNasc.getMonth()) {
        idade--;
    } else if (dataAtual.getMonth() == dataNasc.getMonth()) {
        if (dataAtual.getDate() < dataNasc.getDate()) {
            idade--;
        }
    }
    document.write("A sua idade é " + idade);

}

function mudaEstilo() {
    var text = document.getElementById("text");
    text.style.color = "green";
    text.style.fontFamily = "Verdana";
    text.style.fontSize = "20px";
}


function validaLogin(){
    var txtLogin = document.getElementById("txtLogin");
    var txtPass = document.getElementById("txtPass");
    var lblValida = document.getElementById("lblValida");
    if(txtLogin.value == "luis" && txtPass.value == "12345678"){
        lblValida.innerHTML = "Login efetuado com sucesso!!";
    }else{
        lblValida.innerHTML = "Login inválido";
    }
}


function concelhos(){
    //Caixa de seleção dos distritos
    var selDistrito = document.getElementById("selDistrito");
    //Caixa de seleção dos concelhos
    var selConcelho = document.getElementById("selConcelho");

    //Valor do distrito selecionado
    var distrito = selDistrito.value;
   
    //Array de arrays com os concelhos de cada distrito
    var concelhos = [["Oeiras", "Mafra", "Sintra"],
                     ["Maia", "Gaia", "Matosinhos"],
                     ["Vila Verde", "Guimarães", "Vizela"]];

    //Remover o atributo "disabled" da caixa de seleção dos concelhos 
    selConcelho.removeAttribute("disabled");                 

    //Limpar a caixa de seleção dos concelhos
    selConcelho.innerHTML = "";

    //Se o distrito for "LB" (Lisboa)
    if(distrito == "LB"){
        //Para cada concelho do distrito de Lisboa
        for(var i = 0; i < concelhos[0].length; i++){
            //Criar uma opção na caixa de seleção dos concelhos
            var opt = document.createElement("option");
            //Atribuir o nome do concelho à opção
            opt.innerHTML = concelhos[0][i];
            //Adicionar a opção à caixa de seleção dos concelhos
            selConcelho.appendChild(opt);
        }
        //Se o distrito for "PT" (Porto)
    }else if(distrito == "PT"){
        for(var i = 0; i < concelhos[1].length; i++){
            //Criar uma opção na caixa de seleção dos concelhos
            var opt = document.createElement("option");
            //Atribuir o nome do concelho à opção
            opt.innerHTML = concelhos[1][i];
            //Adicionar a opção à caixa de seleção dos concelhos
            selConcelho.appendChild(opt);
        }
    //Se o distrito for "BG" (Braga)
    }else if(distrito == "BG"){
        for(var i = 0; i < concelhos[2].length; i++){
            //Criar uma opção na caixa de seleção dos concelhos
            var opt = document.createElement("option");
            //Atribuir o nome do concelho à opção
            opt.innerHTML = concelhos[2][i];
            //Adicionar a opção à caixa de seleção dos concelhos
            selConcelho.appendChild(opt);
        }
    }
}


