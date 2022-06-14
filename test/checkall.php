<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript">
           $(document).ready(function(){
               $('#form1 #select-all').click(function(){
                   $("#form1 input[type='checkbox']").prop('checked',this.checked);
               });
           });
        </script>
    </head>
    <body>
        <?php
        try {
            $conn = new PDO('mysql:host=localhost;dbname=test_cualofood;charset=utf8','root','');
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
            print_r($conn);
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }
            if(isset($_POST['submit'])){
                foreach($_POST['check'] as $value){
                    echo $value;
                }
            }
        ?>
      <form id="form1" method="post">
          <input type="checkbox"  id="select-all"> Select All 
      </p>
      <input type="checkbox"  name="check[]" value="Value 1">
      <input type="checkbox"  name="check[]" value="Value 2">
      <input type="checkbox"  name="check[]" value="Value 3">
      <input type="checkbox"  name="check[]" value="Value 4">
      <button type="submit" name = "submit" >Submit</button>
      </form>
    </body>
</html>