'use strict';

window.onload = function() {
    if (document.getElementById('filtros').value !== '') {
        let arrayFiltro = document.getElementById('filtros').value.split('|');
        arrayFiltro.pop();
        for (var i = 0; i < arrayFiltro.length; i++) {
            let arrayIndividual = arrayFiltro[i].split(' = ');
            arrayIndividual.shift();
            let filtro = arrayIndividual[0].replace("'", "");
            filtro = filtro.replace("'", "");

            var newSpan = document.createElement("span");
            newSpan.setAttribute("class", "badge rounded-pill bg-secondary");
            newSpan.setAttribute("id", "span_" + filtro);

            var newContent = document.createTextNode(filtro);
            newSpan.appendChild(newContent);

            document.getElementById("filtrosBusqueda").appendChild(newSpan);
        }
    }
};

function mostrarFiltro(campo, tipo) {
    if (document.getElementById("span_" + campo.innerText)) {
        document.getElementById("filtrosBusqueda").removeChild(document.getElementById("span_" + campo.innerText));
        campo.setAttribute("style", "color: black; text-decoration-line: blink;");
        let filtros = document.getElementById('filtros').value;
        document.getElementById('filtros').value = filtros.replace(tipo + " = " + "'" + campo.innerText + "'|", "");
    } else {
        var newSpan = document.createElement("span");
        newSpan.setAttribute("class", "badge rounded-pill bg-secondary");
        newSpan.setAttribute("id", "span_" + campo.innerText);

        var newContent = document.createTextNode(campo.innerText);
        newSpan.appendChild(newContent);

        document.getElementById("filtrosBusqueda").appendChild(newSpan);
        campo.removeAttribute("style");
        document.getElementById('filtros').value += tipo + " = " + "'" + campo.innerText + "'|";
    }
    document.getElementById('linkFiltro').setAttribute("href", "/realizarBusqueda/" + document.getElementById('filtros').value);
}
