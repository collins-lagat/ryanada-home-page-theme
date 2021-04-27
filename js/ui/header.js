import { setupCountdown } from "./header/countdown";

export const setupHeader = () => {
  const header = document.querySelector(".js-header");
  const countdownEl = header.querySelector(".js-deal__countdown");

  setupCountdown(countdownEl);
};
