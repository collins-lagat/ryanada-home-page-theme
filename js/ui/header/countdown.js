/**
 * @param {Element} countdown
 */
export const setupCountdown = (countdown) => {
  const dayEl = countdown.querySelector(".js-days");
  const hourEl = countdown.querySelector(".js-hours");
  const minuteEl = countdown.querySelector(".js-minutes");
  const secondEl = countdown.querySelector(".js-seconds");
  // REF: https://www.w3schools.com/howto/howto_js_countdown.asp

  // Set the date we're counting down to
  const countDownDate = new Date(
    `Jan 5, ${new Date().getFullYear() + 1} 15:37:25`
  ).getTime();

  const timer = setInterval(() => {
    // Get today's date and time
    const now = new Date().getTime();

    // Find the distance between now and the count down date
    const distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor(
      (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
    );
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="demo"
    dayEl.textContent = days;
    hourEl.textContent = hours;
    minuteEl.textContent = minutes;
    secondEl.textContent = seconds;

    // If the count down is finished, write some text
    if (distance < 0) {
      clearInterval(timer);
      dayEl.textContent = "--";
      hourEl.textContent = "--";
      minuteEl.textContent = "--";
      secondEl.textContent = "--";
    }
  }, 1000);
};
