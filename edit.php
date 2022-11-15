<?php
    include 'functions.php';

    $db = include 'database/start.php';


    $id=$_GET['id'];
    $post = $db->getOne("posts", $id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create PHP</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
   <div class="container">
       <div class="row">
           <div class="col-md-8 offet-md-2">
           <form action="update.php?id=<?=$post["id"];?>" method="POST">
            <input type="hidden" name="id">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" class="form-control" value="<?=$post["title"]; ?>">
            </div>
        <div class="form-group">
            <button class="btn btn-warning">Edit Post</button>
        </div>
    </form>
           </div>
       </div>
   </div>
</body>
</html>