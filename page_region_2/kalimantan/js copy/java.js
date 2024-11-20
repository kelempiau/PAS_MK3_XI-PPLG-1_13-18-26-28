document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll(".card img, .card h2, .card p");
  
    cards.forEach((card, index) => {
      card.style.animationDelay = `${index * 0.3}s`;
    });
  
    // Animasi judul
    const title = document.getElementById("jawa-title");
    title.style.animation = "fadeIn 2s ease-in-out";
  });
  