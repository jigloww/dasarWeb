// Cek dulu: kalau ada tombol di halaman hero
const button = document.querySelector("button");
if (button) {
  button.addEventListener("click", function() {
    window.location.href = "about.html"; // jika tombol memang ada
  });
}

// Cek juga link Jelajahi Brand
const brandLink = document.getElementById("brand-link");
if (brandLink) {
  brandLink.addEventListener("click", function(event) {
    event.preventDefault(); // biar gak langsung ke link #
    alert("Maaf, halaman web sedang dlm pengembangan");
  });
}
