<?php
include 'config.php';

if(isset($_POST['add_product'])){

    $product_name =$_POST['product_name'];
    $product_price =$_POST['product_price'];
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
    $product_image_folder = 'images/Admin/upload/'.$product_image;
    

    if(empty($product_name) || empty($product_price) || empty($product_image)){
        echo "<script> alert('please fill out all.') </script>";
                }
                else{
                $insert = "INSERT INTO products(name, price, image) VALUES('$product_name', '$product_price', '$product_image')";
                $upload = mysqli_query($conn ,$insert);
                        if($upload){
                            
                            move_uploaded_file($product_image_tmp_name, $product_image_folder);
                            echo "<script> alert('new product added successfully.') </script>";
                          
                        }
                        else{
                            echo "<script> alert('Could not Added the Product.') </script>";
                        }
                }


};


 
?>










<!DOCTYPE html>
<html>
    <head>
        <title>Admin dashbord</title>
        <link rel="stylesheet" type="text/css" href="styles/settings.css">
        
    </head>
    <body>



        <div class="container">
            <div class="navigation">
                <ul>
                    <li><a href="index.php"><img src="images/log/logo.png"></a></li>
                    <li>
                        <a href="Admin.html">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>
                    </li>
                    <li>
                        <a href="#">
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                        <span class="title">Customers</span>
                    </a>
                    </li>
                    <li>
                        <a href="#">
                        <span class="icon"><ion-icon name="chatbox-ellipses-outline"></ion-icon></span>
                        <span class="title">Feedback</span>
                    </a>
                    </li>
                    <li>
                        <a href="settings.php" >
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="title">Settings</span>
                    </a>
                    </li>
                    <li>
                        <a href="#">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="title">Sign out</span>
                    </a>
                    </li>
                </ul>
            </div>


<!----------------------------------------------------------------------------------------------->
<div class="container2">
      <div class="admin-product-form-container">
      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
            <h3>Add New Product</h3>
            <input type="text" placeholder="Enter product name" name="product_name" class="box">
            <input type="number" placeholder="Enter product price" name="product_price" class="box">
           <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
           <input type="submit" class="btn" name="add_product" value="Add Product">
        </form>
      </div>

      <?php  
        $select= mysqli_query($conn ,"SELECT * FROM products");
    ?>
    <div class="product-display">
        <table class="product-display-table">
    <thead>
        <tr>
            <th>product image</th>
            <th>product name</th>
            <th>product price</th>
            <th colspan="2">action</th>
        </tr>
    </thead>

<?php

  while($row = mysqli_fetch_assoc($select)) {?>

    

        <tr>
            <td><img src="images/Admin/upload/<?php echo $row['image']; ?>" height="100" alt=""></td>
            <td><?php echo $row['name']; ?></td>
            <td>$<?php echo $row['price']; ?>/-</td>
            <td>
                <a href="admin_update.php?edit=<?php echo $row['id']; ?>"class="btn"><i class="fas fa-edit"></i>edit</a>
                <a href="settings.php?delete=<?php echo $row['id']; ?>"class="btn"><i class="fas fa-trash"></i>delete</a>
            </td>

        </tr>


  <?php } ?>


    </table>
    </div>





</div>

    

</div>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>