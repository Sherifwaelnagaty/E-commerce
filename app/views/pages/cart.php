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
    $date=$model->cart();
    foreach($date as $row){
      $this->printname($row['product_name']);
      $this->printQuantity($row['productQuantity']); 
      $this->printprice($row['product_price']);
      $this->printTotal($row['productQuantity'],$row['product_price']);
      $this->Delete($row['cartID']);
    }
  }     
  private function printname($val)
  {
      $text = <<<EOT
      <tr>
      <td>$val</td>
      EOT;
      echo $text;
  }
  private function printprice($val)
  {
      $text = <<<EOT
      <td>$val</td>
      EOT;
      echo $text;
  }
  private function printQuantity($val)
  {
      $text = <<<EOT
         <td>$val</td>
      EOT; 
      echo $text;
  }
  private function Delete($val)
  {
      $action=URLROOT.'pages/cart?id='.$val;
      $text = <<<EOT
      <td>
      <a href=$action>X</a>
      </td>
      </tr>
      EOT;
      echo $text;
  }
  private function printTotal($val,$val1)
  {
      $totalval=$val*$val1;
      $text = <<<EOT
      <td>$totalval</td>
      EOT;
      echo $text;  
  }
}
?>
