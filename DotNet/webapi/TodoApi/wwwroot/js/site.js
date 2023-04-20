const uri = 'api/todoitems';
let todos = [];

function getItems() {
    fetch(uri)
    .then(response => console.log(response.json()));
}

function addItem() {
    const addNameTextbox = document.getElementById('add-name');
    
    const item = {
        isComplete: false,
        name: addNameTextbox.value.trim()
    };

    fetch(uri, {
        method: 'POST',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(item)
    })
        .then(() => console.log('Success!'));
}