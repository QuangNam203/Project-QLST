let sectionListProduct = document.querySelector('.section-ListProduct');
let menutoggle = document.querySelector('.menu-toggle');
let navigation = document.querySelector('.navigation');

menutoggle.onclick = function(){
    menutoggle.classList.toggle('active');
    navigation.classList.toggle('active');
    sectionListProduct.classList.toggle('active');
}

