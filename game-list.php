<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Game Buddy</title>
        <script src="https://unpkg.com/react@16.7.0/umd/react.production.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Dosis:400,700" rel="stylesheet">
        <link href="./styles/game-cards.css" rel="stylesheet">
        <link href="./styles/rating.css" rel="stylesheet">
        <link href="./main.css" rel="stylesheet">
        <link rel="stylesheet" href="https://bootswatch.com/4/cyborg/bootstrap.css" type="text/css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand"><img src="images/favicon.png" width="40" height="40">  Game Buddy</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./game-list.php">Games<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./developers.php">Devs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./profile.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./login.php">Login/Sign up</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search Games . . .">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <!-- Main Body -->
        <div class='row'>
            <div class='col'>
                
            <div class='col'>
                <div class="form-group">
                <label for="sortSelect"></label>
                <select class="form-control" id="sortSelect" onChange="sortGames()">
                    <option selected="">Default</option>
                    <option value="1">Newest</option>
                    <option value="2">Oldest</option>
                    <option value="3">Name</option>
                    <option value="4">Rating</option>
                </select>
              </div>
        </div>
    </div>
            <div class='col'></div>
            <div class='col'></div>
            <div class='col'></div>
            <div class='col'></div>
            <div class='col'></div>
            
        
        </div>
        
          <!-- <div class="form-group" id="filteredBy" onChange="sortGames()">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                <label class="custom-control-label" for="customCheck1">None</label>
              </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck2" disabled="">
              <label class="custom-control-label" for="customCheck2">PC</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck3" disabled="">
              <label class="custom-control-label" for="customCheck3">Xbox One</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck4" disabled="">
                <label class="custom-control-label" for="customCheck4">PS4</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck5" disabled="">
                <label class="custom-control-label" for="customCheck5">Switch</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck6" disabled="">
                <label class="custom-control-label" for="customCheck6">MacOS</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck7" disabled="">
                <label class="custom-control-label" for="customCheck7">Linux</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck8" disabled="">
                <label class="custom-control-label" for="customCheck8">iOS</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck9" disabled="">
                <label class="custom-control-label" for="customCheck9">Android</label>
            </div>
          </div> -->
        <div id="game-card-list"></div>
        <div class="footer-basic">
            <footer>
                <!-- <div class="social"><a href="#"><i class="icon ion-social-instagram"></i><ion-icon name="ion-social-instagram"></ion-icon></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div> -->
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#">Home</a></li>
                    <li class="list-inline-item"><a href="#">Services</a></li>
                    <li class="list-inline-item"><a href="#">About</a></li>
                    <li class="list-inline-item"><a href="#">Terms</a></li>
                    <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                </ul>
                <p class="copyright">Game Buddy © 2019</p>
            </footer>
          </div>
        <script src="./scripts/game-cards.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
