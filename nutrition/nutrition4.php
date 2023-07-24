<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $sql = "SELECT * FROM Fixedtable WHERE FixedID = 4";
    $result = $connect -> query($sql);

    if ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $FixedName = $row['FixedName'];
        $FixedTitle = $row['FixedTitle'];
        $FixedGkcal = $row['FixedG_kcal'];
        $FixedPrice = $row['FixedPrice'];
        $FixedCarbohydrate = $row['FixedCarbohydrate'];
        $FixedSugars = $row['FixedSugars'];
        $FixedProvince = $row['FixedProvince'];
        $FixedTrans_fat = $row['FixedTrans_fat'];
        $FixedSaturated_fat = $row['FixedSaturated_fat'];
        $FixedCholesterol = $row['FixedCholesterol'];
        $FixedProtien = $row['FixedProtien'];
    } 
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>영양성분 표기</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <?php include "../include/head.php" ?>
</head>
<body>
    <?php include "../include/nutfixed.php" ?>
    <!-- nutfixed -->
    <?php include "../include/header.php" ?>
    <!-- header -->
    <main>
        <div id="nutrition">
            <div id="nuthead">
                <h2>[<?=$FixedTitle?>]<?=$FixedName?></h2>
            </div>
            <div id="nutcontents">
                <div class="nutimg">
                    <form action="#" method="post">
                        <img src="../assets/img/heodak_sauce_deri.jpg" alt="#">
                        <p>가격 : <?=$FixedPrice?>원</p>
                        <button type="submit" name="pickButton0" id="like-button" value="6">Pick!</button>
                    </form>
                </div>
                <div class="nutinfo">
                    <div class="nutinfosub">☞View review  <?=$FixedName?></div>
                    <div class="nutinfo1">
                        <h2>제품 원재료명 표기 정보</h2>
                        <p>제품에 표기된 ‘영양성분표’와 ”원재료명’에 들어간 정보는 차이가 있을 수 있습니다.<br>
                            우유고형분(유당, 탈지분유, 유청분말), 식용유지(팜유, 해바라기유, 코코넛유, 대두유), 갈락토올리고당, 아라키돈산분말, 미네랄믹스(탄산칼슘, 제이인산칼슘, 염화칼륨, 제이인산칼륨, 정제염, 염화마그네슘, 황산제일철, 황산아연, 황산동, 황산망간, 요오드칼륨, 아셀렌산나트륨, 구연산칼륨, 구연산삼나트륨), 도코사헥사엔산분말(DHA분말), 비타민믹스(L-아스코르빈산, dl-알파토코페릴아세테이트, 유성비타민A지방산에스테르, 비타민D3, 니코틴산아미드, 베타카로틴, 비타민B1염산염, 판토텐산칼슘, 비타민K1, 비타민B6염산염, 엽산, 비타민B12, 비오틴, 비타민B2), 대두레시틴, 이노시톨, 염화콜린, 수산화칼륨, 수산화칼슘, 구연산, 탄산수소나트륨, 타우린, 뉴클레오타이드류, L-카르니틴 *대두, 우유 함유</p>
                    </div>
                    <div class="nutgraph">
                        <div id="compare__graph">
                            <div class="horizontal-bar-graph" id="my-graph">
                                <ul class="bar-graph"> 
                                    <li>
                                      <p>맛</p>
                                      <div class="bar-wrap"><span class="bar-fill pink" style="width: 50%;">좋아요</span></div>
                                    </li> 
                                    <li>
                                      <div class="bar-wrap"><span class="bar-fill pink" style="width: 35%;">보통이에요</span></div>
                                    </li> 
                                    <li>
                                      <div class="bar-wrap"><span class="bar-fill pink"  style="width: 15%;">안좋아요</span></div>
                                    </li>             
                                  </ul>              
                            </div>
                        </div>
                        <div id="compare__graph">
                            <div class="horizontal-bar-graph" id="my-graph">
                                <ul class="bar-graph"> 
                                    <li>
                                      <p>품질</p>
                                      <div class="bar-wrap"><span class="bar-fill blue" style="width: 80%;">좋아요</span></div>
                                    </li> 
                                    <li>
                                      <div class="bar-wrap"><span class="bar-fill blue" style="width: 15%;">보통이에요</span></div>
                                    </li> 
                                    <li>
                                      <div class="bar-wrap"><span class="bar-fill blue"  style="width: 5%;">안좋아요</span></div>
                                    </li>             
                                  </ul>              
                            </div>
                        </div>
                    </div>
                    <div class="nutcomment">
                        <p>*위 정보는 각 판매사이트 제품의 실제 리뷰 수치이며 매월 마지막날 업데이트 됩니다.</p>
                    </div>
                </div>
            </div>
            <div class="nutsubcontentbox">
                <div id="nutsubcontents">
                    <div class="nutmore">
                        <h2>영양 정보</h2>
                        <a href="#">▼</a>
                    </div>
                    <div class="nutcontent1">
                        <h2>[<?=$FixedTitle?>] <?=$FixedName?></h2>
                        <p>총내용량 <?=$FixedGkcal?></p>
                        <div class="nutrient">
                            <div class="salt">
                                <h3>나트륨</g/28%</sh3>
                                <span><?=$FixedGkcal?></span>
                            </div>
                            <div class="carbohydrate">
                                <h3>탄수화물</h3>
                                <span><?=$FixedCarbohydrate?></span>
                            </div>
                            <div class="sugars">
                                <h3>당류</h3>
                                <span><?=$FixedSugars?></span>
                            </div>
                            <div class="province">
                                <h3>지방</h3>
                                <span><?=$FixedProvince?></span>
                            </div>
                            <div class="trans_fat">
                                <h3>트랜스지방</h3>
                                <span><?=$FixedTrans_fat?></span>
                            </div>
                            <div class="saturated_fat">
                                <h3>포화지방</h3>
                                <span><?=$FixedSaturated_fat?></span>
                            </div>
                            <div class="cholesterol">
                                <h3>콜레스테롤</h3>
                                <span><?=$FixedCholesterol?></span>
                            </div>
                            <div class="protien">
                                <h3>단백질</h3>
                                <span><?=$FixedProtien?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="nutsubcontents1">
                    <div class="nutmore">
                        <h2>리뷰 보기</h2>
                        <a href="#">전체 보기▶</a>
                    </div>
                    <div class="nutbtn">
                    <a href="#" class="prev" title="이전이미지"><img src="../assets/img/vImg.svg" alt="이전 리뷰"></a>
                        <a href="#" class="next" title="다음이미지"><img src="../assets/img/vImg2.svg" alt="다음 리뷰"></a>
                    </div>
                    <div class="nutreviewbox">
                        <div class="nutreview">
                            <div class="reviewimg"></div>
                            <div class="nutreviewmore">
                                <div class="reviewmorehead">
                                    <h3>레드 소스가 필요해..</h3>
                                    <a href="#">더보기▶</a>
                                </div>
                                <div class="nutreviewstar">★★☆☆☆</div>
                                <div class="nutreviewinfo">
                                    교촌은 항상 먹지만 진짜 맛은 있는데<br>
                                    가격이 진짜.. 이게 맞는건가요?<br>
                                    배달비까지 받아 요즘엔 포장비까지<br>
                                    받으려 하시던데 양심껏 하세요 !!
                                </div>
                            </div>
                        </div>
                        <div class="nutreview">
                            <div class="reviewimg"></div>
                            <div class="nutreviewmore">
                                <div class="reviewmorehead">
                                    <h3>레드 소스가 필요해..</h3>
                                    <a href="#">더보기▶</a>
                                </div>
                                <div class="nutreviewstar">★★☆☆☆</div>
                                <div class="nutreviewinfo">
                                    교촌은 항상 먹지만 진짜 맛은 있는데<br>
                                    가격이 진짜.. 이게 맞는건가요?<br>
                                    배달비까지 받아 요즘엔 포장비까지<br>
                                    받으려 하시던데 양심껏 하세요 !!
                                </div>
                            </div>
                        </div>
                        <div class="nutreview">
                            <div class="reviewimg"></div>
                            <div class="nutreviewmore">
                                <div class="reviewmorehead">
                                    <h3>레드 소스가 필요해..</h3>
                                    <a href="#">더보기▶</a>
                                </div>
                                <div class="nutreviewstar">★★☆☆☆</div>
                                <div class="nutreviewinfo">
                                    교촌은 항상 먹지만 진짜 맛은 있는데<br>
                                    가격이 진짜.. 이게 맞는건가요?<br>
                                    배달비까지 받아 요즘엔 포장비까지<br>
                                    받으려 하시던데 양심껏 하세요 !!
                                </div>
                            </div>
                        </div>
                        <div class="nutreview">
                            <div class="reviewimg"></div>
                            <div class="nutreviewmore">
                                <div class="reviewmorehead">
                                    <h3>레드 소스가 필요해..</h3>
                                    <a href="#">더보기▶</a>
                                </div>
                                <div class="nutreviewstar">★★☆☆☆</div>
                                <div class="nutreviewinfo">
                                    교촌은 항상 먹지만 진짜 맛은 있는데<br>
                                    가격이 진짜.. 이게 맞는건가요?<br>
                                    배달비까지 받아 요즘엔 포장비까지<br>
                                    받으려 하시던데 양심껏 하세요 !!
                                </div>
                            </div>
                        </div>
                        <div class="nutreview">
                            <div class="reviewimg"></div>
                            <div class="nutreviewmore">
                                <div class="reviewmorehead">
                                    <h3>레드 소스가 필요해..</h3>
                                    <a href="#">더보기▶</a>
                                </div>
                                <div class="nutreviewstar">★★☆☆☆</div>
                                <div class="nutreviewinfo">
                                    교촌은 항상 먹지만 진짜 맛은 있는데<br>
                                    가격이 진짜.. 이게 맞는건가요?<br>
                                    배달비까지 받아 요즘엔 포장비까지<br>
                                    받으려 하시던데 양심껏 하세요 !!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="nutritionfooter">
            <footer id="footer">
                <div class="container"> 
                <div class="footer__text">
                    <a href="#">공지사항</a> | 
                    <a href="#">자주받는질문</a> | 
                    <a href="#" class="active">1:1질문</a> |
                    <a href="#">이용약관</a> |
                    <a href="#">개인정보처리방침</a></div>
                </div>
                <address>
                    영양많닭(주) | 대표자: 1조<br>
                    주소:안산시 단원구 고잔동 535-2번지 라인컴퓨터아트학원  | 사업자등록번호: 준비중<br>
                    통신판매업신고: 준비중 | 개인정보보호책임자: 1조
                </address>
            </footer>
            <!-- footer -->
        </div>
    </main>
    <script src="../assets/js/nutrition.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $("#like-button").click(function(){
            let value = $(this).val();
            $.ajax({
                url: "ncheck.php",
                method: "POST",
                dataType: "json",
                data: {
                    "picNumber": value,
                },
                success: function(data){
                    console.log(data);
                    
                },
                error: function(request, status, error){
                    console.log("request" + request);
                    console.log("status" + status);
                    console.log("error" + error);
                }
            })
        });
    </script>

</body>
</html>