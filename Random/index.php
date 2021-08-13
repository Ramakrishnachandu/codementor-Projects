<?php 
  require_once "./header.php"; 
?>
<div class="slide">
  <em>
<marquee width="100%" direction="left" >
<h1>Random Number Generator by Ramakrishna Chandu</h1>
</marquee>
</em>
</div>
<div style="width:50%;height:0;padding-bottom:60%;position:relative;"><iframe src="https://giphy.com/embed/3ohjUS2N88LGAjLypO" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div>



<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="row">
    <div class="col">
      <label for="dice" class="form-label">Number of dice:</label>
      <input type="number" class="form-control" value="1" id="dice" name="dice" min="1" max="5">
    </div>
    <div class="col">
      <label for="dice" class="form-label">Sides:</label>
      <select class="form-select" id="sides" name="sides">
        <option value="4">4</option>
        <option selected value="6">6</option>
        <option value="8">8</option>
        <option value="10">10</option>
        <option value="12">12</option>
        <option value="20">20</option>
      </select>
    </div>

    <div id="subBtn">
      <button type="submit" class="btn btn-primary mt-3 col-12" name="submit">Roll the dice!</button>
    </div>

  </div>
</form>

<?php 
  if (isset($_POST['submit'])) {
  // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $dice = $_POST['dice'];
    $num_array = array();
?>

<table class="table table-striped mt-3">
    <tr>
      <th>#</th>
      <th>Result</th>
    </tr>
    <?php 
      for ($i=0; $i < $dice; $i++) { 
        $j = $i + 1;
        array_push($num_array, rand(1, $_POST['sides']));
    ?>
    <tr>
      <td><?php echo $j; ?></td>
      <td><?php echo $num_array[$i]; ?></td>
    </tr>
<?php
    }
  }
?>
</table>

<div id="resetBtn" style="display: block;">
  <button type="reset" class="btn btn-secondary mt-3 col-12" name="reset" onClick="reloadPage()" <?php if(!isset($_POST['submit'])) {echo "disabled";} ?>>Reset</button>
</div>


<?php require_once "./footer.php"; ?>