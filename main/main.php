<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $sql = "SELECT * FROM Fixedtable WHERE FixedID = 3";
    $result = $connect -> query($sql);
   
    if ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $FixedBrand = $row['FixedBrand'];
        $FixedName = $row['FixedName'];
        $FixedPrice = $row['FixedPrice'];
    } 
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>메인페이지</title>

    <?php include "../include/head.php" ?>
</head>
<body>
    <?php include "../include/header.php" ?>
    <!-- //header -->

    <?php include "../include/nutfixed.php" ?>
    <!-- //header -->

    <main>
        <div id="slider">
            <section id="sliderType" class="nexon">
                <div class="slider__inner">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="slider img1">
                                    <div class="slider__info container">
                                        <h1 class="title">사이트에 영양을담다<br>나의 삶을 더 영양있게</h1>
                                        <p class="desc">영양많닭</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider img2">
                                    <div class="slider__info container">
                                        <h1 class="title">사이트에 영양을담다<br>나의 삶을 더 영양있게</h1>
                                        <p class="desc">영양많닭</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider img1">
                                    <div class="slider__info container">
                                        <h1 class="title">사이트에 영양을담다<br>나의 삶을 더 영양있게</h1>
                                        <p class="desc">영양많닭</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </section>
        </div>
        <!-- slider -->
        <div id="search">
            <div class="search-wrapper">
                <div class="input-holder">
                    <form action="mainSearch.php">
                        <input type="text" class="search-input" placeholder="검색어를 입력하세요." />
                        <button class="search-icon" onclick="searchToggle(this, event);"><span></span></button>
                    </form>                
                </div>
                <span class="close" onclick="searchToggle(this, event);"></span>
            </div>
            <section id="msearch">
                <h2 class="newpro__h2">닭가슴살이 처음이신가요? 이런 제품은 어떠세요?</h2>
                <p class="newpro__desc">영양많닭이 추천 드리는 닭가슴살!</p>
                <div class="newpro__inner">
                    <div class="newpro__img">
                        <a href="../nutrition/nutrition.php"><img src="../assets/img/heodak_sauce_fire.jpg" alt="신제품1"></a>
                        <h4><?=$FixedBrand?> | <?=$FixedName?></h4>
                        <strong>2,500원</strong>
                    </div>
                    <div class="newpro__img">
                        <a href="../nutrition/nutrition1.php"><img src="../assets/img/heodak_sauce_gal_b.jpg" alt="신제품2"></a>
                        <h4><?=$FixedBrand?> | 슬라이스 스팀 소스 닭가슴살 갈비 </h4>
                        <strong>2,500원</strong>
                    </div>
                    <div class="newpro__img">
                        <a href="../nutrition/nutrition2.php"><img src="../assets/img/heodak_sauce_red_cream.jpg" alt="신제품3"></a>
                        <h4><?=$FixedBrand?> | 소스 슬라이스 닭가슴살 120g <br><span class="Span">레드크림커리</span></h4>
                        <strong>2,900원</strong>
                    </div>
                    <div class="newpro__img">
                        <a href="../nutrition/nutrition3.php"><img src="../assets/img/heodak_sauce_hot_deri.jpg" alt="신제품4"></a>
                        <h4><?=$FixedBrand?> | 슬라이스 스팀 소스 닭가슴살<br><span class="Span">핫데리야끼</span></h4>
                        <strong>2,500원</strong>
                    </div>
                </div>
            </section>
        </div>
        <!-- search -->
        <div id="banner">
            <h1>“닭가슴살이라고 다같은 닭가슴살이 <em>아니닭!</em> ”</h1>
        </div>
        <!-- banner -->
        <section id="newproduct">
            <h2 class="newpro__h2">신제품</h2>
            <p class="newpro__desc">새로운 제품들의 정보를 빠르게 확인하세요!</p>
            
            <div class="newpro__inner">
                <div class="newpro__img">
                    <a href="../nutrition/nutrition4.php"><img src="../assets/img/heodak_sauce_deri.jpg" alt="신제품1"></a>
                    <h4><?=$FixedBrand?> | 슬라이스 스팀 소스 닭가슴살 <br><span class="Span">데리야끼</span></h4>
                    <strong>2,550원</strong>
                </div>
                <div  class="newpro__img">
                    <img src="../assets/img/chicken2.jpg" alt="신제품2">
                    <h4>잇메이트 | 닭가슴살 소시지 혼합 </h4>
                    <strong>21,750원</strong>
                </div>
                <div class="newpro__img">
                    <img src="../assets/img/chicken3.jpg" alt="신제품3">
                    <h4>맛있닭 | 닭가슴살 볼 혼합 100g</h4>
                    <strong>18,900원</strong>
                </div>
                <div class="newpro__img">
                    <img src="../assets/img/chicken4.jpg" alt="신제품4">
                    <h4>잇메이트 | 훈제 닭가슴살 혼합 100g</h4>
                    <strong>24,000원</strong>
                </div>
            </div>
        </section>
        <!-- newProduct -->
        <div id="card">
            <div class="card__inner">
                <h1>영양많닭 '회원'의 혜택!</h1>
                <div class="card__box">
                    <div class="card">
                        <img src="../assets/img/mincardimg1.svg" alt="#">
                        <h2>다양한 닭가슴살을 비교하다</h2>
                        <p>너무나도 많았던 너무나도 많았기에<br>
                            힘들었던 닭가슴살의 영양정보를<br>
                            이제는 비교하고 구매하세요!</p>
                    </div>
                    <div class="card">
                        <img src="../assets/img/mincardimg2.svg" alt="#">
                        <h2>즐거운 커뮤니티</h2>
                        <p>혼자만의 다이어트, 식단, 운동<br>
                            나만 알고 있었던 유용한 정보들<br>
                            이제는 서로 공유 해봐요! </p>
                    </div>
                    <div class="card">
                        <img src="../assets/img/mincardimg3.svg" alt="#">
                        <h2>실시간 랭킹 정보</h2>
                        <p>수많은 닭가슴살의 정보를<br>
                            일목요연하게 정리하고 <br>
                            그 순위를 알고싶지 않으신가요?</p>
                    </div>
                    <div class="card">
                        <img src="../assets/img/mincardimg4.svg" alt="#">
                        <h2>운동 일지</h2>
                        <div class="p1">
                            <p>나의 운동을 하루하루 적어간다!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- card -->
        <section id="bestproduct">
            <h2 class="bestpro__h2">BEST 상품</h2>
            <div class="bestpro__inner">
                <div class="bestpro__img">
                    <img src="../assets/img/chicken1.jpg" alt="BEST제품1">
                    <h4>맛있닭 | 닭가슴살 스테이크 오리지널</h4>
                    <strong>15,900원</strong>
                </div>
                <div  class="bestpro__img">
                    <img src="../assets/img/chicken2.jpg" alt="BEST제품2">
                    <h4>잇메이트 | 닭가슴살 소시지 혼합 </h4>
                    <strong>21,750원</strong>
                </div>
                <div class="bestpro__img">
                    <img src="../assets/img/chicken3.jpg" alt="BEST제품3">
                    <h4>맛있닭 | 닭가슴살 볼 혼합 100g</h4>
                    <strong>18,900원</strong>
                </div>
                <div class="bestpro__img">
                    <img src="../assets/img/chicken4.jpg" alt="BEST제품4">
                    <h4>잇메이트 | 훈제 닭가슴살 혼합 100g</h4>
                    <strong>24,000원</strong>
                </div>
                <div class="bestpro__img">
                    <img src="../assets/img/chicken5.jpg" alt="BEST제품5">
                    <h4>미트리 | 스팀 닭가슴살</h4>
                    <strong>24,600원</strong>
                </div>
                <div class="bestpro__img">
                    <img src="../assets/img/chicken6.jpg" alt="BEST제품5">
                    <h4>허닭 | 닭가슴살 BIG 치킨텐더 치즈 80g </h4>
                    <strong>16,900원</strong>
                </div>
                <div class="bestpro__img">
                    <img src="../assets/img/chicken7.jpg" alt="BEST제품5">
                    <h4>미트리 | 오븐구이 닭가슴살 매콤바베큐</h4>
                    <strong>21,900원</strong>
                </div>
                <div class="bestpro__img">
                    <img src="../assets/img/chicken8.jpg" alt="BEST제품5">
                    <h4>잇메이트 | 스팀 닭가슴살</h4>
                    <strong>24,900원</strong>
                </div>
            </div>
        </section>
        <!-- bestproduct -->
    </main>

    <?php include "../include/footer.php" ?>
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
    <!-- // footer -->
</body>
</html>