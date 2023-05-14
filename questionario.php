<!doctype html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">

        
        <title>Saúde Financeira - Questionário</title>

        
        <link href="questionario.css" rel="stylesheet" />
    </head>

    <body>
        
        <div class="container">

            <div class="inicio"><h1>Questionário</h1></div>
        
            
            <form class="inner-container" action="resultado.php" method="post">

                <div class="container-final">
                    <div class="container-final-titulo">
                        <h2>Quanto você pretende alcançar:</h2>
                    </div>
                    <div class="container-final-input">
                        <label for="final"></label>
                        <input name="FINAL" id="final" type="number" min="1" required/>
                    </div>
                </div>
                
                <div class="container-meio">
                    <div class="container-inicial">
                        <div class="container-inicial-titulo"><h2>Valores para investir inicialmente:</h2></div>
                        <div class="container-inicial-p">
                            <label for="poui">Poupança:</label>
                            <input name="POUI" id="poui" type="number" min="0" value="0">
                        </div>
                        
                        <div class="container-inicial-td">
                            <label for="tdi">Tesouro Direto:</label>
                            <input name="TDI" id="tdi" type="number" min="0" value="0"/>
                        </div>

                        <div class="container-inicial-lci">
                            <label for="lcii">Letras de Crédito Imobiliário:</label>
                            <input name="LCII" id="lcii" type="number" min="0" value="0">
                        </div>
                    </div>
                    
                    <div class="container-mensal">
                        <div class="container-mensal-titulo">
                            <div><h2>Valores para investir mensalmente:</h2></div>
                        </div>
                        <div class="container-mensal-p">
                            <label for="poum">Poupança:</label>
                            <input name="POUM" id="poum" type="number" min="0" value="0">
                        </div>

                        <div class="container-mensal-td">
                            <label for="tdm">Tesouro Direto:</label>
                            <input name="TDM" id="tdm" type="number" min="0" value="0"/>
                        </div>

                        <div class="container-mensal-lci">
                            <label for="lcim">Letras de Crédito Imobiliário:</label>
                            <input name="LCIM" id="lcim" type="number" min="0" value="0">
                        </div>
                    </div>
                </div>
            
                
                <button type="submit">Enviar</button>

            </form>    

        </div>
        
    </body>

</html>
