$(document).ready(function(){
  $("#myBtn").click(function(){
    $('.toast').toast('show');
  });
});
 document.addEventListener('DOMContentLoaded', function() {
        var myBtn = document.getElementById('myBtn');
        var toast = document.querySelector('.toast');

        myBtn.addEventListener('click', function() {
            toast.style.display = 'block'; // Show the toast

            // Hide the toast after 3 seconds
            setTimeout(function() {
                toast.style.display = 'none';
            }, 3000);
        });
    });
let fullscreen;
let fsEnter = document.getElementById('fullscr');
fsEnter.addEventListener('click', function (e) {
    e.preventDefault();
    if (!fullscreen) {
        fullscreen = true;
        document.documentElement.requestFullscreen();
        fsEnter.innerHTML = "Exit Fullscreen";
    }
    else {
        fullscreen = false;
        document.exitFullscreen();
        fsEnter.innerHTML = "Go Fullscreen";
    }
});
