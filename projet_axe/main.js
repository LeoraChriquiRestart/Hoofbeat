// Modal de suppression
let poubelle = document.querySelectorAll('.suppButton');
let undo = document.querySelectorAll('.undoButton');

if(poubelle != null){
  
  poubelle.forEach(function(supp) {
    supp.addEventListener("click", function(i) {
    i.preventDefault() //Pas de lien
    supp.closest('.feed').querySelector('.modal__supp').style.display = "block";
    })
  })
}

if(undo != null){
  
  undo.forEach(function(cancel) {
    cancel.addEventListener("click", function(j) {
    j.preventDefault() //Pas de lien
    cancel.closest('.feed').querySelector('.modal__supp').style.display = "none";
    })
  })
}

// Modal de post

const postButton = document.getElementById("mon-bouton");
const modal = document.querySelector(".modal");

postButton.addEventListener("click", () => {
    modal.style.display = "block";
});

const closeButton = document.querySelector(".close");

closeButton.addEventListener("click", () => {
  modal.style.display = "none";
});

// Fermeture de la fenetre quand on clique en dehors
window.addEventListener("click", (event) => {
  if (event.target === modal) {
    modal.style.display = "none";
  }
});

// LocalStorage

const Pform = document.getElementById('contenu');

Pform.addEventListener('input', function(textStorage){
  localStorage.setItem('Pform', textStorage.target.value);
});

window.onload = function () {
  Pform.value = localStorage.getItem('Pform');
  localStorage.clear();
}

// Filtre de tags

const btns = document.querySelectorAll('button.tags');

btns.forEach(btn => {
  btn.addEventListener('click', () => {
    const clickedTag = btn.innerHTML;
    const posts = document.querySelectorAll(`.feed`);
    
    posts.forEach(post => {
      if (clickedTag  == "Tout") {
        post.style.display= "flex";
      } else {
        post.style.display= "none";
        if(post.classList[1].includes(clickedTag)) {
          post.style.display= "flex";
        }
      }
    });
  });
});