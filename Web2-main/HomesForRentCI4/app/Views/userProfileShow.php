<div class="container" style="margin-bottom: 30%;">
    <div class="row">
        <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div id="ui">
                    <h1 class="text-center">YOUR PROFILE</h1>
                    <form action="#" enctype="multipart/form-data" method="POST">
                        <div class="row">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" placeholder="My name" id="myname" name="myname" readonly value="<?php echo"{$userProfile[0]->myname}" ?>">
                            </div>
                            <div class="mb-3 col-12 col-md-6">
                                <label for="country" class="form-label">Country</label>
                                <input type="text" class="form-control" name="country" id="country" placeholder="Country" readonly value="<?php echo"{$userProfile[0]->country}" ?>">
                            </div>
                            <div class="mb-3 col-12 col-md-6">
                                <label for="city" class="form-label">City</label>
                                <input type="text" class="form-control" name="city" id="city" placeholder="City" readonly value="<?php echo"{$userProfile[0]->city}" ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <label for="personalintro" class="form-label">Personal introduction</label>
                                <textarea class="form-control" id="personalintro" name="personalintro" rows="9" placeholder="Please describe yourself" readonly value=""><?php echo"{$userProfile[0]->personalintro}" ?></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <label class="font-weight-bold">Picture of me</label>
                                <input type="image"  src="<?php echo"{$userProfile[0]->picofme}" ?>" class="form-control" placeholder="picture's URL" id="picofme" name="picofme" readonly value="">
                            </div>        
                        </div>
                        <div class="d-grid mt-3">
                        <a class="btn btn-primary" style="" href="<?php echo base_url().'/userProfileEdit' ?>">
                            EDIT MY PROFILE
                        </a>
                        <a class="btn btn-secondary mt-3" style="" href="<?php echo base_url().'/listAllApt' ?>">
                            GET ME OUT OF HERE
                        </a>
                    </div>  
                    </form>  
                </div>
            </div>
        <div class="col-lg-1"></div>
    </div>
</div>ñ
