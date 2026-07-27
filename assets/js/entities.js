const cards = document.querySelectorAll(".entity-card");

let current = 0;

function showCard(index){

    cards[current].classList.remove("active");

    current = (index + cards.length) % cards.length;

    cards[current].classList.add("active");
}

document.querySelector(".next").onclick = () => showCard(current + 1);

document.querySelector(".prev").onclick = () => showCard(current - 1);