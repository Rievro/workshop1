<?php
include "include/db.php";
// Haal alle producten uit de database
$producten = $pdo->query("SELECT * FROM producten")->fetchAll();
?>
<?php include "include/header.php"; ?>
<div id="products">
    <div id="content">
        <div id="beat"></div>
   <?php foreach ($producten as $product) { ?>
  <div class="product">
    <img src="images/<?php echo $product['afbeelding']; ?>" alt="<?php echo $product['naam']; ?>">
    <h3><?php echo $product['naam']; ?></h3>
    <p class="prijs">&euro; <?php echo $product['prijs']; ?></p>

</div>
    <?php } ?>
         <h3> well this is a placeholder of a description. could you have guessed? yes? oh. well it appears u have caught my indecisiveness on making a discription.</h3>
         <h3>Als je het wil bestellen, klik dan <a href="bestellen.php">hier</a> </h3>
    </div>
</div>
    <?php
 include "include/footer.php";
?>