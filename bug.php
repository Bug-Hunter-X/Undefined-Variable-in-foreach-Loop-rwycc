function foo(array $arr) {
  foreach ($arr as $value) {
    //This line will cause an error if any element in the array is not an integer
    $sum += $value;
  }
  return $sum;
}