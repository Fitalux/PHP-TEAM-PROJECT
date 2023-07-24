<div id="modalwrap">
    <div id="modal">
        <div class="img1">
            <img src="../assets/img/Ximg.svg" alt="닫기">
        </div>
        <div class="img2">
            <img src="../assets/img/logo.svg" alt="로고">
        </div>
        <div class="Termsup__form">
            <form action="Termsup.php" name="Termsup" method="post">
                <fieldset>
                    <legend class="blind">회원가입 영역</legend>
                    <div class="item">
                        <div>
                            <label for="youEmail" class="required">이메일</label><br>
                            <input type="text" id="youEmail" class="inputStyle" name="youEmail" placeholder="이메일을 적어주세요!" required>
                        </div>
                        <div>
                            <label for="youID">아이디</label><br>
                            <input type="text" id="youID" class="inputStyle" name="youID" placeholder="아이디를 적어주세요!" required>
                        </div>
                        <div>
                            <label for="youPass" class="required">비밀번호</label><br>
                            <input type="password" id="youPass" class="inputStyle"  name="youPass" placeholder="비밀번호를 적어주세요!" required>
                        </div>
                        <div>
                            <label for="youPassC" class="required">비밀번호 확인</label><br>
                            <input type="password" id="youPassC" class="inputStyle"  name="youPassC" placeholder="다시 비밀번호를 적어주세요!" required>
                        </div>
                        <div>
                            <label for="youName" class="required">이름</label><br>
                            <input type="text" id="youName" class="inputStyle" name="youName" placeholder="이름을 적어주세요!" required>
                        </div>
                        <div>
                            <label for="youPhone" class="required">연락처</label><br>
                            <input type="text" id="youPhone" class="inputStyle"  name="youPhone" placeholder="연락처를 적어주세요!" required>
                        </div>
                    </div>
                    <button type="submit" class="button">가입하기</button>
                </fieldset>
            </form>
        </div>
    </div>
</div>