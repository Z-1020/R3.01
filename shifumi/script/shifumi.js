const bouton = document.querySelectorAll('.bouton')
const texte = document.getElementById('choix_utilisateur')
const texte2 = document.getElementById('choix-robot')
const texte3 = document.getElementById('resultat')
const victoire = document.getElementById('victoire')
const defaite = document.getElementById('defaite')
const egalite = document.getElementById('egalite')
const reset = document.querySelector('.bouton-reinitialiser')
const resultat = document.querySelector('.resultat')

let nbVictoire =0
let nbEgalite =0
let nbDefaite =0
const choix = ["Feuille", "Pierre", "Ciseaux"]
let choixOrdi;
bouton.forEach(bouton => {
    bouton.addEventListener("click", ()=>{
        if(bouton.value === "Feuille" || bouton.value === "Pierre" || bouton.value === "Ciseaux"){
            texte.textContent ="Votre choix: "+ bouton.value
        }
        choixOrdi = choix[Math.floor(Math.random() * 3)]
        texte2.textContent = "Choix de votre adversaire: "+choixOrdi

        if(choixOrdi == bouton.value){
            texte3.textContent = "égalité"
            nbEgalite ++
            egalite.textContent ="Nombre d'égalité: "+ nbEgalite
            resultat.setAttribute('class', '"alert alert-success"')
        }
        else if((bouton.value === "Pierre" && choixOrdi === "Ciseaux") || (bouton.value === "Feuille" && choixOrdi === "Pierre") || (bouton.value === "Ciseaux" && choixOrdi === "Feuille") ){
            texte3.textContent = "Vous avez gagné"
            nbVictoire ++
            victoire.textContent = "Nombre de Victoire: "+ nbVictoire
            resultat.setAttribute('class', '"alert alert-success"')
        }
        else if((bouton.value === "Ciseaux" && choixOrdi === "Pierre") || (bouton.value === "Pierre" && choixOrdi === "Feuille") || (bouton.value === "Feuille" && choixOrdi === "Ciseaux") ){
            texte3.textContent = "Vous avez perdu"
            nbDefaite ++
            defaite.textContent = "Nombre de défaite: " + nbDefaite
            resultat.setAttribute('class', '"alert alert-success"')
        }

        
    })
    reset.addEventListener('click', ()=>{
        nbVictoire =0
        nbEgalite =0
        nbDefaite =0
        victoire.textContent = "Nombre de Victoire: "+ nbVictoire
        defaite.textContent = "Nombre de défaite: " + nbDefaite
        egalite.textContent ="Nombre d'égalité: "+ nbEgalite
    })

});


