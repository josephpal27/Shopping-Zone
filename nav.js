// --- Initializing the Variables
let user = document.getElementById("user");
let bars = document.querySelector(".fa-bars");
let nav_menu = document.querySelector(".nav-menu");
let tooltip = document.querySelector(".fa-caret-down");
let layer = document.querySelector('.upper-layer');

// --- Functionality for Menu Box Toggle
function toggleBox(head, box) {
  head.addEventListener("mouseenter", () => (box.style.display = "block"));
  head.addEventListener("mouseleave", () => (box.style.display = "none"));
  box.addEventListener("mouseenter", () => (box.style.display = "block"));
  box.addEventListener("mouseleave", () => (box.style.display = "none"));
}

toggleBox(user, nav_menu);


// --- Functionality for Tooltip Toggle
function toggleCaret(head, box, caret) {
head.addEventListener("mouseenter", () => (caret.style.rotate = "180deg"));
head.addEventListener("mouseleave", () => (caret.style.rotate = "0deg"));
box.addEventListener("mouseenter", () => (caret.style.rotate = "180deg"));
box.addEventListener("mouseleave", () => (caret.style.rotate = "0deg"));
}

toggleCaret(user, nav_menu, tooltip);


// --- Functionality for Menu bars
bars.addEventListener('click', function () {
  nav_menu.style.display = "block";
  layer.style.display = "block";
})

layer.addEventListener('click', function () {
  layer.style.display = 'none';
  nav_menu.style.display = 'none';
})
