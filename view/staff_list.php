<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quản lý nhân viên thư viện</title>
    <style>
        body { font-family: Arial; margin: 40px; }
        .container { max-width: 800px; margin: auto; }
        form { padding: 15px; border: 1px solid #ccc; margin-bottom: 20px; }
        input { display: block; margin-bottom: 10px; width: 100%; padding: 8px; }
        button { padding: 10px; background: green; color: white; border: none; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; }
    </style>
</head>
<body>

<div class="container">
    <h1>Quản lý nhân viên thư viện</h1>

    <form method="POST" action="index.php?action=add">
        <input type="text" name="name" placeholder="Tên" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="phone" placeholder="SĐT" required>
        <button type="submit">Thêm</button>
    </form>

    <h2>Danh sách nhân viên</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Email</th>
            <th>SĐT</th>
        </tr>

        <?php if (!empty($staffs)): ?>
            <?php foreach ($staffs as $s): ?>
                <tr>
                    <td><?= $s['id'] ?></td>
                    <td><?= htmlspecialchars($s['name']) ?></td>
                    <td><?= htmlspecialchars($s['email']) ?></td>
                    <td><?= htmlspecialchars($s['phone']) ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="4">Chưa có dữ liệu</td></tr>
        <?php endif; ?>

    </table>
</div>

</body>
</html>