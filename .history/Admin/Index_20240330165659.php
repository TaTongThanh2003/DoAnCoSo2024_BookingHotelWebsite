<?php
   $hname = 'localhost';
   $uname = 'root';
   $pass = '';
   $db = 'WebsiteBookingHotel';
   $con = mysqli_connect($hname, $uname, $pass, $db);
   if(!$con){
    die("Cannot Connect to Database". mysqli_connect_error());
   } 
   function Filteration($data)  {
    foreach($data as $key => $value) {
         $data[$key] =  trim($value);
         $data[$key] =  stripcslashes($value);
         $data[$key] =  htmlspecialchars($value);
         $data[$key] =  strip_tags($value);
   }
   return $data;
}
   ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="admin/css/common.css">
    <style>
    div.login-form {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 400px;
    }
    </style>
</head>

<body class="bg-light">
    <div class="login-form text-center rounded bg-white shadow overflow-hidden">
        <form method="POST">
            <h4 class="bg-dark text-white py-3">Admin Login Panel</h4>
            <div class="p-4">
                <div class="mb-3">
                    <input name="admin_name" required type="text" class="form-control shadow-none text-center"
                        placeholder="Admin Name">
                </div>
                <div class="mb-4">
                    <input name="admin_pass" require type="password" class="form-control shadow-none text-center"
                        placeholder="Password">
                </div>
                <button name="login" type="submit" class="btn btn-outline-dark shadow-none me-lg-3 me-2 ">LOGIN</button>
            </div>
        </form>
    </div>
    <?php
  if(isset($_POST["login"]))
  {
    $frm_data = filteration($_POST);
    $query = "SELECT * FROM 'admin_cred' WHERE 'admin_name = ? AND 'admin_pass = ?";
  }
 ?>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</body>

</html>