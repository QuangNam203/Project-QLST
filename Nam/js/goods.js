const addProduct =  document.querySelector('.container-Goods .addProduct');
const addProducer =  document.querySelector('.container-Goods .addProducer');
const goodsform =  document.querySelector('.table-update-goods');


const formProducer = document.querySelector(".table-producer");
const form = document.querySelector(".table-producer form");
const continueBtn = document.querySelector(".table-producer form .submit");

console.log(form);

addProduct.onclick = ()=>{
    goodsform.classList.toggle('active');
}

addProducer.onclick = ()=>{
    formProducer.classList.toggle('active');
}

// continueBtn.onclick = ()=>{
//     let xhr = new XMLHttpRequest();
//     xhr.open("POST", "../service/producer.php", true);
//     xhr.onload = ()=>{
//       if(xhr.readyState === XMLHttpRequest.DONE){
//           if(xhr.status === 200){
//             let data = xhr.response;
//             if(data == "trung"){
//                 formProducer.style.with = "30%";
//             }
//           }
//       }
//     }
//     let formData = new FormData(form);
//     xhr.send(formData);
// }