$(document).ready(function () {

})


function searchRecipe () {
    $("#live-search").keyup(function () {
        var input = $(this).val();

        if(input != "") {
            $.ajax({
                url: "/server/recipes/getAllRecipes.php",
                method: "POST",
                data: {
                    input: input
                },

            })
        }
    })
}