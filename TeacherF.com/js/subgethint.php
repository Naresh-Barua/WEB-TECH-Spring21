<?php
// Array with names
$a[] = "Data Structures";
$a[] = "Algorithms";
$a[] = "Discrete Mathematics";
$a[] = "HTMl";
$a[] = "CSS";
$a[] = "JavaScript";
$a[] = "Operating Systems";
$a[] = "Computer Architecture";
$a[] = "Microprocessors";
$a[] = "Database Systems";
$a[] = "Compiler Design";
$a[] = "Signals and Systems";
$a[] = "Computer Networks";
$a[] = "Artificial Intelligence";
$a[] = "Computer Graphics";
$a[] = "Neural Networks";
$a[] = "Machine Learning";
$a[] = "Bangladesh Studies";
$a[] = "Financial Accounting";
$a[] = "Mathematics  I";
$a[] = "Mathematics II";
$a[] = "Mathematics III";
$a[] = "Mathematics IV";
$a[] = "Electronic Circuits I";
$a[] = "Electronic Circuits II";
$a[] = "Digital Logic Design";
$a[] = "Smart Grid";
$a[] = "Business Strategy";
$a[] = "Marketing Management";
$a[] = "Operations Management";
$a[] = "Principles of Auditing";


// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $course) {
        if (stristr($q, substr($course, 0, $len))) {
            if ($hint === "") {
                $hint = $course;
            } else {
                $hint .= ", $course";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>