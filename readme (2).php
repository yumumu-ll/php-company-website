<?php
$siteName = "企业游乐设备官网";
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title><?php echo $siteName; ?></title>
    <style>
        body { font-family: "微软雅黑", sans-serif; max-width: 1000px; margin: 0 auto; padding: 20px; }
        .header { background: #2385bb; color: white; padding: 15px; text-align: center; border-radius: 5px; }
        .product-list { display: flex; gap: 20px; margin-top: 20px; flex-wrap: wrap; }
        .product { border: 1px solid #eee; padding: 15px; flex: 1; min-width: 200px; border-radius: 5px; }
        form { margin-top: 20px; line-height: 2; }
        input, textarea { width: 300px; padding: 8px; margin: 5px 0; border: 1px solid #ddd; border-radius: 3px; }
        button { background: #2385bb; color: white; border: none; padding: 8px 20px; border-radius: 3px; cursor: pointer; }
    </style>
</head>
<body>
    <div class="header">
        <h1><?php echo $siteName; ?></h1>
    </div>

    <h2>产品展示</h2>
    <div class="product-list">
        <div class="product">
            <h3>旋转木马设备</h3>
            <p>适用场景：主题乐园、商场中庭</p >
        </div>
        <div class="product">
            <h3>儿童淘气堡</h3>
            <p>适用场景：室内游乐场、亲子乐园</p >
        </div>
    </div>

    <h2>在线询盘</h2>
    <form action="submit_form.php" method="post">
        <input type="text" name="name" placeholder="您的姓名" required><br>
        <input type="email" name="email" placeholder="您的邮箱" required><br>
        <textarea name="message" rows="5" placeholder="请输入您的咨询内容" required></textarea><br>
        <button type="submit">提交询盘</button>
    </form>
</body>
</html>
