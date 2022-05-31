<?php
class cart extends View
{
  public function output()
  {
    require APPROOT . '/views/inc/header.php';
    $this->PrintTable();
    require APPROOT . '/views/inc/footer.php';
  }
  public function PrintTable()
  {
    $style=URLROOT.'css/cart.css';
    $text=<<<EOT
    <link href="$style" rel="stylesheet"/>
    <div class="container">
      <table class="table table-hover">
      <thead>
      <tr>
      <th>Item</th>
      <th>Quantity</th>
      <th>Price</th>
      <th>Subtotal</th>
      </tr>
      </thead>
    EOT;
    echo $text;
    $model=$this->model;
    $result=$model->cart();
    foreach($result as $row){
      $this->printImage();
      $this->printname();
      $this->printprice();
      $this->printQuantity();
      $this->printTotal();
    }
  }     
  //   <aside>
  //     <div class="summary">
  //       <div class="summary-total-items"><span class="total-items"></span> Items in your Bag</div>
  //       <div class="summary-subtotal">
  //         <div class="subtotal-title">Subtotal</div>
  //         <div class="subtotal-value final-value" id="basket-subtotal">130.00</div>
  //         <div class="summary-promo hide">
  //           <div class="promo-title">Promotion</div>
  //           <div class="promo-value final-value" id="basket-promo"></div>
  //         </div>
  //       </div>
  //         <div class="summary-total">
  //         <div class="total-title">Total</div>
  //         <div class="total-value final-value" id="basket-total">130.00</div>
  //       </div>
  //     </div>
  //   </aside>
  //   </div>    
  // </main>
  private function printImage()
  {
      $val = $this->model->getimage();
      $text = <<<EOT
      <div class="item">
          <div class="product-image">
            <img src="$val" alt="Placholder Image 2" class="product-frame">
          </div>
      EOT;
      echo $text;
  }
  private function printname()
  {
      $val = $this->model->getname();
      $text = <<<EOT
      <div class="product-details">
      <h1><strong><span class="item-quantity">$val</h1>
      EOT;
      echo $text;
  }
  private function printprice()
  {
      $val = $this->model->getprice();
      $text = <<<EOT
      </div>
         <div class="price">$val</div>
      EOT;
      echo $text;
  }
  private function printQuantity()
  {
      $val = $this->model->getquantity();
      $text = <<<EOT
         <div class="quantity">
           <input type="number" value=$val min="1" class="quantity-field">
         </div>
      EOT;
      echo $text;
  }
  private function printTotal()
  {
      $val = $this->model->getquantity();
      $val1 = $this->model->getprice();
      $totalval=$val*$val1;
      $text = <<<EOT
      <div class="subtotal">$totalval</div>
      </div>
      EOT;
      echo $text;
  }
}
?>
