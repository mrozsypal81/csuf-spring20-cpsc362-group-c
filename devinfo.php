  <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Buddy</title>
    <script src="https://unpkg.com/react@16.7.0/umd/react.production.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,700" rel="stylesheet">
    <link href="./styles/game-info.css" rel="stylesheet">
    <link href="./gameinfo.css" rel="stylesheet">
    <link href="https://vjs.zencdn.net/7.7.5/video-js.css" rel="stylesheet" />
    <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
    <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
    <script src="https://code.iconify.design/1/1.0.5/iconify.min.js"></script>
    
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand"><img src="images/favicon.png" width="40" height="40"> Game Buddy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02"
            aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./index.php">Home</a>
                </li>
                <li class="nav-item">
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
    <div id="game-info" class="card bg-dark text-black border-0">
        <div class="card-img-overlay">
            <div class="row transparent_blackness ">
                <div id="data-column" class="col-md-6">
                    <div class="row"><h2 id="dev-title"></h2><img id="logoSpace"></img></div>
                    <p id="dev-description"></p>
                    
                </div>
                <div id="media-column" class="col-md-6"></div>
            </div>  
            <div class="row transparent_blackness ">
            <link href="./styles/devcards.css" rel="stylesheet">
            <div id="game-card-list"></div>  </div>        
        </div>
    </div>
    <script src="./scripts/dev-info.js"></script>
    <script src="https://code.iconify.design/1/1.0.5/iconify.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
</body>
</html>