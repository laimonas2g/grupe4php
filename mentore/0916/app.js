/* https://jsdoc.app/ */

/**
 * @param {number} a - first number
 * @param {number} b - second number
 * @returns {number} - sum of a and b
 */

function add(a, b) {
  return a + b;
}

/**
 * @typedef {Object} User
 * @property {number} id - The user's ID
 * @property {string} name - The user's name
 * @property {string} email - The user's email address
 */

/**
 * @returns {User} - A sample user object
 */

function createUser() {
  return {
    id: 1,
    name: 'Jonas',
    email: 'jonas@example.com'
  };
}

/**
 * Patikrina, ar skaicius yra lyginis
 * @param {number} num - tikrinamas skaicius
 * @returns {boolean} - grazina true, jei skaicius yra lyginis, kitu atveju false
 * @examples
 * // returns true
 * isEven(4);
 * // returns false
 * isEven(5);
 */

function isEven(num) {
  return num % 2 === 0;
}

/**
 * Sudeda du skaičius ir grąžina sumą.
 * @param {number} a - Pirmas skaičius
 * @param {number} b - Antras skaičius
 * @returns {number} - sum
 */
 
function add(a, b) {
    return a + b;
}
 
/**
 * Vartotojo duomenų struktūra.
 * @typedef {Object} User
 * @property {string} name - Vartotojo vardas.
 * @property {number} age - Vartotojo amžius.
 */
 
/**
 * @returns {User} - Naujas vartotojo objektas.
 */
function createUser() {
    return { name: 'Jonas', age: 30 };
}
 
/**
 * @param {User} user - Vartotojo objektas.
 * @param {number} newAge - Naujas amžius.
 * @returns {User} - Atnaujintas vartotojo objektas.
 */
function updateUserAge(user, newAge) {
    return { ...user, age: newAge };
}
 
 
 
 
/**
 * Gauna duomenis iš API.
 * @async
 * @returns {Promise<Object>} - Sugrąžina gautus duomenis.
 */
async function fetchData() {
    const response = await fetch('https://api.example.com/data');
    return response.json();
}
 
 
 
/**
 * Patikrina, ar skaičius yra lyginis.
 * @param {number} num - Skaičius, kurį tikriname.
 * @returns {boolean} - Grąžina true, jei skaičius lyginis.
 */
function isEven(num) {
    return num % 2 === 0;
}
 
 
/**
 * Apskaičiuoja stačiakampio plotą.
 * @param {number} width - Stačiakampio plotis.
 * @param {number} height - Stačiakampio aukštis.
 * @returns {number} - Stačiakampio plotas.
 */
 
function getRectangleArea(width, height) {
    return width * height;
}
 
add(2, 5)
getRectangleArea()
 
export { add }


