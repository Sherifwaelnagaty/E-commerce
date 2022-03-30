<?php
class Products extends View
{
  public function output()
  {
    $title = $this->model->title;
    $subtitle = $this->model->subtitle;
    if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
    $user_name = $_SESSION['user_name'];
   }
    require APPROOT . '/views/inc/header.php';
    $text = '
     <!-- end header section -->
      </div>
      <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div> 
            <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="box">
            <div class="option_container">
            <div class="options">
                           <a href="" class="option2">
                           Buy Now
                           </a>
                        </div>
            </div>
            </div> 
            <div class="img-box">
                        <img src="images/p1.png" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                          T-Shirt
                        </h5>
                        <h6>
                           $75
                        </h6>
                     </div>
                  </div>
               </div>';
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}
