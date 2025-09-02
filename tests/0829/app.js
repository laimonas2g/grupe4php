let word = ''; 
let guessedLetters = []; 
let wrongLetters = []; 
let maxWrong = 6; 

const hangmanParts = [
  'head',     
  'body',      
  'left-arm',  
  'right-arm',
  'left-leg',
  'right-leg',
];

let gameTimeLimit = 180; 
let timerInterval;
const timerDisplay = document.getElementById('timer'); 

const gameModal = document.getElementById('game-modal');
const closeModalButton = document.getElementById('close-modal');

async function getRandomWord() {
  const response = await fetch('https://random-word-api.herokuapp.com/word');
  const data = await response.json();
  word = data[0].toLowerCase();
}

function gameOver(isVictory) {
  setTimeout(() => {
    clearInterval(timerInterval);
    const modalText = isVictory
      ? `Laimėjai!`
      : `Pralaimėjai! Teisingas žodis buvo:`;
    gameModal.querySelector("p").innerHTML =
      `${modalText} <b>${word}</b>`;
    gameModal.classList.add("show");
  }, 300);
}

async function startGame() {
  await getRandomWord();
  guessedLetters = []; 
  wrongLetters = [];
  document.getElementById('status').textContent = '';
  document.getElementById('wrong').textContent = '';
  document.getElementById('word').textContent = '';
  clearInterval(timerInterval); 
  renderHangman();
  renderWord();   
  renderLetters();
  renderWrong();  
  startTimer();   
  gameModal.classList.remove("show");
}

function renderWord() {
  const display = word.split('').map(letter => (
    guessedLetters.includes(letter) ? letter : '_'
  )).join(' ');
  document.getElementById('word').textContent = display;
}

function renderLetters() {
  const container = document.getElementById('letters');
  container.innerHTML = '';
  for (let i = 65; i <= 90; i++) {
    const letter = String.fromCharCode(i).toLowerCase();
    const btn = document.createElement('button');
    btn.textContent = letter;
    btn.disabled = guessedLetters.includes(letter) || wrongLetters.includes(letter);
    btn.onclick = () => handleGuess(letter);
    container.appendChild(btn);
  }
}

function startTimer() {
  let timeLeft = gameTimeLimit;
  timerDisplay.innerText = `Liko laiko: ${Math.floor(timeLeft / 60)}:${timeLeft % 60 < 10 ? "0" : ""}${timeLeft % 60}`;
  timerInterval = setInterval(() => {
    timeLeft--;
    timerDisplay.innerText = `Liko laiko: ${Math.floor(timeLeft / 60)}:${timeLeft % 60 < 10 ? "0" : ""}${timeLeft % 60}`;
    if (timeLeft <= 0) {
      clearInterval(timerInterval);
      gameOver(false);
      disableAll();
    }
  }, 1000);
}

function handleGuess(letter) {
  if (guessedLetters.includes(letter) || wrongLetters.includes(letter)) return;
  if (word.includes(letter)) {
    guessedLetters.push(letter);
  } else {
    wrongLetters.push(letter); 
  }
  renderWord();
  renderLetters();
  renderWrong();
  renderHangman();
  checkGameStatus();
}

function renderWrong() {
  document.getElementById('wrong').textContent =
    'Klaidingi spėjimai: ' + wrongLetters.join(', ') + ' (' + wrongLetters.length + '/' + maxWrong + ')';
}

function renderHangman() {
  hangmanParts.forEach(id => {
    document.getElementById(id).style.display = 'none';
  });
  for (let i = 0; i < wrongLetters.length && i < hangmanParts.length; i++) {
    document.getElementById(hangmanParts[i]).style.display = 'block';
  }
}

function checkGameStatus() {
  if (wrongLetters.length >= maxWrong) {
    document.getElementById('status').textContent = 'Pralaimėjai!';
    gameOver(false);
    disableAll();
  }
  else if (word.split('').every(letter => guessedLetters.includes(letter))) {
    document.getElementById('status').textContent = 'Laimėjai!';
    gameOver(true);
    disableAll();
  }
}

function disableAll() {
  document.querySelectorAll('#letters button').forEach(btn => btn.disabled = true);
}

document.getElementById('restart').onclick = startGame;
closeModalButton.onclick = () => gameModal.classList.remove("show");

startGame();