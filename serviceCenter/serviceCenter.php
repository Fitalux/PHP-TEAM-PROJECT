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
    <title>PHP 영양많닭 로그인</title>
    <?php include "../include/head.php" ?>
</head>
<body>
    <?php include "../include/header.php" ?>
    <!-- //header -->
    <main id="main">
        <div class="service__inner">
            <h2 class="service__title">고객센터</h2>
            <div class="service__box">
                <div class="service__search">
                    <form action="#" name="#" method="POST">
                        <input type="search" name="searchKeyword" aria-label="검색" placeholder="궁금하신 내용을 입력해주세요">
                        <button type="submit" class="search__btn"><img src="../assets/img/search.svg" alt=""></button>
                    </form>
                </div>
                <div class="service__menu">
                    <ul>
                        <li class="serv1">
                            <a href="http://zany1346.dothome.co.kr/php2/html/notice.html">
                                <img src="../assets/img/notice.svg" alt="공지">
                                <span class="txt">공지사항</span>
                            </a>
                        </li>
                        <li class="serv2">
                            <a href="../consultation/consultation.php">
                                <img src="../assets/img/customer-service.svg" alt="1:1 상담" >
                                <span class="txt">1:1 상담</span>
                            </a>
                        </li>
                        <li class="serv3">
                            <a href="../Suggestions/Suggestions.php">
                                <img src="../assets/img/chat.svg" alt="건의">
                                <span class="txt">건의하기</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="faq__inner">
                <h2  class="faq__title">자주 묻는 질문</h2>
                <span class="faq__all"><a href="faqboard.html">전체보기&gt;</a></span>
            </div>
            <div class="faq__table">
                <table>
                    <colgroup>
                        <col style="width: 5%;">
                        <col>
                        <col style="width: 10%;">
                        <col style="width: 15%;">
                        <col style="width: 7%;">
                    </colgroup>
                    <tbody>
                        <tr>
                            <td><a href="faqView.html"><strong>Q</strong> 영양성분 정보의 출처가 확실한가요?</a></td>
                        </tr>
                        <tr>
                            <td><a href="faqView.html"><strong>Q</strong> 영양성분 정보의 출처가 확실한가요?</a></td>
                        </tr>
                        <tr>
                            <td><a href="faqView.html"><strong>Q</strong> 영양성분 정보의 출처가 확실한가요?</a></td>
                        </tr>
                        <tr>
                            <td><a href="faqView.html"><strong>Q</strong> 영양성분 정보의 출처가 확실한가요?</a></td>
                        </tr>
                        <tr>
                            <td><a href="faqView.html"><strong>Q</strong> 영양성분 정보의 출처가 확실한가요?</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <!-- //Mypage -->
    <?php include "../include/footer.php" ?>
    <!-- // footer -->
</body>
</html>