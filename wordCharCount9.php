<form action="wordCharCount9.php" method="post">
    <table>
        <tr>
            <td>Your Number1:</td>
            <td><input type="text" name="text1"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btnn" value="Submit"></td>
        </tr>
    </table>
</form>

<?php
$Text = '';
if (isset($_POST['btnn'])){
    $Text = $_POST['text1'];

    $word = str_word_count($Text);
    $char = strlen($Text);
    echo "Total Word: ".$word."<br>";
    echo "Total Characters: ".$char;
}
?>