let choixUtilisateur = document.querySelectorAll("bouton")
let text = document.querySelector("p")


choixUtilisateur.addEventListener("click", afficherChoix)


function afficherChoix(){
    if(choixUtilisateur.value === "Feuille"){
        text.textContent = "Feuille";
    }
    else if(choixUtilisateur.value === "Pierre"){
        text.textContent = "Pierre";
    }
    else{
        text.textContent = "Ciseaux";
    }
}