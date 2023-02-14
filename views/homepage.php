<?php
/**
 * Home page for demo
 *
 * File:    homepage.php
 * Access:  http://saas-mvc.test
 * Author:  Adrian Gould
 * Version: 1.0
 * Purpose: The site home page
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.png">

    <title>Document</title>

    <!-- Link to Tailwind CSS "play" -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="wrapper">
    <header>
        <img src="https://via.placeholder.com/48/993333/ffffff" alt="">
        <p>Company Name</p>
    </header>
    <nav>
        Navigation
    </nav>
    <main>
        <section>
            <h1>Home Page</h1>
            <p>
                <a href="<?= $routeToProduct; ?>">First Product</a>
            </p>
            <p>
                <a href="<?= $routes->get("homepage")->getPath(); ?>">Home</a>
            </p>
        </section>
    </main>
</div>

</body>
</html>
