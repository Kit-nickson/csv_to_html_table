<?php

$file = fopen('city2.csv', 'r');
$tableHead = false;

echo '<table style="border: 3px solid black; border-collapse: collapse; text-align: center">';
do {
    if ($tableHead === false) {
        $line = fgets($file);
        $columns = explode(string: $line, separator: ',');
        
        print '<thead style="background: wheat"><tr>';
        foreach($columns as $column){
            $column = trim($column, '"');
            print '<td style="border: 1px solid black; font-weight:bold">'.$column.'</td>';
        }
        print '</tr></thead>';
        $tableHead = true;
    } else {
        $line = fgets($file);
        $columns = explode(string: $line, separator: ',');
        
        print '<tr>';
        foreach($columns as $column){
            $column = trim($column, '"');
            print '<td style="border: 1px solid black">'.$column.'</td>';
        }
        print '</tr>';
        $tableHead = true;
    }
    
} while (fgets($file));
echo "</tr></table>";

// $first_line = fgets($file);
// print $first_line;