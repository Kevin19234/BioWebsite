<?php 
$page_title = 'My Store';
include('includes/header.html');
?>
<script src="Store.js"></script>
<header>
    <h1> Welcome to the Store</h1>
    
</header>
<body>
<section class="container content-section">
            <h2 class="section-header">MUSIC</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <img class="shop-item-image" src="Photos/UnderPressure.jpg">
                    <span class="shop-item-title">Under Pressure</span>
                    <span class="shop-item-title">Logic</span>
                    <div class="shop-item-details">
                        <span class="shop-item-price">$9.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <img class="shop-item-image" src="Photos/MTBMB.jpg">
                    <span class="shop-item-title">Music To Be Murdured By</span>
                    <span class="shop-item-title">Eminem</span>
                    <div class="shop-item-details">
                        <span class="shop-item-price">$13.99</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <img class="shop-item-image" src="Photos/ChemicallyImbalanced.jpg">
                    <span class="shop-item-title">Chemically Imbalanced</span>
                    <span class="shop-item-title">Chris Webby</span>
                    <div class="shop-item-details">
                        <span class="shop-item-price">$11.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">                    
                    <img class="shop-item-image" src="Photos/Inception.jpg">
                    <span class="shop-item-title">Inception</span>
                    <span class="shop-item-title">NF</span>
                    <div class="shop-item-details">
                        <span class="shop-item-price">$8.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">                    
                    <img class="shop-item-image" src="Photos/Jcole.jpg">
                    <span class="shop-item-title">2014 Forest Hills Drive</span>
                    <span class="shop-item-title">J. Cole</span>
                    <div class="shop-item-details">
                        <span class="shop-item-price">$9.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">                    
                    <img class="shop-item-image" src="Photos/GeneralAdmission.jpg">
                    <span class="shop-item-title">General Admission</span>
                    <span class="shop-item-title">Machine Gun Kelly</span>
                    <div class="shop-item-details">
                        <span class="shop-item-price">$11.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>
<section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">$0</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
        </section>
    
</body>
<?php
include('includes/footer.html');
?>