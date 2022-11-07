'use strict'

function resizeBanner(){
    let alturaTela = window.innerHeight;
    function pegarEl(el){
        return document.querySelectorAll(el);
    }
    let alturaHeader = pegarEl(".header")[0].getBoundingClientRect().height;
    let imgBanner = pegarEl(".banner__img")[0];
    let alturaImgBanner = alturaTela - alturaHeader
    imgBanner.style.height = `${alturaImgBanner}px`;
}
resizeBanner();