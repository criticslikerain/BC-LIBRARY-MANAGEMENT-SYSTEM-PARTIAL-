<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
   <div>
    <?php
        try {
          // Check if the database connection is established
            if (DB::connection()->getPdo()) {
                echo "Database connection successfully established. DB Name: " . DB::connection()->getDatabaseName();
                
                // Query the database to count the number of books
                $listdbooks = DB::table('tblbooks')->count();  // Counting the rows in the tblbooks table
                
                // Display the number of books listed
                echo "<br>Books Listed: " . $listdbooks;
            }
        } catch (Exception $e) {
            echo "Error: Unable to connect to the database. " . $e->getMessage();
        }
    ?>
   </div>
</body>
</html>
