<?php
$page = "product";
if (isset($_GET["page"])==true) {
    $page = $_GET["page"];
}
?>
<html>

<head>
    <title>Add Product</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./Scripts/Site.js"></script>
    <script>
    src = "https://code.jquery.com/jquery-3.5.1.js"
    integrity = "sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin = "anonymous"
    </script>
    <link rel="stylesheet" type="text/css" href="./CSS/Site.css">
</head>

<body>
    <!-- <?php include './AddProduct.php';?>  -->
    <?php include './Shared/Navigation.php';?>
    <?php
    if ($page == "list") {
        include './ProductList.php';
    
    } 
    else {
        include './AddProduct.php';
    } 
    ?>
</body>

</html>