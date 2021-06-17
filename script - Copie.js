function selectorAll(){
    var all = document.getElementsByClassName("all");
    for(i=0; i<all.length; i++){
        all[i].style.display="flex";
    };
}

function selectorNonClasse(){
    var nonClasse = document.getElementsByClassName("nonClasse");
    var lab = document.getElementsByClassName("labyrinthe");
    for(i=0; i<nonClasse.length; i++){
        nonClasse[i].style.display="flex";
    };
    for(i=0; i<nonClasse.length; i++){
        lab[i].style.display="none";
    };
}

function selectorLabyrinthe(){
    var nonClasse = document.getElementsByClassName("nonClasse");
    var lab = document.getElementsByClassName("labyrinthe");
    for(i=0; i<nonClasse.length; i++){
        nonClasse[i].style.display="none";
    };
    for(i=0; i<nonClasse.length; i++){
        lab[i].style.display="flex";
    };
}

console.log("Bonjour");