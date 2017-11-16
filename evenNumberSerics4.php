<form action="evenNumberSerics4.php" method="post">
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
            <td><input type="submit" name="even" value="Submit"></td>
        </tr>
    </table>

</form>


<?php
$Num1 = '';
$Num2 = '';

if(isset($_POST['even'])){
    $Num1 = $_POST['num1'];
    $Num2 = $_POST['num2'];

    for ($i=$Num1;$i<=$Num2; $i++){
        if($i%2==0){
            echo "Even Number".$i."<br>";
        }
    }
}

?>