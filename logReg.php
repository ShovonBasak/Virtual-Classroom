<html>
    <body>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "virtual classroom"; 
            //$port = 8000;
        
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            else
                echo "Connected successfully";
        
            $insert_reg_info = 'INSERT INTO login VALUES("15-28970-1", "shvnbasak", "abcde")';
            
            if ($mysqli.query($insert_reg_info,$conn) === TRUE) {
                echo "Data inserted successfully";
            } else {
                echo "Error insering data in table: " . $conn.error;
            }
        ?>
    </body>
</html>