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
    <title>Brand Page</title>
    <?php include "../include/head.php" ?>
</head>
<body>
    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main>
        <div class="brand__title"><h2>브랜드관</h2></div>
        <p class="brand__logo__slider__title brand__container">인기 브랜드</p>
        <div class="brand__container brand__logo__sliderWrap">
            <div class="logo__img">
                <div class="brand__logo__sliderInner">
                    <div class="logo__slider__img">
                       <a href="#">
                           <img src="../assets/img/kyochon__circle.jpg" alt="교촌 원형 로고">
                       </a>
                    </div>
                    <div class="logo__slider__img">
                        <a href="#">
                            <img src="../assets/img/dashin__circle.jpg" alt="다신 원형 로고">
                        </a>
                    </div>
                    <div class="logo__slider__img">
                        <a href="#">
                            <img src="../assets/img/i'mdak__circle.jpg" alt="아임닭 원형 로고">
                        </a>
                    </div>
                    <div class="logo__slider__img">
                        <a href="#">
                            <img src="../assets/img/gopne__circle.png" alt="굽네몰 원형 로고">
                        </a>
                    </div>
                    <div class="logo__slider__img">
                        <a href="#">
                            <img src="../assets/img/dakbro__circle.png" alt="닭형 원형 로고">
                        </a>
                    </div>
                    <div class="logo__slider__img">
                        <a href="#">
                            <img src="../assets/img/heodak__circle.png" alt="허닭 원형 로고">
                        </a>
                    </div>
                    <div class="logo__slider__img">
                        <a href="#">
                            <img src="../assets/img/kyochon__circle.jpg" alt="교촌 원형 로고">
                        </a>
                     </div>
                     <div class="logo__slider__img">
                         <a href="#">
                             <img src="../assets/img/dashin__circle.jpg" alt="다신 원형 로고">
                         </a>
                     </div>
                     <div class="logo__slider__img">
                        <a href="#">
                            <img src="../assets/img/i'mdak__circle.jpg" alt="아임닭 원형 로고">
                        </a>
                    </div>
                    <div class="logo__slider__img">
                        <a href="#">
                            <img src="../assets/img/gopne__circle.png" alt="굽네몰 원형 로고">
                        </a>
                    </div>
                    <div class="logo__slider__img">
                        <a href="#">
                            <img src="../assets/img/kyochon__circle.jpg" alt="교촌 원형 로고">
                        </a>
                     </div>
                     <div class="logo__slider__img">
                         <a href="#">
                             <img src="../assets/img/dashin__circle.jpg" alt="다신 원형 로고">
                         </a>
                     </div>
                     <div class="logo__slider__img">
                         <a href="#">
                             <img src="../assets/img/i'mdak__circle.jpg" alt="아임닭 원형 로고">
                         </a>
                     </div>
                     <div class="logo__slider__img">
                         <a href="#">
                             <img src="../assets/img/gopne__circle.png" alt="굽네 원형 로고">
                         </a>
                     </div>
                     <div class="logo__slider__img">
                         <a href="#">
                             <img src="../assets/img/dakbro__circle.png" alt="닭형 원형 로고">
                         </a>
                     </div>
                     <div class="logo__slider__img">
                         <a href="#">
                             <img src="../assets/img/heodak__circle.png" alt="허닭 원형 로고">
                         </a>
                     </div>
                     <div class="logo__slider__img">
                         <a href="#">
                             <img src="../assets/img/kyochon__circle.jpg" alt="교촌 원형 로고">
                         </a>
                      </div>
                      <div class="logo__slider__img">
                          <a href="#">
                              <img src="../assets/img/dashin__circle.jpg" alt="다신 원형 로고">
                          </a>
                      </div>
                      <div class="logo__slider__img">
                         <a href="#">
                             <img src="../assets/img/i'mdak__circle.jpg" alt="아임닭 원형 로고">
                         </a>
                     </div>
                     <div class="logo__slider__img">
                         <a href="#">
                             <img src="../assets/img/gopne__circle.png" alt="굽네 원형 로고">
                         </a>
                     </div>
                </div>
                <div class="slider__btn">
                    <a href="#" class="brand__logo__slider__prev"></a>
                    <a href="#" class="brand__logo__slider__next"></a>
                </div>
            </div>
        </div>
        <!-- brand slider //브랜드관 로고 슬라이드 -->

        <div class="brand__ranking brand__container">
            <div class="brand__ranking__left">
                <div class="more">
                    <a href="#">더보기</a>
                </div>
                <div class="brand__info">
                    <a href="#">
                        <div class="brand__info__img">
                            <img src="../assets/img/dashin__circle_small.png" alt="">
                            <div class="brand__name">다신샵</div>
                        </div>
                    </a>
                </div>
                <div class="representative__product">
                    <div class="product__info">
                        <img src="../assets/img/brand__raking__img01.jpg" alt="">
                        <div class="info__desc">
                            <a href="#">
                                <span>훈제 닭가슴살</span>
                            </a>
                            <div class="like"></div>
                        </div>
                        <div class="price">23,000</div>
                    </div>
                    <div class="product__info">
                        <img src="../assets/img/brand__raking__img02.jpg" alt="">
                        <div class="info__desc">
                            <a href="#">
                                <span>카레 닭가슴살</span>
                            </a>
                            <div class="like"></div>
                        </div>
                        <div class="price">23,000</div>
                    </div>
                    <div class="product__info">
                        <img src="../assets/img/brand__raking__img03.jpg" alt="">
                        <div class="info__desc">
                            <a href="#">
                                <span>소스 닭가슴살</span>
                            </a>
                            <div class="like"></div>
                        </div>
                        <div class="price">23,000</div>
                    </div>
                </div>
                   
            </div>
            <div class="brand__ranking__right">
                <div class="more">
                    <a href="#">더보기</a>
                </div>
                <div class="brand__info">
                    <a href="#">
                        <div class="brand__info__img">
                            <img src="../assets/img/i'mdak__circle_small.jpg" alt="">
                            <div class="brand__name">아임닭</div>
                        </div>
                    </a>
                </div>
                <div class="representative__product">
                    <div class="product__info">
                        <img src="../assets/img/brand__raking__img01.jpg" alt="">
                        <div class="info__desc">
                            <a href="#">
                                <span>훈제 닭가슴살</span>
                            </a>
                            <div class="like"></div>
                        </div>
                        <div class="price">23,000</div>
                    </div>
                    <div class="product__info">
                        <img src="../assets/img/brand__raking__img02.jpg" alt="">
                        <div class="info__desc">
                            <a href="#">
                                <span>카레 닭가슴살</span>
                            </a>
                            <div class="like"></div>
                        </div>
                        <div class="price">23,000</div>
                    </div>
                    <div class="product__info">
                        <img src="../assets/img/brand__raking__img03.jpg" alt="">
                        <div class="info__desc">
                            <a href="#">
                                <span>소스 닭가슴살</span>
                            </a>
                            <div class="like"></div>
                        </div>
                        <div class="price">23,000</div>
                    </div>
                </div> 
            </div>
        </div>
        <!-- brand__rankig box // -->

        <div class="brand__recommend__container">
            <div class="brand__recommend brand__container">
                <div class="brand__recommend__left">
                    <img src="../assets/img/recommed__img__gopne.jpg" alt="">
                </div>
                <div class="brand__recommend__rignt">
                    <div class="brand__recommend__title">
                       <span>BRAND</span>
                       <p>추천상품</p>
                    </div>
                    <div class="brand__recommed__product brand__container">
                        <div class="brand__recommend__img__desc">
                            <a href="#">
                                <img src="../assets/img/brand__recommend__img01.png" alt="">
                               <div class="brand__recommend__name">
                                 굽네몰
                                 <div class="like"></div>
                                </div>
                                <p class="product__name">카레맛 닭가슴살</p>
                            </a>
                        </div>
                        <div class="brand__recommend__img__desc">
                            <a href="#">
                                <img src="../assets/img/brand__recommend__img01.png" alt="">
                               <div class="brand__recommend__name">
                                 굽네몰
                                 <div class="like"></div>
                                </div>
                                <p class="product__name">카레맛 닭가슴살</p>
                            </a>
                        </div>
                        <div class="brand__recommend__img__desc">
                            <a href="#">
                                <img src="../assets/img/brand__recommend__img01.png" alt="">
                               <div class="brand__recommend__name">
                                 굽네몰
                                 <div class="like"></div>
                                </div>
                                <p class="product__name">카레맛 닭가슴살</p>
                            </a>
                        </div>
                        <div class="brand__recommend__img__desc">
                            <a href="#">
                                <img src="../assets/img/brand__recommend__img01.png" alt="">
                               <div class="brand__recommend__name">
                                 굽네몰
                                 <div class="like"></div>
                                </div>
                                <p class="product__name">카레맛 닭가슴살</p>
                            </a>
                        </div>

                    </div>
                    <div class="brand__recommed__product brand__container">
                        <div class="brand__recommend__img__desc">
                            <a href="#">
                                <img src="../assets/img/brand__recommend__img01.png" alt="">
                               <div class="brand__recommend__name">
                                 굽네몰
                                 <div class="like"></div>
                                </div>
                                <p class="product__name">카레맛 닭가슴살</p>
                            </a>
                        </div>
                        <div class="brand__recommend__img__desc">
                            <a href="#">
                                <img src="../assets/img/brand__recommend__img01.png" alt="">
                               <div class="brand__recommend__name">
                                 굽네몰
                                 <div class="like"></div>
                                </div>
                                <p class="product__name">카레맛 닭가슴살</p>
                            </a>
                        </div>
                        <div class="brand__recommend__img__desc">
                            <a href="#">
                                <img src="../assets/img/brand__recommend__img01.png" alt="">
                               <div class="brand__recommend__name">
                                 굽네몰
                                 <div class="like"></div>
                                </div>
                                <p class="product__name">카레맛 닭가슴살</p>
                            </a>
                        </div>
                        <div class="brand__recommend__img__desc">
                            <a href="#">
                                <img src="../assets/img/brand__recommend__img01.png" alt="">
                               <div class="brand__recommend__name">
                                 굽네몰
                                 <div class="like"></div>
                                </div>
                                <p class="product__name">카레맛 닭가슴살</p>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="brand__list__container brand__container">
            <div class="brand__list">
                <div class="brand__list__info">
                    <div class="brand__list__img">
                        <img src="../assets/img/brand__list__img01.jpg" alt="">
                    </div>
                    <div class="brand__list__desc">
                        <div class="brand__list__name">미트리</div>
                        <div class="like"></div>
                    </div>
                </div>
                <div class="brand__list__info">
                    <div class="brand__list__img">
                        <img src="../assets/img/brand__list__img02.jpg" alt="">
                    </div>
                    <div class="brand__list__desc">
                        <div class="brand__list__name">허닭</div>
                        <div class="like"></div>
                    </div>
                </div>
                <div class="brand__list__info">
                    <div class="brand__list__img">
                        <img src="../assets/img/brand__list__img03.jpg" alt="">
                    </div>
                    <div class="brand__list__desc">
                        <div class="brand__list__name">아임닭</div>
                        <div class="like"></div>
                    </div>
                </div>
                <div class="brand__list__info">
                    <div class="brand__list__img">
                        <img src="../assets/img/brand__list__img01.jpg" alt="">
                    </div>
                    <div class="brand__list__desc">
                        <div class="brand__list__name">다신샵</div>
                        <div class="like"></div>
                    </div>
                </div>
                <div class="brand__list__info">
                    <div class="brand__list__img">
                        <img src="../assets/img/brand__list__img02.jpg" alt="">
                    </div>
                    <div class="brand__list__desc">
                        <div class="brand__list__name">굽네몰</div>
                        <div class="like"></div>
                    </div>
                </div>
            </div>
            <div class="brand__list">
                <div class="brand__list__info">
                    <div class="brand__list__img">
                        <img src="../assets/img/brand__list__img03.jpg" alt="">
                    </div>
                    <div class="brand__list__desc">
                        <div class="brand__list__name">미트리</div>
                        <div class="like"></div>
                    </div>
                </div>
                <div class="brand__list__info">
                    <div class="brand__list__img">
                        <img src="../assets/img/brand__list__img02.jpg" alt="">
                    </div>
                    <div class="brand__list__desc">
                        <div class="brand__list__name">허닭</div>
                        <div class="like"></div>
                    </div>
                </div>
                <div class="brand__list__info">
                    <div class="brand__list__img">
                        <img src="../assets/img/brand__list__img01.jpg" alt="">
                    </div>
                    <div class="brand__list__desc">
                        <div class="brand__list__name">아임닭</div>
                        <div class="like"></div>
                    </div>
                </div>
                <div class="brand__list__info">
                    <div class="brand__list__img">
                        <img src="../assets/img/brand__list__img03.jpg" alt="">
                    </div>
                    <div class="brand__list__desc">
                        <div class="brand__list__name">다신샵</div>
                        <div class="like"></div>
                    </div>
                </div>
                <div class="brand__list__info">
                    <div class="brand__list__img">
                        <img src="../assets/img/brand__list__img01.jpg" alt="">
                    </div>
                    <div class="brand__list__desc">
                        <div class="brand__list__name">굽네몰</div>
                        <div class="like"></div>
                    </div>
                </div>
            </div>
            <div class="brand__list">
                <div class="brand__list__info">
                    <div class="brand__list__img">
                        <img src="../assets/img/brand__list__img03.jpg" alt="">
                    </div>
                    <div class="brand__list__desc">
                        <div class="brand__list__name">미트리</div>
                        <div class="like"></div>
                    </div>
                </div>
                <div class="brand__list__info">
                    <div class="brand__list__img">
                        <img src="../assets/img/brand__list__img02.jpg" alt="">
                    </div>
                    <div class="brand__list__desc">
                        <div class="brand__list__name">허닭</div>
                        <div class="like"></div>
                    </div>
                </div>
                <div class="brand__list__info">
                    <div class="brand__list__img">
                        <img src="../assets/img/brand__list__img01.jpg" alt="">
                    </div>
                    <div class="brand__list__desc">
                        <div class="brand__list__name">아임닭</div>
                        <div class="like"></div>
                    </div>
                </div>
                <div class="brand__list__info">
                    <div class="brand__list__img">
                        <img src="../assets/img/brand__list__img03.jpg" alt="">
                    </div>
                    <div class="brand__list__desc">
                        <div class="brand__list__name">다신샵</div>
                        <div class="like"></div>
                    </div>
                </div>
                <div class="brand__list__info">
                    <div class="brand__list__img">
                        <img src="../assets/img/brand__list__img01.jpg" alt="">
                    </div>
                    <div class="brand__list__desc">
                        <div class="brand__list__name">굽네몰</div>
                        <div class="like"></div>
                    </div>
                </div>
            </div>
            <div class="brand__list">
                <div class="brand__list__info">
                    <div class="brand__list__img">
                        <img src="../assets/img/brand__list__img03.jpg" alt="">
                    </div>
                    <div class="brand__list__desc">
                        <div class="brand__list__name">미트리</div>
                        <div class="like"></div>
                    </div>
                </div>
                <div class="brand__list__info">
                    <div class="brand__list__img">
                        <img src="../assets/img/brand__list__img02.jpg" alt="">
                    </div>
                    <div class="brand__list__desc">
                        <div class="brand__list__name">허닭</div>
                        <div class="like"></div>
                    </div>
                </div>
                <div class="brand__list__info">
                    <div class="brand__list__img">
                        <img src="../assets/img/brand__list__img01.jpg" alt="">
                    </div>
                    <div class="brand__list__desc">
                        <div class="brand__list__name">아임닭</div>
                        <div class="like"></div>
                    </div>
                </div>
                <div class="brand__list__info">
                    <div class="brand__list__img">
                        <img src="../assets/img/brand__list__img03.jpg" alt="">
                    </div>
                    <div class="brand__list__desc">
                        <div class="brand__list__name">다신샵</div>
                        <div class="like"></div>
                    </div>
                </div>
                <div class="brand__list__info">
                    <div class="brand__list__img">
                        <img src="../assets/img/brand__list__img01.jpg" alt="">
                    </div>
                    <div class="brand__list__desc">
                        <div class="brand__list__name">굽네몰</div>
                        <div class="like"></div>
                    </div>
                </div>
            </div>
            <div class="brand__list">
                <div class="brand__list__info">
                    <div class="brand__list__img">
                        <img src="../assets/img/brand__list__img03.jpg" alt="">
                    </div>
                    <div class="brand__list__desc">
                        <div class="brand__list__name">미트리</div>
                        <div class="like"></div>
                    </div>
                </div>
                <div class="brand__list__info">
                    <div class="brand__list__img">
                        <img src="../assets/img/brand__list__img02.jpg" alt="">
                    </div>
                    <div class="brand__list__desc">
                        <div class="brand__list__name">허닭</div>
                        <div class="like"></div>
                    </div>
                </div>
                <div class="brand__list__info">
                    <div class="brand__list__img">
                        <img src="../assets/img/brand__list__img01.jpg" alt="">
                    </div>
                    <div class="brand__list__desc">
                        <div class="brand__list__name">아임닭</div>
                        <div class="like"></div>
                    </div>
                </div>
                <div class="brand__list__info">
                    <div class="brand__list__img">
                        <img src="../assets/img/brand__list__img03.jpg" alt="">
                    </div>
                    <div class="brand__list__desc">
                        <div class="brand__list__name">다신샵</div>
                        <div class="like"></div>
                    </div>
                </div>
                <div class="brand__list__info">
                    <div class="brand__list__img">
                        <img src="../assets/img/brand__list__img01.jpg" alt="">
                    </div>
                    <div class="brand__list__desc">
                        <div class="brand__list__name">굽네몰</div>
                        <div class="like"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand__list -->
    </main>
    <!-- main -->

     <?php include "../include/footer.php" ?>
    <!-- // footer -->
