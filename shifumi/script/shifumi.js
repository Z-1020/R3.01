const bouton = document.querySelectorAll('.bouton')
const texte = document.getElementById('choix_utilisateur')
texte.textContent = bouton.value;

bouton.forEach(bouton => {
    bouton.addEventListener("click", ()=>{
        if(bouton.value === "Feuille" || bouton.value === "Pierre" || bouton.value === "Ciseaux"){
            texte.textContent = bouton.value;
        }
        
    })
});


