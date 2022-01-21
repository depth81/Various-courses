<div class="container" style="margin-bottom: 45%;">
    <div class="row">
        <div class="col-lg-12">
            <div id="ui">
                <h1 class="text-center">YOUR PROPERTIES</h1>
                <div class="row row-cols-1 row-cols-md-3 row-cols-sm-1">               
                    <?php
                        foreach($apartments as $apt){

                        $deleteRoute = base_url()."/deleteApartment?id={$apt->id}";

                        $template = "
                                <div class='col-12 col-md-6 col-lg-4 m-auto'>
                                    <div class='card h-100 mt-4'>
                                        <img src='{$apt -> pic1}' class='card-img-top' alt='...'>
                                        <div class='card-body'>
                                        <a href='http://localhost:8080/HomesForRentCI4/public/ownerListApt/details/{$apt -> id}'>
                                            <h5 class='card-title'>Details</h5></a>
                                        </div>
                                        <ul class='list-group list-group-flush'>
                                            <li class='list-group-item'>COUNTRY: {$apt -> country}</li>
                                            <li class='list-group-item'>CITY: {$apt -> city}</li>
                                            <li class='list-group-item'>PRICE: {$apt -> price}</li>
                                        </ul>
                                        <div class='card-body'>
                                            <a href='http://localhost:8080/HomesForRentCI4/public/ownerListApt/editForm/{$apt -> id}'>
                                                <button type='button' class='btn btn-lg btn-success'>EDIT</button>
                                            </a>
                                            <a href='{$deleteRoute}'>
                                                <button type='button' class='btn btn-lg btn-danger'>DELETE</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            ";
                        echo $template;
                        }
                    ?>
                </div>
                <div class="row mt-5 m-0">
                    <a href="http://localhost:8080/HomesForRentCI4/public/ownerAddApt" class="btn btn-lg btn-primary">ADD A PROPERTY</a>
                </div> 
            </div>
        </div>
    </div>
</div>




