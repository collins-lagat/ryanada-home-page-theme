import { toggleWidget } from "../utils/ui/toggle-element";
import { setupGroupNav } from "./navigation/group-menu";
import { setupMobileGroupNav } from "./navigation/group-menu-mobile";

export const setupNavigation = () => {
  const navigation = document.querySelector("#navigation");

  const navbarMenu = navigation.querySelector(".js-navbar-menu");
  const navGroups = navigation.querySelectorAll(
    ".navbar__desktop .js-nav-group"
  );
  const mobileNavbar = document.querySelector(".js-navbar-mobile");
  const mobileNavbarGroupList = mobileNavbar.querySelectorAll(".js-nav__group");

  navbarMenu.addEventListener("click", (event) => {
    event.preventDefault();
    toggleWidget(navbarMenu);
    toggleWidget(mobileNavbar);
  });

  navGroups.forEach((navGroup) => {
    setupGroupNav(navGroup);
  });

  mobileNavbarGroupList.forEach((navGroup) => {
    setupMobileGroupNav(navGroup);
  });
};
