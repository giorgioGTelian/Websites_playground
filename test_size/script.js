document.addEventListener('DOMContentLoaded', function() {
    const square = document.getElementById('square');
    const controlRadius = document.getElementById('controlRadius');
    const changeColorBtn = document.getElementById('changeColor');
    const increaseSizeBtn = document.getElementById('increaseSize');
    const decreaseSizeBtn = document.getElementById('decreaseSize');
    const resetBtn = document.getElementById('resetSquare');

    controlRadius.addEventListener('input', updatePosition);
    changeColorBtn.addEventListener('click', changeColor);
    increaseSizeBtn.addEventListener('click', () => changeSize(10));
    decreaseSizeBtn.addEventListener('click', () => changeSize(-10));
    resetBtn.addEventListener('click', resetSquare);

    function updatePosition() {
        // Existing code to update the square's position
    }

    function changeColor() {
        square.style.backgroundColor = '#' + Math.floor(Math.random()*16777215).toString(16);
    }

    function changeSize(change) {
        const currentSize = square.offsetWidth;
        const newSize = Math.max(50, currentSize + change);
        square.style.width = newSize + 'px';
        square.style.height = newSize + 'px';
    }

    function resetSquare() {
        square.style.backgroundColor = 'blue';
        square.style.width = '100px';
        square.style.height = '100px';
        square.style.left = '0px';
        square.style.top = '0px';
        controlRadius.value = 50;
    }
});
