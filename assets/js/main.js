<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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