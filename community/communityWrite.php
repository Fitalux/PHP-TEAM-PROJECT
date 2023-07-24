<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>커뮤니티</title>
    <?php include "../include/head.php"?>
</head>
<body class="gray">
    <?php include "../include/header.php"?>
    <!-- // header -->
    <main id="main">
    <div id="communityWrite__inner">
        <div class="board__write">
            <form action="communityWriteSave.php" name="communityWrite" method="post">
                <fieldset>
                    <legend class="blind">게시글 작성하기</legend>
                    <div class="communityWrite1">
                        <label for="communityTitle">제목</label>
                        <input type="text" id="communityTitle" name="communityTitle" class="inputStyle">
                    </div>
                    <div class="communityWrite2">
                        <label for="communityContents">내용</label>
                        <textarea name="communityContents" id="communityContents" rows="20"  class="inputStyle"></textarea>
                    </div>
                    <button type="submit" class="btnStyle3">저장하기</button>
                </fieldset>
            </form>
        </div>
    </div>
    </main>
    <!-- //main -->
    <?php include "../include/footer.php" ?>
    <!-- // footer -->
</body>
</html>