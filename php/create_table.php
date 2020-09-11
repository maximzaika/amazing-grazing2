<?php
// sql to create table
$sql = "CREATE TABLE Livestock_Numbers (
id INT AUTO_INCREMENT PRIMARY KEY,
year int(4) NOT NULL,
category VARCHAR(15) NOT NULL CHECK (category in ('Beef cattle','Dairy cattle','Sheep')),
numbers numeric(6,2) not null
)";

if ($con -> query($sql) === True) {
  echo "Table Livestock_Numbers created successfully";
} else {
  echo "Error creating table: ";
}

?>