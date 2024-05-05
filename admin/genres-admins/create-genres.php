<?php require "includes/header.php"; ?>



<?php

if(isset($_POST['submit'])){
  if(empty($_POST['name'])) {
    echo "<script>alert('One or more inputs are empty')</script>";
  } else {
    $name = $_POST['name'];

    $insert = $conn->prepare("INSERT INTO genres(name) VALUES(:name)");

    $insert->execute([
      ":name" => $name
    ]);
    header("location:show-genres.php");
  }
}

?>
    <div class="container-fluid">
       <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-5 d-inline">Create Genres</h5>
          <form method="POST" action="create-genres.php" enctype="multipart/form-data">
                <!-- Name input -->
                <div class="form-outline mb-4 mt-4">
                  <input type="text" name="name" id="form2Example1" class="form-control" placeholder="name" />
                 
                </div>
              
              

      
                <!-- Submit button -->
                <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">create</button>

          
              </form>

            </div>
          </div>
        </div>
      </div>
  </div>
<script type="text/javascript">

</script>
</body>
</html>