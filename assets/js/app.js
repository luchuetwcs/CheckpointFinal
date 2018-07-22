//-------------------------- list commue -----------------------

$('#rechercheRecipe').keyup(showRecipe);



function showRecipe() {
    var str = $('#rechercheRecipe').val();
    if (str.length !== 0) {
        $.get( "http://localhost:8000/recipe/title/"+str, function( data ) {
            $("#insertRecipe").html("");
            $.each(data, function(key, value){
                $("#insertRecipe").append(
                    "<option value='"+ value['title'] +"'>"+ value["title"]  +"</option>");
            });

        });
    }



}