<?php

$color = "seagreen";

// switch ($color) {
//     case 'red':
//         echo "$color is my favorite color\n";
//         break;
//     case 'green':
//         echo "$color is my favorite color\n";
//         break;
//     case 'blue':
//         echo "$color is not my favorite color\n";
//         break;
    
//     default:
//         echo "Random color here\n";
//         break;
// }

switch ($color) {
    case 'red':      // same kaj ty ek sathe niye check kora jay
    case 'green':
        echo "$color is my favorite color\n";
        break;
    case 'blue':
        echo "$color is not my favorite color\n";
        break;
    
    default:
        echo "Random color here\n";
        break;
}