<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Set character encoding for the document -->
    <meta charset="UTF-8">
    
    <!-- Viewport setting for responsive design -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Page title -->
    <title>Dynamic Div</title>
    
    <!-- Link to external CSS file -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header section with title and navigation links -->
    <header>
        <h1>Dynamic Div</h1>
        <ul>
            <li>Home</li>
            <li>About</li>
            <li>Contact</li>
        </ul>
    </header>
    
    <!-- PHP array with product data -->
    <?php
    $data = array(
        array('img'=>'a.jpg', 'title'=>'Product one', 'paid'=>'yes'),
        array('img'=>'b.jpeg', 'title'=>'Product two', 'paid'=>'no'),
        array('img'=>'c.jpg', 'title'=>'Product three', 'paid'=>'yes'),
        array('img'=>'b.jpeg', 'title'=>'Product three', 'paid'=>'yes')
    );
    ?>
    
    <!-- Main section to display products -->
    <section>
        <?php
        // Loop through each item in the data array
        foreach($data as $d) { 
            // Only display products that are marked as 'paid'
            if($d['paid'] == 'yes') { ?>
                <div class="item">
                    <!-- Display product image -->
                    <img src="<?php echo $d['img'] ?>" alt="">
                    
                    <!-- Display product title -->
                    <h3><?php echo $d['title'] ?></h3>
                    
                    <!-- Buy button for the product -->
                    <button>Buy now</button>
                </div>
        <?php 
            }
        }
        ?>
    </section>
</body>
</html>
