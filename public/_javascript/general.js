//Hamburger Menu
const hamburger = document.querySelector("#hamburger");
const navBar = document.querySelector(".nav-bar");

let hamburgerState = false;

function activateHamburgerMenu() {
  if (!hamburgerState) {
    hamburger.classList.add("hamburger-active");
    navBar.classList.add("nav-bar-active");
    hamburgerState = true;
  } else {
    hamburger.classList.remove("hamburger-active");
    navBar.classList.remove("nav-bar-active");
    hamburgerState = false;
  }
}

//Leistungen Drop Down Menu
const dropDownLeistungen = document.querySelector("#drop-down");
const leistungenLink = document.querySelector("#leistungen-link");
const leistungenLinkSmall = document.querySelector("#leistungen-link-small");

leistungenLink.addEventListener("mouseover", showDropDown);
leistungenLinkSmall.addEventListener("mouseover", showDropDown);
dropDownLeistungen.addEventListener("mouseover", showDropDown);

leistungenLink.addEventListener("mouseout", hideDropDown);
leistungenLinkSmall.addEventListener("mouseout", hideDropDown);
dropDownLeistungen.addEventListener("mouseout", hideDropDown);

let dropDownState = false;
leistungenLink.addEventListener("touchstart", clickDropDown);
leistungenLinkSmall.addEventListener("touchstart", clickDropDown);

function showDropDown() {
  let leistungen = window.getComputedStyle(leistungenLink, null).display === "none" ? leistungenLinkSmall : leistungenLink;  
  console.log(leistungen);
  let pos = leistungen.getBoundingClientRect();

  leistungen.classList.add("active-hover");
  dropDownLeistungen.classList.remove("hidden");
  dropDownLeistungen.classList.add("drop-down");

  const left = pos.left + (0.5 * leistungen.offsetWidth) - (0.5 * dropDownLeistungen.offsetWidth);

  dropDownLeistungen.style.top = pos.bottom+'px';
  dropDownLeistungen.style.left = left+'px';
}

function hideDropDown() {
  leistungenLink.classList.remove("active-hover");
  dropDownLeistungen.classList.remove("drop-down");
  dropDownLeistungen.classList.add("hidden");
}

function clickDropDown() {
  if (!dropDownState) {
    dropDownState = true;
    showDropDown();
  } else {
    dropDownState = false;
    hideDropDown();
  }
}

//Ueber Uns Drop Down Menu
const dropDownUeberUns = document.querySelector("#drop-down-ueber-uns");
const ueberUnsLink = document.querySelector("#ueber-uns-link");

ueberUnsLink.addEventListener("mouseover", showDropDownUeberUns);
dropDownUeberUns.addEventListener("mouseover", showDropDownUeberUns);

ueberUnsLink.addEventListener("mouseout", hideDropDownUeberUns);
dropDownUeberUns.addEventListener("mouseout", hideDropDownUeberUns);

let dropDownStateUeberUns = false;
ueberUnsLink.addEventListener("touchstart", clickDropDownUeberUns);

function showDropDownUeberUns() {
  const pos = ueberUnsLink.getBoundingClientRect();

  ueberUnsLink.classList.add("active-hover");
  dropDownUeberUns.classList.remove("hidden");
  dropDownUeberUns.classList.add("drop-down");

  const left = pos.left + (0.5 * ueberUnsLink.offsetWidth) - (0.5 * dropDownUeberUns.offsetWidth);

  dropDownUeberUns.style.top = pos.bottom+'px';
  dropDownUeberUns.style.left = left+'px';
}

function hideDropDownUeberUns() {
  ueberUnsLink.classList.remove("active-hover");
  dropDownUeberUns.classList.remove("drop-down");
  dropDownUeberUns.classList.add("hidden");
}

function clickDropDownUeberUns() {
  if (!dropDownStateUeberUns) {
    dropDownStateUeberUns = true;
    showDropDownUeberUns();
  } else {
    dropDownStateUeberUns = false;
    hideDropDownUeberUns();
  }
}