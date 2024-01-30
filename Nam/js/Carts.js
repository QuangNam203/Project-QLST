// const sectionCart = document.querySelector(".section-Cart");

//pay
const mua = document.querySelector('.product-cart .payClient .successPay button');
const user_id = document.querySelector('.product-cart .payClient .successPay .uniqueID');
const moneyP = document.querySelector('.info-Product .payMoney span');
const orderId = document.querySelector('.info-Product .infoClinent input.orderID');
const uniqueID = document.querySelector('.info-Product .infoClinent input.uniqueID');
const imgPay = document.querySelector('.info-Product .infoClinent input.img');
const productID = document.querySelector('.info-Product .infoClinent input.productID');
const price = document.querySelector('.info-Product .infoClinent input.price');
const quantity = document.querySelector('.info-Product .infoClinent input.quantity');

console.log(quantity);
// menutoggle.onclick = function(){
//     sectionCart.classList.toggle('active');
// }
mua.onclick = ()=>{
    $(".wrapper-pay").toggleClass('active');

}


const checkbox = document.querySelectorAll('.checkbox');
const arr = [];
let outapp = '';
let count = 0;
let money = 0;
let orderID = [];
let img = [];
let productId = [];
let prices = [];
let quantites = [];

uniqueID.value = user_id.value;


for (let i = 0; i < checkbox.length; i++) {
        checkbox[i].onclick =()=>{
            if(checkbox[i].checked){
                count++;
                arr.push(checkbox[i].value);
                arr.forEach( app => {
                    let subarr = [];
                    subarr = app.split("/");
                    console.log(subarr);
                    outapp +='<div class="product">'
                    +'<img src="../images'+"/"+subarr[1]+'" alt="">'
                    +'<div class="content">'
                    +'<div class="name">'+subarr[2]+'</div>'
                        +'<div class="describe">'
                            +'<span>'+subarr[3]+'</span>'
                            +'<span>x1</span>'
                            +'<span>'+subarr[4]+' <sup>đ</sup></span>'
                        +'</div>'
                    +'</div>'
                +'</div>';
                money += parseInt(subarr[4]);
                orderID.push(subarr[0]);
                img.push(subarr[1]);
                productId.push(subarr[5]);
                prices.push(subarr[4])
                quantites.push(subarr[6])
                });
                moneyP.innerHTML = money + '<sup>đ</sup>';
                orderId.value = orderID;
                imgPay.value = img;
                productID.value = productId;
                price.value= prices;
                quantity.value = quantites;
                $('.wrapper-pay .listProduct').append(outapp);
                outapp = '';
                arr.splice(0,count);
        }
        else
        {
            arr.splice(0,1);
        }
    }
}



 