function calculaValor() {
    var nDias = document.getElementById("nDias");
    var resultado =  document.getElementById("resultado");
    var segmentos = document.getElementsByName("segmento");
    var extras = document.getElementsByName("extras");
    var opcoes = document.getElementById("opcoes");
    var marca = document.getElementById("marca");

    var seg, nextra = 0, nseg, textras="";

/*     if (segmentos[0].checked) {
       seg = 0;
       nseg = segmentos[0].value; 
    } else if(segmentos[1].checked){
       seg = 5 * nDias.value;
       nseg = segmentos[1].value;  
    } else if(segmentos[2].checked){
       seg = 10* nDias.value; 
       nseg = segmentos[2].value; 
    } */
    
    for (let i = 0; i < segmentos.length; i++) {
      if (segmentos[i].checked) {
         seg =  i * 5 * nDias.value;;
         nseg = segmentos[i].value; 
      }
    }

    extras.forEach(element => {
      if(element.checked){
         nextra += 15;
         textras += element.value + "<br>";
      }
    });

    resultado.value = nDias.value *  25 + seg + nextra + "€";

    var indice =  marca.selectedIndex;
    opcoes.innerHTML = marca[indice].text + "<br>" + nseg 
                       + "<br>" + textras;

}