import { toggleWidget } from "../utils/ui/toggle-element";
import { deactivateWidget } from "../utils/ui/deactivate-element";
import { setupGroupNav } from "./navigation/group-menu";
import { setupMobileGroupNav } from "./navigation/group-menu-mobile";
import { setupLanguageSelector } from "./navigation/language-selector";
import { setupCart } from "./navigation/cart";

export const setupNavigation = () => {
  const navigation = document.querySelector("#navigation");

  const navbarMenu = navigation.querySelector(".js-navbar-menu");
  const navGroups = navigation.querySelectorAll(
    ".navbar__desktop .js-nav-group"
  );
  const cartButtons = navigation.querySelectorAll(
    ".navbar__desktop .js-navbar-cart, .navbar__mobile .js-navbar-cart"
  );
  const languageSelectorButton = navigation.querySelector(
    ".js-toggle-language-selector"
  );
  const languageSelector = document.querySelector(".js-language-selector");
  const closeLanguageSelectorButton = languageSelector.querySelector(
    ".js-action__close"
  );
  const mobileNavbar = document.querySelector(".js-navbar-mobile");
  const mobileNavbarGroupList = mobileNavbar.querySelectorAll(".js-nav__group");

  navbarMenu.addEventListener("click", (event) => {
    event.preventDefault();
    toggleWidget(navbarMenu);
    toggleWidget(mobileNavbar);
    deactivateWidget(languageSelector);
  });

  navGroups.forEach((navGroup) => {
    setupGroupNav(navGroup);
  });

  mobileNavbarGroupList.forEach((navGroup) => {
    setupMobileGroupNav(navGroup);
  });

  languageSelectorButton.addEventListener("click", (event) => {
    event.preventDefault();
    deactivateWidget(mobileNavbar);
    deactivateWidget(navbarMenu);
    toggleWidget(languageSelector);
  });

  closeLanguageSelectorButton.addEventListener("click", (event) => {
    event.preventDefault();
    deactivateWidget(mobileNavbar);
    deactivateWidget(navbarMenu);
    toggleWidget(languageSelector);
  });

  setupLanguageSelector(languageSelector);
  setupCart(cartButtons);
};
