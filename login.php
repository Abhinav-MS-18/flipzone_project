

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flipzon Signup</title>
    <link rel="Shortcut Icon" type="images" href="./imgs/favicon4.png">
    <link rel="stylesheet" href="signin_login.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
</head>
<body>
    
    <form action="login.php" method="post" id="loginForm">
        
        <div class="container" style="margin-top: 4rem;">
            <div class="image-container"><img src="img/gettyimages-1295823260-612x612-removebg (1).png" alt="OOPS something went wrong" width=100% ></div>
            
            <div class="content">
                <header>
                    <h1 class="neon-text">WELCOME BACK</h1>
                </header>
                
                <p>
                    <label for="email"><b>Email</b></label>
                    <input type="text" id="email" name="email">
                    <span class="error"></span>
                </p>
                <p></p>
                <p>
                    <label for="password"><b>Password</b></label>
                    <input type="password" id="password" name="password">
                    <span class="error"></span>
                    
                </p>
                <p></p>
                <p>By continuing, you agree to our Conditions of Use and Privacy Notice.</p>
                
                <button type="submit" id="continueBtn">Continue</button>
            </div>
            
        </div>
    </form>
    <p style="color: whitesmoke; text-align: center;"> New around here? <a href="signin.php">CREATE ACCOUNT</a></p>

</body>
</html>


<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){

        $email=$_POST['email']??'';
        $password=$_POST['password']??'';

        $host= 'localhost';
        $username='root';
        $password1='';
        $dbname='coders';

        
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password1);
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM signin WHERE email = :email and password = :password");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        $count1=$stmt->fetchColumn();



        if($count1===0){
            ?><script> 
                document.getElementById('email').parentElement.classList.add("error");
                 document.getElementById('password').parentElement.classList.add("error");
                Swal.fire(
                        'Check your email and password',
                        ' ',
                        'error'
                    )
                </script><?php
        }
        
        else{
            header("Location: homepage.html");
            exit();
        }
    }  
?>
s