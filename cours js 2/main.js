//ET et OU
let x = 10
let y = 9

//OU

if(x == 10 || y == 5){
    console.log(true)
}
else{
    console.log(false)
}

//ET

if(x == 10 && y == 5){
    console.log(true)
}else{
    console.log(false)
}

// OU exclusif (XOR)

if(x == 10 ^ y == 5){
    console.log(true)
}else{
    console.log(false)
}

//NAND

if(x != 10 && y != 9){
    console.log(true)
}else{
    console.log(false)
}

//bonnes pratiques

/**A chaque changement de bloc { } il est nécessaire de faire un TAB (indentation)
* une fonction retourne quelque chose, elle doit commencer par :
*si elle retorune une BOOL par IS...HAS...
*le nom d'une fonction doit toujours refleter ce qu'elle fait
une fonction doit faire une seule chose à la fois*/

//NULL et UNDEFINED

let nl = null
let element = document.getElementById("Paul")
console.log(element)

//UNDEFINED

let k;

console.log(k);

if (k === undefined){
    k = 12;
}

console.log(k)

let button = document.getElementsByClassName('exempleA')

button[0].addEventListener('click', myClick)

function myClick()
{
	console.log("J'ai cliqué sur le bouton.")
}


button[0].addEventListener('click', function(){
	console.log("J'ai cliqué sur le bouton.")
})

button[0].addEventListener('click', function(event){
	console.log("J'ai cliqué sur le bouton.")
  console.log(event)
})



let inputText = document.getElementById('ExempleB')
inputText.addEventListener('input', function(){
    console.log('ok');
});

var btn = document.getElementById("send")

var image = document.querySelector("img")

btn.addEventListener('click', function () {
    var ajax = new XMLHttpRequest();
    ajax.open('GET', 'https://api.thecatapi.com/v1/images/search', true);
    ajax.responseType = 'json';
    ajax.send()
    ajax.onload = function(){
        console.log(this.response[0].url);
        image.src = this.response
    }
   /* fetch("https://api.thecatapi.com/v1/images/search")
.then(response => image.src = response.url)*/
});

//Fonction fléchée

function add(nbrA, nbrB){
    console.log(nbrA + nbrB)
}

const arrowAdd = (nbrA, nbrB) => {
    console.log(nbrA + nbrB)
}

add(5, 6);
arrowAdd(5, 6);

var addArray = [1, 2, 4, 5]
var addArrayTwo = [5, 7, 12, 4]

const mapArray = addArray.map(x => x + 1)
console.log(mapArray)

const mapArrayTwo = addArray.map((x, i) => x + addArrayTwo[i]);
console.log(mapArrayTwo)

addArrayTwo.forEach(x => console.log(x))

const zeroArray = [7, 7, 8, 10];

function hasZero(element){
    if(element >= 4){
        return true
    }else{
        return false
    }
    
}

console.log(zeroArray.every(hasZero));