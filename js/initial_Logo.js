window.addEventListener('load', function() {
    const overlay = document.getElementById('overlay1');
    const centerImage = document.querySelector('.center-image');

    overlay.addEventListener('animationend', function() {
      overlay.style.visibility = 'hidden';
    });

    //centerImage.addEventListener('animationend', function() {
      //overlay.style.visibility = 'hidden';
    //});
  });