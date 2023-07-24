<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $sql = "SELECT count(SuggestionsQID) AS totalCount FROM SuggestionsQ;";
    $result = $connect -> query($sql);

    $SuggestionsQTotalCount = $result->fetch_array(MYSQLI_ASSOC)['totalCount'];
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>건의하기</title>
    <?php include "../include/head.php"?>
</head>
<body>
    <?php include "../include/header.php"?>
    <!-- // header -->
    <main id="main">
        <div class="consultation__inner">
                <h2 class="consultation__title">건의하기</h2>
            <div class="service__search">
                <form action="SuggestionsSearch.php" name="SuggestionsSearch" method="get">
                    <input type="search" name="searchKeyword" aria-label="검색" placeholder="찾으시는 내용을 입력해주세요">
                    <button type="submit" class="search__btn"><img src="../assets/img/search.svg" alt="돋보기 이미지"></button>
                </form>
            </div>
            <?php
                if(isset($_SESSION['memberID'])) {
                    // 로그인된 경우
                    echo '<a href="SuggestionsWrite.php" class="consultation__btn">글쓰기</a>';
                } else {
                    // 로그인되지 않은 경우
                    echo '<a href="../login/login.php" onclick="alert(\'회원만 건의하기를 이용할 수 있습니다. 로그인을 해주세요.\')" class="consultation__btn">글쓰기</a>';
                }
            ?>
            <div class="consultation__table">
                <table>
                <colgroup>
                        <col style="width: 5%;">
                        <col>
                        <col>
                        <col style="width: 9%;">
                    </colgroup>
                    <tbody>
<?php
    if (isset($_GET['page'])) {
        $page = (int) $_GET['page'];
    } else {
        $page = 1;
    }

    $viewNum = 20;
    $viewLimit = ($viewNum * $page) - $viewNum;
    $sql = "SELECT s.SuggestionsQID, s.SuggestionsQTitle, y.youID, s.regTime FROM SuggestionsQ s
    JOIN yungyangMember y ON(s.memberID = y.memberID) ORDER BY SuggestionsQID DESC LIMIT {$viewLimit}, {$viewNum}";
    $result = $connect->query($sql);

    if ($result) {
        $count = $result -> num_rows;
        if ($count > 0) {
            while ($info = $result->fetch_array(MYSQLI_ASSOC)) {
                echo "<tr>";
                echo "<td>".$info['SuggestionsQID']."</td>";
                echo "<td><a href='SuggestionsView.php?SuggestionsQID={$info['SuggestionsQID']}'>".$info['SuggestionsQTitle']."</a></td>";
                echo "<td>".date('Y-m-d', $info['regTime'])."</td>";

                $SuggestionsQID = $info['SuggestionsQID'];
                $sql = "SELECT * FROM SuggestionsQ WHERE SuggestionsQID = '$SuggestionsQID'";
                $result = $connect->query($sql);

                if ($result && $resullt -> num_rows > 0) {
                    echo "<td>확인 완료</td></tr>";
                } else {
                    echo "<td>확인 미완료</td></tr>";
                }
                    echo "</tr>";
                }
        } else {
            echo "<tr><td colspan='4'>게시글이 없습니다.</td></tr>";
        }
    }
?>
                    </tbody>
                </table>
            </div>
            <div class="consultation__pages">
                <ul>
<?php
    //총 페이지 갯수
    $SuggestionsQTotalCount = ceil($SuggestionsQTotalCount/20);
    //1 2 3 4 5 6 7 8 9 10 11 12 13
    
    $pageView =5;
    $startPage = $page - $pageView;
    $endPage = $page + $pageView;
    //처음 페이지 초기화 / 마지막 페이지 초기화
    if($startPage < 1) $startPage = 1;
    if($endPage >= $SuggestionsQTotalCount) $endPage = $SuggestionsQTotalCount;
    // 처음으로 / 이전
    if($page != 1 && $SuggestionsQTotalCount !=0 && $page <= $SuggestionsQTotalCount){
        echo "<li><a href='Suggestions.php?page=1'>&lt;</a></li>";
        $prevPage = $page -1;
        echo "<li><a href='Suggestions.php?page={$prevPage}'>&lt;</a></li>";
    }
    //페이지
     for($i=$startPage; $i<=$endPage; $i++){
        $active = "";
        if($i == $page) $active = "active";
        if($page <= $SuggestionsQTotalCount){
            echo "<li class='{$active}'><a href='Suggestions.php?page={$i}'>{$i}</a></li>";
        }
    }
    //마지막으로 / 다음 //게시글이 없을 때
    if($page != $SuggestionsQTotalCount && $page <= $SuggestionsQTotalCount){
        $nextPage = $page +1;
        echo "<li><a href='Suggestions.php?page={$nextPage}'></a></li>";
        echo "<li><a href='Suggestions.php?page={$SuggestionsQTotalCount}'></a></li>";
    }
?>
                </ul>
            </div>
        </div>
    </main>
    <!-- //main -->
    <?php include "../include/footer.php" ?>
    <!-- // footer -->
</body>
</html>