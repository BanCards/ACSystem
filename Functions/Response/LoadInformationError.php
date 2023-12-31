<?php include('../Utils/Utils.php') ?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <title>ACSystem - Error</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/Common.css">
    <link rel="stylesheet" href="../../CSS/LoadInformationError.css">
</head>

<body>
    <div class="content">

        <!-- ヘッダー -->
        <?php sendHeaders() ?>

        <!-- メイン -->
        <div class="main">

            <div class="form">
                <h1 class="loadError-title">
                    <?php echo getError('title') ?>
                </h1>

                <div class="loadError-items">

                    <div class="loadError-item">
                        <?php echo getError('message') ?>
                    </div>

                    <div class="loadError-item">
                        <?php echo getError('code') ?>
                    </div>

                    <div class="submit-button">
                        <a href=<?php echo INDEX ?>><button type="button">ホームに戻る</button></a>
                    </div>

                </div>
            </div>

        </div>

        <!-- フッター -->
        <?php sendFooters() ?>

    </div>

    <div class="pop"></div>

    <script src="../../JavaScript/DisableAutoComplete.js"></script>
    <script src="../../JavaScript/PopUp.js"></script>
</body>

</html>