<?php 
include('../../Utils/Utils.php');

if (!(isLoggedIn())) {
    setError("ログイン情報エラー", "ログインしてください。", "12A");
    return;
}

if (isEmptyItems($_SESSION['contactTitle'], $_SESSION['contactContents'])) return;

$time = DateTime::createFromFormat("Y-m-d H:i:s", getCurrentTime())->format("Ymd");
$file = '../Contacts/' . $time . ".txt";

$title =  $_SESSION['contactTitle'];
$messages =  $_SESSION['contactContents'];

$contents = "\n[From] " . getLoginUserName() . " - " . getLoginUserEmail() . "\n[Time] " . getCurrentTime() . "\n[Title] " . $title . "\n[Messages] " . $messages . "\n";

if (!file_exists('data.txt')) {
    file_put_contents($file, $contents, FILE_APPEND | LOCK_EX);
} else {
    $fp = fopen($file, 'w');
    fputs($fp, $contents);
    fclose($fp);
}

setSuccess("内容を送信しました");
