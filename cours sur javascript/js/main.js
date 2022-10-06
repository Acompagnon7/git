console.log("Hello world");
let x = 1;
var y = 3;
console.log (x + y);
let = c =5;
const k = 10;
console.log (c + k);
let w = 9;
w = 10;
console.log(w);
const s = 10;
//s = 78; impossible de réassigner une constante
//lors d'une erreur dans le js la suite n'est pas lu
console.log;
x = y;
console.log(x);
console.log(w / 2.5);
console.log(w / y);
console.log(w * y);
console.log(w % y);
//structures conditionnelles if = si w est égal à 4 alors j'écris bonjour (pseudo-code) else = sinon
if (k == w){
    console.log("Bonjour");
}
// if...(condition...) expression 
//bloc de condition
// == > condition égalité
// === > condition stricte égalité
let bonjour = "salut";
let bonjour02 = "les gars";
console.log(bonjour +' '+ bonjour02);
//condition non != 
if (c != x){
    console.log(c +' '+ "n'est pas égale à" + ' '+ x);
}
let boule = true
console.log(boule);
console.log(!boule);
if (!boule){
    console.log(boule = false);
}
// else
if (!boule){
    console.log(boule = false);
} else {
    console.log(boule != true);
}
//> ou < supérieur ou inférieur
if (w < c){
    console.log("w est inférieur à c");
} else {
    console.log("w est supérieur à c");
}
// >= ou <=
if (w <= c){
    console.log(1);
} else {
    console.log(2);
}
//query selector
var titre = document.getElementsByClassName("titre");
console.log(titre);
var secondTitle = document.getElementById("h2-modifier");
console.log(secondTitle);
secondTitle.innerHTML = "Titre putaclic";
let paragraphe = document.querySelector(".paragraphe");
console.log(paragraphe);
var parentImage = document.querySelector(".parent-image");
var image = document.createElement('img');
image.setAttribute("src", '../images/chien01.jpg');
parentImage.appendChild(image);

// function
function addition(nombreA, nombreB){
    let result = nombreA + nombreB;
    console.log(result);

}

addition(1000, 2000);


function soustraction(nombreA, nombreB){
    let result = nombreA - nombreB;
    return result;
}

let trueResultat = soustraction(50 , 27);
console.log(trueResultat);

//exercice js

function estCeQueJeSuisGrand(taille){
    if (taille >= 170){
        console.log("Je suis grand");
    }else {
        console.log("Je suis petit");
    }
}

estCeQueJeSuisGrand(175)

function aiJeUneDivisionSansReste(nombreA, nombreB){
    let resultat = nombreA % nombreB;
    if(resultat > 0){
        console.log("elle a un reste")
    } else{
        console.log("elle n'a pas de reste")
    }
}

aiJeUneDivisionSansReste(25 , 2);

//var et let

let mavariable = 10;
mavariable = "poulet";
mavariable = true;
//let mavariable = 10
console.log(mavariable);
var nouvellevariable = 12;
console.log(nouvellevariable);
var nouvellevariable = 15;
console.log(nouvellevariable);

var mavariablevar = "George";

function jeTestMonLet(){
    let test = "Joconde";
    var mavariablevar = "Jean Pierre";
    if(true){
    console.log(test);
    }
}

function jeTestEncoreMonLet(){
    let test = "Leonard de Vinci";
    console.log(test);
}

console.log(mavariablevar);

function letTest() {
    let x = 31;
    if (true) {
      let x = 71;  // c'est une variable différente
      console.log(x);  // 71
    }
    console.log(x);  // 31
  }


  function varTest() {
    var x = 31;
    if (true) {
      var x = 71;  // c'est la même variable !
      console.log(x);  // 71
    }
    console.log(x);  // 71
  }

  //switch

  
  function testNombre(nombre){
    switch(nombre){
        case 0:
        console.log("je suis le nombre 0");
        break;
        case 1:
            console.log("Je suis le nombre 1");
            break;
            case 2:
                console.log("Je suis le nombre 2");
                break;
                case 3:
                    console.log("Je suis le nombre 3");
                    break;
                    case 4:
                        console.log("Je suis le nombre 4");
                        break;
    default:
        console;log("Je suis strictement supérieur à 4");
    }
  }

  var myFirstArray = [];
  var mySecondArray = [1, 2, 3, 4, 5, "banane"];
  var un = mySecondArray[0];
  console.log(un);
  console.log(mySecondArray.length);
  console.log(mySecondArray[3]+ mySecondArray[0])
  console.log(mySecondArray[544864868])
  myFirstArray.push("Jeremy");
  console.log(myFirstArray);
  myFirstArray.push("Kevin.B")
  console.log(myFirstArray);
  myFirstArray.pop();
  console.log(myFirstArray);
  myFirstArray.shift();
  console.log(myFirstArray);
  myFirstArray.unshift("moi");
  console.log(myFirstArray);
  console.log(mySecondArray.indexOf(2))
  mySecondArray.splice(1,3);
  console.log(mySecondArray);
  
  let banane = "une banane";
  console.log(banane [5]);