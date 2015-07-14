<?php
require_once('logic.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sudoku Solver 0.1</title>
    <link rel="stylesheet" href="css/css.css"/>

</head>
<body>
    <div class="container">
        <form method="POST">
            <table>
                <tr>
                    <td><input maxlength="1" type="text" name="1" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(1) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="2" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(2) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="3" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(3) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="4" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(4) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="5" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(5) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="6" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(6) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="7" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(7) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="8" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(8) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="9" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(9) : ""; ?>"></td>
                </tr>
                <tr>
                    <td><input maxlength="1" type="text" name="10" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(10) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="11" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(11) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="12" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(12) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="13" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(13) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="14" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(14) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="15" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(15) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="16" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(16) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="17" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(17) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="18" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(18) : ""; ?>"></td>
                </tr>
                <tr>
                    <td><input maxlength="1" type="text" name="19" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(19) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="20" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(20) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="21" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(21) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="22" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(22) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="23" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(23) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="24" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(24) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="25" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(25) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="26" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(26) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="27" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(27) : ""; ?>"></td>
                </tr>
                <tr>
                    <td><input maxlength="1" type="text" name="28" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(28) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="29" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(29) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="30" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(30) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="31" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(31) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="32" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(32) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="33" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(33) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="34" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(34) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="35" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(35) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="36" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(36) : ""; ?>"></td>
                </tr>
                <tr>
                    <td><input maxlength="1" type="text" name="37" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(37) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="38" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(38) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="39" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(39) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="40" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(40) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="41" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(41) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="42" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(42) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="43" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(43) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="44" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(44) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="45" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(45) : ""; ?>"></td>
                </tr>
                <tr>
                    <td><input maxlength="1" type="text" name="46" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(46) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="47" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(47) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="48" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(48) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="49" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(49) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="50" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(50) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="51" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(51) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="52" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(52) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="53" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(53) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="54" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(54) : ""; ?>"></td>
                </tr>
                <tr>
                    <td><input maxlength="1" type="text" name="55" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(55) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="56" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(56) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="57" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(57) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="58" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(58) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="59" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(59) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="60" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(60) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="61" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(61) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="62" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(62) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="63" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(63) : ""; ?>"></td>
                </tr>
                <tr>
                    <td><input maxlength="1" type="text" name="64" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(64) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="65" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(65) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="66" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(66) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="67" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(67) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="68" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(68) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="69" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(69) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="70" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(70) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="71" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(71) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="72" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(72) : ""; ?>"></td>
                </tr>
                <tr>
                    <td><input maxlength="1" type="text" name="73" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(73) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="74" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(74) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="75" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(75) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="76" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(76) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="77" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(77) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="78" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(78) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="79" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(79) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="80" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(80) : ""; ?>"></td>
                    <td><input maxlength="1" type="text" name="81" value="<?= $_SERVER['REQUEST_METHOD']=="POST" ? $solver->sqGet(81) : ""; ?>"></td>
                </tr>
            </table>
            <input type="submit"/>
        </form>
    </div>
</body>
</html>