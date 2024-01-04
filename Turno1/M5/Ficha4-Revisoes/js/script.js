function maiusculas() {
    var input = document.getElementById("fraseInput").value;
    var palavras = input.split(" ");
    for (let i = 0; i < palavras.length; i++) {
        palavras[i] = palavras[i].charAt(0).toUpperCase() + palavras[i].slice(1).toLowerCase() ;
    }
    
    var resultadoDiv = document.getElementById("resultado");
    resultadoDiv.innerHTML = palavras.join(" ");
}

function ordenaString(){
    //let str = "adicionar";
    let str = document.getElementById("inputText");

    //let strArray = str.split("");
    let strArray = str.value.split("");

    let strArraySorted = strArray.sort();
    str = strArraySorted.join("");

    //document.write(str);
    let result = document.getElementById("result");
    result.innerHTML = str;
}


function calculaIdade() {
    let dataNasc = new Date(prompt("Insira a sua data de nascimento (aaaa/mm/dd)"));
    let dataAtual = new Date();
    let idade = dataAtual.getFullYear() - dataNasc.getFullYear();

    if(dataAtual.getMonth() < dataNasc.getMonth()){
        idade--;
    } else if (dataAtual.getMonth() == dataNasc.getMonth()){
        if(dataAtual.getDate() < dataNasc.getDate()){
            idade--;
        }
    }
    document.write("A sua idade é " + idade + " anos.");
}

function mudaEstilo() {
    let text = document.getElementById("text");
    text.style.color = "Green";
    text.style.fontFamily = "Verdana";
    text.style.fontSize = "30px";
}

function validaLogin(){
    let user = document.getElementById("txtLogin").value;
    let pass = document.getElementById("txtPass").value;
    let lblValida = document.getElementById("lblValida");

    if(user == "luis.fernandes@aerp.pt" && pass == "12345678"){
        lblValida.innerHTML = "Login efetuado com sucesso!";
    } else {
        lblValida.innerHTML = "Login inválido!";
    }
}

function trocaConcelhos(){
    let selDistrito = document.getElementById("selDistrito");
    let selConcelho = document.getElementById("selConcelho");

    let concelhos = [["Oeiras", "Mafra", "Sintra"], 
                     ["Maia", "Gaia", "Matosinhos"], 
                     ["Vila Verde", "Guimarães", "Vizela"]];

    let distrito = selDistrito.value;
    selConcelho.innerHTML = "";
    if(distrito == "LB"){
        for(let i = 0; i < concelhos[0].length; i++){
            let option = document.createElement("option");
            option.text = concelhos[0][i];
            selConcelho.add(option);
            selConcelho.removeAttribute("disabled");
        }
    }else if(distrito == "PT"){
        for(let i = 0; i < concelhos[1].length; i++){
            let option = document.createElement("option");
            option.text = concelhos[1][i];
            selConcelho.add(option);
            selConcelho.removeAttribute("disabled");
        }
    }else if(distrito == "BG"){
        for(let i = 0; i < concelhos[2].length; i++){
            let option = document.createElement("option");
            option.text = concelhos[2][i];
            selConcelho.add(option);
            selConcelho.removeAttribute("disabled");
        }
    }
}


function getMes(){
    let data = new Date(prompt("Insira uma data (aaaa/mm/dd)"));
    let mes = data.toLocaleDateString("pt-PT", {month: "long"});
    document.write("O mês é " + mes);
}