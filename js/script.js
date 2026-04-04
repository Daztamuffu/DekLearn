function rotateAndGo() {
  const icon = document.getElementById("logo-icon");
  icon.classList.add("spin");

  setTimeout(() => {
    window.location.href = "index.html";
  }, 600);
}