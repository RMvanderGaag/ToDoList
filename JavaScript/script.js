//Deze functie is voor de filter op de rijen
function filterList(c){
    //Alle rijen worden in de variabele 'x' gezet
    var x = document.getElementsByClassName('tableRow');
    //Alle rijen die dezelfde class hebben als de meegestuurde parameter worden in de variabele 'y' gezet 
    var y = document.getElementsByClassName(c);
    //Hij loopt door alle rijen heen
    for(var i = 0; i < x.length; i++){
        if(c == 'all'){
            //Als de parameter gelijk is aan 'all' dan word de display 'table-row' 
            x[i].style.display = 'table-row';
        }else{
            //Anders word bij elke rij de display op 'none' gezet 
            x[i].style.display = 'none';
        }
    }

    //Nu word er door alle rijen heen geloopt die gelijk zijn aan 'y' er word bij elke rij dispay 'table-row' toegevoegd  
    for(var j = 0; j < y.length; j++){
        y[j].style.display = 'table-row'
    }
}