document.forms[0].addEventListener('submit', function(event) {

    // Answers
    const readingInputs = document.querySelectorAll('.textarea-test.reading');
    const writingInputs = document.querySelectorAll('.textarea-test.writing');
    const readingAnswersContainer = document.getElementsByClassName('reading-answers')[0];
    const writingAnswersContainer = document.getElementsByClassName('writing-answers')[0];

    readingAnswersContainer.innerHTML = '';
    writingAnswersContainer.innerHTML = '';

    readingInputs.forEach((readingInput, index) => {
        const readDiv = document.createElement('div');
        readDiv.classList.add('reading-answer');

        const readHeader = document.createElement('strong');
        readHeader.innerHTML = `Câu ${index+1}: &nbsp;`;

        const readContent = document.createElement('span');
        readContent.innerHTML = `${readingInput.value}`;

        readDiv.appendChild(readHeader);
        readDiv.appendChild(readContent);
        readingAnswersContainer.appendChild(readDiv);
    });

    writingInputs.forEach((writingInput, index) => {
        const writeDiv = document.createElement('div');
        writeDiv.classList.add('writing-answer');

        const writeHeader = document.createElement('strong');
        writeHeader.innerHTML = `Câu ${index+1}: &nbsp;`;

        const writeContent = document.createElement('span');
        writeContent.innerHTML = `${writingInput.value}`;

        writeDiv.appendChild(writeHeader);
        writeDiv.appendChild(writeContent);
        writingAnswersContainer.appendChild(writeDiv);
    });
});