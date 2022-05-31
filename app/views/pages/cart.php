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
      $this->printname();
      $this->printprice();
      $this->printQuantity();
      $this->printTotal();
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
  private function printname()
  {
      $model=$this->model;
      $date=$model->cart();
      foreach($date as $row){
      $val=$row['product_name'];
      $text = <<<EOT
      <tr>
      <td>$val</td>
      EOT;
      echo $text;
    }
  }
  private function printprice()
  {
      $model=$this->model;
      $date=$model->cart();
      foreach($date as $row){
      $val=$row['product_price'];
      $text = <<<EOT
      <td>$val</td>
      EOT;
      echo $text;
    }
  }
  private function printQuantity()
  {
      $model=$this->model;
      $date=$model->cart();
      foreach($date as $row){
      $val=$row['productQuantity'];
      $text = <<<EOT
         <td>$val</td>
      EOT; 
      echo $text;
    }
  }
  private function printTotal()
  {
      $model=$this->model;
      $date=$model->cart();
      foreach($date as $row){
      $val=$row['productQuantity'];
      $val1=$row['product_price'];
      $totalval=$val*$val1;
      $text = <<<EOT
      <td>$totalval</td>
      </tr>
      EOT;
      echo $text;
  }
}
}
?>
