<?php 
    $nome = trim($_POST['name']);
    $num = trim($_POST['num']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada Dinâmica -  Cálculo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <div class="cab">
            <h1 class="typing-effect">Tabuada Dinâmica</h1>
            <p>Muito bem <?php echo "$nome, vamos calcular a tabuada de $num"?></p>
        </div>
        <div class="bd">
            <?php 
                // Verificamos se o número foi enviado para evitar erros
                if (!empty($num) && is_numeric($num)) {
                    echo "<ul>";
                    // O for começa em 1, vai até 10, e aumenta de 1 em 1 ($i++)
                    for ($i = 1; $i <= 10; $i++) {
                        $resultado = $num * $i;
                        echo "<li>$num x $i = <strong>$resultado</strong></li>";
                    }
                    echo "</ul>";
                } else {
                    echo "<p>Por favor $nome, volte e insira um número válido.</p>";
                }
            ?>
            <a href="index.html" class="back"> ⬅️Voltar</a>
        </div>
    
    </main>
    <div class="math-background">
        <span class="symbol">π</span>
        <span class="symbol">√</span>
        <span class="symbol">∑</span>
        <span class="symbol">∞</span>
        <span class="symbol">∫</span>
        <span class="symbol">Δ</span>
    </div>
</body>
</html>