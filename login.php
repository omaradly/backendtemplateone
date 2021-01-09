<?php include 'include/header.php'; ?>

<?php
if (isset($_SESSION['mail_error'])) {
    echo $_SESSION['mail_error'];
    unset ($_SESSION['mail_error']);
}
if (isset($_SESSION['error_password'])) {
    echo $_SESSION['error_password'];
    unset ($_SESSION['error_password']);
}
?>


















<style> 
Body {
  font-family: Calibri, Helvetica, sans-serif;
  background-color: #f8f9fa;
}
button { 
       background-color: #007bff; 
       width: 100%;
        color: black; 
        padding: 15px; 
        margin: 10px 0px; 
        border: none; 
        cursor: pointer; 
         } 
 form { 
        border: 3px solid #f1f1f1; 
    } 
 input[type=text], input[type=password] { 
        width: 100%; 
        margin: 8px 0;
        padding: 12px 20px; 
        display: inline-block; 
        border: 2px solid green; 
        box-sizing: border-box; 
    }
 button:hover { 
        opacity: 0.7; 
    } 
  .cancelbtn { 
        width: auto; 
        padding: 10px 18px;
        margin: 10px 5px;
    } 
      
   
 .container { 
        padding: 25px; 
        background-color: lightblue;
    } 
</style> 
</head>  
<body>  
    <center> <h1>Login</h1> </center> 
    <form action="loginresult.php" method="post">
        <div class="container"> 
            <label>Username : </label> 
            <input type="text" placeholder="Enter Email" name="mail" required>
            <label>Password : </label> 
            <input type="password" placeholder="Enter Password" name="password" required>
            <button type="submit" name="submit">Login</button> 
            <input type="checkbox" checked="checked"> Remember me 
            <button type="button" class="cancelbtn"> Cancel</button> 
            Forgot <a href="#"> password? </a> 
        </div> 
    </form> 

<?php include 'include/footer.php';?>
