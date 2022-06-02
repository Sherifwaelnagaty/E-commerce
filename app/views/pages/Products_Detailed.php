<?php
class Products_Detailed extends View
{  
  public function output()
  {
    require APPROOT . '/views/inc/header.php';
    $Image=URLROOT.'images/Picture1.jpg';
    $text = <<<EOT
                <br><br><br><br>
                <div class="container">
                    <div class="container-fliud">
                        <div class="wrapper row">
            EOT;
    echo $text;
    $userModel = $this->model;
    $loggedUser=$userModel->product($_GET['id']);
    foreach($loggedUser as $row){
    $this->Image($row['product_image']);
    $this->Price($row['product_price']);    
    $this->Sizes();    
    $this->AddToCart();
    if($_SESSION['Type']=="Admin")
    $this->Delete(); 
    }
    require APPROOT . '/views/inc/footer.php';
  }
  private function Image($Image)
{
    $Image=URLROOT.$Image;
    $text=<<<EOT
            <div class="preview col-md-6">
            <div class="preview-pic tab-content">
            <div class="img-box">
                <img src=$Image>
            </div>
            </div>
            </div>
            <form action="" method="POST">
        EOT;
    echo $text;
  }
  private function Price($price)
  {
    $text=<<<EOT
            <form action="" method="POST">
            <div class="details col-md-6">
            <h3 class="product-title"></h3>
            <h4 class="price">Price: $price LE</h4>
            <br><br>
        EOT;
    echo $text;    
  }
  private function Sizes()
  {
    $text=<<<EOT
          <h5 class="sizes">Sizes:
            <select name="users">
            <option value="">Select a Size</option>
        EOT;
    echo $text;

    $userModel = $this->model;
    $loggedUser=$userModel->Sizes($_GET['id']);
    foreach($loggedUser as $row){
    $Size=$row['Size'];
    $text1=<<<EOT
            <option value=$Size>$Size</option>   
    EOT;
    echo $text1;
    }
    $text2=<<<EOT
            </select>
            </h5>
    EOT;
    echo $text2;
  }
  private function AddToCart()
  {
    $text=<<<EOT
            <div class="action">
            <br><br>
            <input type="Submit" value="Add to Cart" class="add-to-cart btn btn-default">
            </div>
            
            </body>
        EOT;
    echo $text;    
  }
  private function Delete()
  {
    $text=<<<EOT
            <div class="action">
            <br><br>
            <input type="Submit" value="    Delete      " class="add-to-cart btn btn-default">
            </div>
            </div>
            </div>
            </div>
            </div>
            </body>
        EOT;
    echo $text;    
  }
}
?>
