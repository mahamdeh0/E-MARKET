<?php
function component($productname,$productPrice,$productImg,$productId)
{
    $element="
    <div class=\"card\" style=\"width: 18rem;\">

            <img src=\"$productImg\" class=\"card-img-top\">
            <div class=\"card-body\">
            <h6 class=\"card-title\">$productname</h6>
            <b>$ <span class=\"item-Price\">$productPrice</span> </b>
                <form action='' method=\"post\">
            
            <div class=\"d-flex container justify-content-around\">
                <button type=\"submit\" class=\"btn btn-primary add_item  h-50 mt-4\" name=\"submit\" >Add to Cart</button>
                                  <input id=\"form1\" min=\"0\" style='max-height: 25px; max-width: 70px;' name=\"quantity\" value='1' type=\"number\"
                                                   class=\"form-control form-control-sm mt-4 \" />
                <input type='hidden'name='product_id' value='$productId'>
            </div>
                </form>
            </div>

    </div>
    ";
    echo $element;
}

function cartElement($productimg,$productname,$productprice,$productid){
    $element="   <form action=\"cart.php?action=remove&id=$productid\" method=\"POST\">
                                    <div class=\"row mb-4 d-flex justify-content-between align-items-center\">
                                        <div class=\"col-md-2 col-lg-2 col-xl-2\">
                                            <img
                                                    src=$productimg
                                                    class=\"img-fluid rounded-3\" >
                                        </div>
                                  
                                        <div class=\"col-md-3 col-lg-3 col-xl-3\">
                                            <h6 class=\"text-muted\">$productname</h6>
                               
                                        </div>
                                        <div class=\"col-md-3 col-lg-3 col-xl-2 d-flex\">

                                
                                                   

                                        </div>
                                        <div class=\"col-md-3 col-lg-2 col-xl-2 offset-lg-1\">
                                            <h6 class=\"mb-0\">$productprice</h6>
                                        </div>
                                        <div class=\"col-md-1 col-lg-1 col-xl-1 text-end\">
                                            <button type=\"submit\" name=\"remove\" class=\"btn\">X</button>
                                        </div>
                                    </div>
                                    </form>
     <hr class=\"my-4\">
    
    ";
echo $element;

}