<div class="container" style="margin-bottom: 25%;">
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <div id="ui">
                <h1 class="text-center">APARTMENT's DETAILS</h1>
                <form action="#" method="POST">
                    <div class="row">
                        <div class="mb-3 col-12 col-md-6">
                            <label for="country" class="form-label">Country</label>
                            <input type="text" class="form-control" name="country" id="country" readonly value="<?php echo"{$apartmentDetails[0]->country}" ?>">
                        </div>
                        <div class="mb-3 col-12 col-md-6">
                            <label for="city" class="form-label">City</label>
                            <input type="text" class="form-control" name="city" id="city" readonly value="<?php echo"{$apartmentDetails[0]->city}" ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-md-6">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" id="address" readonly value="<?php echo"{$apartmentDetails[0]->address}" ?>">
                        </div>
                        <div class="mb-3 col-12 col-md-6">
                            <label for="location2" class="form-label">Location</label>
                            <input type="text" class="form-control" name="location2" id="location2" readonly value="<?php echo"{$apartmentDetails[0]->location}" ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-md-6">
                            <label for="address" class="form-label">Rooms</label>
                            <input type="number" class="form-control" name="rooms" id="rooms" readonly value="<?php echo"{$apartmentDetails[0]->rooms}" ?>">
                        </div>
                        <div class="mb-3 col-12 col-md-6">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" class="form-control" name="price" id="price" readonly value="<?php echo"{$apartmentDetails[0]->price}" ?>"> 
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-12 col-md-12">
                            <label for="myCarouselPics" class="form-label">Other pictures</label>
                            <div id="myCarouselPics" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?php echo"{$apartmentDetails[0]->pic1}" ?>" class="d-block w-100" alt="Not found...=(" style="height:600px" >
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo"{$apartmentDetails[0]->pic2}" ?>" class="d-block w-100" alt="Not found...=(" style="height:600px" >
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo"{$apartmentDetails[0]->pic3}" ?>" class="d-block w-100" alt="Not found...=(" style="height:600px" >
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo"{$apartmentDetails[0]->pic4}" ?>" class="d-block w-100" alt="Not found...=(" style="height:600px">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo"{$apartmentDetails[0]->pic5}" ?>" class="d-block w-100" alt="Not found...=(" style="height:600px">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#myCarouselPics" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#myCarouselPics" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="mb-3">
                            <label for="review" class="form-label">This is your review</label>
                            <textarea class="form-control" name="review" id="review" rows="10" readonly value=""><?php echo"{$apartmentDetails[0]->review}" ?></textarea>
                        </div>
                    </div>

                    <div class="d-grid">
                        <a href="<?php echo base_url().'/listAllApt'?>" class="btn btn-primary">BACK</a>
                    </div>                            
                </form>   

            </div>
        </div>
        <div class="col-lg-1"></div>
    </div>
</div>






