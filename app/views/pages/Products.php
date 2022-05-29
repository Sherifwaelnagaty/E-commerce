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
        $Details=URLROOT . 'pages/Products_Detailed';
        $userModel = $this->model;
        $ProductsNum=$userModel->productcount();
        $loggedUser=$userModel->product();
        foreach($loggedUser as $row){
        $product_name=$row['product_name'];
        $product_price=$row['product_price'];
        $product_image=URLROOT .$row['product_image'];
        $text = <<<EOT
                    <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="" class="option1">
                           Add to cart
                           </a>
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
