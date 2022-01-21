<div class="container" style="margin-bottom: 40%;">
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <div id="ui">
                <h1 class="text-center">USER DETAILS</h1>
                <form action="#" method="POST">
                    <div class="row">
                        <div class="mb-3">
                            <label for="country" class="form-label">My Name</label>
                            <input type="text" class="form-control" name="myname" id="country" readonly value="<?php echo"{$user[0]->myname}" ?>">
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-md-6">
                            <label for="city" class="form-label">Country</label>
                            <input type="text" class="form-control" name="country" id="country" readonly value="<?php echo"{$user[0]->country}" ?>">
                        </div>
                        <div class="mb-3 col-12 col-md-6">
                            <label for="address" class="form-label">City</label>
                            <input type="text" class="form-control" name="city" id="city" readonly value="<?php echo"{$user[0]->city}" ?>">
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="mb-3">
                            <label for="picofme" class="form-label">My picture</label>
                            <input type="image" class="form-control" name="picofme" id="picofme" readonly src="<?php echo"{$user[0]->picofme}" ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3">
                            <label for="review" class="form-label">This is your personal intro</label>
                            <textarea class="form-control" name="review" id="review" rows="10" readonly value=""><?php echo"{$user[0]->personalintro}" ?></textarea>
                        </div>
                    </div>

                    <div class="d-grid">
                        <a href="<?php echo base_url().'/listAllUsers'?>" class="btn btn-primary">BACK</a>
                    </div>                            
                </form>   

            </div>
        </div>
        <div class="col-lg-1"></div>
    </div>
</div>
