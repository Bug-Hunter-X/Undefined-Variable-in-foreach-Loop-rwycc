function foo(array $arr) {
  $sum = 0; // Initialize $sum to 0
  foreach ($arr as $value) {
    $sum += $value;
  }
  return $sum;
}