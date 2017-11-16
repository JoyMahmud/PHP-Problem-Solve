<form action="primeNumber2.php" method="post">
    <table>
        <tr>
            <td>Your Number:</td>
            <td><input type="number" name="num1"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>

</form>


<?php
    $num = '';
    if (isset($_POST['btn']))
        $num = $_POST['num1'];

    for ($i=2;$i<=$num;$i++){

        for ($j=2;$j<$i;$j++){

            if($i%$j == 0){
                break;
            }
        }

        if ($i==$j){
            echo "prime number: ".$i."<br>";
        }
    }
?>