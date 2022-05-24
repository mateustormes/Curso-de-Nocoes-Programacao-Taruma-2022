<?php
print_r($_POST);

// echo "Olá a todos!";
if(isset($_POST['nome'])){

}
?>
<center>
    <form action="" method="POST">
        <label>
            <b style="color:#9327B8;"> texto =</b>
            <b style="color:red;">Informe o seu Nome:</b>
        </label> 
        <input type="text" name="nome"><br>
        
        <label>
            <b>Informe o seu sobrenome:</b>
        </label>
        <input type="text" name="sobrenome"><br>

        <label>
            <b>Informe a sua idade:</b>
        </label>
        <input type="number" name="idade"><br>

        <label>
            <b>Informe a sua data de nascimento:</b>
        </label>
        <input type="date" name="nascimento"><br>

        <button type="submit">Gravar</button>
    </form>
    <!--  <img src="imagens/carro.png" width="100px" height="100px"> -->
    <img src="imagens/carro.png" width="100px" height="100px">
</center>