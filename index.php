<?php include("db.php")?>

<?php include("includes/header.php") ?>

<div class="contenedor p-4">

    <div class="row">
    <div class="col-md-4">
        <div class="card card-body">
            <form action="save_task.php" method="POST">
                <div class="form-group">
                    <input type="text" name="title" class="form-control" placeholder="task tile" autofocus>
                </div>
                <div class="form-group">
                    <textarea name="description"  rows="2" class="form-control" placeholder="task description"></textarea>
                </div>
                <input type="submit" class="btn btn-success btn-block" name="save_task" value="Save Task">
            </form>
        </div>
    </div>
    <div class="col-md-8">
    
    </div>
    </div>

</div>

<?php include("includes/footer.php") ?>

