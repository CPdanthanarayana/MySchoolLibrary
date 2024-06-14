var clickCount = 0;

function increment() {
  clickCount++;

  // Check if the click count is 24
  if (clickCount === 2) {
    // Change the image source to the new image
    document.getElementById("dynamicImage").src = "notavailable.png";
  }
}
