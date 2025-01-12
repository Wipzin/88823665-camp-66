<h1> สูตรคูณ </h1>
<?php echo $value_id; ?>
{{ $value_id; }}

<form action = "{{url('mycontroller')}}" method = "post">
  @csrf
  ใส่ตัวเลข: <input type = "test" name = "name">
  <button type ="submit">
    Submit
  </button>
</form>
<?php if (isset($_POST["name"]) && is_numeric($_POST["name"])) {
  $number = intval($_POST["name"]);
  echo "<h3>สูตรคูณแม่ $number</h3>";
  for ($i = 1; $i <= 12; $i++) {
      $result = $i * $number;
      echo "<p>$number x $i = $result</p>";
  }
}
 ?>