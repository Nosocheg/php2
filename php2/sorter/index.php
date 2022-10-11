<html lang="en">
<head>
    <title>Sorter</title>
</head>
<body>
<?php
require_once 'sort.php';
echo 'Полученные на вход данные: ' . $_GET["s"] . '<br>';
$s = explode(",", $_GET["s"]);
$s = insertion_sort($s);
$s = implode(",", $s);
echo 'Результат сортировки: ' . $s;
?>
</body>
</html>