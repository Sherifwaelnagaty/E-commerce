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
    $text=<<<EOT
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
      $this->printsubTotal($row['productQuantity'],$row['product_price']);
      $this->Delete($row['cartID']);
    }
    $text1=<<<EOT
    <div class="container">
      <table class="table table-hover">
      <thead>
      <tr>
      <th>Total price</th>
    EOT;
    echo $text1;
    $this->printTotal();
    $this->Order();
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
      $action=URLROOT.'Pages/cart?id='.$val;
      $text = <<<EOT
      <td>
      <a href=$action>X</a>
      </td>
      </tr>
      EOT;
      echo $text;
  }
  private function printsubTotal($val,$val1)
  {
      $totalval=$val*$val1;
      $text = <<<EOT
      <td>$totalval</td>
      EOT;
      echo $text;  
  }
  private function printTotal()
  {
    $model=$this->model;
    $date=$model->cart();
    $totalval=0;
    foreach($date as $row){
    $totalval+=$row['product_price'];
    }
    $text = <<<EOT
      <th>$totalval</th>
      </thead>
      </table>
      EOT;
      echo $text;  
  }
  private function Order()
  {
      $model=$this->model;
      $date=$model->cart();
      if($model->cart()){
      foreach($date as $row){
      $action=URLROOT.'Pages/cart?id='.$row['cartID'];
      }
      $text = <<<EOT
      <form action="$action" method="POST">
      <input type="submit" Value="Order">
      EOT;
      echo $text;
  }
  }
}
?>
