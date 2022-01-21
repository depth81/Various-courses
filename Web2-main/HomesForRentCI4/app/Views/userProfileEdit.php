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


<div class="container" style="margin-bottom: 25%;">
    <div class="row">
        <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div id="ui">
                    <h1 class="text-center">EDIT YOUR PROFILE</h1>
                    <?php $validation= \Config\Services::validation();?>
                    <form action="<?php echo base_url().'/editProfile'?>" enctype="multipart/form-data" method="POST">
                        <div class="row">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" placeholder="My name" id="myname" name="myname" required>
                                <?php if(isset($validation)):?>
                                    <?php if($validation->hasError('myname')) :?>
                                        <div class="text-danger">
                                            <?= $validation->getError('myname') ?>
                                        </div>
                                    <?php endif;?>
                                <?php endif;?>
                            </div>
                            <div class="mb-3 col-12 col-md-6">
                                <label for="country" class="form-label">Country</label>
                                <input type="text" class="form-control" name="country" id="country" placeholder="Country" required>
                                <?php if(isset($validation)):?>
                                    <?php if($validation->hasError('country')) :?>
                                        <div class="text-danger">
                                            <?= $validation->getError('country') ?>
                                        </div>
                                    <?php endif;?>
                                <?php endif;?>
                            </div>
                            <div class="mb-3 col-12 col-md-6">
                                <label for="city" class="form-label">City</label>
                                <input type="text" class="form-control" name="city" id="city" placeholder="City" required>
                                <?php if(isset($validation)):?>
                                    <?php if($validation->hasError('city')) :?>
                                        <div class="text-danger">
                                            <?= $validation->getError('city') ?>
                                        </div>
                                    <?php endif;?>
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <label for="personalintro" class="form-label">Personal introduction</label>
                                <textarea class="form-control" id="personalintro" name="personalintro" rows="9" placeholder="Please describe yourself" ></textarea>
                                <?php if(isset($validation)):?>
                                    <?php if($validation->hasError('personalintro')) :?>
                                        <div class="text-danger">
                                            <?= $validation->getError('personalintro') ?>
                                        </div>
                                    <?php endif;?>
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <label class="font-weight-bold">Picture of me</label>
                                <input type="file" class="form-control" placeholder="picture's URL" id="picofme" name="picofme" required>
                            </div>        
                        </div>
                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-primary" id="btnSubmit">SAVE CHANGES</button>
                        </div>
                        <div class="d-grid mt-3">
                        <a class="btn btn-secondary" style="" href="<?php echo base_url().'/userProfileShow' ?>">
                            GET ME OUT OF HERE
                        </a>
                    </div>  
                    </form>
                </div>
            </div>
        <div class="col-lg-1"></div>
    </div>
</div>

<script type="text/javascript">

    const myname = document.getElementById("myname");
    const country = document.getElementById("country");
    const city = document.getElementById("city");
    const personalintro = document.getElementById("personalintro");
    const picofme = document.getElementById('picofme');
    const btnSubmit = document.getElementById("btnSubmit");
    
    btnSubmit.addEventListener("click", function(e){
        if(myname.value === "" || country.value === "" || city.value === "" || personalintro.value === "" || picofme.value === ""){
            alertify.error('All fields are required');
            e.preventDefault();
        }
    });

</script>