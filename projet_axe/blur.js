// Fond flou

const feed = document.querySelector(".feed");

setInterval(() => {
    const y = feed.getBoundingClientRect().y;
    if (y < -100) {
        const modalScroll = document.querySelector(".modal__flou");
        modalScroll.classList.add("visible");
    }
}, 500);