<?php
parse_str($_POST['dataform'], $hasil);

echo 'firstname : ' . $hasil['firstname'];
echo 'lastname  : ' . $hasil['lastname'];
echo 'username : ' . $hasil['username'];
echo 'email : ' . $hasil['email'];
echo 'address : ' . $hasil['address'];
echo 'address2 : ' . $hasil['address2'];

//$hostname = "localhost";
//$username = "root";
//$password = "";
//$databaseName = "billing";

$link = mysqli_connect("localhost","root","","checkout2");
//$sql = "INSERT INTO tbl_user ('firstname','lastname','username','email','address') VALUES ('$hasil','$hasil','$hasil','$hasil','$hasil')";
//$sql = "INSERT INTO tbl_user ('firstname','lastname','username','email','address') VALUES ('$hasil[firstname]','$hasil[lastname]','$hasil[username]','$hasil[email]','$hasil[address]')";
$sql = "INSERT INTO `tbl_user`(`firstname`, `lastname`, `username`, `email`, `address`,`address2`)
VALUES ('$hasil[firstname]','$hasil[lastname]','$hasil[username]','$hasil[email]','$hasil[address]','$hasil[address2]')";

if(mysqli_query($link,$sql))
{
  echo "records added successfully.";}
  else
  {
    echo "ERROR: Could not able to execute $sql.".
    mysqli_error($link);
  }
mysqli_close($link);
?>
