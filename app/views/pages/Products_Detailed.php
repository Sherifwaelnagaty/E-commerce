<?
class Products_Detailed extends View
{  
  public function output()
  {
    require APPROOT . '/views/inc/header.php';
    $text = <<<EOT
         <section class="product-details spad">
         <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                 <img src=" ">   
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3></h3>
                        <div class="product__details__price"></div>
                            <a href="" class="primary-btn">ADD TO CART</a><br><br>
                        </div>
                        <br>
                        <a href="" class="primary-btn">Edit Product</a><br><br>
                        <a href="" class="primary-btn">Delete Product</a>
                    </div>
                </div>
      EOT;
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}
?>