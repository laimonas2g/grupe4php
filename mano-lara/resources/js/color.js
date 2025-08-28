window.addEventListener('DOMContentLoaded', _ => {
    const colorBox = document.querySelector('.color-box');
 
    const color = colorBox.dataset.color;
 
    const colors = ['red', 'green', 'blue', 'yellow', 'purple'];
 
    colorBox.addEventListener('click', _ => {
       // change the background color to a random color from the array
       const randomColor = colors[Math.floor(Math.random() * colors.length)];
       colorBox.style.backgroundColor = randomColor;
       colorBox.dataset.color = randomColor;
    });
 
   
});