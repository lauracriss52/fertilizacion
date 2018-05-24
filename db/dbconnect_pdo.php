             <?php  
             session_start();  
             $host = "localhost"  
             $username = "root";  
             $password = "";  
             $database = "fertilizacion";  
             $message = "";  
    try{
        $conn = new PDO('mysql:host=localhost;dbname=fertilizacion', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "ERROR: " . $e->getMessage();
    }
    ?>
