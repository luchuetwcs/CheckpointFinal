// require jQuery
const $ = require('jquery');
require('jquery-ui');


$('#onkeyup').keyup(showHint);

//appartementSelectCompteur

function showHint() {
    var str = $('#onkeyup').val();
    if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        $.get( "http://localhost:8000/recette/search/"+str, function( data ) {
            $("#recetteSelectCompteur").html("");
            $.each(data, function(key, value){
                $("#recetteSelectCompteur").append(
                    "<option value='"+ value['id'] +"'>"+ value["adresse"] +" "+ value["codePostal"]+ " " + value["ville"] +"</option>");
            });
            $('#immeubleSelectCompteur option').click(showLot);
        });
    }
}