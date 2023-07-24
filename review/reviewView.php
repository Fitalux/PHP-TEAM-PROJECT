<?php
   ini_set('display_errors', 1);
   ini_set('display_startup_errors', 1);
   error_reporting(E_ALL);
   include "../connect/connect.php";
   include "../connect/session.php";
   
   $reivewID = $_GET['reivewID'];
   $reivewID = mysqli_real_escape_string($connect, $reivewID); // SQL Injection 방지를 위해 추가
   
   $sql = "SELECT * FROM reivew WHERE reivewID = '$reivewID'";
   $result = $connect->query($sql);
   
   // 댓글 저장에 필요한 데이터 가져오기
   $memberID = isset($_SESSION['memberID']) ? $_SESSION['memberID'] : 0;
   $commentID = 0; // 댓글 ID는 auto_increment로 자동 생성됩니다.
   $commentMsg = ""; // 댓글 내용은 아직 비어있습니다.

   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       // POST 요청인 경우 댓글 저장을 처리합니다.
       $commentMsg = $_POST['commentWrite'];

       $commentMsg = mysqli_real_escape_string($connect, $commentMsg);

       $commentQuery = "INSERT INTO reivewComment (commentID, memberID, reivewID, commentMsg) VALUES ('$commentID', '$memberID', '$reivewID', '$commentMsg')";

       if (mysqli_query($connect, $commentQuery)) {
           echo "답변이 저장되었습니다."; 
       } else {
           echo "답변 저장에 실패했습니다."; 
       }
   }
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1:1 상담 글 보기</title>
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
if ($result) {
    $reivewData = $result->fetch_array(MYSQLI_ASSOC);

    if ($reivewData) {
        echo "<tr><th>제목</th><td>".$reivewData['reivewTitle']."</td></tr>";
        
        // 등록자 정보 가져오기
        $memberID = $reivewData['memberID'];
        $memberQuery = "SELECT youID FROM yungyangMember WHERE memberID = '$memberID'";
        $memberResult = $connect->query($memberQuery);
        $memberData = $memberResult->fetch_array(MYSQLI_ASSOC);
        $youID = $memberData['youID'];

        echo "<tr><th>등록자</th><td>".$youID."</td></tr>";
        echo "<tr><th>유형</th><td>".$reivewData['consultType']."</td></tr>";
        echo "<tr><th>등록일</th><td>".date('Y-m-d', $reivewData['regTime'])."</td></tr>";

        // 댓글 여부 확인
        $reivewID = $reivewData['reivewID'];
        $commentQuery = "SELECT * FROM reivewComment WHERE reivewID = '$reivewID'";
        $commentResult = $connect->query($commentQuery);

        if ($commentResult && $commentResult->num_rows > 0) {
            echo "<tr><th>답변 여부</th><td>답변 완료</td></tr>";
        } else {
            echo "<tr><th>답변 여부</th><td>답변 미완료</td></tr>";
        }

        echo "<tr><th>내용</th><td>".$reivewData['reivewContents']."</td></tr>";
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
            <div class="community__btn mb100">
                <a href="reivewModify.php?reivewID=<?php echo $reivewID; ?>" class="btnStyle3">수정하기</a>
                <a href="reivewRemove.php?reivewID=<?php echo $reivewID; ?>" class="btnStyle3" onclick="confirm('정말 삭제하시겠습니까? 삭제 후 복구가 불가능합니다.','')">삭제하기</a>
                <a href="reivew.php" class="btnStyle3">목록보기</a>
            </div>
<?php
// 로그인한 사용자의 youID 값을 가져옵니다.
$loggedInUserID = isset($_SESSION['youID']) ? $_SESSION['youID'] : "";

// youID가 "admin"인 경우에만 댓글 작성 폼과 답변 완료 여부를 표시합니다.
if (!empty($loggedInUserID) && $loggedInUserID === "admin") {
    ?>
    <div class="consult__comment" id="consultComment">
        <div class="comment__write">
            <form action="" method="POST" name="consultCommentSave">
                <input type="hidden" name="reivewID" value="<?php echo $reivewID; ?>">
                <fieldset>
                    <legend class="blind">답변 쓰기</legend>
                    <label for="commentWrite">답변쓰기</label>
                    <textarea id="commentWrite" name="commentWrite" rows="4" placeholder="상담 답변하기" maxlength="255" required></textarea>
                    <button type="submit" id="commentWriteBtn" class="btnStyle3 mt10">답변쓰기</button>
                </fieldset>
            </form>
        </div>
    </div>
    <?php
}
?>

            <!-- //consult__comment -->
        </div>
        </div>
    </main>
    <!-- //main -->
    <?php include "../include/footer.php" ?>
    <!-- //footer -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $(function() {
            // 댓글 쓰기 버튼
            $("#commentWriteBtn").click(function(){
                // 로그인한 사용자의 memberID 값을 가져옵니다.
                var memberID = "<?php echo $memberID; ?>";
                
                // memberID가 0인 경우에는 로그인되지 않은 상태입니다.
                if (memberID === "0") {
                    alert("댓글 작성 권한이 없습니다. 로그인 후 이용해주세요.");
                    return false;
                }
                
                if ($("#commentWrite").val() === "") {
                    alert("댓글을 작성해주세요!");
                    $("#commentWrite").focus();
                } else {
                    $.ajax({
                        url: "reivewView.php?reivewID=<?php echo $reivewID; ?>",
                        method: "POST",
                        dataType: "text",
                        data: {
                            commentWrite: $("#commentWrite").val()
                        },
                        success: function(response){
                            alert(response);
                            location.reload();
                        },
                        error: function(request, status, error){
                            console.log("request" + request);
                            console.log("status" + status);
                            console.log("error" + error);
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>
