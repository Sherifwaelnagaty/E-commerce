<?php
class orders extends View
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
      <th>Order's Date</th>
      <th>Situation</th>
      <th>Cancel</th>
      </tr>
      </thead>
    EOT;
    echo $text;
    $model=$this->model;
    $order=$model->Myorder();
    foreach($order as $row){
    $this->PrintDate($row['orderdate']);
    $this->PrintSituation($row['Situation']);
    if(isset($row['orderdate'])){
    $this->PrintCancel($row['orderID']);
    }
  }
}
  private function PrintDate($val){
      $text = <<<EOT
      <tr>
      <td>$val</td>
      EOT;
      echo $text;
  }
  private function PrintSituation($val){
      $text = <<<EOT
      <td>$val</td>
      EOT;
      echo $text;
  }
  private function PrintCancel($val){
      $action=URLROOT.'pages/orders?id='.$val;
      $text = <<<EOT
      <form action=$action method="POST">
      <td><input type="Submit" value="Cancel Order"</td>
      </tr>
      EOT;
      echo $text;
}
}
?>
