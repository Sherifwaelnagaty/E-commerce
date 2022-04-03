<?php
class cart extends View
{
  public function output()
  {
    $title = $this->model->title;
    $subtitle = $this->model->subtitle;
    if(isset($_SESSION['user_id'])){
    $user_name = $_SESSION['user_name'];
    $Add=$_SESSION[''];
    }
        require APPROOT . '/views/inc/header.php';
    $text=' <main>
<!-- <div class="col-lg-11 ">
<aside>
<img align="left" src=model.jpg width="200" height="700" >
</aside>
</div>
<div class="col-lg-11 "> -->
    <div class="basket">
      <br>
      <br>

      <div class="basket-labels">
        <ul>
          <li class="item item-heading">Item</li>
          <li class="price">Price</li>
          <li class="quantity">Quantity</li>
          <li class="subtotal">Subtotal</li>
        </ul>
      </div>

      <div class="basket-product">
        <div class="item">
          <div class="product-image">
            <img src="dress.png" alt="Placholder Image 2" class="product-frame">
          </div>
          <div class="product-details">
            <h1><strong><span class="item-quantity">4</span> x Eliza J</strong> Lace Sleeve Cuff Dress</h1>
            <p><strong>Navy, Size 18</strong></p>
            <p>Product Code - 232321939</p>
          </div>
        </div>
        <div class="price">26.00</div>
        <div class="quantity">
          <input type="number" value="4" min="1" class="quantity-field">
        </div>
        <div class="subtotal">104.00</div>
        <div class="remove">
          <button>Remove</button>
        </div>
      </div>
      <div class="basket-product">
        <div class="item">
          <div class="product-image">
            <img src="tshirt.jpg" alt="Placholder Image 2" class="product-frame">
          </div>
          <div class="product-details">
            <h1><strong><span class="item-quantity">1</span> x Whistles</strong> Amella Lace Midi Dress</h1>
            <p><strong>Navy, Size 10</strong></p>
            <p>Product Code - 232321939</p>

          </div>
        </div>
        <div class="price">26.00</div>
        <div class="quantity">
          <input type="number" value="1" min="1" class="quantity-field">
        </div>
        <div class="subtotal">26.00</div>
        <div class="remove">
          <button>Remove</button>

        </div>
      </div>
    </div>

    <br>
    <br>
    <br>
    <br>
    <aside>
      <div class="summary">
        <div class="summary-total-items"><span class="total-items"></span> Items in your Bag</div>
        <div class="summary-subtotal">
          <div class="subtotal-title">Subtotal</div>
          <div class="subtotal-value final-value" id="basket-subtotal">130.00</div>
          <div class="summary-promo hide">
            <div class="promo-title">Promotion</div>
            <div class="promo-value final-value" id="basket-promo"></div>
          </div>
        </div>
        <div class="summary-delivery">
          <select name="delivery-collection" class="summary-delivery-selection">
              <option value="0" selected="selected">Select Collection or Delivery</option>
             <option value="collection">Collection</option>
             <option value="first-class">Royal Mail 1st Class</option>
             <option value="second-class">Royal Mail 2nd Class</option>
             <option value="signed-for">Royal Mail Special Delivery</option>
          </select>
        </div>
        <div class="summary-total">
          <div class="total-title">Total</div>
          <div class="total-value final-value" id="basket-total">130.00</div>
        </div>
        <div class="summary-checkout">
          <button class="checkout-cta">Go to Secure Checkout</button>
        </div>
      </div>
    </aside>
    <!-- </div> -->
    
    <!--  <div id="rightinfo">
        <a href="https://www.facebook.com/GendronsPawn/"><img id="socmed"src="../images/facebook.png"
        onmouseover="this.src='../images/facebookclicked.png'" onmouseout="this.src='../images/facebook.png'" alt="facebook"/></a>
        <a href="http://stores.ebay.com/Gendron-s-Jewelry-and-Pawn?_rdc=1"><img id="socmed"src="../images/ebay.png"
            onmouseover="this.src='../images/ebayclicked.png'" onmouseout="this.src='../images/ebay.png'" alt="ebay"/></a>
        </div> -->
  </main>';
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}
?>