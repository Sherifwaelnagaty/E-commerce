<?php
class orders extends View
{
  public function output()
  {
    require APPROOT . '/views/inc/header.php';
    $text=<<<EOT
      <div class="container">
      <table class="table table-hover">
      <thead>
      <tr>
      <th>Order's Date</th>
      <th>totalprice</th>
      <th>Situation</th>
      </tr>
      </thead>
    EOT;
    echo $text;
    $this->model->Myorder();
    $this->PrintDate();
    $this->PrintSituation();
    $this->PrintCancel();
  }
  public function PrintDate(){
      $val = $this->model->getdateoforder();
      $text = <<<EOT
      <tr>
      <td>$val</td>
      EOT;
      echo $text;
  }
  public function PrintSituation(){
      $val = $this->model->getsituation();
      $text = <<<EOT
      <td>$val</td>
      EOT;
      echo $text;
  }
  public function PrintCancel(){
      $val= $this->model->Cancel();
      $text = <<<EOT
      <td><a href=$val><button type="submit" class="button" value="Delete" class="btn btn-primary"  onclick="">Cancel</button></a></td>
      </tr>
      EOT;
      echo $text;
  }
}
?>
