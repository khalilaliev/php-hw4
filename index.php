<?php

// Find any value of nested array

$nested_arr = [
  [21,33,56,2,23,5],
  [65,32,2,1,6,9,81,7],
  [1,4,5, 32,3,78,3,5,5],
];

function get_index_of_nested_arr(array $array, int $index): array {
  $arr = [];
  foreach ($array as $value) {
    if (is_array($value)) {
      if (array_key_exists($index, $value)) {
        $arr[] = $value[$index];
      }
    }
  }
  return $arr;
}

print_r(get_index_of_nested_arr($nested_arr, 3));

echo '<br>';

// Finding char b in line of string

function check_to_the_b($message): string {
  if (!is_string($message)) {
    return "Input is not a valid string.";
  }

  $count = substr_count($message, 'b');
  
  if ($count) {
    return "Letter 'b' is found {$count} times.";
  } else {
    return "Letter 'b' is not found.";
  }
}

print_r(check_to_the_b('awawdabb'));

echo '<br>';

// Sum all elements of nested array

function sum_array_elements(array $array): int {
  $sum = 0;
  foreach($array as $value){
    if(is_array($value)){
      $sum += sum_array_elements($value);
    } else {
      $sum += $value;
    }
  }

  return $sum;
}

print_r(sum_array_elements($nested_arr));

echo '<br>';

// Float

function get_count_of_squares(float $lg, float $sm): float {
  if($sm <= 0 || $sm > $lg){
    return 0;
  }
  $big = pow($lg, 2); 
  $small = pow($sm, 2);
  $fit = $big / $small; 
  return round($fit, 2);
}

print_r(get_count_of_squares(10, 2.5));