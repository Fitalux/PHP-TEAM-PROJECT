<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $communityID = $_POST['communityID'];
    $communityTitle = $_POST['communityTitle'];
    $communityContents = $_POST['communityContents'];
    $communityPass = $_POST['communityPass'];

    $communityTitle = $connect -> real_escape_string($communityTitle);
    $communityContents = $connect -> real_escape_string($communityContents);
    $communityPass = $connect -> real_escape_string($communityPass);

    $memberID = $_SESSION['memberID'];

    $sql = "SELECT * FROM yungyangMember WHERE memberID = {$memberID}";

    $result = $connect -> query($sql);
    
    if($result){
        $info = $result -> fetch_array(MYSQLI_ASSOC);
        if($info['memberID'] == $memberID && $info['youPass'] == $communityPass){
            $sql = "UPDATE community SET communityTitle = '{$communityTitle}', communityContents = '{$communityContents}' WHERE communityID = '{$communityID}'";
            $connect -> query($sql);
        } else {
            echo "<script>alert('비밀번호가 틀렸습니다. 다시 한번 확인해주세요!')</script>";
        }
    } else {
        echo "<script>alert('관리자 에러!!')</script>";
    }
?>
<script>
    location.href = "community.php";
</script>