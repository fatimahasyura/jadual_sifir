<!DOCTYPE html>
<html>

<body>
    <center>
        <h3>JADUAL SIFIR</h3>
        <form method="POST">
            Masukkan nombor:
            <input type="number" name="number">
        </form>
    </center>
</body>

</html>

<?php
if ($_POST) {
    $num = $_POST["number"];
    echo nl2br("<p style='text-align: center;'> Jadual Pendaraban bagi $num: </p>");

    for ($i = 1; $i <= 12; $i++) {
        echo ("<p style='text-align: center;'> $i". " X " . "$num" . " = ". $i * $num . "</p>");
    }
}
?>