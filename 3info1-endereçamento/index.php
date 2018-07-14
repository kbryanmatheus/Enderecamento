<!DOCTYPE html>
<html lang="en">
<style>

    <?php  require_once "CSS.css"?>

</style>
<head>
    <meta charset="UTF-8">
    <title>Endereçamento</title>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">

        $(document).ready(function() {
            $("#field").keyup(function() {
                $("#field").val(this.value.match(/[0-9]*/));
            });

        });

    </script>
</head>
<body>

    <h1>Digite o ip da Classe C para descobrir:</h1>
<div id="div1">
        <input id="field" type="text" maxlength="3" pattern="([0-9]{3})"/>
    .
        <input id="field" type="text" maxlength="3" pattern="([0-9]{3})"/>
    .
        <input id="field" type="text" maxlength="3" pattern="([0-9]{3})"/>
    .
        <input id="field" type="text" maxlength="3" pattern="([0-9]{3})"/>
    /
        <input id="field" type="text" maxlength="2" pattern="([0-9]{2})"/>
        <input type="submit" id="enviar">
</div>

</body>
</html>