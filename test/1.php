<? 
    include_once $_SERVER["DOCUMENT_ROOT"]."/common.php"; 

?>
<html>
    <form action="./2.php" method="POST">
        <fieldset>
            <input type="text" placeholder="아이디" name="id"><br>
            <input type="password" placeholder="비밀번호" name="password"><br>
            <input type="text" placeholder="이메일" name="email"><br>
            <input type="number" id="phoneNum" placeholder="전화번호" name="phone" maxlength="11"><br>
            <input type="submit">
        </fieldset>
    </form>
</html>

