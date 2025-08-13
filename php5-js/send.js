/*
    <form data-form>
        <input type="text" name="animal" placeholder="animal">
        <button type="button">Send</button>
    </form>

    #url http://localhost/grupe4php/php5-js/info-json.php
*/

document.querySelector('[data-form] button').addEventListener('click', _ => {
    const jsonData = {};
    const animal = document.querySelector('[data-form] [name="animal"]');
    jsonData.animal = animal.value;

    fetch('http://localhost/grupe4php/php5-js/info-json.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(jsonData)
    })
    .then(response => response.json())
    .then(data => {
        console.log(data);
        const div = document.createElement('div');
        div.innerText = data.animal;
        document.querySelector('[data-form]').appendChild(div);
    })
    .catch(error => {
        console.error('Error:', error);
    });
});