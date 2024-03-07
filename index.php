<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="logo.png" alt="Logo" width="30" height="30" class="d-inline-block align-top">
                My Website
            </a>
            <form class="d-flex mx-auto">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-custom" type="submit">Search</button>
            </form>
            <a class="btn btn-custom" href="#">Inloggen</a>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="nav-link" href="#">Link 1</a>
            <a class="nav-link" href="#">Link 2</a>
            <a class="nav-link" href="#">Link 3</a>
            <a class="nav-link" href="#">Link 4</a>
    </nav>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="text-center">
                    <h2>Boek jouw ideale vakantiehuis in Zeeland</h2>
                    <h3>Zoek voor je vakantiehuis hieronder</h3>
                </div>
                <form action="search.php" method="GET">
                    <div class="row mb-3">
                        <div class="col-md-12"> <!-- Modified: Changed col-md-6 to col-md-12 -->
                            <label for="location" class="form-label">Location</label>
                            <select class="form-select" id="location" name="location">
                                <option value="option1">Option 1</option>
                                <option value="option2">Option 2</option>
                                <option value="option3">Option 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12"> <!-- Modified: Changed col-md-6 to col-md-12 -->
                        <div class="row">
                            <div class="col-md-6">
                                <label for="check-in" class="form-label">Check-in</label>
                                <input type="date" class="form-control" id="check-in" name="check-in">
                            </div>
                            <div class="col-md-6">
                                <label for="check-out" class="form-label">Check-out</label>
                                <input type="date" class="form-control" id="check-out" name="check-out">
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

</body>