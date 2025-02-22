<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flipzon</title>
    <link rel="Shortcut Icon" type="images" href="./imgs/Favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
</head>

<body>
<header>
    
        <div class="navbar">
            <div class="nav-logo border">
                <div class="logo" onclick="window.location.href = 'homepage.html'"></div>
            </div>
            <div class="nav-address border">
                <p class="add-first">Deliver to</p>
                <div class="add-icon">
                    <i class="fa-solid fa-location-dot"></i>
                    <p class="add-sec">India</p>
                </div>

            </div>
            <form action="search.php" method="post">
            <div class="nav-search">
                <select class="search-select" name="" id="">
                    <option value="">All</option>
                    <option value="">Clothes</option>
                    <option value="">Furniture</option>
                    <option value="">Electronics</option>
                    <option value="">Pet care</option>
                    <option value="">Books and Stationery</option>
                    <option value="">Sports outlet</option>
                    <option value="">Gadgets and accessories</option>
                    <option value="">Fitness and wellness</option>
                    <option value="">Beauty picks</option>
                    <option value="">Health and personal care</option>
                </select>
                
                <input class="search-input" type="text" placeholder="Search Flipzon" name="keywords">
                <button class="search-icon" type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
                
            </div>
            <div class="nav-flag">
                <div>
                    <i class="fa-solid fa-language"></i>
                </div>
                <div>
                    <select class="select-lang" id="">
                        <option value="">EN</option>
                    </select>
                </div>

            </div>
            <div class="nav-singin border">
                <a href="login.php" style="color: #fefefe;"><p class="logout"><!-- <span>Hello, sign in</span> --><i class="fa-solid fa-right-from-bracket" id="log"></i></p></a>
                <!-- <p class="nav-second">Account & Lists</p> -->
            </div>
            <div class="nav-return border">
                <p><span>Returns</span></p>
                <p class="nav-second">& Orders</p>
            </div>

            <div class="nav-cart border"><a href="cart.php" style="color: white;">
                <i class="fa-solid fa-cart-shopping"><span class="cart-number"  id="cart">0</span></i>
                Cart</a>
            </div>
        </div>
        <div class="panel border">
            <div class="panel-all">
                <i class="fa-solid fa-bars"></i>
                All
            </div>
            <div class="panel-ops">
            <div class="dropdown">
                <p class="border">Clothes</p>
                <div class="dropdown-content" >
                    <a href="men.php">Mens</a>
                    <a href="women.php">Womens</a>
                    <a href="kid.php">Kids</a>
                </div>
                </div>
                <div class="dropdown">
                <p class="border">Furniture</p>
                <div class="dropdown-content" style="left: 27em;">
                    <a href="">Chair</a>
                    <a href="">Sofa</a>
                    <a href="">Table</a>
                </div>
                </div>
                <div class="dropdown">
                <p class="border">Electronics</p>
                <div class="dropdown-content" style="left: 33em;">
                    <a href="">Mobile</a>
                    <a href="">Laptop</a>
                    <a href="">Refrigerator</a>
                </div>
                </div>
                <div class="dropdown">
                <a href="book.php" style="color: white;"><p class="border">Books</p></a>
                </div>
                </div>
        </div>
        </div>
    </header>

    <body>
        <div class="con">
        <?php
        include('connectdb.php');
        $query = "SELECT * FROM cart";
        $run_query = $conn->query($query);
        
        echo '<div class="display-section">';
        $total = 0;
        if ($run_query->num_rows) {
            while ($row = $run_query->fetch_assoc()) {
                $img = $row['image'];
                $name = $row['name'];
                $prize = $row['prize'];
                
                $quantity = $row['quantity'];
                $total = $total + ((int)$prize*(int)$quantity);
                echo '<div class="container display-item neonblue-text">'; // Add the new CSS class to the parent div
                echo '<div class="container-img" style="background-image: url(./all_images/' . $img . ');"></div>
            <div class="details ">
                <span class="cloth-name ">' . $name . '</span><br>
                <span class="prize">M.R.P: ' . $prize . '</span><br>
                <span class="neon-text message">Free delivery available</span>
                <span class="free-look neon-text">Quantity: ' . $quantity . '</span></span>
            
            <div class="button content">
                <div class="button-container">
                    <form action="cart.php" method="post" class="remove-from-cart-form">
                    <input type="hidden" name="image" value="' . $img . '">
                    <input type="hidden" name="name" value="' . $name . '">
                    <input type="hidden" name="prize" value="' . $prize . '">
                        <button type="submit" class="cart-button" onclick="removeCart()"> <span class="close-button" >
                        <i class="fas fa-times"></i>
                    </span></button>
                    </form>
                    
                </div>
            </div>

            </div>
            
        </div>';
        
            }
        }
        else{
            echo '<div class="img-container">
        <img class="cart-empty" src="./img/cart_empty.png" alt="Empty Cart">
        <span style="color:white;text-align:center;margin-left:9em;" >Your Cart is empty</span>
</div>';

        }

        
        
        echo '</div>';
        ?>
        
        <div class="box1 neonblue-text"><h1 class="neon-text">Confirm order</h1>
        <div style="display: block;" class="total">Total Amount :&nbsp;&nbsp;&nbsp;₹<?php echo $total; ?></div>
        <p class="exc">(tax exclusive)</p>
        <p class="inc">(tax inclusive)</p>
        <div style="display: block;" class="gst">GST 1%&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;₹<?php echo $total*0.01; ?></div>
        <div style="display: block;" class="totalin">Total Amount :&nbsp;&nbsp;&nbsp;<s style="color:red;">₹<?php echo $total+($total*0.01); ?></s></div>
        <div style="display: block;" class="discount">Total Amount :&nbsp;&nbsp;&nbsp;<b style="color:lightgreen">₹<?php echo ($total+($total*0.01))-($total+($total*0.01))*0.1; ?></b></div>
        <button class="payment neonblue-text" onclick="sweet()">Proceed to payment</button> 
    </div>
        </div>
        

        <script src="cart.js"></script>

    </body>

