// 현재 페이지의 URL을 가져와서 해당하는 메뉴에 active 클래스를 추가하는 함수
function setActiveMenu() {
    var currentPage = location.pathname.split('/').slice(-1)[0]; // 현재 페이지의 파일명 가져오기
    // 각 메뉴의 id를 기반으로 active 클래스 추가
    if (currentPage === 'newproduct.php') {
        document.getElementById('menu1').classList.add('active');
    } else if (currentPage === 'ranking.php') {
        document.getElementById('menu2').classList.add('active');
    } else if (currentPage === 'MyPick.php') {
        document.getElementById('menu3').classList.add('active');
    } else if (currentPage === 'brand.php') {
        document.getElementById('menu4').classList.add('active');
    } else if (currentPage === 'community.php') {
        document.getElementById('menu5').classList.add('active');
    }
}
// 페이지 로드 시 setActiveMenu 함수 호출
window.onload = function() {
    setActiveMenu();
};