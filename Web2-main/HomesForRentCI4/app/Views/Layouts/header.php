<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/styles.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>

</head>

<body>

    <header>
        <div class="header-background">
        <div id="nav" class="sticky-nav">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <div class="text-end m-2">
                        <img src="<?php echo base_url();?>/assets/img/logo.jpg" alt="" width="50">
                    </div>
                    <a class="navbar-brand" href="">Homes For Rent</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo base_url();?>/listAllApt">All Apartments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url();?>/listAllUsers">All users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url();?>/userProfileShow">My profile</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Hosts
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="<?php echo base_url();?>/ownerListApt">See your apartments</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url();?>/ownerAddApt">Add and apartment</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact us</a>
                        </li>
                        
                    </ul>
                    <a href="<?php echo base_url();?>/logout" id="btnLogOut" class="" >LOG OUT</a> 
                    </div>
                </div>
            </nav>
        </div>
    </div>
    </header>

