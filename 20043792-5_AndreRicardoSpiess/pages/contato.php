<html:5>
<body>
    <?php
        include '.././function/topo.php';
    ?>
    <main>
        <article>
           <div class="container">
            <form action=".././function/enviar_email.php">
                    <label>Nome Completo</label>
                    <input type="text" id="nome" name="nome" maxlength="50" autofocus required>
                    <label>Assunto</label>
                    <select id="setor" name="setor">
                        <option value="com">Comercial</option>
                        <option value="fin">Financeiro</option>
                        <option value="adm">Administrativo</option>
                        <option value="rh">Recursos Humanos</option>
                        <option value="sac">S.A.C.</option>
                    </select>
                    <label>Telefone</label>
                    <input type="tel" id="telefone" name="telefone" placeholder="Fone (00)00000-0000" pattern="\([0-9]{2}\)[0-9]{5}-[0-9]{4}" required>
                    <label>e-mail</label>
                    <input type=”email" id="email” name="email" require></input>
                    <label>Mensagem</label>
                    <textarea id="msg" name="msg" maxlength="500" cols="50" rows="5" require></textarea>
                    <input type="submit" value="Enviar" class="enviar">
                </form>  
            </div>
            <div>
                    
            </div>
        </article>    
    </main>
</body>
<?php
include '.././function/rodape.php';
?>
</html:5>