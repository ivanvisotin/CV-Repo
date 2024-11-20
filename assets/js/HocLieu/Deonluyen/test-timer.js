document.addEventListener("DOMContentLoaded", function() {
    let countdownTime = examDuration;

    function startTimer() {
        const timerElement = document.getElementsByClassName('timer')[0];
        const submitBtn = document.getElementsByClassName('submit-button')[0];
        const formElement = submitBtn.closest('form');
        const startTime = Date.now();
        const endTime = startTime + countdownTime * 1000;
        const minSubmitTime = timeLimit * 60 * 1000;

        const interval = setInterval(() => {
            const remainingTime = endTime - Date.now();
            if (remainingTime <= 0) {
                clearInterval(interval);
                timerElement.innerHTML = "Đã hết giờ làm bài!";
                formElement.dispatchEvent(new Event('submit')); 
            } else {
                const seconds = Math.floor((remainingTime / 1000) % 60);
                const minutes = Math.floor((remainingTime / 1000 / 60));
                timerElement.innerHTML = `${minutes} phút ${seconds} giây`;
            }
        }, 1000);
        
        formElement.addEventListener('submit', function(event) {
            const currentTime = Date.now();
            if (currentTime - startTime < minSubmitTime) {
                event.preventDefault();
                alert(`Bạn cần làm tối thiểu ${timeLimit} phút trước khi nộp bài!`);
                return;
            }
            event.preventDefault(); 
            clearInterval(interval); 
            alert("Nộp bài thành công!");
            const resultsContainer = document.getElementsByClassName('results-wrapper')[0];
            resultsContainer.classList.add('shown');
        });
    }

    startTimer();
});