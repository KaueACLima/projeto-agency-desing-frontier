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