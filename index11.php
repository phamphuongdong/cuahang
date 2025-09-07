<?php
include("connect.php");
$sql = "SELECT MaDM, TenDM FROM danhmuc";
$result = $conn->query($sql);

echo '<ul class="subnav">';
while ($row = $result->fetch_assoc()) {
    echo '<li><a href="index.php?madm=' . $row['MaDM'] . '">' . $row['TenDM'] . '</a></li>';
}
echo '</ul>';
?>
