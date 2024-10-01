const absoluteElement = document.querySelector('.results-wrapper');

function setHeight() {
    absoluteElement.style.height = document.body.scrollHeight + 'px';
}

// Set the height when the page loads
window.onload = setHeight;

// Optionally, set it again when the window is resized
window.onresize = setHeight;