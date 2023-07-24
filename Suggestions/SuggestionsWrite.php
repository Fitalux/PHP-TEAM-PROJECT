<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    
    $sql = "SELECT count(SuggestionsQID) FROM SuggestionQ";
    $result = $connect -> query($sql);

    // $TotalCount = $result -> fetch_array(MYSQLI_ASSOC);
    // $TotalCount = $SuggestionsQTotalCount['count(SuggestionsQID)'];
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>건의하기 - 건의내용 쓰기</title>
    <?php include "../include/head.php"?>
</head>
<body>
    <?php include "../include/header.php"?>
    <!-- // header -->
    <main id="main">
        <div class="consultWrite__inner">
            <h2 class="consult__title">건의하기</h2>
            <form action="SuggestionsWriteSave.php" name="SuggestionsWriteSave" method="post">
                <fieldset>
                    <legend class="blind">건의하기</legend>
                    <div class="consultWrite1">
                        <label for="SuggestionsQType">건의 유형</label>
                        <select name="SuggestionsQType" id="SuggestionsQType">
                            <option value="상품추가요청">싱품 추가 요청</option>
                            <option value="사이트관련">사이트 관련</option>
                            <option value="상품관련">상품 관련</option>
                            <option value="기타">기타</option>
                        </select>
                        <input type="text" id="SuggestionsQTitle" name="SuggestionsQTitle" class="inputStyle" placeholder="제목을 입력해주세요!">
                    </div>
                    <div class="consultWrite2">
                        <label for="SuggestionsQContents">건의하실 내용</label>
                        <textarea name="SuggestionsQContents" id="SuggestionsQContents" rows="20"  class="inputStyle" placeholder="건의하고 싶은 내용을 입력해주세요"></textarea>
                    </div>
                    <button type="submit" class="consultBtn">건의하기</button>
                </fieldset>
            </form>
        </div>
    </main>
    <!-- //main -->
    <?php include "../include/footer.php" ?>
    <!-- // footer -->
</body>
</html>