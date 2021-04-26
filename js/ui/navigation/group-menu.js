import { toggleWidget } from "../../utils/ui/toggle-element";

/**
 * @param {HTMLAnchorElement} groupNav
 */
export const setupGroupNav = (groupNav) => {
  /**@type {HTMLAnchorElement} */
  const groupName = groupNav.querySelector(".group__name");
  const groupDropdownMenu = groupNav.querySelector(".group__dropdown-menu ");

  groupName.addEventListener("click", (event) => {
    event.preventDefault();
    toggleWidget(groupDropdownMenu);
  });
};
