'use strict'
if (window.location.pathname == "/mensagens"){
    function pegarEl(el) {
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
}

let itensARedimensionar = [".mensagens__carousel-texto"];

function resize() {
    let itensARedimensionar = [...arguments];
    itensARedimensionar.forEach((element) => {
        window.addEventListener("load", (event) => {
            window.addEventListener("resize", () => {
                const itemRedimensionado = document.querySelectorAll(element);
                itemRedimensionado.forEach((desc) => {
                    desc.style.height = "auto";
                });
                let maior = 0;
                itemRedimensionado.forEach((desc) => {
                    if (desc.clientHeight > maior) {
                        maior = desc.clientHeight;
                    }
                });
                itemRedimensionado.forEach((desc) => {
                    desc.style.height = maior + "px";
                });
            });
            window.dispatchEvent(new Event("resize"));
        });
    });
}

resize(...itensARedimensionar);

window.addEventListener('load', function(){
  new Glider(document.querySelector(".glider"), {
      slidesToShow: 1,
      slidesToScroll: 1,
      rewind: "true",
      arrows: {
          prev: ".glider-prev",
          next: ".glider-next",
      },
      responsive: [
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 4,
            },
        },

        {
            breakpoint: 768,
            settings: {
                slidesToShow: 3,
            },
        },

        {
            breakpoint: 576,
            settings: {
                slidesToShow: 2,
            },
        },
      ],
  });
})
