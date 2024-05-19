<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registeration form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>
  <style>
    body{
      background: #023E45;
    }
    .container{

        width: 600px;
        height: 90vh;
        color: #BFDB21;
        font-weight: bold;
    }
    .btn {
      background:#BFDB21;
      color: black;
      font-weight: bolder;
    }
    .btn:hover{
      background:#BFDB21;
      color: black;
    }
  </style>
  <body>
    <div class='container my-3 p-3'>
        <h1 class="text-center">Registeration Form</h1>
        <?php
      
           echo "<form action='next-page.php' method='post' >
           First Name <br>
           <input type='text'  class='form-control' name='username1' placeholder='Enter Your name'><br>

           Last Name <br>
           <input type='text' class='form-control' name='username2' placeholder='Enter Your password'><br>

           Email address <br>
           <input type='email' class='form-control' name='email' id='forminput' placeholder='name@gmail.com'><br>
          
           DOB <br>
           <input id='datepicker' name='dateofbirth' class='form-control' placeholder='dd/mm/yy' /><br>

            <script>
              $('#datepicker').datepicker({
               uiLibrary: 'bootstrap5',
               format: 'dd-mm-yy'
              });
           </script>
           
           
         
         Gender<br>
         <select class='form-select' name='gender'>
           <option value='male'>Male</option>
           <option value='female'>Female</option>
         </select><br>
           

         <input class='btn form-control' type='submit'>

        </form>";
        
      
    ?>
    

    </div>
    <?php include "page/footer.php";?>

    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>

