import './bootstrap';

document.addEventListener('DOMContentLoaded', function (){
    let flashcardBox = document.getElementById('flashcardBox');
    let answer = document.getElementById('answer');
    flashcardBox.addEventListener('click', () => {
        answer.classList.toggle('hidden');
    })
    flashcardBox.addEventListener('mouseover', () => {
        
    })
})
