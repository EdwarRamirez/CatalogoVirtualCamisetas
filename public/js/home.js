'use strict';

window.onload = function() {
    if (document.getElementById('produtosComprados').value > 0) {
        document.getElementById('totalProductos').innerText = document.getElementById('produtosComprados').value;
    }
};
