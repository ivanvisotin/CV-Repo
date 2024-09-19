const inputSearchBar = document.querySelector('.wrapper-search-button input');
const wrapperSearchBar = document.querySelector('.wrapper-search-button');

inputSearchBar.addEventListener('input', () => {
    if (inputSearchBar.value.trim() !== '') {
        inputSearchBar.classList.add('expanded');
    } else {
        if (!inputSearchBar.matches(':focus')) {
            inputSearchBar.classList.remove('expanded');
        }
    }
});

wrapperSearchBar.addEventListener('mouseover', () => {
    inputSearchBar.classList.add('expanded');
});

wrapperSearchBar.addEventListener('mouseleave', () => {
    setTimeout(() => {
        if (inputSearchBar.value.trim() === '' && !inputSearchBar.matches(':focus')) {
            inputSearchBar.classList.remove('expanded');
        }
    }, 150);
});

inputSearchBar.addEventListener('focus', () => {
    inputSearchBar.classList.add('expanded');
});

inputSearchBar.addEventListener('blur', () => {
    setTimeout(() => {
        if (inputSearchBar.value.trim() === '') {
            inputSearchBar.classList.remove('expanded');
        }
    }, 150);
});