$(document).ready(function () {
    homeSearch()
    searchRecipeOnPage()
    searchRecipe()
})

function getUrlParameter(param) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
}


function searchRecipeOnPage () {
    const searchQuery = getUrlParameter('search_q')
    if (searchQuery) {
        if(searchQuery != "") {
            $.ajax({
                url: "/server/recipes/searchRecipe.php",
                method: "POST",
                data: {
                    input: searchQuery
                },
                success: function (response) {
                    $.each(response, function(key, value){
                        $('#recipe-container').append(`
                        <div class="recipe" > 
                            <img src="${value['image'] ? value['image'] : "./assets/imgs/no-image.png"}" class="recipe-img"/>
                            <span class="recipe-cat"> ${value['category']} </span>
                            <h3 class="recipe-name"> ${value['name']} </h3>
                            <button class="btn" type="button" onclick="window.location.href='./recipe-detail.php?recipe_id=${value['recipe_id']}'"> View </button>
                        </div>
                        `
                        )
                    })
                }
            })
        }
    } else {
        $.ajax({
            type: "GET",
            url: "/server/recipes/getAllRecipes.php",
            success: function (response) {
                $.each(response, function(key, value){
                    $('#recipe-container').append(`
                    <div class="recipe" > 
                        <img src="${value['image'] ? value['image'] : "./assets/imgs/no-image.png"}" class="recipe-img"/>
                        <span class="recipe-cat"> ${value['category']} </span>
                        <h3 class="recipe-name"> ${value['name']} </h3>
                        <button class="btn" type="button" onclick="window.location.href='./recipe-detail.php?recipe_id=${value['recipe_id']}'"> View </button>
                    </div>
                    `
                    )
                }) 
            }
        })
    }
}

function searchRecipe () {
    $("#live-search-button").click(function ( ) {
        var searchInputValue = $("#live-search").val();
        if (searchInputValue !== "") {
            $.ajax({
                url: "/server/recipes/searchRecipe.php",
                method: "POST",
                data: {
                    input: searchInputValue
                },
                success: function (response) {
                    console.log(response);
                    $('#recipe-container').html("")
                    $.each(response, function(key, value){
                        $('#recipe-container').append(`
                        <div class="recipe" > 
                            <img src="${value['image'] ? value['image'] : "./assets/imgs/no-image.png"}" class="recipe-img"/>
                            <span class="recipe-cat"> ${value['category']} </span>
                            <h3 class="recipe-name"> ${value['name']} </h3>
                            <button class="btn" type="button" onclick="window.location.href='./recipe-detail.php?recipe_id=${value['recipe_id']}'"> View </button>
                        </div>
                        `
                        )
                    })
                }
            })
        }
    })
}

function homeSearch() {
    $("#home-search-button").click(function ( ) {
        var homeInputValue = $("#home-search").val();
        if (homeInputValue !== "") {
            window.location.href= `/recipes.php?search_q=${homeInputValue}`
        }
    })
}