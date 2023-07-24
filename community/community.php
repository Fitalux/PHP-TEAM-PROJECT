<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $sql = "SELECT count(communityID) FROM community";
    $result = $connect -> query($sql);

    $communityTotalCount = $result -> fetch_array(MYSQLI_ASSOC);
    $communityTotalCount = $communityTotalCount['count(communityID)'];
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>영양많닭 커뮤니티</title>
    <?php include "../include/head.php"?>
</head>
<body>
    <?php include "../include/header.php"?>
    <!-- // header -->
    <main id="main">
        <div class="community__inner">
                <h2 class="community__title">커뮤니티</h2>
            <div class="service__search">
                <form action="communitySearch.php" name="communitySearch" method="POST">
                    <input type="search" id="searchKeyword" name="searchKeyword" aria-label="검색" placeholder="찾으시는 내용을 입력해주세요">
                    <button type="submit" class="search__btn"><img src="../assets/img/search.svg" alt=""></button>
                </form>
            </div>
            <?php
                if(isset($_SESSION['memberID'])) {
                    // 로그인된 경우
                    echo '<a href="communityWrite.php" class="community__writeBtn">글쓰기</a>';
                } else {
                    // 로그인되지 않은 경우
                    echo '<a href="../login/login.php" onclick="alert(\'커뮤니티는 회원만 이용할 수 있습니다. 로그인을 해주세요.\')" class="community__writeBtn">글쓰기</a>';
                }
            ?>
            <div class="community__table">
                <table>
                    <colgroup>
                        <col style="width: 5%;">
                        <col>
                        <col style="width: 10%;">
                        <col style="width: 15%;">
                        <col style="width: 7%;">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>번호</th>
                            <th>제목</th>
                            <th>등록자</th>
                            <th>등록일</th>
                            <th>조회수</th>
                        </tr>
                    </thead>
                    <tbody>
<?php
    if(isset($_GET['page'])){
        $page = (int) $_GET['page'];
    } else {
        $page =1;
    }
    $viewNum =20;
    $viewLimit = ($viewNum * $page) - $viewNum ;
    $sql = "SELECT c.communityID, c.communityTitle, y.youID, c.regTime, c.communityView FROM community c JOIN yungyangMember y ON(c.memberID = y.memberID) ORDER BY communityID DESC LIMIT {$viewLimit}, {$viewNum}";
    $result = $connect -> query($sql);
    if($result){
        $count = $result -> num_rows;
        if($count > 0){
            for($i=0; $i<$count; $i++){
                $info = $result -> fetch_array(MYSQLI_ASSOC);
              echo "<tr>";
              echo "<td>".$info['communityID']."</td>";
              echo "<td><a href='communityView.php?communityID={$info['communityID']}'>".$info['communityTitle']."</a></td>";
              echo "<td>".$info['youID']."</td>";
              echo "<td>".date('Y-m-d', $info['regTime'])."</td>";
              echo "<td>".$info['communityView']."</td>";
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
            <div class="community__pages">
                <ul>
<?php
    //총 페이지 갯수
    $communityTotalCount = ceil($communityTotalCount/20);
    //1 2 3 4 5 6 7 8 9 10 11 12 13
    $pageView =5;
    $startPage = $page - $pageView;
    $endPage = $page + $pageView;
    //처음 페이지 초기화 / 마지막 페이지 초기화
    if($startPage < 1) $startPage = 1;
    if($endPage >= $communityTotalCount) $endPage = $communityTotalCount;
    // 처음으로 / 이전
    if($page != 1 && $communityTotalCount !=0 && $page <= $communityTotalCount){
        echo "<li><a href='community.php?page=1'>&lt;&lt;</a></li>";
        $prevPage = $page -1;
        echo "<li><a href='community.php?page={$prevPage}'>&lt;</a></li>";
    }
    //페이지
     for($i=$startPage; $i<=$endPage; $i++){
        $active = "";
        if($i == $page) $active = "active";
        if($page <= $communityTotalCount){
            echo "<li class='{$active}'><a href='community.php?page={$i}'>{$i}</a></li>";
        }
    }
    //마지막으로 / 다음 //게시글이 없을 때
    if($page != $communityTotalCount && $page <= $communityTotalCount){
        $nextPage = $page +1;
        echo "<li><a href='community.php?page={$nextPage}'>&gt;</a></li>";
        echo "<li><a href='community.php?page={$communityTotalCount}'>&gt;&gt;</a></li>";
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