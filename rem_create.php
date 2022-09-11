<?php
 $con = mysqli_connect('localhost', 'root', '', 'studious') or die("<h1>Connection Failed...</h1>");
// $typ = $_POST['user'];
$title = $_POST['title'];
$desc = $_POST['desc'];
$date = $_POST['date'];
$time = $_POST['time'];

session_start();
$user_id = $_SESSION['user_id'];
?>
<input type="text" name='std' value = <?php echo $standard ?>>
<?php
$query = "insert into reminder (title, description, date, user_id, time) values('$title', '$desc', '$date', '$user_id','$time')";
$result = mysqli_query($con, $query);
echo "<script> window.location.href = '../home.php' </script>";
?>