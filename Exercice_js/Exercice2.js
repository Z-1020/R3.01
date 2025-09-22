function Personne (p, n, a, v){
     this.prenom = p,
     this.nom= n,
     this.age= a,
     this.ville= v
     
}

let John = new Personne("John", "Doe", 25, "Rouen")
let Jane = new Personne("Jane", "Doe", 30, "Paris")
let Jim = new Personne("Jim", "Doe", 35, "Caen")

const personne = [John, Jane, Jim ]

    console.log(personne[0])
    console.table(personne)
    