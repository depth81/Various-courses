<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    
    <style type="text/css">
        body{
            background-image: url("<?php echo base_url();?>/assets/img/city2.jpg");
            background-position: center center;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
            height: 100%;
            font-size: 18px;
            font-family: 'Libre Baskerville', serif;
            line-height: 20px;
            color: #b1b4bd;
            background-color: #323a45;
            background-repeat:no-repeat;
            background-size: cover;
        }
    
        .global-container{
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #0db8de;
            margin-top: 50px;
        }

        form{
            padding-top: 10px;
            font-size: 14px;
            margin-top: 30p;
            line-height: 50px;

        }

        .login-form{
            width: 450px;
            height: 550px;
            margin: 20px;
            background: #2E4053;
            border-radius: 10px;
            opacity: 0.9;
        }

        input[type="email"],
        input[type="password"]{
            /* background: #1a2226; */
            border: 2px solid #0db8de;
            border-radius: 10px;
            margin-bottom: 25px;
        }

        .card-title{
            font-weight: 900;
            padding-top: 20px;
        }

        .btn{
            background: #0db8de;
            font-size: 14px;
            border-radius: 10px;
        }

        .signup{
            text-align: left;
            padding-top: 0px;
        }

    </style>

</head>
<body>

    <div class="global-container">
    <?php $validation= \Config\Services::validation();?>
        <div class="card login-form">
            <div class="card-body">
                <h1 class="card-title text-center">LOGIN</h1>
                <div class="card-text">
                    <form method="POST" action="<?php echo base_url().'/verifyLogin'?>">
                        <div class="form-group">
                            <label for="email">EMAIL</label>
                            <input type="email" class="form-control form-control-sm" id="email" name="email" required/>
                            <?php if(isset($validation)):?>
                                <?php if($validation->hasError('email')) :?>
                                    <div class="text-danger">
                                        <?= $validation->getError('email') ?>
                                    </div>
                                <?php endif;?>
                            <?php endif;?>
                        </div>
                        <div class="form-group">
                            <label for="password">PASSWORD</label>
                            <a href="#" style="float: right;font-size: 12px;">Forgot password?</a>
                            <input type="password" class="form-control form-control-sm" id="password" name="password" required/>
                            <?php if(isset($validation)):?>
                                <?php if($validation->hasError('password')) :?>
                                    <div class="text-danger">
                                        <?= $validation->getError('password') ?>
                                    </div>
                                <?php endif;?>
                            <?php endif;?>
                        </div>
                        <div class="myButton">
                            <button type="submit" class="btn btn-primary btn-block" id="btnSubmit">
                                Sign in
                            </button>
                        </div>
                        <div class="signup">
                            Don't have an account? <a href="<?php echo base_url().'/register'?>">Create One</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-light text-center text-lg-start mt-5 fixed-bottom">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: #D6DBDF; color: blueviolet;">
            © 2021 Copyright:
            <a class="text-dark" href="https://mdbootstrap.com/">pauloenrique.com</a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>


    <script type="text/javascript">
        
        const email = document.getElementById("email");
        const password = document.getElementById("password");
        const submit = document.getElementById("btnSubmit");

        submit.addEventListener("click", function(e){
            if(email.value === "" || password.value === ""){
                alertify.error('All fields are required');
                e.preventDefault();
            }else{
                let regex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
                if(!regex.test(email.value)){
                    alertify.error('Enter a valid email address');
                    e.preventDefault();
                }       
            }
        });

    </script>


</body>
</html>