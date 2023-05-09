<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    echo "Connection Failed<br>";
}
else{
    echo "Connection established<br>";
}
//connection

$sql = "INSERT INTO `info`(`rollno`, `name`, `class`) VALUES ('$_POST[rollno]','$_POST[name]','$_POST[class]')";

if(!mysqli_query($conn,$sql)){
    echo "Failed to entered data<br>";
}
else{
    echo "Data Entered<br>";
}
//insertion

$sql = "SELECT `rollno`, `name`, `class` FROM `info`";
$result = mysqli_query($conn,$sql);
echo '
<table border = "">
<tr>
<th>Roll no</th>
<th>Name</th>
<th>class</th>
</tr> <br>';
if(mysqli_num_rows($result)>0) {
    while($row = mysqli_fetch_assoc($result)){
        echo '<tr><td>'.$row["rollno"].'</td><td>'.$row["name"].'</td><td>'.$row["class"].'</td></tr><br>';
    }
}
else {
    echo "0 rows";
}
echo '</table>';
//selection

?>
