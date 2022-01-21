<div class="container" style="margin-bottom: 30%;">
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <div id="ui">
                <h1 class="text-center">EDIT THE APARTMENT</h1>
                <?php $validation= \Config\Services::validation();?>
                <form action="<?php echo base_url();?>/saveEdition/<?php echo"{$editApt[0]->id}" ?>"  method="POST" enctype="multipart/form-data" >
                    <div class="row">
                        <div class="mb-3 col-12 col-md-6">
                            <label for="country" class="form-label">Country</label>
                            <input type="text" class="form-control" name="country" placeholder="Country" id="country" value="<?php echo"{$editApt[0]->country}" ?>"  required>
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
                            <input type="text" class="form-control" name="city" placeholder="City" id="city" value="<?php echo"{$editApt[0]->city}" ?>" required>
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
                        <div class="mb-3 col-12 col-md-6">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" placeholder="Address" id="address" value="<?php echo"{$editApt[0]->address}" ?>" required>
                            <?php if(isset($validation)):?>
                                <?php if($validation->hasError('address')) :?>
                                    <div class="text-danger">
                                        <?= $validation->getError('address') ?>
                                    </div>
                                <?php endif;?>
                            <?php endif;?>
                        </div>
                        <div class="mb-3 col-12 col-md-6">
                            <label for="location2" class="form-label">Location</label>
                            <input type="text" class="form-control" name="location2" placeholder="Location" id="location2" value="<?php echo"{$editApt[0]->location}" ?>" required>
                            <?php if(isset($validation)):?>
                                <?php if($validation->hasError('location2')) :?>
                                    <div class="text-danger">
                                        <?= $validation->getError('location2') ?>
                                    </div>
                                <?php endif;?>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-md-6">
                            <label for="address" class="form-label">Rooms</label>
                            <input type="number" class="form-control" name="rooms" placeholder="Number of rooms" id="rooms" value="<?php echo"{$editApt[0]->rooms}" ?>" required>
                            <?php if(isset($validation)):?>
                                <?php if($validation->hasError('rooms')) :?>
                                    <div class="text-danger">
                                        <?= $validation->getError('rooms') ?>
                                    </div>
                                <?php endif;?>
                            <?php endif;?>
                        </div>
                        <div class="mb-3 col-12 col-md-6">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" class="form-control" name="price" placeholder="Price per night" id="price" value="<?php echo"{$editApt[0]->price}" ?>" required>
                            <?php if(isset($validation)):?>
                                <?php if($validation->hasError('price')) :?>
                                    <div class="text-danger">
                                        <?= $validation->getError('price') ?>
                                    </div>
                                <?php endif;?>
                            <?php endif;?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-12">
                            <label for="pic1" class="form-label">Main picture</label>
                            <input type="file" class="form-control" name="pic1" placeholder="picture's URL" id="pic1" value="" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12">
                            <label for="pic2" class="form-label">Picture 2</label>
                            <input type="file" class="form-control" name="pic2" placeholder="picture's URL" id="pic2" value="" required>
                        </div>
                        <div class="mb-3 col-12">
                            <label for="pic3" class="form-label">Picture 3</label>
                            <input type="file" class="form-control" name="pic3" placeholder="picture's URL" id="pic3" value="" required>
                        </div>
                        <div class="mb-3 col-12">
                            <label for="pic4" class="form-label">Picture 4</label>
                            <input type="file" class="form-control" name="pic4" placeholder="picture's URL" id="pic4" value="" required>
                        </div>
                        <div class="mb-3 col-12">
                            <label for="pic5" class="form-label">Picture 5</label>
                            <input type="file" class="form-control" name="pic5" placeholder="picture's URL" id="pic5" value="" required>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="mb-3">
                            <label for="review" class="form-label">Review</label>
                            <textarea class="form-control" name="review" id="review" rows="10" placeholder="Please write a short review" required><?php echo"{$editApt[0]->review}" ?></textarea>
                            <?php if(isset($validation)):?>
                                <?php if($validation->hasError('review')) :?>
                                    <div class="text-danger">
                                        <?= $validation->getError('review') ?>
                                    </div>
                                <?php endif;?>
                            <?php endif;?>
                        </div>
                    </div>

                    <div class="d-grid">
                        <button type="submit" id="btnSubmit" class="btn btn-success">SAVE CHANGES</button>
                    </div>  
                    <div class="d-grid mt-3">
                        <a class="btn btn-secondary" style="" href="<?php echo base_url().'/ownerListApt' ?>">
                            GET ME OUT OF HERE
                        </a>
                    </div>  
                </form>
            
            </div>
        </div>
        <div class="col-lg-1"></div>
    </div>
</div>
</div>

<script type="text/javascript">

    const country = document.getElementById("country");
    const city = document.getElementById("city");
    const address = document.getElementById("address");
    const location2 = document.getElementById("location2");
    const rooms = document.getElementById("rooms");
    const price = document.getElementById("price");
    const review = document.getElementById("review");
    const pic1 = document.getElementById('pic1');
    const pic2 = document.getElementById('pic2');
    const pic3 = document.getElementById('pic3');
    const pic4 = document.getElementById('pic4');
    const pic5 = document.getElementById('pic5');
    const btnSubmit = document.getElementById("btnSubmit");

    btnSubmit.addEventListener("click", function(e){
        if(country.value === "" || city.value === "" || address.value === "" || location2.value === "" || rooms.value === "" || price.value === "" || review.value === "" || pic1.value === "" || pic2.value === "" || pic3.value === "" || pic4.value === "" || pic5.value === "" ){
            alertify.error('All fields are required');
            e.preventDefault();
        }
    });

</script>

