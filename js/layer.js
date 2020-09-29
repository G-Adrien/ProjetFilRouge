let layerBackground = document.getElementById("layerBackground");
layerBackground.style.display = "block";

function closeLayer(){
    layerBackground.style.display = "none";
}


let httpRequest = new XMLHttpRequest();

httpRequest.onreadystatechange = function() {
    if (httpRequest.readyState === XMLHttpRequest.DONE) {
        let safetyRulles = document.getElementById("safetyRulles");
        if (httpRequest.status === 200) {
            safetyRulles.innerHTML = httpRequest.responseText;
        } else {
            safetyRulles.innerHTML = "<div class='alert alert-danger'>Une erreur est survenue</div>";
        }
    }
};

httpRequest.open('GET', 'data/safetyRulles.html', true);
httpRequest.send();

