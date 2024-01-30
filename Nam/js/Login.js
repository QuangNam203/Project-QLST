const form = document.querySelector(".container form"),
continueBtn = form.querySelector(".button input");
// errorText = form.querySelector(".error-text");

form.onsubmit = (e)=>{
    e.preventDefault();
}

continueBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../../Nam/service/login.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;
              console.log(data);
              if(data === "admin"){
                location.href = "http://localhost/Nam/components/";
              }else if(data ==="client"){
                location.href = "http://localhost/Nam/client/";
                // errorText.style.display = "block";
                // errorText.textContent = data;
              }
          }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}