<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    $searchKeyword = isset($_GET['searchKeyword']) ? $_GET['searchKeyword'] : '';
    $searchKeyword = $connect->real_escape_string(trim($searchKeyword));
    if (isset($_GET['page'])) {
        $page = (int)$_GET['page'];
    } else {
        $page = 1;
    }
    $viewNum = 20;
    $viewLimit = ($viewNum * $page) - $viewNum;
    $sql = "SELECT c.communityID, c.communityTitle, c.communityContents, y.youID, c.regTime, c.communityView FROM community c JOIN yungyangMember y ON (c.memberID = y.memberID) ";
    $sql .= "WHERE c.communityTitle LIKE '%{$searchKeyword}%' OR c.communityContents LIKE '%{$searchKeyword}%' ";
    $sql .= "LIMIT {$viewLimit}, {$viewNum}";
    $result = $connect->query($sql);
    $totalCount = $result->num_rows;
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>결과 커뮤니티</title>
    <?php include "../include/head.php" ?>
</head>
<body>
    <?php include "../include/header.php" ?>
    <!-- //header -->
    <main id="main">
        <div class="community__inner">
            <h2 class="community__title">커뮤니티</h2>
            <div class="service__search">
                <form action="communitySearch.php" name="communitySearch" method="get">
                    <input type="search" name="searchKeyword" aria-label="검색" placeholder="찾으시는 내용을 입력해주세요">
                    <button type="submit" class="search__btn"><img src="../assets/img/search.svg" alt=""></button>
                </form>
            </div>
            <div class="community__table">
                <table>
                    <colgroup>
                        <col style="width: 5%">
                        <col>
                        <col style="width: 10%">
                        <col style="width: 15%">
                        <col style="width: 7%">
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
                $result = $connect->query($sql);
                if ($result) {
                    $count = $result->num_rows;
                    if ($count > 0) {
                        while ($info = $result->fetch_array(MYSQLI_ASSOC)) {
                            echo "<tr>";
                            echo "<td>".$info['communityID']."</td>";
                            echo "<td><a href='communityView.php?communityID={$info['communityID']}'>".$info['communityTitle']."</a></td>";
                            echo "<td>".$info['youID']."</td>";
                            echo "<td>".date('Y-m-d', $info['regTime'])."</td>";
                            echo "<td>".$info['communityView']."</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>게시글이 없습니다.</td></tr>";
                    }
                }
            ?>
                    </tbody>
                </table>
            </div>
            <div class="community__pages">
                <ul>
                    <?php
                        $communityTotalCount = ceil($totalCount / $viewNum);
                        $pageView = 4;
                        $startPage = $page - $pageView;
                        $endPage = $page + $pageView;
                        if ($startPage < 1) $startPage = 1;
                        if ($endPage > $communityTotalCount) $endPage = $communityTotalCount;
                        if ($page !== 1 && $communityTotalCount != 0 && $page <= $communityTotalCount) {
                            echo "<li><a href='communitySearch.php?page=1&searchKeyword={$searchKeyword}'>처음으로</a></li>";
                            $prevPage = $page - 1;
                            echo "<li><a href='communitySearch.php?page={$prevPage}&searchKeyword={$searchKeyword}'>이전</a></li>";
                        }
                        for ($i = $startPage; $i <= $endPage; $i++) {
                            $active = "";
                            if ($i == $page) $active = "active";
                            if ($page <= $communityTotalCount) {
                                echo "<li class='{$active}'><a href='communitySearch.php?page={$i}&searchKeyword={$searchKeyword}'>{$i}</a></li>";
                            }
                        }
                        if ($page != $communityTotalCount && $page <= $communityTotalCount) {
                            $nextPage = $page + 1;
                            echo "<li><a href='communitySearch.php?page={$nextPage}&searchKeyword={$searchKeyword}'>다음</a></li>";
                            echo "<li><a href='communitySearch.php?page={$communityTotalCount}&searchKeyword={$searchKeyword}'>마지막으로</a></li>";
                        }
                    ?>
                </ul>
            </div>
        </div>
        <!-- community__inner -->
    </main>
    <?php include "../include/footer.php" ?>
    <!-- //footer -->
</body>
</html>