<div class="container">
<img src="<?php echo base_url();?>/assets/img/php_img.jpg" alt="" srcset="" style="width: 200px;">
    <form method="POST" action="<?php echo base_url().'/addTask' ?>" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="task" class="form-label">Task</label>
            <input type="text" class="form-control" id="task" name="task" aria-describedby="task">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label" >Description</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>
        <div class="mb-3">
            <label for="imageTask" class="form-label">Image</label>
            <input type="file" class="form-control" id="imageTask" name="imageTask">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>