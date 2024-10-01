document.addEventListener("DOMContentLoaded", function() {
    let countdownTime = examDuration;

    function startTimer() {
        const timerElement = document.getElementsByClassName('timer')[0];
        const endTime = Date.now() + countdownTime * 1000;

        const interval = setInterval(() => {
            const remainingTime = endTime - Date.now();
            if (remainingTime <= 0) {
                clearInterval(interval);
                timerElement.innerHTML = "Đã hết giờ làm bài!";
                document.forms[0].dispatchEvent(new Event('submit')); 
            } else {
                const seconds = Math.floor((remainingTime / 1000) % 60);
                const minutes = Math.floor((remainingTime / 1000 / 60));
                timerElement.innerHTML = `${minutes} phút ${seconds} giây`;
            }
        }, 1000);
        
        document.forms[0].addEventListener('submit', function(event) {
            event.preventDefault(); 
            clearInterval(interval); 
            alert("Nộp bài thành công!");
            const resultsContainer = document.getElementsByClassName('results-wrapper')[0];
            resultsContainer.classList.add('shown');
        });
    }

    startTimer();
});