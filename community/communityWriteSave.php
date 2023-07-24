<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $communityTitle = $_POST['communityTitle'];
    $communityContents = $_POST['communityContents'];
    $communityView = "1";
    $regTime = time();
    $memberID = $_SESSION['memberID'];


    $communityTitle = $connect -> real_escape_string($communityTitle);
    $communityContents = $connect -> real_escape_string($communityContents);
    $sql = "INSERT INTO community(memberID, communityTitle, communityContents, communityView, regTime) VALUES('$memberID', '$communityTitle', '$communityContents', '$communityView', '$regTime')";
    $connect -> query($sql);
?>
<script>
    location.href = "community.php";
</script>