// Modal de suppression
let poubelle = document.querySelectorAll('.suppButton');


if(poubelle != null){
  
  poubelle.forEach(function(supp) {
    supp.addEventListener("click", function(i) {
    i.preventDefault() //Pas de lien
    supp.closest('.feed').querySelector('.modal__supp').style.display = "block";
    })
  })
}


const postButton = document.getElementById("mon-bouton");
// Evenement suite au clic de la souris
postButton.addEventListener("click", () => {
// Affichage de la fenêtre modale
    modal.style.display = "block";
});


const modal = document.querySelector(".modal");
const closeButton = document.querySelector(".close");


// Sélectionne le bouton de fermeture et ajoute un événement suite au clic pour fermer la fenêtre modale
closeButton.addEventListener("click", () => {
  // Ferme la fenêtre modale
  modal.style.display = "none";
});

// Fermeture de la fenetre quand on clique en dehors de celle ci
window.addEventListener("click", (event) => {
  if (event.target === modal) {
    modal.style.display = "none";
  }
});