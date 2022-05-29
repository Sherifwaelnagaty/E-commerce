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
    $this->PrintDate();
    $this->PrintSituation();
    $model=$this->model;
    $order=$model->Myorder();
    if(isset($order->orderdate)){
    $this->PrintCancel();
    }
  }
  public function PrintDate(){
      $model=$this->model;
      $date=$model->Myorder();
      foreach($date as $row){
      $val=$row['orderdate']; 
      $text = <<<EOT
      <tr>
      <td>$val</td>
      EOT;
      echo $text;
    }
  }
  public function PrintSituation(){
      $model=$this->model;
      $situation=$model->Myorder();
      foreach($situation as $row){
      $val=$row['Situation'];
      $text = <<<EOT
      <td>$val</td>
      EOT;
      echo $text;
    }
  }
  public function PrintCancel(){
      $val= $this->model;
      $cancel=$val->Cancel();
      $text = <<<EOT
      <td><a href=$cancel><button type="submit" class="button" value="Delete" class="btn btn-primary"  onclick="">Cancel</button></a></td>
      </tr>
      EOT;
      echo $text;
  }
}
?>
