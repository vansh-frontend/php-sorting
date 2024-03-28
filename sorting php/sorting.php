<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sorting techniques in php</title>
  <link rel="stylesheet" href="sorting.css">
</head>

<body>
  <h1>sorting techniques in php</h1>

  <div class="sort">

    <?php


echo "<table>";
echo "<tr><th>Original Array</th><th>Sorted Array</th></tr>";

// Sorting the array in ascending order using sort()


echo "<tr><td>";
echo "Original Array (sorted in ascending order)";
echo "</td><td>";

$array = [3, 1, 4, 1, 5, 9, 2, 6, 5, 3, 5];
sort($array); // Sorts the array in ascending order
print_r($array);

echo "</td></tr>";

// Sorting the array in descending order using rsort()
echo "<tr><td>";
echo "Original Array (sorted in descending order)";
echo "</td><td>";

$arrayy = [3, 1, 4, 1, 5, 9, 2, 6, 5, 3, 5];
rsort($arrayy); // Sorts the array in descending order
print_r($arrayy);

echo "</td></tr>";

// Sorting the associative array by values in ascending order using asort()
echo "<tr><td>";
echo "Original Associative Array (sorted by values in ascending order)";
echo "</td><td>";

$arrayyy = ['b' => 3, 'a' => 1, 'd' => 4, 'c' => 2];
asort($arrayyy); // Sorts the associative array by values in ascending order
print_r($arrayyy);

echo "</td></tr>";

// Sorting the associative array by values in descending order using arsort()
echo "<tr><td>";
echo "Original Associative Array (sorted by values in descending order)";
echo "</td><td>";

$arrayyyy = ['b' => 3, 'a' => 1, 'd' => 4, 'c' => 2];
arsort($arrayyyy); // Sorts the associative array by values in descending order
print_r($arrayyyy);

echo "</td></tr>";

// Sorting the associative array by keys in ascending order using ksort()
echo "<tr><td>";
echo "Original Associative Array (sorted by keys in ascending order)";
echo "</td><td>";

$arrayyyyy = ['b' => 3, 'a' => 1, 'd' => 4, 'c' => 2];
ksort($arrayyyyy); // Sorts the associative array by keys in ascending order
print_r($arrayyyyy);

echo "</td></tr>";

// Sorting the associative array by keys in descending order using krsort()
echo "<tr><td>";
echo "Original Associative Array (sorted by keys in descending order)";
echo "</td><td>";

$arrayyyyyy = ['b' => 3, 'a' => 1, 'd' => 4, 'c' => 2];
krsort($arrayyyyyy); // Sorts the associative array by keys in descending order
print_r($arrayyyyyy);

echo "</td></tr>";

echo "</table>";

?>
  </div>
</body>

</html>