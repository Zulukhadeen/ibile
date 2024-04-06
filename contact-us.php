<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Ibile </title>
</head>
<body>
    <main>
        <h2> Contact the Team </h2>
        <p> Got any questions about the recipes on our platform ? We're here to help </p>
        <section>

        <form>
            <div>
                <div>
                    <label for="name"> FirstName </label>
                    <input type="text" id="name" required minlength="3" maxlength="15" size="15" />
                </div>

                <div>
                    <label for="email"> Email </label>
                    <input type="text" id="email" required minlength="3" maxlength="15" size="15" />
                </div>
            </div>
            <div>
                <label for="question"> Tell us your question </label>
                <input rows="5" cols="3" id="question" name="question" />
            </div>
        </form>
        </section>
    </main>
    <?php 
        include('./assets/components/footer.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/79a71d8460.js" crossorigin="anonymous"></script>
</body>
</html>