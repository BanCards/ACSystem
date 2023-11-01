<?php
include('../../Utils/Utils.php');
session_status() == PHP_SESSION_NONE ? session_start() : sleep(0);

function setError($errorTitle, $errorMessage, $errorCode)
{
    $_SESSION['errorTitle'] = $errorTitle;
    $_SESSION['errorMessage'] = $errorMessage;
    $_SESSION['errorCode'] = "エラーコード : " . $errorCode . date("ymdis");
    header('Location:../LoadInformationError.php');
    return;
}

if (!(isLoggedIn()))
    setError("ログイン情報エラー", "ログインしてください。", "12A_");
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <title>ACSystem</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="../../../CSS/Common.css">
    <link rel="stylesheet" href="../CSS/cardAttendance.css">
</head>

<body>
    <div class="content">

        <!-- ヘッダー -->
        <div class="header">
            <h2>ACSYSTEM</h2>

            <!-- ナビゲーション -->
            <nav class="navigation">
                <ul>
                    <li class="top">
                        <a href="../../../Index.html">
                            <i class="fas fa-home"></i> ホーム
                        </a>
                    </li>
                    <li class="profile">
                        <a href="../../Profile/Profile.php">
                            <i class="fas fa-user"></i> プロフィール
                        </a>
                    </li>
                    <li class="contact">
                        <a href="../../Contact/Contact.html">
                            <i class="fas fa-info-circle"></i> コンタクト
                        </a>
                    </li>
                    <li class="help">
                        <a href="#">
                            <i class="fas fa-question-circle"></i> ヘルプ
                        </a>
                    </li>
                    <li class="logout">
                        <a href="#">
                            <i class="fas fa-sign-in-alt"></i> ログアウト
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- メイン -->
        <div class="main">

            <div class="form">
                <h1 class="attendance-title">選択をしてください</h1>

                <div class="attendance-items">

                    <div class="attendance-item">
                        <a href="#">
                            <button type="button" id="attend">
                                <p>出席する</p>
                            </button>
                        </a>
                    </div>

                    <div class="attendance-item">
                        <a href="#">
                            <button type="button" id="absent" value="absent">
                                <p>欠席する</p>
                            </button>
                        </a>
                    </div>

                    <div class="attendance-item">
                        <a href="#">
                            <button type="button" id="other">
                                <p>その他</p>
                            </button>
                        </a>
                    </div>

                </div>
            </div>

        </div>

        <!-- フッター -->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; 2023 Attendance Check System by ACSystem Team All rights reserved.</p>
            </div>
        </div>

    </div>
</body>

</html>