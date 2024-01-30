const Notification =  document.querySelector('.Notification');
const messNotification =  document.querySelector('.mess-Notification');


Notification.onclick = ()=>{
    messNotification.classList.toggle('active');
}

setInterval(() =>{
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "../service/Notification.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
            let data = xhr.response;
            messNotification.innerHTML = data;
          }
      }
    }
    xhr.send();
  }, 500);