<form action="simple.php" method="post">
    <table>
        <tr>
            <td>Your Number1:</td>
            <td><input type="number" name="num1"></td>
        </tr>
        <tr>
            <td>Your Number2:</td>
            <td><input type="number" name="num2"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btnn" value="Submit"></td>
        </tr>
    </table>

</form>


<?php

if (isset($_POST['btnn'])){
    $a = $_POST['num1'];
    $b = $_POST['num2'];

    echo "a = ".(($a+$b)-$a)."<br>";
    echo "b = ".(($a+$b)-$b);


}




?>




