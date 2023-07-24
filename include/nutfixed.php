<link rel="stylesheet" href="../assets/css/style.css">
<?=
    include "../connect/connect.php";
    include "../connect/session.php";
?>

<div id="nutfixed">
    <a href="#" class="fixedclose">접기▼</a>
    <?php
        $sql = "SELECT * FROM Fixedtable WHERE FixedImg";
        $result = $connect -> query($sql);

        // if ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        //     $FixedImg = $row['FixedImg'];
        //     echo $result;
        // } 


        if($_SESSION['number'] == 2){
            echo '<div><img class=" n1" src="../assets/img/heodak_sauce_fire.jpg' . '" alt="#"></div>';
        }
        if($_SESSION['number'] == 3){
            echo '<div><img class=" n1" src="../assets/img/heodak_sauce_fire.jpg' . '" alt="#"></div>';
            echo '<div><img class=" n2" src="../assets/img/heodak_sauce_gal_b.jpg' . '" alt="#"></div>';
        }
        if($_SESSION['number'] == 4){
            echo '<div><img class=" n1" src="../assets/img/heodak_sauce_fire.jpg' . '" alt="#"></div>';
            echo '<div><img class=" n2" src="../assets/img/heodak_sauce_gal_b.jpg' . '" alt="#"></div>';
            echo '<div><img class=" n3" src="../assets/img/heodak_sauce_red_cream.jpg' . '" alt="#"></div>';
        }
        if($_SESSION['number'] == 5){
            echo '<div><img class=" n1" src="../assets/img/heodak_sauce_fire.jpg' . '" alt="#"></div>';
            echo '<div><img class=" n2" src="../assets/img/heodak_sauce_gal_b.jpg' . '" alt="#"></div>';
            echo '<div><img class=" n3" src="../assets/img/heodak_sauce_red_cream.jpg' . '" alt="#"></div>';
            echo '<div><img class=" n4" src="../assets/img/heodak_sauce_hot_deri.jpg' . '" alt="#"></div>';
        }
        if($_SESSION['number'] == 6){
            echo '<div><img class=" n1" src="../assets/img/heodak_sauce_fire.jpg' . '" alt="#"></div>';
            echo '<div><img class=" n2" src="../assets/img/heodak_sauce_gal_b.jpg' . '" alt="#"></div>';
            echo '<div><img class=" n3" src="../assets/img/heodak_sauce_red_cream.jpg' . '" alt="#"></div>';
            echo '<div><img class=" n4" src="../assets/img/heodak_sauce_hot_deri.jpg' . '" alt="#"></div>';
            echo '<div><img class=" n5" src="../assets/img/heodak_sauce_deri.jpg' . '" alt="#"></div>';
        }
        
        // <div><img class="opa0 n2" src="../assets/img/heodak_sauce_deri.jpg" alt="#"></div>
        // <div><img class="opa0 n3" src="../assets/img/heodak_sauce_red_cream.jpg" alt="#"></div>
        // <div><img class="opa0 n4" src="../assets/img/heodak_sauce_hot_deri.jpg" alt="#"></div>
        // <div><img class="opa0 n5" src="../assets/img/heodak_sauce_gal_b.jpg" alt="#"></div>
    ?>
    <a href="../MyPick/MyPick.php"><button>비교하기</button></a>
</div>
<script>
    // 픽스창 줄이기
    let Close = document.querySelector(".fixedclose");
    let nutDiv = document.querySelectorAll("#nutfixed div");
    let nutImg = document.querySelectorAll("#nutfixed img");

    let Num = 0;

    Close.addEventListener('click', (e) => {
        e.preventDefault();
        Num++;
        if(Num % 2 ==1){
            Close.textContent = "펼침▲";
            document.querySelector("#nutfixed").style.height = "50px";
            nutDiv.forEach((e) => {
                e.style.display = "none";
            });
        } else {
            Close.textContent = "접기▼";
            document.querySelector("#nutfixed").style.height = "600px";
            nutDiv.forEach((e) => {
                e.style.display = "block";
            });
        }
    });
</script>