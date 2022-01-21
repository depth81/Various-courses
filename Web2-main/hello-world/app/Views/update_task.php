<div class="container">
<img src="<?php echo base_url();?>/assets/img/php_img.jpg" alt="" srcset="" style="width: 200px;">
    <form method="POST" action="<?php echo base_url() ?>/updateEditedTask?id=<?php echo $task->id ?>" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="task" class="form-label">Task</label>
            <input type="text" class="form-control" id="task" name="task" value="<?php echo $task -> task; ?>" aria-describedby="task">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label" >Description</label>
            <input type="text" class="form-control" id="description" name="description" value="<?php echo $task -> description; ?>">
        </div>
        <div class="mb-3">
            <label for="imageurl" class="form-label">Image's URL</label>
            <input type="text" class="form-control" id="imageurl" name="imageurl" value="<?php echo $task -> imageurl; ?>">
        </div>
        <button type="submit" class="btn btn-primary">UPDATE TASK</button>
    </form>
</div>