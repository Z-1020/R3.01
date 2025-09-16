const bouton = document.querySelectorAll('.bouton')
const texte = document.getElementById('choix_utilisateur')
const texte2 = document.getElementById('choix-robot')
const texte3 = document.getElementById('resultat')

let nbVictoire =0;
let nbEgalite =0;
let nbDefaite =0;
const choix = ["Feuille", "Pierre", "Ciseaux"]
let choixOrdi;
bouton.forEach(bouton => {
    bouton.addEventListener("click", ()=>{
        if(bouton.value === "Feuille" || bouton.value === "Pierre" || bouton.value === "Ciseaux"){
            texte.textContent = bouton.value;
        }
        choixOrdi = choix[Math.floor(Math.random() * 3)]

           if(choixOrdi === 0){
                texte2.textContent = choixOrdi
            }
            else if(choixOrdi  === 1){
                texte2.textContent = choixOrdi
            }
            else if(choixOrdi === 2){
                texte2.textContent = choixOrdi
            } 

        
    })
});


