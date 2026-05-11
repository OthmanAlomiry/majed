<?php
// الاتصال بقاعدة البيانات
$conn = new mysqli("localhost", "username", "password", "database_name");

$sql = "SELECT * FROM weddings ORDER BY id DESC";
$result = $conn->query($sql);
?>

<h2 style="text-align:center; color: #1a4a8e;">بيان بمواعيد مناسبات الزواجات الخاصة بالجماعة</h2>

<table border="1" style="width:100%; direction:rtl; text-align:center; border-collapse: collapse;">
    <tr style="background-color: #305496; color: white;">
        <th>اليوم</th>
        <th>التاريخ</th>
        <th>صاحب المناسبة</th>
        <th>المكان</th>
        <th>اسم القاعة / القصر</th>
    </tr>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
        <td style="color: green; font-weight: bold;"><?php echo $row['event_day']; ?></td>
        <td style="color: red;"><?php echo $row['event_date']; ?></td>
        <td><?php echo $row['host_name']; ?></td>
        <td style="color: red;"><?php echo $row['location']; ?></td>
        <td><?php echo $row['hall_name']; ?></td>
    </tr>
    <?php endwhile; ?>
</table>
