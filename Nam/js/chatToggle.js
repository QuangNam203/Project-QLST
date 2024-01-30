const chattoggle = document.querySelectorAll('.chatbot-toggler span');
const chatbot = document.querySelector(".chatbot");

chattoggle[0].onclick = ()=>{
    chattoggle[0].classList.remove('active');
    chattoggle[1].classList.add('active');
    chatbot.classList.add('active')
}
chattoggle[1].onclick = ()=>{
    chattoggle[1].classList.remove('active');
    chattoggle[0].classList.add('active');
    chatbot.classList.remove('active')
}

