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
    <title>Ranking Page</title>

    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/ranking.css">
    <link href="https://webfontworld.github.io/NexonLv1Gothic/NexonLv1Gothic.css" rel="stylesheet">
</head>
<?php include "../include/header.php"?>
<body class="ranking__container">
    <div class="ranking__wrap ranking__container">
        <div class="ranking__kategorie mb70">
            <a href="#"><div class="ranking__kategorie__box all">ALL</div><div class="ranking__kategorie__text">전체</div></a>
            <a href="#"><div class="ranking__kategorie__box new-product"></div><div class="ranking__kategorie__text">신상품</div></a>
            <a href="#"><div class="ranking__kategorie__box sausage"></div><div class="ranking__kategorie__text">소시지</div></a>
            <a href="#"><div class="ranking__kategorie__box meatball"></div><div class="ranking__kategorie__text">미트볼</div></a>
            <a href="#"><div class="ranking__kategorie__box bento"></div><div class="ranking__kategorie__text">도시락</div></a>
            <a href="#"><div class="ranking__kategorie__box steam"></div><div class="ranking__kategorie__text">스팀</div></a>
            <a href="#"><div class="ranking__kategorie__box steak"></div><div class="ranking__kategorie__text">스테이크</div></a>
            <a href="#"><div class="ranking__kategorie__box bbq"></div><div class="ranking__kategorie__text">훈제</div></a>
            <a href="#"><div class="ranking__kategorie__box sause"></div><div class="ranking__kategorie__text">소스</div></a>
        </div>
        <!-- katehorie -->

        <div class="ranking__1st">
            <a href="#">
                <div class="ranking__text__1st"><img class="ranking__1st__icon" src="../assets/img/ranking__1st.svg" alt="rank 1st">
                    <br> 이번 주<br> 1위 상품 <br>
                    <p>소스가 THE 맛있게 돌아왔닭!</p>
                    <p>미트볼도 걱정없이 닭가슴살로!</p>
                </div>
                <img class="ranking__1st__img" src="../assets/img/ranking1.jpg" alt="rank 1st">
            </a>
        </div>  
        <!-- 1st -->
        <div class="ranking__top">
            <div class="ranking__2nd">
                <a href="#">
                    <img src="../assets/img/ranking2.jpg" alt="rank 2nd">
                    <div class="ranking__text">🥈 랭킹 2위</div>
                </a>
            </div>
            <div class="ranking__3rd">
                <a href="#">
                    <img src="../assets/img/ranking3.jpg" alt="rank 3rd">
                    <div class="ranking__text">🥉 랭킹 3위</div>
                </a>
            </div>
            <div class="ranking__4th">
                <a href="#">
                    <img src="../assets/img/ranking4.jpg" alt="rank 4th">
                    <div class="ranking__text">🏅 랭킹 4위</div>
                </a>
            </div>
        </div>
        <!-- ranking top -->
        <div class="ranking__lower__text1">5 ~ 12위 랭킹 상품</div>
        <div class="ranking__lower1">
            <div class="ranking__5th">
                <a href="#">
                    <img src="../assets/img/ranking5.jpg" alt="rank 5th">
                    <div class="ranking__text">🎖 랭킹 5위</div>
                    <p class="ranking__lower__desc">[조아닭] 스키니 도시락 4종 4팩<br> <span>17,900원</span></p>
                </a>
            </div>
            <div class="ranking__6th">
                <a href="#">
                    <img src="../assets/img/ranking6.jpg" alt="rank 6th">
                    <div class="ranking__text">🎖 랭킹 6위</div>
                    <p class="ranking__lower__desc">[조아닭] 소스가 THE 맛있는 닭가슴살_<br>양념 치킨맛 10팩<br> <span>22,000원</span></p>
                </a>
            </div>
            <div class="ranking__7th">
                <a href="#">
                    <img src="../assets/img/ranking7.jpg" alt="rank 7th">
                    <div class="ranking__text">🎖 랭킹 7위</div>
                    <p class="ranking__lower__desc">[조아닭] 소스가 THE 맛있는 닭가슴살_<br>세  가지맛 6팩<br> <span>12,500원</span></p>
                </a>
            </div>
            <div class="ranking__8th">
                <a href="#">
                    <img src="../assets/img/ranking8.jpg" alt="rank 8th">
                    <div class="ranking__text">🎖 랭킹 8위</div>
                    <p class="ranking__lower__desc">[조아닭] 소스가 THE 맛있는 닭가슴살_<br>매콤 떡볶이맛 1팩<br> <span>2,400원</span></p>
                </a>
            </div>
        </div>
        <!-- ranking__lower1 -->

        <div class="ranking__lower__bottom1">
            <div class="ranking__9th">
                <a href="#">
                    <img src="../assets/img/ranking9.jpg" alt="rank 9th">
                    <div class="ranking__text">🎖 랭킹 9위</div>
                    <p class="ranking__lower__desc">[조아닭] 소스가 THE 맛있는 닭가슴살_<br>숯불 양념 갈비맛 1팩<br> <span>2,400원</span></p>
                </a>
            </div>
            <div class="ranking__10th">
                <a href="#">
                    <img src="../assets/img/ranking10.jpg" alt="rank 10th">
                    <div class="ranking__text">🎖 랭킹 10위</div>
                    <p class="ranking__lower__desc">[조아닭] 로제 소스가 맛있는 미트볼<br> 10팩<br> <span>19,800원</span></p>
                </a>
            </div>
            <div class="ranking__11th">
                <a href="#">
                    <img src="../assets/img/ranking11.jpg" alt="rank 11th">
                    <div class="ranking__text">🎖 랭킹 11위</div>
                    <p class="ranking__lower__desc">[조아닭] 토마토 소스가 맛있는 미트볼<br> 10팩<br> <span>19,800원</span></p>
                </a>
            </div>
            <div class="ranking__12th">
                <a href="#">
                    <img src="../assets/img/ranking12.jpg" alt="rank 12th">
                    <div class="ranking__text">🎖 랭킹 12위</div>
                    <p class="ranking__lower__desc">[조아닭] 닭가슴살 탱글 비엔나 훈제맛<br> 10팩<br> <span>12,900원</span></p>
                </a>
            </div>
        </div>
        <!-- ranking__lower__bottom1 -->

        <div class="ranking__lower__text2">13 ~ 20위 랭킹 상품</div>
        <div class="ranking__lower2">
            <div class="ranking__5th">
                <a href="#">
                    <img src="../assets/img/ranking5.jpg" alt="rank 5th">
                    <div class="ranking__text">🎖 랭킹 13위</div>
                    <p class="ranking__lower__desc">[조아닭] 스키니 도시락 4종 4팩<br> <span>17,900원</span></p>
                </a>
            </div>
            <div class="ranking__6th">
                <a href="#">
                    <img src="../assets/img/ranking6.jpg" alt="rank 6th">
                    <div class="ranking__text">🎖 랭킹 14위</div>
                    <p class="ranking__lower__desc">[조아닭] 소스가 THE 맛있는 닭가슴살_<br>양념 치킨맛 10팩<br> <span>22,000원</span></p>
                </a>
            </div>
            <div class="ranking__7th">
                <a href="#">
                    <img src="../assets/img/ranking7.jpg" alt="rank 7th">
                    <div class="ranking__text">🎖 랭킹 15위</div>
                    <p class="ranking__lower__desc">[조아닭] 소스가 THE 맛있는 닭가슴살_<br>세  가지맛 6팩<br> <span>12,500원</span></p>
                </a>
            </div>
            <div class="ranking__8th">
                <a href="#">
                    <img src="../assets/img/ranking8.jpg" alt="rank 8th">
                    <div class="ranking__text">🎖 랭킹 16위</div>
                    <p class="ranking__lower__desc">[조아닭] 소스가 THE 맛있는 닭가슴살_<br>매콤 떡볶이맛 1팩<br> <span>2,400원</span></p>
                </a>
            </div>
        </div>
        <!-- ranking__lower2 -->

        <div class="ranking__lower__bottom2">
            <div class="ranking__9th">
                <a href="#">
                    <img src="../assets/img/ranking9.jpg" alt="rank 9th">
                    <div class="ranking__text">🎖 랭킹 17위</div>
                    <p class="ranking__lower__desc">[조아닭] 소스가 THE 맛있는 닭가슴살_<br>숯불 양념 갈비맛 1팩<br> <span>2,400원</span></p>
                </a>
            </div>
            <div class="ranking__10th">
                <a href="#">
                    <img src="../assets/img/ranking10.jpg" alt="rank 10th">
                    <div class="ranking__text">🎖 랭킹 18위</div>
                    <p class="ranking__lower__desc">[조아닭] 로제 소스가 맛있는 미트볼 <br>10팩<br> <span>19,800원</span></p>
                </a>
            </div>
            <div class="ranking__11th">
                <a href="#">
                    <img src="../assets/img/ranking11.jpg" alt="rank 11th">
                    <div class="ranking__text">🎖 랭킹 19위</div>
                    <p class="ranking__lower__desc">[조아닭] 토마토 소스가 맛있는 미트볼 <br>10팩<br> <span>19,800원</span></p>
                </a>
            </div>
            <div class="ranking__12th">
                <a href="#">
                    <img src="../assets/img/ranking12.jpg" alt="rank 12th">
                    <div class="ranking__text">🎖 랭킹 20위</div>
                    <p class="ranking__lower__desc">[조아닭] 닭가슴살 탱글 비엔나 훈제맛 <br>10팩<br> <span>12,900원</span></p>
                </a>
            </div>
        </div>
        <!-- ranking__lower__bottom2 -->

    </div>
    <!-- ranking -->

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

    <script>
        // console.log(kategorieActive)

        
        let kategorieActive = document.querySelectorAll(".ranking__kategorie .ranking__kategorie__box");

        kategorieActive.forEach((kategorie) => {
            kategorie.addEventListener("click", () => {
                // 기존에 "active" 클래스가 적용된 요소들에서 "active" 클래스를 제거합니다.
                kategorieActive.forEach((element) => {
                    element.classList.remove("active");
                });

                // 클릭한 요소에 "active" 클래스를 추가합니다.
                kategorie.classList.add("active");
            });
        });
    </script>
</body>
</html>