/*document.addEventListener('DOMContentLoaded', (event) => {
    const img = document.querySelector('.banner img');
    let isDragging = false;

    const onMouseMove = (e) => {
        if (isDragging) {
            img.style.left = `${e.pageX - img.offsetWidth / 2}px`;
            img.style.top = `${e.pageY - img.offsetHeight / 2}px`;

            // Change background color based on cursor position
            document.body.style.backgroundColor = `rgb(${e.pageX % 255}, ${e.pageY % 255}, ${(e.pageX + e.pageY) % 255})`;
        }
    };

    img.addEventListener('mousedown', (e) => {
        isDragging = true;
        img.style.position = 'absolute';
        img.style.zIndex = 1000;
    });

    document.addEventListener('mouseup', () => {
        isDragging = false;
    });

    document.addEventListener('mousemove', onMouseMove);
});
*/
document.addEventListener('DOMContentLoaded', (event) => {
    const img = document.querySelector('.banner img');
const resetButton = document.getElementById('resetButton');
    let isDragging = false;

    const onMouseMove = (e) => {
        if (isDragging) {
            img.style.left = `${e.pageX - img.offsetWidth / 2}px`;
            img.style.top = `${e.pageY - img.offsetHeight / 2}px`;

            // Create a color-changing effect under the image
            let color = `rgb(${e.pageX % 255}, ${e.pageY % 255}, ${(e.pageX + e.pageY) % 255})`;
            let marker = document.createElement('div');
            marker.style.position = 'absolute';
            marker.style.backgroundColor = color;
            marker.style.width = `${img.offsetWidth}px`;
            marker.style.height = `${img.offsetHeight}px`;
            marker.style.left = `${e.pageX - img.offsetWidth / 2}px`;
            marker.style.top = `${e.pageY - img.offsetHeight / 2}px`;
            marker.style.borderRadius = '50%'; // Optional, for a circular marker
            document.querySelector('.banner').appendChild(marker);
        }
    };

    img.addEventListener('mousedown', (e) => {
        isDragging = true;
        img.style.position = 'absolute';
        img.style.zIndex = 1000;
    });

    document.addEventListener('mouseup', () => {
        isDragging = false;
    });

    document.addEventListener('mousemove', onMouseMove);
  
resetButton.addEventListener('click', () => {
        document.querySelectorAll('.color-trail').forEach(el => el.remove());
    });
});
