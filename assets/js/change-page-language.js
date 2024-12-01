const languageSelector = document.querySelector(".language-selected");
const languageList = document.querySelector(".language ul");


languageSelector.addEventListener("click", function (event) {
  event.preventDefault();

  if (
    languageList.style.display === "none" ||
    languageList.style.display === ""
  ) {
    languageList.style.display = "block";
  } else {
    languageList.style.display = "none";
  }
});
