<?php
require_once('./partials/header.php');
require_once('./partials/nav.php');
$base_url = 'https://image.maps.ls.hereapi.com/mia/1.6/mapview';
$api_key = '312HqH0OJm8sNBZqjOpCgJtteK4JXTbn979qHyKmpSE';
?>
<div class="container">
    <div class="item">
        <div class="avataar-container">
            <img src="./assets/images/lisa.svg" alt="">
        </div>
        <p class="name">LISA MAHETA</p>
        <p class="designation">MARKETING</p>
        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque dicta facilis veniam illum perferendis ducimus voluptatibus consectetur ipsum. Quos excepturi totam, omnis tempora vero nam?</span>
        <div class="link">
            <img src="" alt="">
        </div>
        <img class="map" src="<?php echo "$base_url?&z=13&ci=Sydney&&&w=400&apiKey=$api_key" ?>" alt="Sydney">
    </div>
    <div class="item">
        <div class="avataar-container">
            <img src="./assets/images/john.svg" alt="">
        </div>
        <p class="name">JOHN MEKER</p>
        <p class="designation">DESIGNER</p>
        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque dicta facilis veniam illum perferendis ducimus voluptatibus consectetur ipsum. Quos excepturi totam, omnis tempora vero nam?</span>
        <div class="link">
            <img src="" alt="">
        </div>
        <img class="map" src="<?php echo "$base_url?&z=13&ci=Melbourne&&&w=400&apiKey=$api_key" ?>" alt="Melbourne">
    </div>
    <div class="item">
        <div class="avataar-container">
            <img src="./assets/images/vin.svg" alt="">
        </div>
        <p class="name">VIN DEASEL</p>
        <p class="designation">PRODUCTOR</p>
        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque dicta facilis veniam illum perferendis ducimus voluptatibus consectetur ipsum. Quos excepturi totam, omnis tempora vero nam?</span>
        <div class="link">
        </div>
        <img src="<?php echo "$base_url?&z=13&ci=Perth&&&w=400&apiKey=$api_key" ?>" alt="">
    </div>
</div>
<?php
require_once('./partials/footer.php');
?>