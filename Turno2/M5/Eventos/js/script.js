function getName() {
    var nome = prompt("Insira o seu nome");
    var lblMsg = document.getElementById("mensagem");
    lblMsg.innerText += nome;
}

function getData() {
    var data = new Date();
    var lblData = document.getElementById("data");
    lblData.innerText = data.toLocaleDateString("pt-PT");
}

function getHours() {
    var data = new Date();
    var lblHours = document.getElementById("hora");
    lblHours.innerText = data.getHours()   + ":" + 
                         data.getMinutes() + ":" + 
                         data.getSeconds();
    setInterval(getHours,1000);
}
