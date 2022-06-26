let scrollContainer = document.querySelector(".scrollContainer")
let logoutpopupcontainer = document.querySelector(".logoutpopupcontainer")
console.log(window.innerHeight-100)
scrollContainer.addEventListener("scroll", (e) =>{
    if(e.target.scrollTop > window.innerHeight-100){
        console.log("done")
    }
})

function showpopup(){
    logoutpopupcontainer.style.display = "block"
    setTimeout(() =>{
        logoutpopupcontainer.classList.remove("opacity-0")
        logoutpopupcontainer.classList.add("opacity-100")
    }, 10)
}

function hidepopup(){
    logoutpopupcontainer.classList.add("opacity-0")
    logoutpopupcontainer.classList.remove("opacity-100")
    setTimeout(() =>{
        logoutpopupcontainer.style.display = "none"
    }, 300)
}