<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    $searchKeyword = isset($_GET['searchKeyword']) ? $_GET['searchKeyword'] : '';
    $searchKeyword = $connect->real_escape_string(trim($searchKeyword));

    $sql = "SELECT FixedBrand, FixedName, FixedTitle, FixedPrice, FixedImg FROM Fixedtable";
    $sql .= " WHERE FixedBrand LIKE '%{$searchKeyword}%' OR FixedName LIKE '%{$searchKeyword}%' OR FixedTitle LIKE '%{$searchKeyword}%'";
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
    <main id="mainSearch">
        <div id="search">
            <section id="msearch">
                <h1>총 <em><?=$totalCount?></em>개의 결과가 검색 되었습니다.</h1>
                <div class="search-wrapper">
                <div class="input-holder">
                    <form action="mainSearch1.php">
                        <input type="text" class="search-input" name="searchKeyword" placeholder="검색어를 입력하세요." />
                        <button class="search-icon" onclick="searchToggle(this, event);"><span></span></button>
                    </form>
                </div>
                    <span class="close" onclick="searchToggle(this, event);"></span>
                </div>
                <div class="newpro__inner1">
                <?php
                if ($totalCount > 0) {
                    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                        $fixedImg = $row['FixedImg'];
                        $fixedBrand = $row['FixedBrand'];
                        $fixedName = $row['FixedName'];
                        $fixedTitle = $row['FixedTitle'];
                        $fixedPrice = $row['FixedPrice'];
                        ?>
                        <div class="newpro__img1">
                            <a href="../nutrition/nutrition.php">
                                <img src="../assets/img/<?php echo $fixedImg; ?>.jpg" alt="<?php echo $fixedTitle; ?>">
                            </a>
                            <h4><?php echo $fixedBrand; ?> | <?php echo $fixedName; ?></h4>
                            <strong><?php echo $fixedPrice; ?>원</strong>
                        </div>
                        <?php
                    }
                } else {
                    echo "<p>No results found.</p>";
                }
                ?>
                </div>
            </section>
        </div>
        <!-- search -->
    </main>
    <?php include "../include/footer.php" ?>
    <!-- //footer -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
    const swiper = new Swiper('.swiper', {
        direction: 'horizontal',
        loop: true,

        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    document.querySelector(".swiper-button-play").style.display = "none";

    document.querySelector(".swiper-button-play").addEventListener("click", () => {
        swiper.autoplay.start();
        document.querySelector(".swiper-button-play").style.display = "none";
        document.querySelector(".swiper-button-stop").style.display = "block";
    });
    document.querySelector(".swiper-button-stop").addEventListener("click", () => {
        swiper.autoplay.stop();
        document.querySelector(".swiper-button-play").style.display = "block";
        document.querySelector(".swiper-button-stop").style.display = "none";
    });
    </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    function searchToggle(obj, evt){
        var container = $(obj).closest('.search-wrapper');
            if(!container.hasClass('active')){
                container.addClass('active');
                evt.preventDefault();
            }
            else if(container.hasClass('active') && $(obj).closest('.input-holder').length == 0){
                container.removeClass('active');
                // clear input
                container.find('.search-input').val('');
            }
    }
</script>
</body>
</html>