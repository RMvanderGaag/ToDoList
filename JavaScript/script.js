//Deze functie is voor de filter op de rijen
function filterList(status){
    //Alle rijen worden in de variabele 'x' gezet
    var tablerows = document.getElementsByClassName('tableRow');
    //Alle rijen die dezelfde class hebben als de meegestuurde parameter worden in de variabele 'y' gezet 
    var statusRow = document.getElementsByClassName(status);
    //Hij loopt door alle rijen heen
    for(var i = 0; i < tablerows.length; i++){
        if(status == 'all'){
            //Als de parameter gelijk is aan 'all' dan word de display 'table-row' 
            tablerows[i].style.display = 'table-row';
        }else{
            //Anders word bij elke rij de display op 'none' gezet 
            tablerows[i].style.display = 'none';
        }
    }

    //Nu word er door alle rijen heen geloopt die gelijk zijn aan 'y' er word bij elke rij dispay 'table-row' toegevoegd  
    for(var j = 0; j < statusRow.length; j++){
        statusRow[j].style.display = 'table-row'
    }
}

