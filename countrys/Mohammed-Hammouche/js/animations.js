// Animation du texte
const animatedText = document.querySelector('.animated-text');

window.addEventListener('load', () => {
    animatedText.style.opacity = '1';

    // Animation du menu de navigation
    const header = document.querySelector('header');
    header.classList.add('visible');
});
