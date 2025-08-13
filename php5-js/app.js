const balls = [];


class CollorBall {

    constructor(color, number) {
        this.color = color;
        this.number = number;
        balls.push(this);
    }
}


const addButton = document.querySelector('[data-add-ball]');
const colorInput = document.querySelector('[data-ball-color-input]');
const numberInput = document.querySelector('[data-ball-number-input]');

const ballContainer = document.querySelector('[data-ball-container]');

const remButton = document.querySelector('[data-remove-ball]');

addButton.addEventListener('click', _ => {
    new CollorBall(colorInput.value, numberInput.value);
    renderBalls();
});

remButton.addEventListener('click', _ => {
    balls.shift();
    renderBalls();
});


const renderBalls = _ => {
    ballContainer.innerHTML = '';
    balls.forEach(ball => {
        const div = document.createElement('div');
        div.style.backgroundColor = ball.color;
        div.style.width = '50px';
        div.style.height = '50px';
        div.style.borderRadius = '50%';
        div.innerText = ball.number;
        ballContainer.appendChild(div);
    });
}