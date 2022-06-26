let form = document.querySelector(".form")
let logindetails = document.querySelectorAll(".logindetails")

form.onsubmit =(e) =>{
    let num = 0;
    for(let i = 0; i < logindetails.length; i++){
        if(logindetails[i].value.length <= 0){
            num++;
        }
    }
    if(num > 0){
        console.log("wow")
        e.preventDefault();
    }
}