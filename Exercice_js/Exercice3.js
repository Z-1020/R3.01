function Personne (p, n, a, v){
     this.prenom = p,
     this.nom= n,
     this.age= a,
     this.ville= v
     
}

let John = new Personne("John", "Doe", 25, "Rouen")
let Jane = new Personne("Jane", "Doe", 30, "Paris")
let Jim = new Personne("Jim", "Doe", 35, "Caen")
let Marc = new Personne("Marc", "Doe", 32, "Marseille")

const personne = [John, Jane, Jim ]
personne.push(Marc)



    console.log(personne[0])
    console.log(personne[1])
    console.log(personne[2])
    console.log(personne[3])
    console.table(personne)
    