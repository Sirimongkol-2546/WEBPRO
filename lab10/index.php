<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab10/a</title>
</head>
<body>
<h2>Question</h2>

<?php
   // 1. Connect to Database 
   class MyDB extends SQLite3 {
      function __construct() {
        //ถ้าไม่มีไฟล์นี้มันจะสร้าง มีอยู่แล้วจะเปิด
         $this->open('lab10-file.db');
      }
   }

   // 2. Open Database 
   $db = new MyDB();
   if(!$db) {
      echo $db->lastErrorMsg();
   }
//    else {
//       echo "Opened database successfully<br>";
//    }

   // 3. Query Execution
 
   // Create a Table using SQL
   // <<<EOF คือ format เอาไว้สำหรับใส่ String ยาว ๆ ปิดด้วย EOF
//    $sql =<<<EOF
//    CREATE TABLE questions (
//    QID INTEGER PRIMARY KEY AUTOINCREMENT,
//    Stem VARCHAR(150) NOT NULL,
//    Alt_A VARCHAR(50) NOT NULL,
//    Alt_B VARCHAR(50) NOT NULL,
//    Alt_C VARCHAR(50) NOT NULL,
//    Alt_D VARCHAR(50) NOT NULL,
//    Correct VARCHAR(3) NOT NULL
//    );
//    EOF;


// $sql =<<<EOF
// INSERT INTO questions (Stem, Alt_A, Alt_B, Alt_C, Alt_D, Correct)
//    VALUES ('Which of the following is not a valid SQL type?',
//    'FLOAT','NUMERIC','DECIMAL','CHARACTER','C'),
   
//    ('Which of the following is not a DDL command?',
//    'TRUNCATE','ALTER','CREATE','UPDATE','D'),
   
//    ('Which of the following are TCL commands?',
//    'COMMIT and ROLLBACK','UPDATE and TRUNCATE','SELECT and INSERT',
//    'GRANT and REVOKE','A'),
   
//    ('Which statement is used to delete all rows in a table without having the action logged?',
//     'DELETE','REMOVE','DROP','TRUNCATE','D');
// EOF;

//    $ret = $db->exec($sql);
//    if(!$ret){
//       echo $db->lastErrorMsg();
//    } else {
//       echo "Record created successfully<br>";
//    }


// SQL SELECT 
// จะ query ต้องใช้คำสั่งนี้ ใช้คนละอันกับ execute อย่าลืมว่ามี 2 Function
 $sql ="SELECT * FROM questions;";
 $ret = $db->query($sql); 

 while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
    echo "<b>". $row['QID'] . "</b>";
    echo "<b>". $row['Stem'] ."</b>" . "<br>"; 
    echo "<input type='radio' name='check'>". $row['Alt_A'] . "<br>";
    echo "<input type='radio' name='check'>". $row['Alt_B'] . "<br>";
    echo "<input type='radio' name='check'>". $row['Alt_C'] . "<br>";
    echo "<input type='radio' name='check'>". $row['Alt_D'] . "<br>". "<br>";
    // echo " ". $row['Correct'] . "<br>";
 }

//  echo "Operation done successfully<br>";


   // 4. Close database
   $db->close();
?>
    
</body>
</html>