<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title> Exemplo soma de dois números</title>
    </head>
    <body>
    <h2>Formulário para soma de dois números</h2>
        <form id="form1" name="form1" method="post" action="somadedoisnumeros.php">
            <p>
            <label for="frase">Informe o primeiro número:</label>
            <input name="n1" type="int" id="n1" size="5" maxlength="5" />
            </p>
            <p>
            <label for="frase">Informe o segundo número:</label>
            <input name="n2" type="int" id="n2" size="5" maxlength="5" />
            </p>
            <p>
            <input type="submit" name="submit" id="submit" value="Calcular" />
            <input type="reset" name="reset" id="reset" value="Limpar" />
            </p>
        </form>
    </body>
</html>