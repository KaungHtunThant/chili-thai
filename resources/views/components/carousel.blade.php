<style>
    @media (max-width:768px) {}
</style>



<!-- Carousel -->
<div id="demo" class="carousel slide  " data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner ">
        <div class="carousel-item active">
            <img src="/img/crs-img/crs-img-1.png" alt="Los Angeles" class="carousel-img d-block w-100">
            <div class="carousel-caption d-flex justify-content-center align-items-center flex-column"
                style="height:100%;">
                <h2 class="display-2 fw-bold">Welcome to Chili Thai Cuisine and Sushi</h2>
                <p>Craving fresh, flavorful, and authentic Thai food? You’re in the right place! At Chili Thai Cuisine,
                    we bring the best of Thailand straight to your plate—bold spices, rich curries, and fresh
                    ingredients made with love</p>
                <a href="menu.php" class="btn btn-primary">Browse our Menu</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/img/crs-img/crs-img-2.png" alt="Chicago" class="d-block w-100">
            <div class="carousel-caption d-flex justify-content-center align-items-center flex-column"
                style="height:100%;">
                <h3 class="p-3 ">Stop by for a cozy meal, grab takeout on the go, or let us cater your next event.
                </h3>
                <p>However you enjoy it, we promise great food and warm hospitality. Call now to place your order!</p>
                <div class="container">
                    <a href="https://www.chilithaicuisine.com/order" class="btn btn-Primary">Order Online</a>
                    <a href="#" class="btn btn-secondary">Contact us!</a>
                </div>

            </div>
        </div>
        <div class="carousel-item">
            <img src="/img/crs-img/crs-img-3.png" alt="New York" class="d-block w-100">
            <div class="carousel-caption d-flex justify-content-center align-items-center flex-column"
                style="height:100%;">
                <h3 class="p-3 fw-bold">Freshly Made, Just for You</h3>
                <p>Every dish is made to order, ensuring the perfect balance of flavor in every bite. Whether you like
                    it mild or extra spicy, we’ll make it just the way you like! Order online or stop by for a fresh and
                    flavorful meal today.</p>
            </div>
        </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>
