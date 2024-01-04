function custofinal() {
    
    var nDias = document.getElementById("nDias");
    var resultado =  document.getElementById("resultado");
    var segmentos = document.getElementsByName("segmento");
    var extras = document.getElementsByName("extras");
    var opcoes = document.getElementById("opcoes");
    var marca = document.getElementById("marca");

    var seg, totalExtras = 0, nseg, nextras = "";
    if (segmentos[0].checked) {
        seg = 0;
        nseg = segmentos[0].value; 
    }else if(segmentos[1].checked){
        seg = 5 * nDias.value;
        nseg = segmentos[1].value; 
    }else{
        seg = 10 * nDias.value;
        nseg = segmentos[2].value; 
    }

    extras.forEach(element => {
        if (element.checked) {
            totalExtras += 15;
            nextras += element.value + "<br>";
        }
    });

    resultado.value = nDias.value * 25 + seg + totalExtras;

    var indice = marca.selectedIndex;
    opcoes.innerHTML = marca[indice].text + "<br>" + nseg 
                       + "<br>" + nextras;


}