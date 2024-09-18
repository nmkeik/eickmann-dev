
const bottomBar = document.querySelector("#bottom-bar");
const textInputs = document.querySelectorAll(".text-input");
const form = document.querySelector("form");

function showBottomBar(textInput) {
  const pos = textInput.getBoundingClientRect();
  const posForm = form.getBoundingClientRect();
  bottomBar.style.top = pos.bottom - posForm.top - 3 +'px';
  bottomBar.classList.add("bottom-bar-show");
}

function hideBottomBar() {
  bottomBar.classList.remove("bottom-bar-show");
}

textInputs.forEach(textInput => {
  textInput.addEventListener("focus", function() {
    showBottomBar(textInput)
  });
});

textInputs.forEach(textInput => {
  textInput.addEventListener("focusout", function() {
    hideBottomBar()
  });
});
