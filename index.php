<?php
    $_SESSION
?>
<!DOCTYPE html><html>
<head>
    <title>DBASE</title>
    <link rel="stylesheet" href="dbase.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="cointainer-fluid p-3">
    <h1>Members Info: Table 1</h1>
    <table id="dbase">
     <tr>
         <th>ID</th>
         <th>Name</th>
         <th>Pass</th>
  
        </tr>
            <?php
                include ('dbcon.php');
                $query = "Select*From UserLogin_Credentials";
                $result = odbc_exec($con,$query);
    
                if (!empty($result)) {
                    while ($row = odbc_fetch_array($result) ) {
                    $id=$row["User_Id"];
                    $name=$row["user_name"];
                    $pass=$row["user_password"];
                    
                  
                }
                else {
                    echo "Walang Laman";
                }
            ?>
        
    </table>
        </div>
    </div>
    </html>