<?php 
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$nome = $_POST["nome"];
			$status = $_POST["status"];

			$sql = "INSERT INTO negocio (nome, status) VALUES ('{$nome}', '{$status}')";

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Cadastrado com sucesso');</script>";
				print "<script>location.href='?page=listar';</script>";
			}else{
				print "<script>alert('Não foi possivel cadastrar!');</script>";
				print "<script>location.href='?page=listar';</script>";
			}
			break;

		case 'editar':
			$nome = $_POST["nome"];
			$status = $_POST["status"];

			$sql = "UPDATE negocio SET
						nome='{$nome}'
					WHERE
						id=".$_REQUEST["id"];

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Editado com sucesso');</script>";
				print "<script>location.href='?page=listar';</script>";
			}else{
				print "<script>alert('Não foi possivel editar!');</script>";
				print "<script>location.href='?page=listar';</script>";
			}

			break;
		case 'excluir':

			$sql = "DELETE FROM negocio WHERE id=".$_REQUEST["id"];

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Excluído com sucesso');</script>";
				print "<script>location.href='?page=listar';</script>";
			}else{
				print "<script>alert('Não foi possivel excluir');</script>";
				print "<script>location.href='?page=listar';</script>";
			}
		
			break;
	}
?>