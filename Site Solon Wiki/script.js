function toggleDarkMode() {
  var body = document.body;
  body.classList.toggle("dark-mode");

  // Verifica se a classe "dark-mode" está presente no body
  var isDarkMode = body.classList.contains("dark-mode");

  // Define a cor do texto com base no modo escuro ativado/desativado
  var navLinks = document.querySelectorAll("main");
  for (var i = 0; i < navLinks.length; i++) {
    if (isDarkMode) {
      navLinks[i].style.color = "#ffffff"; // Cor do texto no modo escuro
    } else {
      navLinks[i].style.color = "#000000"; // Cor do texto no modo claro
    }
  }

  // Verifica se está no modo escuro para alterar o background-color da classe "tags"
  var tags = document.getElementsByClassName("tags");
  for (var j = 0; j < tags.length; j++) {
    if (isDarkMode) {
      tags[j].classList.add("dark-mode-tags"); // Adiciona a classe para o modo escuro
    } else {
      tags[j].classList.remove("dark-mode-tags"); // Remove a classe para o modo claro
    }
  }
}

//================= Button Dark Mode ===================

var darkModeBtn = document.getElementById("darkModeBtn");

function isDarkMode() {
  return document.body.classList.contains("dark-mode");
}

function updateDarkModeButton() {
  if (isDarkMode()) {
    darkModeBtn.innerHTML = '<img src="../icons/dark-mode.png" alt="Botão Dark"><span class="button-text">Alterar modo</span>';
  } else {
    darkModeBtn.innerHTML = '<img src="../icons/light-mode.png" alt="Botão Dark"><span class="button-text">Alterar modo</span>';
  }
}

updateDarkModeButton();

darkModeBtn.addEventListener("click", function() {
  toggleDarkMode();
  updateDarkModeButton();
});

//======================= Button Up===========================

// Função para verificar a posição da página
function checkScrollPosition() {
  var backToTopBtn = document.getElementById("backToTopBtn");

  if (window.scrollY > 300) {
    backToTopBtn.classList.add("show");
  } else {
    backToTopBtn.classList.remove("show");
  }
}

// Adiciona o evento de scroll para chamar a função checkScrollPosition
window.addEventListener("scroll", checkScrollPosition);

// Função para rolar suavemente para o topo da página
function scrollToTop() {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
}

// Adiciona o evento de clique no botão para chamar a função scrollToTop
var backToTopBtn = document.getElementById("backToTopBtn");
backToTopBtn.addEventListener("click", scrollToTop);