<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/index.css">
    <title>Home Page</title>
</head>
<body class="ff-montserat flow">
    <!--Header Section-->
    <header class="header container">
        <?php 
            include('./assets/components/navbar.php')
        ?>
        <p class="text-dark bg-light">
            Your way to African foods   
        </p>
        <h1 class="mg-2">
            <span class="text-primary header-span">
                A place to get all African dishes <br /> from Morocco, South African, <br /> Ghana and many more
            </span> 
        </h1>       
        <div class="mg-2 bg-white">
            <div>
                <h2 class="bold">What African Dish would you like to cook ?</h2>
                <div>
                        <input class="input" />            
                        <button class="btn" onclick="window.location.href='./recipes.html'"> Search </button>
                </div>

            </div>
        </div>
    </header>

    <!-- Main Section -->
    <main class="container">
        <h1 class="main-title"> Popular Recipes </h1>
        <div class="grid recipe-container">
            <div class="recipe" >
                <img src="./assets/imgs/bg-2.jpg" class="recipe-img"/>
                <span class="recipe-cat"> South African Dish </span>
                <h3 class="recipe-name"> Bobotie </h3>
                <button class="btn" type="button" onclick="window.location.href='./recipe-detail.php'"> View </button>
            </div>
            <div class="recipe" >
                <img src="./assets/imgs/bg-2.jpg" class="recipe-img"/>
                <span class="recipe-cat"> South African Dish </span>
                <h3 class="recipe-name"> Bobotie </h3>
                <button class="btn" type="button" onclick="window.location.href='./recipe-detail.php'"> View </button>
            </div>
            <div class="recipe" >
                <img src="./assets/imgs/bg-2.jpg" class="recipe-img"/>
                <span class="recipe-cat"> South African Dish </span>
                <h3 class="recipe-name"> Bobotie </h3>
                <button class="btn" type="button" onclick="window.location.href='./recipe-detail.php'"> View </button>
            </div>
            <div class="recipe" >
                <img src="./assets/imgs/bg-2.jpg" class="recipe-img"/>
                <span class="recipe-cat"> South African Dish </span>
                <h3 class="recipe-name"> Bobotie </h3>
                <button class="btn" type="button" onclick="window.location.href='./recipe-detail.php'"> View </button>
            </div>
            <div class="recipe" >
                <img src="./assets/imgs/bg-2.jpg" class="recipe-img"/>
                <span class="recipe-cat"> South African Dish </span>
                <h3 class="recipe-name"> Bobotie </h3>
                <button class="btn" type="button" onclick="window.location.href='./recipe-detail.php'"> View </button>
            </div>
            <div class="recipe" >
                <img src="./assets/imgs/bg-2.jpg" class="recipe-img"/>
                <span class="recipe-cat"> South African Dish </span>
                <h3 class="recipe-name"> Bobotie </h3>
                <button class="btn" type="button" onclick="window.location.href='./recipe-detail.php'"> View </button>
            </div>
        </div>
        <button id="addmore"> More Recipes </button>
    </main>
    <?php 
        include('./assets/components/footer.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/79a71d8460.js" crossorigin="anonymous"></script>
    <script src="./assets/js/main.js"> </script>
    <script src="./server/index/index.js"></script>
</body>
</html>