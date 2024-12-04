const images = document.querySelectorAll('.image-section img');

images.forEach(function(image) {
    image.addEventListener('mouseover', function() {
        image.style.transform = 'scale(1.05)';
        image.style.transition = 'transform 0.3s ease-in-out';
        image.style.boxShadow = '0 8px 16px rgba(0, 0, 0, 0.3)';
    });
    
    image.addEventListener('mouseout', function() {
        image.style.transform = 'scale(1)';
        image.style.boxShadow = '0 4px 12px rgba(0, 0, 0, 0.2)';
    });
});
