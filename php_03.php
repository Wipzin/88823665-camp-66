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
  ใส่ตัวเลข: <input type="number" name = "name">
  <input type="submit" class="btn btn-primary" value="แสดงสูตรคูณ">
</form>
  
<?php
    if (isset($_POST["name"]) && is_numeric($_POST["name"])) {
        $number = intval($_POST["name"]);
        echo "<h1>สูตรคูณแม่ $number</h1>";
        for ($i = 1; $i <= 12; $i++) {
            $result = $i * $number;
            echo "<p>$number x $i = $result</p>";
        }
    }
    ?>
</div>
</div>
</body>
</html>