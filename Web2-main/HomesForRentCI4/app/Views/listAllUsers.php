<div class="container" style="margin-bottom: 35%;">
    <div class="row">
        <div class="col-lg-12">
            <div id="ui">
                <h1 class="text-center">ALL USERS</h1>
                <div class="row row-cols-1 row-cols-md-3 row-cols-sm-1">               
                    <?php
                        foreach($users as $usr){

                        $userDetailsRoute = base_url()."/listAllUsers/listUserDetails?id={$usr->id}";

                        $template = "
                                <div class='col-12 col-md-6 col-lg-4 m-auto'>
                                    <div class='card h-100 mt-4'>
                                        <img src='{$usr -> picofme}' class='card-img-top' alt='...'>
                                        <div class='card-body'>
                                        <a href='{$userDetailsRoute}'>
                                            <h5 class='card-title'>Details</h5></a>
                                        </div>
                                        <ul class='list-group list-group-flush'>
                                            <li class='list-group-item'>NAME: {$usr -> myname}</li>
                                            <li class='list-group-item'>COUNTRY: {$usr -> country}</li>
                                            <li class='list-group-item'>CITY: {$usr -> city}</li>
                                        </ul>
                                    </div>
                                </div>
                            ";
                        echo $template;
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>




