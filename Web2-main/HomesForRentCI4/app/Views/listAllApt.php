<div class="container" style="margin-bottom: 50%;">
    <div class="row">
        <div class="col-lg-12">
            <div id="ui">
                <h1 class="text-center">ALL PROPERTIES</h1>
                <div class="row row-cols-1 row-cols-md-3 row-cols-sm-1">               
                    <?php
                        foreach($apartments as $apt){

                        $template = "
                                <div class='col-12 col-md-6 col-lg-4 m-auto'>
                                    <div class='card h-100 mt-4'>
                                        <img src='{$apt -> pic1}' class='card-img-top' alt='...'>
                                        <div class='card-body'>
                                        <a href='http://localhost:8080/HomesForRentCI4/public/listAllApt/listAllAptDetails/{$apt -> id}'>
                                            <h5 class='card-title'>Details</h5></a>
                                        </div>
                                        <ul class='list-group list-group-flush'>
                                            <li class='list-group-item'>COUNTRY: {$apt -> country}</li>
                                            <li class='list-group-item'>CITY: {$apt -> city}</li>
                                            <li class='list-group-item'>PRICE: {$apt -> price}</li>
                                        </ul>
                                    </div>
                                    <div class='d-grid'>
                                        <a href='' class='btn btn-primary'>I WANT IT!</a>
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




