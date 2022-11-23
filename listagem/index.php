<form action="recebido.php" method="post">
    <fieldset>
        <legend>HTML - Exemplo de lista (dropdown)</legend>
        <select name="categoria" id="">
            <option value="0"></option>
            <optgroup label="Monitores">
                <option value="1">Primeiro item</option>
                <option value="2">Segundo item</option>
            </optgroup>
            <optgroup label="Gabinetes">
                <option value="3">Terceiro item</option>
                <option value="4">Quarto item</option>
                <option value="5">Quinto item</option>
            </optgroup>
        </select>
        <input type="submit" value="Enviar">
    </fieldset>
</form>
<hr>

<?php include_once('conexao.php'); 
    $query = "SELECT * FROM categorias";
    $smtm = $conexao->prepare($query);
    $smtm->execute();
    $tarefas  = [];
    $tarefas = $smtm->fetchAll();
    // print_r($tarefas);
    // if(count($tarefas) > 0){
    //     foreach($tarefas as $registro){ 
    //         echo $registro["id"] ;echo "aqui";
    //     }  
    // }
?>
<form action="#" method="get">
    <fieldset>
        <legend>PHP - Exemplo de lista</legend>
        <select name="categoria" id="">
        <?php if(count($tarefas) > 0){
             foreach($tarefas as $registro){ ?>
                <option value="<?= $registro["id"] ?>">
                        <?= $registro["categoria"] ?>
                </option>
        <?php }  
        }
        if(count($tarefas) > 0){
            foreach($tarefas as $registro){ 
                echo $registro["id"] ;echo "aqui";
            }  
        }
        ?>
        </select>
        <input type="submit" value="Enviar">
    </fieldset>
</form>