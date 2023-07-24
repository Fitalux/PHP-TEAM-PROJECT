<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>
    <?php include "../include/head.php"?>
    <!-- // head(CSS) -->
</head>
<body>
    <?php include "../include/header.php" ?>
    <!-- //header -->
    <main id="main" class="container">
        <div id="communityModify__inner">
            <div class="board__write">
                <form action="communityModifySave.php" name="communityModifySave" method="post">
                <fieldset>
                        <legend class="blind">게시글 작성하기</legend>
                        <div class="communityModify1">
                            <!-- <label for="boardTitle">제목</label>
                            <input type="text" id="boardTitle" name="boardTitle" class="inputStyle">
                        </div>
                        <div class="communityModify2">
                            <label for="boardContents">내용</label>
                            <textarea name="boardContents" id="boardContents" rows="20"  class="inputStyle"></textarea> -->
                        </div>
<?php
    $communityID = $_GET['communityID'];
    $sql = "SELECT communityID, communityTitle, communityContents FROM community WHERE communityID = {$communityID}";
    $result = $connect -> query($sql);
    if($result){
        $info = $result -> fetch_array(MYSQLI_ASSOC);
        echo "<div style='display:none'><label for='communityID'>번호</label><input type='text' id='communityID' name='communityID' class='inputStyle' value='".$info['communityID']."'></div>";
        echo "<div class='communityModify1'><label for='communityTitle'>제목</label><input type='text' id='communityTitle' name='communityTitle' class='inputStyle' value='".$info['communityTitle']."'></div>";
        echo "<div class='communityModify2'><label for='communityContents'>내용</label><textarea name='communityContents' id='communityContents' rows='20' class='inputStyle'>".$info['communityContents']."</textarea></div>";
        echo "<div class='mt50 communityModify1'><label for='communityPass'>비밀번호</label><input type='password' id='communityPass' name='communityPass' class='inputStyle' autocomplete='off' required placeholder='글을 수정하려면 로그인 비밀번호를 입력하셔야 합니다.'></div>";
    }
?>
                        <button type="submit" class="btnStyle3">목록보기</button>
                        <button type="submit" class="btnStyle3">수정하기</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </main>
    <!-- //main -->
    <?php include "../include/footer.php" ?>
    <!-- //footer -->
</body>
</html>