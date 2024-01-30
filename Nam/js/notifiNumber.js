const notificationNumber =  document.querySelector('.notification-number');
const setNumber =  document.querySelector('.notification-number .number');

setInterval(() =>{
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "../service/notifiNumer.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
            var data = xhr.response;
            data > 0 ? setNumber.innerHTML = data : setNumber.innerHTML = 0 ;
          }
      }
    }
    xhr.send();
}, 500);
