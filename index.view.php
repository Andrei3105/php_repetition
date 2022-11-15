<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">My block</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

              <li class="nav-item">
                <a class="nav-link" href="index.php">Main page</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container">
          <div class="row">
              
              <div class="col md-8 offset-md-2">
                <a href="create.php" class="btn btn-success">Add post</a>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">title</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach($posts as $post): ?>
                      <tr>
                        <th scope="row"><?php echo $post['id'];?></th>
                        <td><a href="show.php?id=<?php echo $post['id'];?>"><?php echo $post['title'];?></a></td>
                        <td>
                            <a href="edit.php?id=<?php echo $post['id'];?>" class="btn btn-warning">Edit</a>
                            <a href="delete.php?id=<?php echo $post['id'];?>" class="btn btn-danger">Delete</a>
                        </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                  </table>
              </div>
          </div>
      </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>