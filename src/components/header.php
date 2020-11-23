<?php

echo '
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="../css/design.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                   
                  <a class="navbar-brand" href="#"><img src="https://drive.google.com/thumbnail?id=1W-lr3fEXaWfOyUdk132r-kkiQMeBsKWO" alt="logo" width="50px"></a>
                  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                      <a class="nav-link" href="../views/categories.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../index.php">All Recipes</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../views/about.php">About</a>
                    </li>
                  </ul>
                  <form action="../views/search.php" method="POST"class="form-inline my-2 my-lg-0">
                    <input name="busqueda" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>
            </div>
        </nav>
    </header>
</body>
';

?>