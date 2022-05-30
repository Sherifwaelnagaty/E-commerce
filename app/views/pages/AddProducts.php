
<?php
class AddProducts extends View
{
  public function output()
  {
    require APPROOT . '/views/inc/header.php';
    $this->print();
    require APPROOT . '/views/inc/footer.php';

  }
  private function print()
    {
        $action = URLROOT . 'pages/Index';
        $text = <<<EOT
        <form action="$action" method="post">
        <div class="container rounded bg-white mt-5 mb-5">
         <div class="row">
        <div class="col-md-3 border-right">
        </div>
        <div class="col-md-5 border-right"> 
            <div class="p-3 py-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Add Product</h4>
                </div>
        EOT;
        echo $text;
        $this->productname();
    $this->producttype();
    $this->productprice();
    $this->productID();
    $this->productImage();
    $this->printButton();
    $text=<<<EOT
            <div class="row mt-3">
                </div>
                
            </div>
            </div>
       EOT;
    echo $text;
    }
  private function productname()
  {
     $val = $this->model->getproduct_name();
     $text = <<<EOT
      <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="Product Name" value=""></div>
      EOT;
      echo $text;
  }

  private function producttype()
  {
     $val = $this->model->getproduct_type();
     $text = <<<EOT
      <div class="col-md-6"><label class="labels">Type</label><input type="text" class="form-control" value="" placeholder="Product Type"></div>
                </div>
      EOT;
      echo $text;
  }

  private function productprice()
  {
     $val = $this->model->getproduct_price();
     $text = <<<EOT
      <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Price</label><input type="text" class="form-control" placeholder="Enter The Price" value=""><br></div>
      EOT;
      echo $text;
  }

  private function productID()
  {
     $val = $this->model->getproductID();
     $text = <<<EOT
      <div class="col-md-12"><label class="labels">Product ID </label><input type="text" class="form-control" placeholder="Enter Product ID " value=""></div>
                </div>
      EOT;
      echo $text;
  }

  private function productImage()
  {
     $val = $this->model->getproductID();
     $text = <<<EOT
            <div class="col-md-4">
            <div class="p-3 py-5"><br><br>
                <div class="col-md-12"><label class="labels">Product Image</label><input type="file" name="product_image" id="product_image"></div> <br>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
      EOT;
      echo $text;
  }
  public function printButton(){
        $text=<<<EOT
            <div class="row mt-3">
                </div>
                <div class="mt-5 text-center"><input type="submit" class="btn btn-primary profile-button" type="button"></div>
            </div>
            </div>
            EOT;
            echo $text;
    }


}


