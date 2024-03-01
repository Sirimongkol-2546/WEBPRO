<?php
// 1. Connect to Database 
class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('customers.db');
    }
}

// 2. Open Database 
$db = new MyDB();
if (!$db) {
    echo $db->lastErrorMsg();
} else {
    echo "Opened database successfully<br>";
}

// 3. Query Execution
// $sql = "";
// $ret = $db->query($sql);

// while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {

//  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab11/1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        .container {
            margin-top: 30px;
        }

        .header {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <?php
     $sql ="SELECT * FROM customers";
     $ret = $db->query($sql);   
  
     while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
        $eid = $row["CustomerId"];
        $fname = $row['FirstName'];
        $lname = $row['LastName'];
        $addr = $row['Address'];
        $email = $row['Email'];
        $phone = $row['Phone'];
     }

    ?>

    <div class="container">
        <div class="header">
            <h2>Employee Information</h2>
        </div>

        <form role="form" action="session-savedata.php" method="post">
            <div class="form-group">
                <label for="eid">Employees ID:</label>
                <input type="text" class="form-control" id="eid" name="eid" placeholder="Enter your Employees ID" value= "<?php echo $eid?>">
            </div>

            <div class="form-group">
                <label for="firstname">Firstname:</label>
                <input type="text" class="form-control" id="firstname" name="firtname"
                    placeholder="Enter your firstname" value= "<?php echo $fname?>">
            </div>

            <div class="form-group">
                <label for="lastname">Lastname:</label>
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter your lastname" value= "<?php echo $lname?>">
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <textarea type="text" class="form-control" id="address" name="address" placeholder="Enter your address"
                    rows="3"><?php echo $addr?></textarea>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" value= "<?php echo $email?>">
            </div>

            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your phone" value= "<?php echo $phone?>">
            </div>


            <button type="button" class="btn btn-success" value="save">Save Data</button>
            <button type="submit" class="btn btn-dark" value="show">Show Data</button>
            <button type="submit" class="btn btn-danger" valur="clear">Clear Data</button>
        </form>

    </div>

    <?php
    // 4. Close database
    $db->close();
    ?>

</body>

</html>