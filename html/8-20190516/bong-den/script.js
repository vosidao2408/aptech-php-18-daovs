var imageElement = document.getElementById('image');

function turnOn() {
    imageElement.src = "pic_bulbon.gif";
}

function turnOff() {
    imageElement.src = "pic_bulboff.gif";
}



function turn() {
    if (imageElement.src.includes('pic_bulboff.gif')) {
        imageElement.src = "pic_bulbon.gif";
    } else
        imageElement.src = "pic_bulboff.gif";
}