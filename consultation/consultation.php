<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    $sql = "SELECT count(consultationID) AS totalCount FROM consultation";
    $result = $connect->query($sql);

    $consultationTotalCount = $result->fetch_array(MYSQLI_ASSOC)['totalCount'];
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1:1 상담하기</title> 
    <?php include "../include/head.php"?>
</head>
<body class="gray">
    <?php include "../include/header.php"?>
    <!-- // header -->
    <main id="main">
        <div class="consultation__inner">
                <h2 class="consultation__title">1:1상담</h2>
            <div class="service__search">
                <form action="consultationSearch.php" name="consultationSearch" method="get">
                    <input type="search" name="searchKeyword" aria-label="검색" placeholder="찾으시는 내용을 입력해주세요">
                    <button type="submit" class="search__btn"><img src="../assets/img/search.svg" alt=""></button>
                </form>
            </div>
            <?php
                if(isset($_SESSION['memberID'])) {
                    // 로그인된 경우
                    echo '<a href="consultationWrite.php" class="consultation__btn">글쓰기</a>';
                } else {
                    // 로그인되지 않은 경우
                    echo '<a href="../login/login.php" onclick="alert(\'상담하기는 회원만 이용할 수 있습니다. 로그인을 해주세요.\')" class="consultation__btn">글쓰기</a>';
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
    $sql = "SELECT c.consultationID, c.consultationTitle, y.youID, c.regTime, c.isAnswered FROM consultation c JOIN yungyangMember y ON(c.memberID = y.memberID) ORDER BY consultationID DESC LIMIT {$viewLimit}, {$viewNum}";
    $result = $connect->query($sql);

    if ($result) {
        $count = $result->num_rows;
        if ($count > 0) {
            while ($info = $result->fetch_array(MYSQLI_ASSOC)) {
                echo "<tr>";
                echo "<td>".$info['consultationID']."</td>";
                echo "<td><a href='consultationView.php?consultationID={$info['consultationID']}'>".$info['consultationTitle']."</a></td>";
                echo "<td>".date('Y-m-d', $info['regTime'])."</td>";

                $consultationID = $info['consultationID']; // 수정된 부분
                $commentQuery = "SELECT * FROM consultComment WHERE consultationID = '$consultationID'";
                $commentResult = $connect->query($commentQuery);

                if ($commentResult && $commentResult->num_rows > 0) {
                    echo "<td>답변 완료</td></tr>";
                } else {
                    echo "<td>답변 미완료</td></tr>";
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
    $consultationTotalCount = ceil($consultationTotalCount/20);
    //1 2 3 4 5 6 7 8 9 10 11 12 13
    $pageView =5;
    $startPage = $page - $pageView;
    $endPage = $page + $pageView;
    //처음 페이지 초기화 / 마지막 페이지 초기화
    if($startPage < 1) $startPage = 1;
    if($endPage >= $consultationTotalCount) $endPage = $consultationTotalCount;
    // 처음으로 / 이전
    if($page != 1 && $consultationTotalCount !=0 && $page <= $consultationTotalCount){
        echo "<li><a href='consultation.php?page=1'>&lt;&lt;</a></li>";
        $prevPage = $page -1;
        echo "<li><a href='consultation.php?page={$prevPage}'>&lt;</a></li>";
    }
    //페이지
     for($i=$startPage; $i<=$endPage; $i++){
        $active = "";
        if($i == $page) $active = "active";
        if($page <= $consultationTotalCount){
            echo "<li class='{$active}'><a href='consultation.php?page={$i}'>{$i}</a></li>";
        }
    }
    //마지막으로 / 다음 //게시글이 없을 때
    if($page != $consultationTotalCount && $page <= $consultationTotalCount){
        $nextPage = $page +1;
        echo "<li><a href='consultation.php?page={$nextPage}'>&gt;</a></li>";
        echo "<li><a href='consultation.php?page={$consultationTotalCount}'>&gt;&gt;</a></li>";
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