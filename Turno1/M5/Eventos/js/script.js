function getName() {
    var name = prompt("Insira o seu nome");
    var lblMsg = document.getElementById("mensagem");
    lblMsg.innerHTML += name;
}

function getData() {
    var data = new Date();
    var lblData = document.getElementById("data");
    lblData.innerHTML = data.toLocaleDateString("pt-pt");
}

function getHours() {
    var data = new Date();
    var lblHours = document.getElementById("hora");
    lblHours.innerHTML = data.toLocaleTimeString("pt-pt");
    setInterval(getHours, 1000);
}