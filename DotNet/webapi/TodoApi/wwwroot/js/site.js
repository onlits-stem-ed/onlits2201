const uri = 'api/todoitems';
let todos = [];

function getItems() {
    fetch(uri)
    .then(response => response.json());
}

