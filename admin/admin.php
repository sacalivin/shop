
<?php
/**
 * Enables the user to do CRUD operataions on products
 * @author Calvin obiri
 */
session_start();
include "{$_SERVER['DOCUMENT_ROOT']}/shop/lib/cosa_db.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../styles/header/header.css">
    <link rel="stylesheet" href="../styles/bootsrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/bootsrap/css/w3.css">
    <script src="../js/jqery.js"></script>
</head>

<body>
    <!-- header-->

    <?php include "../include_files/header.php"; ?>

    <!-- header-->
    <section>
        
        <!-- the bar item-->
        <div class="w3-bar, w3-blue">
            <button class="open w3-button w3-bar-item" id="view">View Items</button>
            <button class="open w3-button w3-bar-item" id="add">Add Items</button>
            <button class="open w3-button w3-bar-item" id="update">Update Items</button>
            <button class="open w3-button w3-bar-item" id="delete">Delete Items</button>
        </div>
        <!--hello git-->

        <div>
            <div class="query view w3-animate-top  w3-container w3-panel w3-padding">
                <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-centered">

                    <thead>
                        <tr class="w3-light-blue">
                            <th class="w3-large"> Product id </th>
                            <th class="w3-large"> Product Name </th>
                            <th class="w3-large"> User id </th>
                            <th class="w3-large"> selling price </th>
                            <th class="w3-large"> Buying price </th>
                            <th class="w3-large"> Units </th>
                        </tr>
                    </thead>

                    <tbody id="rowsDisplay">



                    </tbody>

                </table>
            </div>
            <div class="query add   w3-animate-bottom  w3-container w3-panel w3-padding" style="display: none;">
                <form id="test" action="<?php $_SERVER["PHP_SELF"] ?>" method="post" style="width: 40%;">
                    <label for="product_name">Product name</label>
                    <input type="text" name="product_name" class="w3-input w3-bottombar w3-border-blue">
                    <label for="user_id">User id</label>
                    <input type="text" name="user_id" class="w3-input w3-bottombar w3-border-blue">
                    <label for="selling_price">selling price</label>
                    <input type="text" name="selling_price" class="w3-input w3-bottombar w3-border-blue">
                    <label for="buying_price">Buying price</label>
                    <input type="text" name="buying_price" class="w3-input w3-bottombar w3-border-blue">
                    <label for="unit">Unit</label>
                    <input type="text" name="unit" class="w3-input w3-bottombar w3-border-blue">
                    <input type="file" name="image">
                    <h1 id="confirm"></h1>


                </form>
                <button id="cmdInsert" class="w3-button w3-green w3-margin-top w3-ripple w3-block">Add</button>
            </div>
            <div class="query update w3-animate-top   w3-container w3-panel w3-padding" style="display: none;">
                <?php
                ?>
                <form action="" method="post" style="width: 40%;">
                    <label for="product_id">Product Id</label>
                    <input type="text" name="product_id" require class="w3-input w3-bottombar w3-border-blue">
                    <label for="product_name">Product name</label>
                    <input type="text" name="product_name" class="w3-input w3-bottombar w3-border-blue">
                    <label for="user_id">User id</label>
                    <input type="text" name="user_id" class="w3-input w3-bottombar w3-border-blue">
                    <label for="selling_price">selling price</label>
                    <input type="text" name="selling_price" class="w3-input w3-bottombar w3-border-blue">
                    <label for="buying_price">Buying price</label>
                    <input type="text" name="buying_price" class="w3-input w3-bottombar w3-border-blue">
                    <label for="unit">Unit</label>
                    <input type="text" name="unit" class="w3-input w3-bottombar w3-border-blue">
                    <input type="file">
                    <h1 Id="confirmUpdate"></h1>
                    <button id="cmdUpdate" class="w3-button w3-yellow w3-margin-top w3-ripple w3-block">UPdate Item</button>

                </form>

            </div>

            <div class="query delete  w3-animate-left w3-container w3-panel w3-padding" style="display: none;">
                <form action="" method="post" style="width: 40%;">
                    <label for="product_id">Product Id</label>
                    <input type="text" name="product_id" class="w3-input w3-bottombar w3-border-blue">
                    <h1 id="confirmDel"></h1>
                    <?php
                    //include "/include_files/confermStockModification.php"
                    ?>
                    <button id="cmdDelete" class="w3-button w3-red w3-margin-top w3-ripple w3-block">Delete</button>

                </form>
            </div>
        </div>

    </section>
    <script src="../js/tabControls.js"></script>
    <script src="../js/cmdToDatabase.js"></script>
</body>

</html>