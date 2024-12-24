<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<title>File test.php</title>
</head>
<body>
<form method="post">
  <div class ="container mt-5">
  เริ่มด้วยเลข: <input type="number" name = "name1">
  จบด้วยเลข: <input type="number" name = "name2">
  <input type="submit" class="btn btn-primary" value="แสดงผล">
</form>
  
<?php
    if (isset($_POST["name1"]) && isset($_POST["name2"])) {
        $start = intval($_POST["name1"]);
        $end = intval($_POST["name2"]);
        for ($i = $start; $i <= $end; $i++) {
          if($i%2==0){
            $sol = "เป็นเลขคู่";
            ?>
            <div class ="row">
      
            <div class = "h2 col "><?php echo $i?>   <?php echo $sol ?> </div>
            </div>
            <?php
          }else{
            $sol = "เป็นเลขคี่"; 
            ?>
            <div class ="row">

            <div class = "h2 col "><?php echo $i?>   <?php echo $sol ?> </div>
            </div>
            <?php
        }

      }
  }
  ?>

</div>
</div>
</body>
</html>