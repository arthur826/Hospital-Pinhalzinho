window.addEventListener("scroll", function () {
  if (window.scrollY > 50) {
    document.documentElement.classList.add("header-scrolled");
  } else {
    document.documentElement.classList.remove("header-scrolled");
  }
});

/***/
const btnMenuMobile = document.getElementById("btnMenuMobile");
const overlayMenu = document.querySelector(".js-overlay");

function openMenuMobile() {
  document.documentElement.classList.add("menu-opened");
}

function closeMenuMobile() {
  document.documentElement.classList.remove("menu-opened");
}

btnMenuMobile.addEventListener("click", openMenuMobile);

overlayMenu.addEventListener("click", closeMenuMobile);
/***/

const btnNavMobile = document.getElementById("js-btn-navegacao");
const overlayNav = document.querySelector(".overlay-nav-js");
const menuNavegacaoMobile = document.querySelector(".menu-de-navegacao-mobile");

function openNavMenu() {
  menuNavegacaoMobile.classList.add("menu-de-navegacao-opened");
}

function closeNavMenu() {
  menuNavegacaoMobile.classList.remove("menu-de-navegacao-opened");
}

btnNavMobile.addEventListener("click", openNavMenu);
overlayNav.addEventListener("click", closeNavMenu);
/***/

//formata o texto para comparar desconsiderando acentos e letras maiusculas*/
function formatarTexto(elemento) {
  return elemento.textContent
    .normalize("NFD")
    .replace(/[\u0300-\u036f]/g, "")
    .toLowerCase();
}

/*O codigo abaixo adiciona um estilo scss ao link que foi clickado na sua repectiva pagina*/
const linkInterno = document.querySelectorAll(".link-nav-interno");
const tituloNavegacao = document.querySelectorAll(".titulo-de-navegacao");

linkInterno.forEach((linkNav) => {
  tituloNavegacao.forEach((titleNav) => {
    if (formatarTexto(linkNav) === formatarTexto(titleNav)) {
      linkNav.classList.add("active-link-nav");
    }
  });
});
