if(places.length === 1) {
    document.querySelector('.standort').style.display = 'none';
}

if(places.length === 2) {
    select = document.getElementById('ctrl_33').options;
    for(let i = 0; i <= select.length; i++) {
        if(places.indexOf(select[i].value) === -1) {
            console.log(select[i].value);
            select.remove(i);
        }
    }
}

let positionTitle = '';
const regex = /(<([^>]+)>)/ig;
document.querySelectorAll('h3').forEach(headline => {
    if(headline.attributes.itemprop) {
        positionTitle = headline.innerHTML.replace(regex, "");
    }
})

let positionInput;
document.querySelectorAll('input').forEach(input => {
    if (input.name === "position") {
        input.value = positionTitle;
    }
})