document.addEventListener('DOMContentLoaded', function () {
  // Select all the side-by-side boxes
  const boxes = document.querySelectorAll('.side-by-side-box');

  // Helper function to hide all rectangles except the one passed as an argument
  function hideOtherRectangles(excludedRectangle) {
    boxes.forEach((box) => {
      const rectangle = box.querySelector('.rectangle-473');
      if (rectangle !== excludedRectangle) {
        rectangle.classList.add('hidden');
      }
    });
  }

  // Attach a click event listener to each box
  boxes.forEach((box) => {
    box.addEventListener('click', function () {
      // Find the rectangle-473 element within the clicked box
      const rectangle = box.querySelector('.rectangle-473');

      // Toggle the 'hidden' class on the rectangle-473 element
      if (rectangle) {
        rectangle.classList.toggle('hidden');
      }

      // Hide all other rectangles
      hideOtherRectangles(rectangle);
    });
  });
});
