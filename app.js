function sent() {
    alert("Message is being delivered....");
}

        document.addEventListener("DOMContentLoaded", () => {
            // Select all like buttons
            const likeButtons = document.querySelectorAll('.likebttn');
    
            // Add event listener to each button
            likeButtons.forEach(button => {
                button.addEventListener('click', () => {
                    // Toggle the 'liked' class
                    button.classList.toggle('liked');
                });
            });
        });
 