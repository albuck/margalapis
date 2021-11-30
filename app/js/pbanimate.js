// Progress bar animation

function progress(percent, $element) {
  var progressBarWidth = percent * $element.width() / 100;
  $element.find('div').animate({ width: progressBarWidth }, 3000);
}

window.addEventListener("scroll", () => {
  progress(75, $('#design'));
  progress(90, $('#develop'));
  progress(65, $('#market'));
});

