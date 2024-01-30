let menutoggle = document.querySelector('.menu-toggle');
let section = document.querySelector('.section-Content');
let navigation = document.querySelector('.navigation');

let showCart =  document.querySelector(".show-Cart");
let cartIcon =  document.querySelector(".cart-icon");


let packageGoods = document.querySelectorAll(".product .product-img button");
let foodPackage = document.querySelectorAll('.food-package');



menutoggle.onclick = function(){
    menutoggle.classList.toggle('active');
    navigation.classList.toggle('active');
    // section.classList.toggle('active');
}

// cartIcon.onclick = function(){
//     showCart.classList.toggle('active');
// }

function a(){
    console.log('a');
}
packageGoods.forEach(function(button,index){
button.addEventListener('click',function(event){
    var btn = event.target
    var product = btn.parentElement
    var productImg = document.querySelector('.product-img img').src;

    console.log(productImg);
})

});

// packageGoods.onclick = function(){
//     console.log("ok");
//     foodPackage.style.transform  = 'translateX(900px) translateY(-160px)';
//     // window.pageYOffset = foodPackage.style.visibility  = 'hidden';
// }

