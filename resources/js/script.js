// Custom JavaScript for interactivity
document.addEventListener('DOMContentLoaded', function() {
    const learnMoreBtn = document.querySelector('.hero-section .btn');
    if (learnMoreBtn) {
        learnMoreBtn.addEventListener('click', function(event) {
            event.preventDefault();
            alert('You clicked Learn More! This would navigate to another section or page.');
            // You could scroll to a section:
            // document.getElementById('features-section').scrollIntoView({ behavior: 'smooth' });
        });
    }
});