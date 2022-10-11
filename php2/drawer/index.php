<html lang="en">
<head>
    <title>Drawer</title>
</head>
<body style="height: auto">
<?php
require_once 'draw.php';
$num = $_GET["num"];
if ($num == 1) {
    print_r(figure1());
}
if ($num == 2) {
    print_r(figure2());
}
if ($num == 3) {
    print_r(figure3());
}
?>
</body>
</html>