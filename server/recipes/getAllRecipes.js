$(document).ready(function () {
    getRecipes();
})

function getRecipes() {
    $.ajax({
        type: "GET",
        url: "/server/recipes/getAllRecipes.php",
        success: function (response) {
            console.log(response);
            $.each(response, function(key, value){
                $('#recipe-container').append(`
                <div class="recipe" > 
                    <img src="${value['image'] ? value['image'] : "./assets/imgs/no-image.png"}" class="recipe-img"/>
                    <span class="recipe-cat"> South African Dish </span>
                    <h3 class="recipe-name"> Bobotie </h3>
                    <button class="btn" type="button" onclick="window.location.href='./recipe-detail.php'"> View </button>
                </div>
                `
                )
            }) 
        }
    })
}

