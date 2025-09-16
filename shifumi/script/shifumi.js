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
        texte2.textContent = choixOrdi

        if(choixOrdi == bouton.value){
            texte3.textContent = "égalité"
            nbEgalite ++
        }
        else if((bouton.value === "Pierre" && choixOrdi === "Ciseaux") || (bouton.value === "Feuille" && choixOrdi === "Pierre") || (bouton.value === "Ciseaux" && choixOrdi === "Feuille") ){
            texte3.textContent = "Vous avez gagné"
        }
        else if((bouton.value === "Ciseaux" && choixOrdi === "Pierre") || (bouton.value === "Pierre" && choixOrdi === "Feuille") || (bouton.value === "Feuille" && choixOrdi === "Ciseaux") ){
            texte3.textContent = "Vous avez perdu"
        }

        
    })
});


