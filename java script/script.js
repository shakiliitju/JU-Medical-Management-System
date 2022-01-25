let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}


const readMoreBtn = document.querySelector(".read-more-btn");
const text=document.querySelector(".text");
readMoreBtn.addEventListener("click", () => {
    text.classList.toggle("show-more");
    if(readMoreBtn.innerText === "Learn Less"){
        readMoreBtn.innerText = "Learn More";
    }
    else{
        readMoreBtn.innerText = "Learn Less";
    }
})