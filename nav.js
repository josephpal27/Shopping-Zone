// --- Initializing the Variables
let user = document.getElementById("user");
let bars = document.querySelector(".fa-bars");
let nav_menu = document.querySelector(".nav-menu");
let tooltip = document.querySelector(".fa-caret-down");
let layer = document.querySelector('.upper-layer');

// --- Functionality for Menu Box Toggle
function toggleBox(head, box) {
  head.addEventListener("mouseenter", () => (box.style.zIndex = "10"));
  head.addEventListener("mouseleave", () => (box.style.zIndex = "-5"));
  head.addEventListener("mouseenter", () => (box.style.opacity = "1"));
  head.addEventListener("mouseleave", () => (box.style.opacity = "0"));
  box.addEventListener("mouseenter", () => (box.style.zIndex = "10"));
  box.addEventListener("mouseleave", () => (box.style.zIndex = "-5"));
  box.addEventListener("mouseenter", () => (box.style.opacity = "1"));
  box.addEventListener("mouseleave", () => (box.style.opacity = "0"));
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
  nav_menu.style.zIndex = "10";
  nav_menu.style.opacity = "1";
  layer.style.display = "block";
})

layer.addEventListener('click', function () {
  layer.style.display = 'none';
  nav_menu.style.opacity = '0';
  nav_menu.style.zIndex = "-5";
})
