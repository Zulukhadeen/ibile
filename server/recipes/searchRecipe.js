$(document).ready(function () {

})


function searchRecipe () {
    $("#live-search").keyup(function () {
        var input = $(this).val();
        console.log(input)
        if(input != "") {
            $.ajax({
                url: "/server/recipes/getAllRecipes.php",
                method: "POST",
                data: {
                    input: input
                },
                success: function (response) {
                    console.log(response)
                }
            })
        }
    })
}