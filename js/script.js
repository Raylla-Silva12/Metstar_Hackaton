const btnlog = document.querySelector(".btn-login");
const card = document.querySelector(".cartao");

btnlog.addEventListener("click", (event) => {
    event.preventDefault();
    
    const fields = [ ... document.querySelectorAll(".input-bloco")];
    fields.forEach(field =>{
        if(field.value == ""){
            card.classList.add("validate-error");
        }
    });

    const cardError = document.querySelector(".validate-error");
    if(cardError){
        cardError.addEventListener("animationend", (event) =>{
            if(event.animationName == "nono"){
                cardError.classList.remove("validate-error");
            }}
        );
    }else{
        card.classList.add("cartao-hide");
    }
});

card.addEventListener("animationstart", event =>{
    if(event.animationName == "down"){
        document.querySelector("body").style.overflow = "hidden";
    }
});

card.addEventListener("animationend", event =>{
    if(event.animationName == "down"){
        card.style.display = "none";
        document.querySelector("body").style.overflow = "none";
    }
});