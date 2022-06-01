<?php
class Products extends View
{
  public function output()
  {
    require APPROOT . '/views/inc/header.php';
    $this->Types();
    require APPROOT . '/views/inc/footer.php';
  }
  public function Types(){
    $style=URLROOT.'css/Products.css';
    $text = <<<EOT
                <link rel="stylesheet" href="$style">
                <section class="product_section layout_padding">
                <div class="container">
                <div class="heading_container heading_center">
               <h2>
                  Our products
               </h2>
                </div> 
                <section class="product_section layout_padding">
                <div class="container">
            EOT;
    echo $text;
    $this->Products();
    $text=<<<EOT
            </div>
            </section>
            EOT;
    echo $text;
  }
    public function Products(){
        $userModel = $this->model;
        $loggedUser=$userModel->product();
        foreach($loggedUser as $row){
        $action=URLROOT.'pages/Products?id='.$row['productID'];
        $Details=URLROOT . 'pages/Products_Detailed?id='.$row['productID'];
        $product_name=$row['product_name'];
        $product_price=$row['product_price'];
        $product_image=URLROOT .$row['product_image'];
        $text = <<<EOT
                    <form action="$action" method="GET">
                    <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                     <div class="option_container">
                     <div class="options">
                           <input type="submit" value="Add to cart">
                           <form action="$Details" method="GET"><br>
                           <input type="submit" value="More Info">
                     </div>
                     </div>
                     <div class="img-box">
                        <img src="$product_image" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           $product_name
                        </h5>
                        <h6>
                           $product_price
                        </h6>
                     </div>
                  </div>
               </div>
               </div>
            EOT;
    echo $text;
    }
  }
}?>
