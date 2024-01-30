const formSucces = document.querySelector('.formSuccess');
const increase = document.querySelector('.layoutWrapper .wrapper-Items .introduce .number .introduce');
const reduce = document.querySelector('.layoutWrapper .wrapper-Items .introduce .number .reduce');
const numberInput = document.querySelector('.layoutWrapper .wrapper-Items .introduce .number input');
const btnloai = document.querySelectorAll('.layoutWrapper .wrapper-Items .introduce .clasificar .clasificar-btn .loai');
const classify = document.querySelector('.layoutWrapper .wrapper-Items .introduce .clasificar .clasificar-btn .classify');
const addcart = document.querySelector('.layoutWrapper .wrapper-Items .introduce .perform .addCart');
const successBuy = document.querySelector('.layoutWrapper .wrapper-Items .introduce .perform .successBuy');
const image = document.querySelector('.layoutWrapper .wrapper-Items .image img');
const title = document.querySelector('.layoutWrapper .wrapper-Items .introduce .name-produce');
const titlePrice = document.querySelectorAll('.layoutWrapper .wrapper-Items .introduce .precio ul li');

const cusProductID = document.querySelector('.layoutWrapper .wrapper-Items .introduce .productId');
const cusProductName = document.querySelector('.layoutWrapper .wrapper-Items .introduce .product_name');
const cusPrice = document.querySelector('.layoutWrapper .wrapper-Items .introduce .precio .price');

// ========================================================================== Container

const wrapperProduct = document.querySelectorAll(".wrapperContainer .wrapper-class .product");
const img = document.querySelector(".wrapperContainer .wrapper-class .items-product .img");
const closeSuccess = document.querySelector('.customItem .closeSuccess');
const layoutWrapper = document.querySelector(".customItem .layoutWrapper");
const customItem = document.querySelector(".customItem");

const describe = document.querySelector(".wrapperContainer .wrapper-class .describe");
const price = document.querySelectorAll(".wrapperContainer .wrapper-class .price");

console.log(wrapperProduct);

wrapperProduct.forEach((element,index) => {
    var btnBuy = element.querySelector(".items-product .btn-Buy");
    var productId = document.querySelectorAll(".wrapperContainer .wrapper-class .product_id");
    btnBuy.onclick = (event)=>{
        var btn = event.target
        var product = btn.parentElement
    
        var backgroundImage = window.getComputedStyle(img, null).getPropertyValue('background-image');
        backgroundImage = backgroundImage.replace('url("', '').replace('")', '');
    
        var imgArr = [];
        imgArr = backgroundImage.split("/");
        
    
        image.src = "../images/" + imgArr[imgArr.length -1];
        
       
        cusProductID.value = productId[index].value;
        cusProductName.value = describe.value;
        title.innerHTML = describe.value;
        titlePrice[0].querySelector('i').innerHTML = price[index].value + "<sup>đ</sup>";
        titlePrice[1].querySelector('i').innerHTML = (price[index].value * 0.75) + "<sup>đ</sup>";
        cusPrice.value = price[index].value;
        customItem.classList.add('active');
    }
});


closeSuccess.onclick =()=>{
    customItem.classList.remove('active');
}




// =================================================================================  customItem


btnloai.forEach((element,index) => {
    element.onclick = (event)=>{
        classify.value = element.innerHTML;
    }
});

increase.onclick = (e)=>{
    numberInput.value++;
}
reduce.onclick = (e)=>{
    numberInput.value--;
}

// function LoadCustom(){
//     let xhr = new XMLHttpRequest();
//     xhr.open("GET", "../service/customitems.php", true);
//     xhr.onload = ()=>{
//       if(xhr.readyState === XMLHttpRequest.DONE){
//           if(xhr.status === 200){
//             let data = xhr.response;
//             console.log(data);
//           }
//       }
//     }
//     xhr.send();
// }

// LoadCustom();