</html>
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        /* $img = $_POST['image'] ?? '';
        $name = $_POST['name'] ?? '';
        $prize = $_POST['prize'] ?? '';

        $host= 'localhost';
        $username='root';
        $password1='';
        $dbname='coders';

        
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password1);

        $stmt = $pdo->prepare("DELETE FROM cart WHERE image=:image AND name=:name AND prize=:prize");
        
    
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':image', $img);
        $stmt->bindParam(':prize', $prize);
                
                
        if ($stmt->execute()) {
            // Redirect back to the same page after the delete operation
            echo "<script>window.location.href = window.location.href;</script>";
            exit();
        } */
        $img = $_POST['image'] ?? '' ;
        $name = $_POST['name'] ?? '' ;
        $prize = $_POST['prize'] ?? '' ;

        $host= 'localhost';
        $username='root';
        $password1='';
        $dbname='coders';

        
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password1);

        $fetchQuery = "SELECT quantity FROM cart WHERE image = :image AND name = :name AND prize = :prize";

        $fetchStmt = $pdo->prepare($fetchQuery);

        $fetchStmt->bindParam(':image', $img, PDO::PARAM_STR);
        $fetchStmt->bindParam(':name', $name, PDO::PARAM_STR);
        $fetchStmt->bindParam(':prize', $prize, PDO::PARAM_INT);

        $fetchStmt->execute();

        $row = $fetchStmt->fetch(PDO::FETCH_ASSOC);
        $currentQuantity = $row['quantity'] ?? 0;

        if ($currentQuantity < 2) {
            $deleteQuery = "DELETE FROM cart WHERE image = :image AND name = :name AND prize = :prize";
            $deleteStmt = $pdo->prepare($deleteQuery);
            $deleteStmt->bindParam(':image', $img, PDO::PARAM_STR);
            $deleteStmt->bindParam(':name', $name, PDO::PARAM_STR);
            $deleteStmt->bindParam(':prize', $prize, PDO::PARAM_INT);
            
            if ($deleteStmt->execute()) {
                echo "<script>window.location.href = window.location.href;</script>";
                exit();
            } 
        } else {
            $decrementQuery = "UPDATE cart SET quantity = quantity-1  WHERE image = :image AND name = :name AND prize = :prize";
            $decrementStmt = $pdo->prepare($decrementQuery);
            $decrementStmt->bindParam(':image', $img, PDO::PARAM_STR);
            $decrementStmt->bindParam(':name', $name, PDO::PARAM_STR);
            $decrementStmt->bindParam(':prize', $prize, PDO::PARAM_INT);
            if ($decrementStmt->execute()) {
                echo "<script>window.location.href = window.location.href;</script>";
                exit();
            } 
        }
    
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<footer>
<a href="#" style="color: white;"><div class="foot-panel1">
            <span >Back to top</span>
        </div></a>

        <div class="foot-panel2">
            <div class="foot-list">
                <ul>
                    <li class="foot-li">Get to Know Us</li>
                    <li><a href="">Careers</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">About Flipzon</a></li>
                    <li><a href="">Investor Relations</a></li>
                    <li><a href="">Flipzon Devices</a></li>
                    <li><a href="">Flipzon Science</a></li>
                </ul>
            </div>
            <div class="foot-list">
                <ul>
                    <li class="foot-li">Get to Know Us</li>
                    <li><a href="">Careers</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">About Flipzon</a></li>
                    <li><a href="">Investor Relations</a></li>
                    <li><a href="">Flipzon Devices</a></li>
                    <li><a href="">Flipzon Science</a></li>
                </ul>
            </div>
            <div class="foot-list">
                <ul>
                    <li class="foot-li">Get to Know Us</li>
                    <li><a href="">Careers</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">About Flipzon</a></li>
                    <li><a href="">Investor Relations</a></li>
                    <li><a href="">Flipzon Devices</a></li>
                    <li><a href="">Flipzon Science</a></li>
                </ul>
            </div>
            <div class="foot-list">
                <ul>
                    <li class="foot-li">Get to Know Us</li>
                    <li><a href="">Careers</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">About Flipzon</a></li>
                    <li><a href="">Investor Relations</a></li>
                    <li><a href="">Flipzon Devices</a></li>
                    <li><a href="">Flipzon Science</a></li>
                </ul>
            </div>



        </div>
        <div class="foot-panel3">
            <div class="logo-bottom">

            </div>
        </div>
    </footer>
</body>
</html>