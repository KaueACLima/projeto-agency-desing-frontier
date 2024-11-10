const suportBtns = document.querySelectorAll(".suport-btn");

suportBtns.forEach((btn) => {
  btn.addEventListener("click", function () {
    this.classList.toggle("active");
    const suportDescricao = this.nextElementSibling;

    const plusIcon = this.querySelector(".plus-icon");

    const minusIcon = this.querySelector(".minus-icon");

    if (suportDescricao.style.maxHeight) {
      suportDescricao.style.maxHeight = null;
      plusIcon.style.display = "block";
      minusIcon.style.display = "none";
    } else {
      suportDescricao.style.maxHeight = suportDescricao.scrollHeight + "px";
      plusIcon.style.display = "none";
      minusIcon.style.display = "block";
    }
  });
});

// Seleciona o elemento que ativa a visibilidade da div .language
const languageSelector = document.querySelector(".language-selected");

// Seleciona o elemento ul que contém as opções de idioma
const languageList = document.querySelector(".language ul");

// Adiciona um ouvinte de evento ao ícone de linguagem
languageSelector.addEventListener("click", function (event) {
  // Impede o comportamento padrão do link (não recarregar a página)
  event.preventDefault();

  // Alterna a visibilidade da lista de idiomas (ul)
  if (
    languageList.style.display === "none" ||
    languageList.style.display === ""
  ) {
    languageList.style.display = "block"; // Torna visível
  } else {
    languageList.style.display = "none"; // Torna invisível
  }
});
