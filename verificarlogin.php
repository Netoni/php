<?php 
	//pegar os dados da tela
	$email = $_POST["email"];
	$senha = $_POST["senha"];

	/*echo"E-mail.: ".$email;
	echo"<br>Senha: ".$senha;*/

	//abrir a conexão com o banco de dados
	//     mysqli-connect(SERVIDOR, USUARIO, SENHA, BONCO)
	$con = mysqli_connect("localhost","root","","aulaprojeto");

	//montar a intrução de seleção para ir ao banco
	$sql = "select * from usuario where email='".$email."' and senha='".$senha."'";

	//executar a instrução
	$rs = mysqli_query($con,$sql);
		if(mysqli_num_rows($rs)==1){
			//echo "Encontrei!";

			//redirecionar para a página painel, que está dentro da pasta AMD
			echo "<script>";
			echo "location.href='painel.php'";
			echo "</script>";
		}else{
			//echo "Não encontrei.";
			$msg = base64_encode("Usuario ou Senha Inválido");
			echo "<script>";
			echo "location.href='logar.php ? m=".$msg."'";
			echo "</script>";
	}
 ?>