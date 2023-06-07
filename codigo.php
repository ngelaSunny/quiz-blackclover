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
	<div class="container-fluid">	
    <h1> Seja bem-vindo(a) ao melhor quiz sobre Black Clover </h1>
    <form action="resultado.php" method="post">
<div class="i1">
	<img src="https://i.pinimg.com/564x/27/dd/a6/27dda6bb9b3f27ebf2ee9bd5dd9ac6cd.jpg">
        <h3>Qual o nome do personagem principal da obra?</h3>
        <input type="radio" name="pergunta1" value="a">a) Yuno<br>
        <input type="radio" name="pergunta1" value="b">b) Asta<br>
        <input type="radio" name="pergunta1" value="c">c) Noelle<br>
        <input type="radio" name="pergunta1" value="d">d) Yami<br>
</div>




<div class="i2">
	<img src="https://i.pinimg.com/564x/b9/56/f0/b956f05b3ea65c2cc95790461ddccaea.jpg">
        <h3>Qual o nome do reino em que se passa o anime?</h3>
        <input type="radio" name="pergunta2" value="a">a) Clover<br>
        <input type="radio" name="pergunta2" value="b">b) Diamond<br>
        <input type="radio" name="pergunta2" value="c">c) Spade<br>
        <input type="radio" name="pergunta2" value="d">d) Floreta das bruxas<br>
</div>




<div class="i3">
	<img src="https://i.pinimg.com/564x/13/40/96/134096a449f348254176636bdbf72997.jpg">
        <h3>Qual o nome do reino de origem do Yuno?</h3>
        <input type="radio" name="pergunta3" value="a">a) Clover<br>
        <input type="radio" name="pergunta3" value="b">b) Diamond<br>
        <input type="radio" name="pergunta3" value="c">c) Heart<br>
        <input type="radio" name="pergunta3" value="d">d) Spade<br>
</div>




<div class="i4">
	<img src="https://i.pinimg.com/564x/f9/9c/3c/f99c3cba2aecbb026c6e32f917d48eff.jpg">
        <h3>Qual o nome do capitão dos touros negros?</h3>
        <input type="radio" name="pergunta4" value="a">a) Charlotte Roselei<br>
        <input type="radio" name="pergunta4" value="b">b) Nozel Silva <br>
        <input type="radio" name="pergunta4" value="c">c) Yami Sukehiro<br>
        <input type="radio" name="pergunta4" value="d">d) Jack the Ripper<br>
</div>


<div class="i5">
	<img src="https://i.pinimg.com/564x/45/9e/49/459e49f73746f05f46ab7f86eab533aa.jpg">
        <h3>Qual o tipo de magia usada por Asta ?</h3>
        <input type="radio" name="pergunta5" value="a">a) Magia da escuridão<br>
        <input type="radio" name="pergunta5" value="b">b) Magia de sangue<br>
        <input type="radio" name="pergunta5" value="c">c) Anti-magia<br>
        <input type="radio" name="pergunta5" value="d">d) Magia de fogo<br>
</div>




<div class="i6">
	<img src="https://i.pinimg.com/564x/ad/e9/be/ade9be8cb452d698e01d4302174948e2.jpg">
        <h3>Qual o nome do mago mais poderoso do reino Clover chamado de “Rei mago” ?</h3>
        <input type="radio" name="pergunta6" value="a">a) Irmã Lily<br>
        <input type="radio" name="pergunta6" value="b">b) Julius NovaChrono<br>
        <input type="radio" name="pergunta6" value="c">c) Jack the Ripper<br>
        <input type="radio" name="pergunta6" value="d">d) Nozel Silva<br>
</div>




<div class="i7">
	<img src="">
        <h3>Que tipo de espírito elemental yuno possui?</h3>
        <input type="radio" name="pergunta7" value="a">a) Espírito de fogo<br>
        <input type="radio" name="pergunta7" value="b">b) Espírito de água<br>
        <input type="radio" name="pergunta7" value="c">c) Espírito de vento<br>
        <input type="radio" name="pergunta7" value="d">d) Espírito de terra<br>
</div>




<div class="i8">
	<img src="https://www.animeunited.com.br/oomtumtu/2019/12/Dx4y5peU0AA-Sio-1024x575.jpg">
        <h3>Qual o número de folhas do grimório de Asta?</h3>
        <input type="radio" name="pergunta8" value="a">a) 1<br>
        <input type="radio" name="pergunta8" value="b">b) 3<br>
        <input type="radio" name="pergunta8" value="c">c) 2<br>
        <input type="radio" name="pergunta8" value="d">d) 5<br>
</div>




<div class="i9">
	<img src="https://i.pinimg.com/564x/ae/66/ed/ae66edf40d00f8f464829164299135b0.jpg">
        <h3>Quais os membros da tríade que ameaça Clover?</h3>
        <input type="radio" name="pergunta9" value="a">a) Asta, Yuno e Fuegoleon<br>
        <input type="radio" name="pergunta9" value="b">b) Vanica, Zenon e Dante<br>
        <input type="radio" name="pergunta9" value="c">c) Yami, Julius e Jack<br>
        <input type="radio" name="pergunta9" value="d">d) Nozel, Charlotte e Yami<br>


</div>


<div class="i10">
	<img src="https://i.pinimg.com/564x/39/2a/33/392a33888001640d77a3c8322a40f904.jpg">
        <h3>Qual o nome do demônio que habita em Asta?</h3>
        <input type="radio" name="pergunta10" value="a">a) Lucifero<br>
        <input type="radio" name="pergunta10" value="b">b) Megicula<br>
        <input type="radio" name="pergunta10" value="c">c) Liebe<br>
        <input type="radio" name="pergunta10" value="d">d) Zagred<br>
        <br/>
</div>
        <input type="submit" value="Enviar">
    </form>
</div>
</body>
</html>
