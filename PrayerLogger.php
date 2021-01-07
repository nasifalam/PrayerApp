<?php
// Start the session
session_start();
?>

<html>
<head>
</head>
<div class="header">
<?php include 'Header.php';?>
</div>




<body>

  <center>
  <h1> Prayer Logger </h1>
  <h4> Today, it is <span id ="date"> </span>.</h4>
  </center>
  <br>
  <form method="post">

  <div class="container p-3 my-3 bg-light text-dark">
    <h4>Fajr</h4>

    <div class="form-group">

  <label for="fajr">Performed All Prayers:</label>

  <select class="form-control" id="fajr" name="fajr" onchange="this.form.submit()">
    <option value="" disabled selected>--select--</option>
    <option <?php if(isset($_POST['fajr'])) {if ($_POST['fajr'] == 'Yes') { ?>selected="true"  <?php }}; ?>value="Yes">Yes</option>
    <option <?php if(isset($_POST['fajr'])) {if ($_POST['fajr'] == 'No') { ?>selected="true"  <?php }}; ?>value="No">No</option>

  </select>
</div>

<?php
if(isset($_POST['fajr'])) {

$fajr=$_POST['fajr'];
    if($fajr=="No"){


      echo "<div class='form-group'>

      <label for='missingreasonfajr'>Reasoning behind the missed prayer:</label>

        <select class='form-control' id='missingreasonfajr' name='missingreasonfajr' onchange='this.form.submit()'>
          <option value='' disabled selected>--select--</option>

          <option value='Yes'>Yes</option>


        </select>
      </div>";
      echo "<label for='fajr'>Which prayers did you perform?
      </label><br><div class='form-check form-check-inline'>
      <input class='form-check-input' type='checkbox' id='tworakahsunah' value='tworakahsunah'> <br>
       <label class='form-check-label' for='tworakahsunah'>Sunnah (2 Rakaats)</label>
</div>
<label for='fajr'>Which prayers did you perform?
</label><br><div class='form-check form-check-inline'>
<input class='form-check-input' type='checkbox' id='tworakahsunah' value='tworakahsunah'> <br>
 <label class='form-check-label' for='tworakahsunah'>Sunnah (2 Rakaats)</label>
</div>";



          }
     else if($fajr=="Yes"){
              echo  "Great Stuff- Continue like this!";
          }

}






?>
</form>
  </div>
  <div class="container p-3 my-3 bg-primary text-white">
    <h4>Zuhr</h4>
    <div class="form-group">
  <label for="sel1">Performed All Prayers:</label>
  <select class="form-control" id="sel1">
    <option>Yes</option>
    <option>No</option>
  </select>
</div>
  </div>

  <div class="container p-3 my-3 bg-primary text-white">
    <h4>Asr</h4>
    <div class="form-group">
  <label for="sel1">Performed All Prayers:</label>
  <select class="form-control" id="sel1">
    <option>Yes</option>
    <option>No</option>
  </select>
</div>
  </div>

  <div class="container p-3 my-3 bg-primary text-white">
    <h4>Maghrib</h4>
    <div class="form-group">
  <label for="sel1">Performed All Prayers:</label>
  <select class="form-control" id="sel1">
    <option>Yes</option>
    <option>No</option>
  </select>
  </div>  </div>

  <div class="container p-3 my-3 bg-primary text-white">
    <h4>Isha</h4>
    <div class="form-group">
  <label for="sel1">Performed All Prayers:</label>
  <select class="form-control" id="sel1">
    <option>Yes</option>
    <option>No</option>
  </select>
</div>
  </div>



<script>

function clockTick()    {
  var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
  var date = new Date();
     // alert("hi");
     document.getElementById('date').innerHTML= " "+ date.toLocaleDateString("en-US",options);
   }

   setInterval(function(){clockTick();}, 1000);//setInterval(clockTick, 1000); will also work

</script>
</body>

</html>
