<?php 
    
    $min_id = rand(1, 100);
    $max_id = $min_id +10;
    for($i = $min_id; $i < $max_id; $i++){
        $row_front = "SELECT * FROM test WHERE id=$i";
        $query= mysqli_query($conn,  $row_front);
        $products = mysqli_fetch_all($query, MYSQLI_ASSOC);
    ?>
    <?php 
        foreach($products as $arr){ ?>
            <tr>
                <td class="border text-center"><?php echo $arr['article']; ?></td>
                <td class="border text-center"><?php echo $arr['product']; ?></td>
                <td class="border text-center"><?php echo $arr['price']; ?></td>
                <td class="border text-center"><?php echo $arr['total']; ?></td>
            </tr>
        <?php }?>
    <?php }?>
    fullArticle
    firstArcticle
    lastArcticle
    moretArcticle
    lesstArcticle
    nameProduct
    priceProduct
    minPriceProduct
    maxPriceProduct
    minBalanceProduct
    maxBalanceProduct
