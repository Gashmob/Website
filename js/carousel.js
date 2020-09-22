/*$(function() {
    // TODO : animation pour défilement auto + event pour défilement manuel (en JQuery)
});*/

let id = document.querySelector('.carousel .content > div').id;
let idMin = id;
let idMax = 0;
document.querySelectorAll('.carousel .content > div').forEach(element => {
    idMax = element.id;
});
let nbView = document.querySelectorAll('.carousel .content > div').length;

document.querySelectorAll('.carousel .bottom-buttons > *').forEach(element => {
    element.addEventListener('click', turnSelect);
});
document.querySelector('.carousel .side-buttons .left').addEventListener('click', turnLeft);
document.querySelector('.carousel .side-buttons .right').addEventListener('click', turnRight);


function turnLeft(event) {
    id = id === idMin ? idMax : (Number(id) - 1).toString();
    refreshView();
}

function turnRight(event) {
    id = id === idMax ? idMin : (Number(id) + 1).toString();
    refreshView();
}

function turnSelect(event) {
    id = event.target.id;
    refreshView();
}

function refreshView() {
    // Set view
    document.querySelectorAll('.carousel .content > div').forEach(element => {
        if (element.id === id) {
            element.style.display = 'flex';
        } else {
            element.style.display = 'none';
        }
    });

    // Draw buttons
    if (nbView > 1) {
        document.querySelectorAll('.carousel .bottom-buttons > *').forEach(element => {
            if (element.id === id) {
                element.classList.remove('far');
                element.classList.add('fas');
            } else {
                element.classList.remove('fas');
                element.classList.add('far');
            }
        });
    } else {
        document.querySelector('.carousel .side-buttons').style.display = 'none';
        document.querySelector('.carousel .bottom-buttons').style.display = 'none';
    }
}


refreshView();
