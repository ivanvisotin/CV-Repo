const searchBar = document.querySelector('.wrapper-search-button input');

searchBar.addEventListener('input', () => {
    if (searchBar.value.trim() !== '') {
        searchBar.classList.add('expanded');
    }
    else searchBar.classList.remove('expanded');
});

searchBar.addEventListener('mouseover', () => {
    searchBar.classList.add('expanded');
});

searchBar.addEventListener('focus', () => {
    searchBar.classList.add('expanded');
});

searchBar.addEventListener('blur', () => {
    setTimeout(() => {
        if (searchBar.value.trim() === '') {
            searchBar.classList.remove('expanded');
        }
    }, 150);
});