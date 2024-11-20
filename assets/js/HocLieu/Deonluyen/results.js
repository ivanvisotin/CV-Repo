const absoluteElement = document.querySelector('.results-wrapper');

function setHeight() {
    absoluteElement.style.height = document.body.scrollHeight + 'px';
}

// Set the height when the page loads
window.onload = setHeight;

// Optionally, set it again when the window is resized
window.onresize = setHeight;
const crossSymbol = document.getElementsByClassName('symbol')[0];
const confirmExitWrapper = document.getElementsByClassName('confirm-exit')[0];
const denyExit = document.getElementsByClassName('deny-exit')[0];
const stillExit = document.getElementsByClassName('still-exit')[0];

crossSymbol.addEventListener('click', function() {
    confirmExitWrapper.classList.add('shown');
});
denyExit.addEventListener('click', function() {
    confirmExitWrapper.classList.remove('shown');
});

stillExit.addEventListener('click', function() {
    window.location.replace(testURL);
});
