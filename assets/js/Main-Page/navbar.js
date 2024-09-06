let lastScrollTop = 0;
const navbar = document.querySelector('.wrapper-nav-bar');

window.addEventListener('scroll', () => {
    const scrollTop = window.scrollY || document.documentElement.scrollTop;

    if (scrollTop > 80) {
        if (scrollTop > lastScrollTop) {
            navbar.classList.add('hidden');
        } else {
            navbar.classList.remove('hidden');
        }
    } else {
        navbar.classList.remove('hidden');
    }

    lastScrollTop = scrollTop;
});