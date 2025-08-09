<?php
class Product {
    var $name;
    var $price;
    var $brand;
    var $tax = 14;
    var $image;
    var $description;

    function getName() {
        return $this->name;
    }

    function PriceAfterDescount($discount) {
        return $this->price - $discount;
    }

    function getFinalPrice($discount) {
        return $this->PriceAfterDescount($discount) + $this->tax;
    }

    function display($discount) {
        echo '
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow">
                <img src="' . $this->image . '" class="card-img-top" alt="' . $this->name . '" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">' . $this->name . '</h5>
                    <p class="card-text"><strong>Brand:</strong> ' . $this->brand . '</p>
                    <p class="card-text">' . $this->description . '</p>
                    <p class="card-text"><strong>Final Price (after discount + tax):</strong> ' . $this->getFinalPrice($discount) . ' EGP</p>
                </div>
            </div>
        </div>';
    }
}
?>
