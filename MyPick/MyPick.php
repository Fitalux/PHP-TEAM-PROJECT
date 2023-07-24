<?php 
    include "../connect/connect.php";
    include "../connect/session.php";

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 영양많닭 My Pick</title>
    <?php include "../include/head.php" ?>
</head>
<body>
    <?php include "../include/header.php" ?>
    <!-- //header -->
    <main>
    <div id="compare">
        <div class="compare__icon">
            <img src="../assets/img/ab-testing.svg" alt="성분 비교 아이콘">
            <h1>성분 비교</h1>
        </div>
        <div class="compare__item">
            <div class="compareMin">
                <div class="item__img1">
                    <img src="../assets/img/redchicken.svg" alt="비교대상 왼쪽 이미지">
                </div>
                <div class="vsimg">
                    <img src="../assets/img/vs cute.svg" alt="vs이미지">
                </div>            
                <div class="item__img2">
                    <img src="../assets/img/bluechicken.svg" alt="비교대상 오른쪽 이미지">
                </div>
            </div>
        </div>
        <div class="compare__view">
            <div class="compare__redtext">
                <div class="compare__text">
                    <div class="compare__text1">나트륨</div>
                    <div class="compare__text2">85mg</div>
                </div>
                <div class="compare__text">
                    <div class="compare__text1">단백질</div>
                    <div class="compare__text2">10g</div>
                </div>
                <div class="compare__text">
                    <div class="compare__text1">탄수화물</div>
                    <div class="compare__text2">10g</div>
                </div>
                <div class="compare__text">
                    <div class="compare__text1">지방</div>
                    <div class="compare__text2">10g</div>
                </div>
                <div class="compare__text">
                    <div class="compare__text1">당류</div>
                    <div class="compare__text2">10g</div>
                </div>
                <div class="compare__text">
                    <div class="compare__text1">트랜스지방</div>
                    <div class="compare__text2">10g</div>
                </div>
                <div class="compare__text">
                    <div class="compare__text1">포화지방</div>
                    <div class="compare__text2">10g</div>
                </div>
                <div class="compare__text">
                    <div class="compare__text1">콜레스테롤</div>
                    <div class="compare__text2">10g</div>
                </div>
            </div>
            <div class="compare__result">
                <p class="salt"><em class="compareUp">▲120</em></p>
                <p class="protein"><em class="compareDown">▼12</em></p>
                <p class="carbohydrate"></p>
                <p class="province"></p>
                <p class="sugars"></p>
                <p class="trans__fat"></p>
                <p class="saturated__fat"></p>
                <p class="cholesterol"></p>
            </div>
            <div class="compare__bluetext">
                <div class="compare__text">
                    <div class="compare__text3">85mg</div>
                    <div class="compare__text4">나트륨</div>
                </div>
                <div class="compare__text">
                    <div class="compare__text3">10g</div>
                    <div class="compare__text4">단백질</div>
                </div>
                <div class="compare__text">
                    <div class="compare__text3">10g</div>
                    <div class="compare__text4">탄수화물</div>
                </div>
                <div class="compare__text">
                    <div class="compare__text3">10g</div>
                    <div class="compare__text4">지방</div>
                </div>
                <div class="compare__text">
                    <div class="compare__text3">10g</div>
                    <div class="compare__text4">당류</div>
                </div>
                <div class="compare__text">
                    <div class="compare__text3">10g</div>
                    <div class="compare__text4">트랜스지방</div>
                </div>
                <div class="compare__text">
                    <div class="compare__text3">10g</div>
                    <div class="compare__text4">포화지방</div>
                </div>
                <div class="compare__text">
                    <div class="compare__text3">10g</div>
                    <div class="compare__text4">콜레스테롤</div>
                </div>
            </div>
        </div>
        <div class="compare__graph__h1">
            <h2>제품 목록 그래프</h2>
        </div>
        <div id="compare__graph">
            <div class="horizontal-bar-graph" id="my-graph">
                <ul class="bar-graph"> 
                    <li>
                        <p>미트리 소스 닭가슴살</p>
                        <div class="bar-wrap"><span class="bar-fill" style="width: 100%;"></span></div>
                    </li> 
                    <li>
                        <p>미트리 닭가슴살 볼</p>
                        <div class="bar-wrap"><span class="bar-fill" style="width: 80%;"></span></div>
                    </li> 
                    <li>
                        <p>굽네 소맛닭</p>
                        <div class="bar-wrap"><span class="bar-fill"  style="width: 60%;"></span></div>
                    </li> 
                    <li>
                        <p>헬스앤뷰티 닭가슴살</p>
                        <div class="bar-wrap"><span class="bar-fill" style="width: 50%;"></span></div>
                    </li> 
                    <li>
                        <p>랭킹닭컴 닭가슴살</p>
                        <div class="bar-wrap"><span class="bar-fill" style="width: 30%;"></span></div>
                    </li> 
                  </ul>              
            </div>
        </div>
        <div class="compare__list">
            <div class="com__list">
                <img src="../assets/img/compareImg1.svg" alt="첫번째 선택 이미지">
            </div>
            <div class="com__list">
                <img src="../assets/img/compareImg2.svg" alt="첫번째 선택 이미지">
            </div>
            <div class="com__list">
                <img src="../assets/img/compareImg3.svg" alt="첫번째 선택 이미지">
            </div>
            <div class="com__list">
                <img src="../assets/img/compareImg4.svg" alt="첫번째 선택 이미지">
            </div>
            <div class="com__list">
                <img src="../assets/img/compareImg5.svg" alt="첫번째 선택 이미지">
            </div>
        </div>
    </div>
    </main>
    <!-- Mypick -->
    <?php include "../include/footer.php" ?>
    <!-- // footer -->
</body>
</html>