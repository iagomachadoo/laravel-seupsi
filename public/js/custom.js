'use strict'

function pegarEl(el){
    return document.querySelector(el);
}

const textArea = pegarEl(".form_mensagem__text-area");

textArea.addEventListener("input", (e) => {
    const limiteMaxCaracter = 350;
    
    let qtdCaracter = textArea.value.length;
    
    let elQtdCaracter = pegarEl(".form_mensagem__qtd-caractere");

    let qtdAtualCaracter = limiteMaxCaracter - qtdCaracter;

    elQtdCaracter.innerText = qtdAtualCaracter;

    if (qtdAtualCaracter <= 217 && qtdAtualCaracter >= 116) {
        elQtdCaracter.style.color = "#ddcc00";
        
    } else if (qtdAtualCaracter < 116) {
        elQtdCaracter.style.color = "#ff0000";
    }
});
