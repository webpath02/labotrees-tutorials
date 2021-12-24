<?php 
  
// PHP program to creating two 
// dimensional associative array 
$products = array( 
      
    
    "apple" => array( 
          
        // the key value pair
        "price" => 5, 
        "qty" => 2, 
    ), 
          
   
    "grapes" => array( 
        // the key value pair
        "price" => 4, 
        "qty" => 3, 
    ), 
      
    // Anoop will act as key 
    "mango" => array( 
          
        // the key value pair 
        "price" => 4, 
        "qty" => 3, 
    ), 
); 
  
echo '<pre>';
echo "Orginal array <br>";
  
// Display Results
print_r($products); 
  
// Now Use unset() function to delete elements
unset($products["mango"]);
  
echo "After delete the element <br>";
  
// Display Results
print_r($products); 

echo '</pre>';