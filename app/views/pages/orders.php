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
    require APPROOT . '/views/inc/footer.php';
  }
}
?>