<?php
class AddProducts extends View
{
  public function output()
  {
    
   
    require APPROOT . '/views/inc/header.php';
    $text = '
         <div class="container rounded bg-white mt-5 mb-5">
         <div class="row">
        <div class="col-md-3 border-right">
        </div>
        <div class="col-md-5 border-right"> 
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Add Product</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="Product Name" value=""></div>
                    <div class="col-md-6"><label class="labels">Type</label><input type="text" class="form-control" value="" placeholder="Product Type"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Price</label><input type="text" class="form-control" placeholder="Enter The Price" value=""><br></div>
                    <div class="col-md-12"><label class="labels">Product ID </label><input type="text" class="form-control" placeholder="Enter Product ID " value=""></div>
                </div>
                <div class="row mt-3">
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5"><br><br>
                <div class="col-md-12"><label class="labels">Product Image</label><input type="file" name="product_image" id="product_image"></div> <br>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>';
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}
