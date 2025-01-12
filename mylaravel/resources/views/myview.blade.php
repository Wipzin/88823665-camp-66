<h1> My view </h1>
<?php echo $value_id; ?>
{{ $value_id; }}

<form action = "{{url('mycontroller')}}" method = "post">
  @csrf
  <input type = "test" name = "myinput">
  <button type ="submit">
    Submit
  </button>
</form>
<?php for($i=0;$i<12;$i++){?>
  <h1>{{$i}}</h1>
<?php } ?>