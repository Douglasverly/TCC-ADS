
			<form action="atendentephp/inserecliente.php" method="POST">


<div id="DadosPessoais">
            <fieldset class="fieldset"><legend>Dados Pessoais</legend>

            <input class="coluna1-1" type="text" name="nome" placeholder="Nome aquí" maxlength="10">
            <input class="coluna1-2"type="text" name="sobrenome" placeholder="Sobrenome aquí" maxlength="20">
            <input class="coluna1-3"type="text" name="cpf" placeholder="CPF aquí" maxlength="11">
            <input class="coluna2-1"type="text" name="datanasc" placeholder="Data de Nascimento aquí">
            <input class="coluna2-2"type="text" name="sexo" placeholder="Sexo M / F" maxlength="12">
            <input class="coluna2-3"type="text" name="telefone" placeholder="Telefone aquí" maxlength="12">
            <input class="coluna3-1"type="email" name="email" placeholder="E-mail aquí" >
            <input class="coluna3-2"type="login" name="login" placeholder="Login aquí" >
            <input class="coluna3-3"type="password" name="senha" placeholder="senha aquí"maxlength="10">

            </fieldset>

</div>






<div id="Endereco">
                <fieldset class="fieldset"><legend>Endereço</legend>

                <input class="coluna1-1"type="text" name="cep"placeholder="CEP aquí">
                <input class="coluna1-2"type="text" name="rua"placeholder="Rua aquí">
                <input class="coluna1-3"type="text" name="numero"placeholder="N° aquí">
                <input class="coluna2-1"type="text" name="complemento"placeholder="Complemento aquí">
                <input class="coluna2-2"type="text" name="cidade"placeholder="Cidade aquí">
                <input class="coluna2-3"type="text" name="bairro"placeholder="Bairro aquí">
                <input class="coluna3-1"type="text" name="uf"placeholder="UF aquí">

                <button type="submit" class="coluna3-3" id="salvarFucionario">Salvar</button>

                </fieldset>

</div>



    </form>