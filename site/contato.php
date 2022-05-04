<?php require "includes/header.php"        ?>
<h2> Preencha o formulario para contato: </h2>
<hr>
<form>
        <div class="espaco">

                <label>Informe seu Nome:</label>
                <input type="text" name="nome" id="nome">

        </div>

        <div class="espaco">
                <label for="E-Mail">E-Mail:</label>
                <input type="email" name="email" id="email">

        </div>

        <div class="espaco">

                <label for="data">Data De Nascimento:</label>
                <input type="date" name="data" id="data">

        </div>

        <div>

                <label for="fone">Telefone:</label>
                <input type="tel" name="fone" id="fone">

        </div>

        <button type="submit">Enviar</button>
</form>

<?php require "includes/footer.php" ?>