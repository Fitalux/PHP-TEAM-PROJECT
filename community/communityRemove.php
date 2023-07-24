<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    $communityID = $_GET['communityID'];
    $communityID = $connect -> real_escape_string($communityID);
    $sql = "DELETE FROM community WHERE communityID = {$communityID}";
    $connect -> query($sql);
?>
<script>
    location.href = "community.php";
</script>