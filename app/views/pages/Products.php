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
            <section class="featured spad">
            <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".Pants">Dresses</li>
                            <li data-filter=".T-shirts">Blouses</li>
                            <li data-filter=".Jeans">Cardigans</li>
                            <li data-filter=".Jackets">Jackets</li>
                        </ul>
                    </div>
                </div>
                </div>
            EOT;
    echo $text;
    $ProductsNum=$this->model->productcount();
    while($ProductsNum>0){
    $this->Products();
    $ProductsNum-=1;
    }
  }
  public function Products(){
        $Details=URLROOT . 'pages/Products_Detailed';
        $product_name=$_SESSION['product_name'];
        $product_type=$_SESSION['product_type'];
        $product_price=$_SESSION['product_price'];
        $product_image=$_SESSION['product_image'];
        $text = <<<EOT
                <div class="row featured__filter">
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="$Details"></a>$product_name</h6>
                            <h5>LE $product_price</h5>
                        </div>
                    </div>
                </div>
                </div>
                </div>
                </div>
              </section>
            EOT;
    echo $text;
  }
}?>
