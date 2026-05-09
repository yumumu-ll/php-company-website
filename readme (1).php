<?php
// 询盘表单提交处理
header("Content-type: text/html; charset=utf-8");

// 接收表单数据
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

// 基础验证
if (empty($name) || empty($email) || empty($message)) {
    echo "<script>alert('所有字段都不能为空！');location.href='index.php';</script>";
    exit;
}

// 模拟数据存储（实际项目会用MySQL）
$log = "时间：" . date("Y-m-d H:i:s") . " | 姓名：{$name} | 邮箱：{$email} | 留言：{$message}\n";
file_put_contents("message_log.txt", $log, FILE_APPEND);

echo "<script>alert('询盘提交成功！我们会尽快联系您。');location.href='index.php';</script>";
?>