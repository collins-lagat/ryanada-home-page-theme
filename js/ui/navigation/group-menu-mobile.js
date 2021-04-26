import animate from "animejs/lib/anime.es";

/**
 * @param {HTMLAnchorElement} groupNav
 */
export const setupMobileGroupNav = (groupNav) => {
  /**@type {HTMLAnchorElement} */
  const buttonOpen = groupNav.querySelector(".js-nav__group-name--open");
  /**@type {HTMLAnchorElement} */
  const buttonClose = groupNav.querySelector(".js-nav__group-name--close");
  /**@type {HTMLElement} */
  const dropdown = groupNav.querySelector(".js-nav__dropdown");
  const height = dropdown.offsetHeight;
  dropdown.classList.add("d-none");
  dropdown.style.height = 0;

  buttonOpen.addEventListener("click", (event) => {
    event.preventDefault();
    buttonOpen.classList.add("d-block");
    buttonOpen.classList.remove("d-none");

    animate({
      begin: () => {
        buttonOpen.classList.add("d-none");
        buttonOpen.classList.remove("d-block");

        buttonClose.classList.add("d-block");
        buttonClose.classList.remove("d-none");

        dropdown.classList.add("d-flex");
        dropdown.classList.remove("d-none");
      },
      targets: dropdown,
      height: height,
      opacity: 1,
      duration: 300,
      easing: "cubicBezier(.17,.67,.83,.67)",
    });
  });

  buttonClose.addEventListener("click", (event) => {
    event.preventDefault();
    buttonClose.style.display = "none";
    buttonOpen.style.display = "block";

    animate({
      begin: () => {
        buttonClose.classList.add("d-none");
        buttonClose.classList.remove("d-block");

        buttonOpen.classList.add("d-block");
        buttonOpen.classList.remove("d-none");
      },
      targets: dropdown,
      height: 0,
      opacity: 0,
      duration: 300,
      easing: "cubicBezier(.17,.67,.83,.67)",
      complete: () => {
        dropdown.classList.remove("d-flex");
        dropdown.classList.add("d-none");
      },
    });
  });
};
