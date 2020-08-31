let cross = document.getElementsByClassName("fa-times-circle");
let layer = document.getElementById("layer");
let messageHTML = document.getElementById("")

function closeLayer(){
    console.log(layer.style.display);
    layer.style.display = "none";
    console.log(layer.style.display);
}


function loadSafetyRulles() {
    messageHTML.innerHTML='<object type="text/html" data="safetyRulles.html" ></object>';
}


// function showContent(){
//     //objet de base pour gérer les requêtes et les réponses 

//     httpRequest = new XMLHttpRequest();
//     //Code à exécuter
//     httpRequest.onreadystatechange = function () {
//         // tout va bien, la réponse a été reçue
//         if (httpRequest.readyState === XMLHttpRequest.DONE) {
//             if (httpRequest.status === 200) {
//                 // La réponse est exploitable et valise!
//                 //on affiche la réponse sur la page
//                 let user = JSON.parse(httpRequest.responseText);
//                 let p = document.getElementById("content");
//                 p.innerText = user.name;
//             } else {
//                 // il y a eu un problème avec la requête,
//                 // par exemple la réponse peut être un code 404 (Non trouvée) 
//                 // ou 500 (Erreur interne au serveur)
//                 console.log(("Une erreur est survenue"));
//             }
//             // pas encore prête
//         } else {
//             console.log("Réponse en attente");
//         }
//     };
//     //Ouverture et envoie de la requête 
//     httpRequest.open('GET', 'https://swapi.dev/api/people/1/', true);
//     httpRequest.send();
// }
