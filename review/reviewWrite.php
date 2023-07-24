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
    <title>1:1 상담 문의하기</title>
    <?php include "../include/head.php"?>
</head>
<body>
    <?php include "../include/header.php"?>
    <!-- // header -->
    <main id="main">
        <div class="consultWrite__inner">
            <h2 class="consult__title">1:1 상담</h2>
            <form action="reviewWriteSave.php" name="reviewWriteSave" method="post">
                <fieldset>
                    <legend class="blind">1:1 상담하기</legend>
                    <div class="consultWrite1">
                        <label for="consult__type">상담유형</label>
                        <select name="consult" id="consult">
                            <option value="별점" disabled selected hidden>별점</option>
                            <option value="1">★☆☆☆☆</option>
                            <option value="2">★★☆☆☆</option>
                            <option value="3">★★★☆☆</option>
                            <option value="4">★★★★☆</option>
                            <option value="5">★★★★★</option>
                        </select>
                        <select name="consult" id="consult">
                            <option value="별점" disabled selected hidden>맛</option>
                            <option value="맛있음">맛있음</option>
                            <option value="보통">보통이에요</option>
                            <option value="맛없음">맛없음</option>
                        </select>
                        <input type="text" id="consultTitle" name="consultTitle" class="inputStyle" placeholder="제목을 입력해주세요!">
                    </div>
                    <div class="consultWrite2">
                        <label for="consultContents">상담내용</label>
                        <textarea name="reviewContents" id="reviewContents" rows="20"  class="inputStyle" placeholder="상담하실 내용을 입력해주세요"></textarea>
                    </div>
                    <button type="submit" class="consultBtn">문의하기</button>
                </fieldset>
            </form>
        </div>
    </main>
    <!-- //main -->
    <?php include "../include/footer.php" ?>
    <!-- // footer -->
</body>
</html>