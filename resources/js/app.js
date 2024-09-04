import './bootstrap';

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
