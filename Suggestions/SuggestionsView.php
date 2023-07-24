<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "../connect/connect.php";
include "../connect/session.php";

$SuggestionsQID = $_GET['SuggestionsQID'];
$SuggestionsQID = mysqli_real_escape_string($connect, $SuggestionsQID);

$sql = "SELECT * FROM SuggestionsQ WHERE SuggestionsQID = '$SuggestionsQID'";
$result = $connect->query($sql);
?>


<script>
    window.onerror = function(message, url, line, column, error) {
        console.error("JavaScript Error: " + message + " at " + url + " (line: " + line + ", column: " + column + ")");
    };
</script>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>건의사항 글보기</title>
    <?php include "../include/head.php"?>
</head>
<body>
    <?php include "../include/header.php"?>
    <!-- // header -->
    <main id="main" class="container">
        <div class="community__inner">
            <div class="community__view">
            <table>
                    <colgroup>
                        <col style="width: 20%">
                        <col style="width: 80%">
                    </colgroup>
                    <tbody>
                    <?php
                    ini_set('display_errors', 1);
                    ini_set('display_startup_errors', 1);
                    error_reporting(E_ALL);

                    if ($result) {
                        $SuggestionsQData = $result->fetch_array(MYSQLI_ASSOC);

                        if ($SuggestionsQData) {
                            echo "<tr><th>제목</th><td>".$SuggestionsQData['SuggestionsQTitle']."</td></tr>";
                            
                            // 등록자 정보 가져오기
                            $memberID = $SuggestionsQData['memberID'];
                            $memberQuery = "SELECT youID FROM yungyangMember WHERE memberID = '$memberID'";
                            $memberResult = $connect->query($memberQuery);
                            $memberData = $memberResult->fetch_array(MYSQLI_ASSOC);
                            $youID = $memberData['youID'];

                            echo "<tr><th>등록자</th><td>".$youID."</td></tr>";
                            echo "<tr><th>유형</th><td>".$SuggestionsQData['SuggestionsQType']."</td></tr>";
                            echo "<tr><th>등록일</th><td>".date('Y-m-d', $SuggestionsQData['regTime'])."</td></tr>";

                            // 댓글 여부 확인
                            $SuggestionsAID = $SuggestionsAData['SuggestionsAID'];
                            $SuggestionsAQuery = "SELECT * FROM SuggestionsA WHERE SuggestionsAID = '$SuggestionsAID'";
                            $SuggestionsAResult = $connect->query($SuggestionsAQuery);

                            if ($SuggestionsAResult && $SuggestionsAResult->num_rows > 0) {
                                echo "<tr><th>답변 여부</th><td>답변 완료</td></tr>";
                            } else {
                                echo "<tr><th>답변 여부</th><td>답변 미완료</td></tr>";
                            }

                            echo "<tr><th>내용</th><td>".$SuggestionsAData['SuggestionsAContents']."</td></tr>";
                        } else {
                            echo "<tr><td colspan='2'>게시글이 없습니다.</td></tr>";
                        }
                    } else {
                        die("Error: " . $connect->error);
                    }
                    ?>
                    </tbody>
                </table>
            </div>
            <!-- 답변 표시 -->
            <div class="comment__view">
                <h3 class="comment__title blind">답변</h3>
                <?php
                // 댓글 가져오기
                $SuggestionsAQuery = "SELECT * FROM SuggestionsA WHERE SuggestionsAID = '$SuggestionsAID'";
                $SuggestionsResult = $connect->query($SuggestionsAQuery);

                if ($SuggestionsAResult && $SuggestionsAResult->num_rows > 0) {
                    while ($SuggestionsAData = $SuggestionsAResult->fetch_array(MYSQLI_ASSOC)) {
                        echo "<div class='info'>";
                        echo "<span class='nickname'>".$_SESSION['youName']."</span>";
                        echo "<span class='date'>".date('Y-m-d', $SuggestionsAData['regTime'])."</span>";
                        echo "<p class='msg'>".$SuggestionsAData['commentMsg']."</p>";
                        echo "</div>";
                    }
                } else {
                    echo "<p class='no-comment'>답변을 기다려주세요.</p>";
                }
                ?>
            </div>

<!-- 답변 작성 폼 -->
<div class="comment__write">
    <?php
    if (isset($_SESSION['youID']) && $_SESSION['youID'] === 'admin' && isset($_SESSION['memberID'])) {
        echo '<form method="POST" action="SuggestionsASave.php">';
        echo '<input type="hidden" name="memberID" value="'.$_SESSION['memberID'].'">';
        echo '<input type="hidden" name="SuggestionsAID" value="'.$SuggestionsAID.'">';
        echo '<input type="text" id="SuggestionsATitle" name="SuggestionsATitle" class="inputStyle" placeholder="제목을 입력해주세요!" value="'.$SuggestionsATitle.'">';
        echo '<div class="write__comment">';
        echo '<label for="SuggestionsAWrite">답변 작성</label>';
        echo '<textarea name="SuggestionsAWrite" id="SuggestionsAWrite" rows="5" placeholder="답변을 작성하세요"></textarea>';
        echo '<button type="submit" class="commentWriteBtn btnStyle3 mt50">답변하기</button>';
        echo '</div>';
        echo '</form>';
    }
    ?>
</div>

        </div>
    </div>
</main>
<?php include "../include/footer.php"?>
</body>
</html>