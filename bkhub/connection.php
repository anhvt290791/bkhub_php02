<?php
/*
Design Database

Table: Money
id,
name,
code,
image
created_at,
updated_at

Table: History
id,
amount,
start_money_code,
end_money_code,
transfer_amount

Table: Exchanges
id,
VND,
EUR,
AUD,
USD,
created_at,
updated_at
*/

/*
+Cách kết nối DATABASE

1. Mysql
2. Mysql_i
3. PDO

// connection
// Query: Select, create, delete, update...
// đọc kết quả trả về
*/

// 1. Connect Database


$conn = mysqli_connect("localhost","root","root","currency");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
//   } else{
//   	echo "Connection Successfully";
//   }

  $sql = "SELECT * FROM Money";
  $result = $conn->query($sql);
  // var_dump($result);

  $data = $result->fetch_assoc();
  var_dump($data);
  die();
?>