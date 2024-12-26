<?php

if (true) {
    echo "Hello";
}
else {
    echo "By";
}




// PHP Alternative Control Structure Syntax

if(5===5):
    echo "Hello";

else:
    echo "Bye";

endif;





// switch

switch(true):
    case(5===5):
        echo "Hello, I am from switch";
        break;
    default:
        echo "bye";
endswitch;



?>


<!-- benefit of using alternative syntax.............................. -->

<!-- conditions -->
<?php if(5===5): ?>
    <h2>I am from if</h2>
<?php else: ?>
    <h2>Bye</h2>
<?php endif; ?>




<!-- looping -->
 <?php for($x=1; $x<=6; $x++): ?>
    <h1>I am Heading-<?php echo $x; ?></h1>
<?php endfor; ?>





<!-- Null Coalescing Operator -->
<?php 

$nill = null; 

$actul_value = $nill ?? "something"; // jodi nill e value set kora na thake tahole somthing k add koro.

echo $actul_value;

?>