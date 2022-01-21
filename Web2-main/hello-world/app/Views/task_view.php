<div class="container">
    <div class="row">

        <?php

        foreach($tasks as $item){
            
            $deleteRoute = base_url()."/deleteTask?id={$item->id}";
            $updateRoute = base_url()."/updateTask?id={$item->id}";
            $template = "
                <div class='col-12 col-sm-12 col-md-6 col-lg-4'>
                        <div class='card' style='width: 18rem;'>
                            <img src='{$item -> imageurl}' class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <h5 class='card-title'>{$item -> task}</h5>
                                <p class='card-text'>{$item -> description}</p>
                                <a href='{$deleteRoute}' class='btn btn-danger'>DELETE</a>
                                <a href='{$updateRoute}' class='btn btn-info'>UPDATE</a>
                            </div>
                        </div>
                </div>";
            echo $template;
            }
        ?>

    </div>
</div>
