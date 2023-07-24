function checkBoxFind() {
  const check1 = document.getElementById("check1");
  const check2 = document.getElementById("check2");

  if (!check1.checked || !check2.checked) {
    alert("* 모든 체크 박스에 동의해야 합니다.");
    return false; // 폼 제출 중단
  }
  return true; // 폼 제출
}
