// Modal

// Sélectionner le bouton et la fenêtre modale et les mettre dans des variables réutilisables
const postButton = document.getElementById("mon-bouton");
const modal = document.querySelector(".modal");
const closeButton = document.querySelector(".close");

// Evenement suite au clic de la souris
postButton.addEventListener("click", () => {
// Affichage de la fenêtre modale
  modal.style.display = "block";
});

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

// Suppression

const trash = document.getElementById("delete");
const post = document.querySelector(".feed");

trash.addEventListener("click", () =>{
  post.style.display = "none";
});

// Like

const like = document.getElementById("like");

like.addEventListener("click", () => {
  like.style.color = "red";
});