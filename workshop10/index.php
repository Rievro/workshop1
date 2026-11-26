<?php
include "include/db.php";
// Haal alle producten uit de database
$producten = $pdo->query("SELECT * FROM producten")->fetchAll();
?>
<?php include "include/header.php"; ?>

<div id="products">
    <div id="content">

 <h2>Onze sneakers</h2>
<div class="beat">
    <?php foreach ($producten as $product) { ?>
  <div class="product">
    <img src="images/<?php echo $product['afbeelding']; ?>" alt="<?php echo $product['naam']; ?>">
    <h3><?php echo $product['naam']; ?></h3>
    <p class="prijs">&euro; <?php echo $product['prijs']; ?></p>
    <a href="detail.php?id=<?php echo $product['id']; ?>" class="knop">Bekijk</a>
</div>
    <?php } ?>
</div>

    </div>
</div>
    <?php
 include "include/footer.php";
?>