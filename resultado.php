<!doctype html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">

       
        <title>Saúde Financeira - Resultado</title>

        
        <link href="resultado.css" rel="stylesheet" />
    </head>

    <body>
        
        <div class="container">
            <div class="inicio"><h1>Resultado</h1></div>

            <?php                              
                
                $tempo = 0;

                $poumult = 1.005;
                $tdmult = 1.007;
                $lcimult = 1.009;

                $pouinicial = $_POST['POUI'];
                $tdinicial = $_POST['TDI'];
                $lciinicial = $_POST['LCII'];

                $total = $pouinicial + $tdinicial + $lciinicial;

                
                function data ($data) {

                    echo "<div class='inner-container'><img src='image2.jpg'><p>Você vai alcançar R$" . number_format($_POST['FINAL'], 2, ',', '.') . " em " . floor($data/12) . " ano(s) e " . $data%12 . " mês(es)!</p></div>";
            }

            
            if (($_POST['POUI'] + $_POST['TDI'] + $_POST['LCII'] + $_POST['POUM'] + $_POST['TDM'] + $_POST['LCIM']) == 0) {
                    
                    echo "<div class='inner-container'><img src='image3.jpg'><p>Você não informou nenhum valor para investir...</p></div>";

                    echo "<a href='questionario.php'>Clique aqui para refazer</a>";

            } else if ($total >= $_POST['FINAL']) {
                
                    echo "<div class='inner-container'><img src='image3.jpg'><p>Você já tem o montante que deseja! Tente informar um valor que você ainda deseja alcançar...</p></div>";

                    echo "<a href='questionario.php'>Clique aqui para refazer</a>";

            } else {

                    while ($total < $_POST['FINAL']) {

                        $pouinicial = ($pouinicial * $poumult) + $_POST['POUM'];
                        $tdinicial = ($tdinicial * $tdmult) + $_POST['TDM'];
                        $lciinicial = ($lciinicial * $lcimult) + $_POST['LCIM'];
                        $total = $pouinicial + $tdinicial + $lciinicial;
                        $tempo++;

                    };

                    data($tempo);

                    echo "<a href='index.php'>Clique aqui para voltar à página inicial</a>";
            }

            ?>
        </div>
    </body>

</html>
