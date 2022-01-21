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

    <div class="container" style="margin-bottom: 45%;">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10" >
                <div id="ui" >
                    <h1 class="text-center">REGISTRATION FORM</h1>
                    <?php $validation= \Config\Services::validation();?>
                    <form class="form-group" method="POST" action="<?php echo base_url().'/addUser'?>">
                        <div class="row">
                            <div class="col">
                                <label for="">Nickname:</label>
                                <input type="text" name="nickname" id="nickname" class="form-control" placeholder="Please write a nickname" required>
                                <?php if(isset($validation)):?>
                                    <?php if($validation->hasError('nickname')) :?>
                                        <div class="text-danger">
                                            <?= $validation->getError('nickname') ?>
                                        </div>
                                    <?php endif;?>
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="">Email:</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email address" required>
                                <?php if(isset($validation)):?>
                                    <?php if($validation->hasError('email')) :?>
                                        <div class="text-danger">
                                            <?= $validation->getError('email') ?>
                                        </div>
                                    <?php endif;?>
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="">Password:</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                                <?php if(isset($validation)):?>
                                    <?php if($validation->hasError('password')) :?>
                                        <div class="text-danger">
                                            <?= $validation->getError('password') ?>
                                        </div>
                                    <?php endif;?>
                                <?php endif;?>
                            </div>
                            <div class="col">
                                <label for="">Confirm Password:</label>
                                <input type="password" name="retype" id="retype" class="form-control" placeholder="Retype the password" required>
                                <?php if(isset($validation)):?>
                                    <?php if($validation->hasError('retype')) :?>
                                        <div class="text-danger">
                                            <?= $validation->getError('retype') ?>
                                        </div>
                                    <?php endif;?>
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="mb-3">
                                <label class="form-label">ROLE</label>
                                <select class="form-select" aria-label="Default select example" id="role" name="role" required>
                                    <option value="HOST" selected>HOST</option>
                                    <option value="GUEST">GUEST</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary" id="btnSubmit">SEND</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-1"></div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <script type="text/javascript">
        
        const nickname = document.getElementById("nickname");
        const email = document.getElementById("email");
        const password = document.getElementById("password");
        const retype = document.getElementById("retype");
        const btnSubmit = document.getElementById("btnSubmit");

        btnSubmit.addEventListener("click", function(e){
            if(nickname.value === "" || email.value === "" || password.value === "" || retype.value === ""){
                alertify.error('All fields are required');
                e.preventDefault();
            }else{
                let regex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
                if(!regex.test(email.value)){
                    alertify.error('Enter a valid email address');
                    e.preventDefault();        
                }else{
                    if(!(password.value === retype.value)){
                        alertify.error("The passwords do not match");
                        e.preventDefault();
                    }
                }
            }
        });

    </script>

</body>
</html>