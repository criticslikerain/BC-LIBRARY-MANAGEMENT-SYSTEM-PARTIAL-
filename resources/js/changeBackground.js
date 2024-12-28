document.addEventListener('DOMContentLoaded', function() {
  const images = [
      "{{ asset('storage/images/image1.png') }}",
      "{{ asset('storage/images/image2.jpg') }}",
      "{{ asset('storage/images/image3.jpg') }}"
  ];

  let currentIndex = 0;

  function changeBackground() {
      const background = document.getElementById('background');
      background.style.backgroundImage = `url(${images[currentIndex]})`;
      background.style.backgroundSize = 'cover';
      background.style.backgroundPosition = 'center';
      background.style.backgroundRepeat = 'no-repeat';
      currentIndex = (currentIndex + 1) % images.length;
  }    
  changeBackground();
  setInterval(changeBackground, 5000);
});