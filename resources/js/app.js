import './bootstrap';
import Alpine from 'alpinejs'

Alpine.start()

// If you want Alpine's instance to be available globally
window.Alpine = Alpine

document.addEventListener('DOMContentLoaded', function (){
    let answer = document.getElementById('answer');
    let question = document.getElementById('question');
    answer.addEventListener('click', () => {
        answer.classList.toggle('hidden');
    });
    question.addEventListener('click', () => {
        answer.classList.toggle('hidden');
    });
})
