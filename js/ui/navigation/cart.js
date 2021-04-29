import { HOST } from "../../utils/variables";

const HTTP_CART = `${HOST}/custom/api.php?action=cart`;

/**
 * @param {{domains: Array, products: Array}} cart
 * @returns {number}
 */
const getNumberOfItemsInCart = (cart) => {
  let number = 0;

  number = number + cart?.domains?.length;
  number = number + (cart?.products?.length ?? 0);

  return number;
};

/**
 * @returns {Promise<{domains: Array, products: Array}>}
 */
const getCartContents = async () => {
  const responseRAW = await fetch(HTTP_CART, {
    method: "GET",
    mode: "cors",
    credentials: "include",
  });
  /**@type {Array} */
  const response = await responseRAW.json();
  console.log(response);
  return response;
};

/**
 * @param {NodeListOf<HTMLButtonElement>} buttons
 */
export const setupCart = async (buttons) => {
  const cart = await getCartContents();
  buttons.forEach((button) => {
    const itemsInCartEL = button.querySelector(".js-number");
    itemsInCartEL.textContent = getNumberOfItemsInCart(cart);
  });
};