</body>

    <script>
       const likeElements = document.querySelectorAll('.like');

        // 각 like 요소에 대해 클릭 이벤트 리스너를 추가
        likeElements.forEach(function(likeElement) {
            likeElement.addEventListener('click', function(e) {
                e.preventDefault();
                // active 클래스가 이미 추가되어 있는지 확인
                const isActive = likeElement.classList.contains('active');

                if (isActive) {
                    // 이미 active 클래스가 있는 경우 제거
                    likeElement.classList.remove('active');
                } else {
                    // active 클래스가 없는 경우 추가
                    likeElement.classList.add('active');
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function(num) {
        const sliderInner = document.querySelector('.brand__logo__sliderInner');
        const slide = document.querySelector(".logo__slider__img");
        const slider = document.querySelectorAll(".logo__slider__img img");
        const prevButton = document.querySelector('.brand__logo__slider__prev');
        const nextButton = document.querySelector('.brand__logo__slider__next');

        const slideWidth = slide.offsetWidth; // 슬라이드 너비
        console.log(slideWidth)
        const slideCount = slider.length; // 슬라이드 개수
        console.log(slideCount)
        let currentIndex = 0; // 현재 슬라이드 인덱스

        // 이전 버튼 클릭 시
        prevButton.addEventListener('click', function(e) {
            e.preventDefault();
            const previousIndex = (currentIndex + (slideCount - 1)) % 10;
            currentIndex--;
            sliderInner.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
        });

        // 다음 버튼 클릭 시
        nextButton.addEventListener('click', function(e) {
            e.preventDefault();
            const nextIndex = (currentIndex + 1) % 10;
            currentIndex++;
            sliderInner.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
        });

         // 자동 슬라이드
        setInterval(function() {
            const nextIndex = (currentIndex + 1) % 10;
            currentIndex = nextIndex;
            sliderInner.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
        }, 3000);
    });
    </script>
</body>
</html>