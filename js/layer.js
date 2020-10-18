let layerBackground = document.getElementById("layerBackground");
layerBackground.style.display = "block";

function closeLayer(){
    layerBackground.style.display = "none";
}


let httpRequest = new XMLHttpRequest();

httpRequest.onreadystatechange = function() {
    if (httpRequest.readyState === XMLHttpRequest.DONE) {
        let safetyRules = document.getElementById("safetyRules");
        if (httpRequest.status === 200) {
            safetyRules.innerHTML = httpRequest.responseText;
        } else {
            safetyRules.innerHTML = "<div class='alert alert-danger'>Une erreur est survenue</div>";
        }
    }
};

httpRequest.open('GET', 'data/safetyRules.html', true);
httpRequest.send();

