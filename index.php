<?php
$grades =1010;

if ($grades<=100 && $grades <=98) 
{ 
    $marks= "1.00 Exelent";
    
}
if ($grades<=97 && $grades <=95)
{ 
    $marks= "1.25 Superior";
}
if ($grades<=94 && $grades <=92)
{ 
    $marks= "1.50 Very Good";
}
if ($grades<=91 && $grades <=89)
{ 
    $marks= "1.75 Good";
}
if ($grades<=85 && $grades <=86)
{ 
    $marks= "2.00 Very Satisfactory";
}
if ($grades<=85 && $grades <=83)
{ 
    $marks= "2.25 Satisfactory";
}
if ($grades<=82 && $grades <=80)
{ 
    $marks= "2.50 Average";
}
if ($grades<=79 && $grades <=77)
{ 
    $marks= "2.75 Fair";
}
if ($grades<=76 && $grades <=75)
{ 
    $marks= "3.00 Passed";
}
if ($grades<=75)
{ 
    $marks= "Failed";
}
if ($grades>=101)
{ 
    $marks= "Wrong Input";
}

"<center>";
echo "<h1><center>Dariela Ursulo Del Rosario</center></h1>";
"<center>";
echo "<h1><center>Simple Grading System</center></h1>";
echo "<p> <u>  _________________________________________________________________________________________________________________________________________________________________________________________________________________________________________</u></p>";
echo "<h2><center>Course Grade:$grades</center></h2>";
echo "<h2><center>$marks</center></h2>";
 
 
"</center>";
?>


