document.addEventListener("DOMContentLoaded", function() {
    var navItems = document.querySelectorAll('.nav li a');

    navItems.forEach(function(item) {
        item.addEventListener('click', function() {
            alert('You clicked: ' + this.textContent);
        });
    });
});
