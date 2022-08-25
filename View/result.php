 <!Doctype html>
<html lang="en">
 
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
  <title>Result of import CSV File</title>

</head>
 
<body>
 
  <div class="container">
    <div class="top-name center-block text-center">
       <a href="/TestProject/index.php">Import Data</a>  
    </div>
  </div>

    <?php 
        $result = 0;
        if ($result > 0) { 
      echo ' <table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="70%">
  <thead>
    <tr>
      <th class="th-sm">ID
      </th>
      <th class="th-sm">Name
      </th>
      <th class="th-sm">Age
      </th>
      <th class="th-sm">Email
      </th>
      <th class="th-sm">Phone
      </th>
      <th class="th-sm">Gender
      </th>
    </tr>
  </thead>
  <tbody>';
               // while($row = $result->fetch_assoc()) { 

//     echo "<tr><td>" . $row["UID"]
//        . "</td><td>" . $row["Name"] 
//        . "</td><td>" . $row["Age"]
//       . "</td><td>" . $row["Email"]
//       . "</td><td>" . $row["Phone"]
//        . "</td><td>" . $row["Gender"]
//        . "</td></tr>"; 
         } else {
             echo '<div class="container">
                    <br/>
                    <br/>
                  <div class="top-name center-block text-center">
                     <label class="top-name center-block text-center">There is no data in database!</label> 
                </div>      
                </div>';
          } 
    ?>
 
</body>
 
</html>


