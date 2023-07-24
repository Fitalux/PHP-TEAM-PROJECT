let kategorieIndex = 0;

function activekategorie (num){
    kategorieIndex = num;      //카테고리 갯수
    console.log(kategorieIndex)

    //카테고리 활성화
    let kategorieActive = document.querySelectorAll(".ranking__kategorie .ranking__kategorie__box");
    
    kategorieActive.forEach((active)=>active.classList.remove("active"));
    kategorieActive[num].classList.add("active");

}
