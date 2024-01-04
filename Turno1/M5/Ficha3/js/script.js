function formulario() {
    var nome = document.getElementById("inputNome");
    var morada = document.getElementById("inputMorada");
    var genero = document.getElementsByName("gridRadios");
    var pais = document.getElementById("selectPais");
    var hobbies = document.getElementsByName("hobbies");
    var mensagem = document.getElementById("mensagem");

    var generoEscolhido = "";
    var hobbiesEscolhidos = "";

    for (var i = 0; i < genero.length; i++) {
        if (genero[i].checked) {
            generoEscolhido = genero[i].value;
        }
    }

    for (var i = 0; i < hobbies.length; i++) {
        if (hobbies[i].checked) {
            hobbiesEscolhidos += hobbies[i].value + " ";
        }
    }

    var indicePais = pais.selectedIndex;
    var paisEscolhido = pais.options[indicePais].text;

    mensagem.innerHTML = "Nome: " + nome.value + "<br>" +
                         "Morada: " + morada.value + "<br>" +
                         "Género: " + generoEscolhido + "<br>" +
                         "País: " + paisEscolhido + "<br>" +
                         "Hobbies: " + hobbiesEscolhidos;



}