const form = document.querySelector(".chatbot .chat-input");
const incoming_id = form.querySelector(".chat-input .incoming_id").value;
const inputField = form.querySelector(".chat-input .input-field");
const sendBtn = form.querySelector(".chat-input .sendMsg");
const chatBox = document.querySelector(".chatbox");

form.onsubmit = (e)=>{
    e.preventDefault();
}

// inputField.focus();
// inputField.onkeyup = ()=>{
//     if(inputField.value != ""){
//         sendBtn.classList.add("active");
//     }else{
//         sendBtn.classList.remove("active");
//     }
// }

chatBox.onmouseenter = ()=>{
    chatBox.classList.add("active");
}

chatBox.onmouseleave = ()=>{
    chatBox.classList.remove("active");
}

sendBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../../Nam/service/insert-chat.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
            inputField.value = "";
            scrollToBottom();
          }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}

setInterval(() =>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../../Nam/service/get-chat.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
            let data = xhr.response;
            chatBox.innerHTML = data;
            if(!chatBox.classList.contains("active")){
                scrollToBottom();
              }
          }
      }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("incoming_id="+incoming_id);
},500);

function scrollToBottom(){
    chatBox.scrollTop = chatBox.scrollHeight;
}
  