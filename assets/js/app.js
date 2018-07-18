import $ from "jquery"


//-------------------------- list recette -----------------------
showRecette();
$('#rechecheNom').keyup(showRecette);



function showRecette() {
    let str = $('#rechecheNom').val();
    if (str.length === 0) {
        str = 'all';
    }
console.log('ok');
    $.get( "http://localhost:8000/recette/find/"+str, function( data ) {
        $("#recette").html("");
        $.each(data, function(key, value){
            console.log(data);
            $("#recette").append(
                "<div class=\"col-lg-3 col-md-12 mb-lg-0 mb-4\">"+
                "<div class=\"view overlay rounded z-depth-2 mb-4\">"+
                "<img class=\"img-fluid w-75\" src=\"images/recette/"+value['photo']+"\" alt=\"Sample image\">"+
                "<a>" +
                "<div class=\"mask rgba-white-slight\"></div>" +
                "</a>"+
                "</div>"+
                "<p class=\"pink-text\"><h6 class=\"font-weight-bold mb-3\"><i class=\"fa fa-map pr-2\"></i>"+value['typeDeRecette']+"</h6></p>"+
                "<a  href=\"/recette/"+value['id']+"\" class=\"font-weight-bold mb-3\"><strong>"+value['nomRecette']+"</strong></a>"+
                "<p>Realisé par: <a class=\"font-weight-bold\"></a class='green-text'>"+value['nom'] +' '+value['prenom']+" </p>"+
                "<p class=\"dark-grey-text\">"+value['preparation']+"</p>"+
                " <button class=\"btn btn-green btn-rounded btn-md\" data-toggle=\"modal\" data-target=\"#modal"+value['id']+"\">Infos</button>"+
                " </div>"+
                "<div class=\"modal fade\" id=\"modal"+value['id']+"\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">\n" +
                "    <div class=\"modal-dialog\" role=\"document\">\n" +
                "        <div class=\"modal-content\">\n" +
                "            <div class=\"modal-header\">\n" +
                "                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Modal title</h5>\n" +
                "                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">\n" +
                "                    <span aria-hidden=\"true\">&times;</span>\n" +
                "                </button>\n" +
                "            </div>\n" +
                "            <div class=\"modal-body\">\n" +
                "                <a>Telephone : "+value['telephone']+"</a>\n"+
                "                <a>Telephone : "+value['email']+"</a>\n"+
                "            </div>\n" +
                "            <div class=\"modal-footer\">\n" +
                "                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>\n" +
                "                <button type=\"button\" class=\"btn btn-primary\">Save changes</button>\n" +
                "            </div>\n" +
                "        </div>\n" +
                "    </div>\n" +
                "</div>"
               );

        });

    });


}
