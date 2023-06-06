



<!DOCTYPE html>
<html>
<head>
    <title>Quiz em PHP</title>
</head>
<body>
<?php
        $respostasCorretas = 0;




        if ($_POST['pergunta1'] == 'b') {
            $respostasCorretas++;
        }




        if ($_POST['pergunta2'] == 'a') {
            $respostasCorretas++;
        }




        if ($_POST['pergunta3'] == 'd') {
            $respostasCorretas++;
        }




        if ($_POST['pergunta4'] == 'c') {
            $respostasCorretas++;
        }




        if ($_POST['pergunta5'] == 'c') {
            $respostasCorretas++;
        }




        if ($_POST['pergunta6'] == 'b') {
            $respostasCorretas++;
        }




        if ($_POST['pergunta7'] == 'c') {
            $respostasCorretas++;
        }




        if ($_POST['pergunta8'] == 'd') {
            $respostasCorretas++;
        }




        if ($_POST['pergunta9'] == 'b') {
            $respostasCorretas++;
        }




        if ($_POST['pergunta10'] == 'c') {
            $respostasCorretas++;
        }




        echo "<p>Você acertou $respostasCorretas perguntas.</p>";
    ?>




    <h1>Quiz em PHP</h1>
    <form action="resultado.php" method="post">
        <h3>Pergunta 1: Qual o nome do personagem principal da série?</h3>
        <input type="radio" name="pergunta1" value="a">a) Yuno <br>
        <input type="radio" name="pergunta1" value="b">b) Asta <br>
        <input type="radio" name="pergunta1" value="c">c) Noelle <br>
        <input type="radio" name="pergunta1" value="c">d) Yami <br>




        <h3>Pergunta 2: Qual o nome do reino em que se passa o anime?</h3>
        <input type="radio" name="pergunta2" value="a">a) Clover <br>
        <input type="radio" name="pergunta2" value="b">b) Diamond <br>
        <input type="radio" name="pergunta2" value="c">c) Spade <br>
        <input type="radio" name="pergunta2" value="c">d) Floreta das bruxas <br>




        <h3>Pergunta 3: Qual o nome do reino de origem do Yuno?</h3>
        <input type="radio" name="pergunta3" value="a">a) Clover <br>
        <input type="radio" name="pergunta3" value="b">b) Diamond <br>
        <input type="radio" name="pergunta3" value="c">c) Heart <br>
        <input type="radio" name="pergunta3" value="c">d) Spade <br>




        <h3>Pergunta 4: Qual o nome do capitão dos touros negros ?</h3>
        <input type="radio" name="pergunta4" value="a">a) Leonardo da Vinci<br>
        <input type="radio" name="pergunta4" value="b">b) Pablo Picasso<br>
        <input type="radio" name="pergunta4" value="c">c) Vincent van Gogh<br>
        <input type="radio" name="pergunta4" value="c">d) yami<br>




        <h3>Pergunta 5: Quem pintou a Mona Lisa?</h3>
        <input type="radio" name="pergunta5" value="a">a) Leonardo da Vinci<br>
        <input type="radio" name="pergunta5" value="b">b) Pablo Picasso<br>
        <input type="radio" name="pergunta5" value="c">c) Vincent van Gogh<br>
        <input type="radio" name="pergunta5" value="c">d) yami<br>




        <h3>Pergunta 6: Quem pintou a Mona Lisa?</h3>
        <input type="radio" name="pergunta6" value="a">a) Leonardo da Vinci<br>
        <input type="radio" name="pergunta6" value="b">b) Pablo Picasso<br>
        <input type="radio" name="pergunta6" value="c">c) Vincent van Gogh<br>
        <input type="radio" name="pergunta6" value="c">d) yami<br>




        <h3>Pergunta 7: Quem pintou a Mona Lisa?</h3>
        <input type="radio" name="pergunta7" value="a">a) Leonardo da Vinci<br>
        <input type="radio" name="pergunta7" value="b">b) Pablo Picasso<br>
        <input type="radio" name="pergunta7" value="c">c) Vincent van Gogh<br>
        <input type="radio" name="pergunta7" value="c">d) yami<br>




        <h3>Pergunta 8: Quem pintou a Mona Lisa?</h3>
        <input type="radio" name="pergunta8" value="a">a) Leonardo da Vinci<br>
        <input type="radio" name="pergunta8" value="b">b) Pablo Picasso<br>
        <input type="radio" name="pergunta8" value="c">c) Vincent van Gogh<br>
        <input type="radio" name="pergunta8" value="c">d) yami<br>




        <h3>Pergunta 9: Quem pintou a Mona Lisa?</h3>
        <input type="radio" name="pergunta9" value="a">a) Leonardo da Vinci<br>
        <input type="radio" name="pergunta9" value="b">b) Pablo Picasso<br>
        <input type="radio" name="pergunta9" value="c">c) Vincent van Gogh<br>
        <input type="radio" name="pergunta9" value="c">d) yami<br>




        <h3>Pergunta 10: Quem pintou a Mona Lisa?</h3>
        <input type="radio" name="pergunta10" value="a">a) Leonardo da Vinci<br>
        <input type="radio" name="pergunta10" value="b">b) Pablo Picasso<br>
        <input type="radio" name="pergunta10" value="c">c) Vincent van Gogh<br>
        <input type="radio" name="pergunta10" value="c">d) yami<br>




        <input type="submit" value="Enviar">
    </form>
</body>
</html>

