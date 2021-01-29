require('./bootstrap');

const some = document.querySelector('.case');
const vinil = document.querySelector('.vinil');


some.addEventListener('click', () => {
    vinil.add('active');
})
