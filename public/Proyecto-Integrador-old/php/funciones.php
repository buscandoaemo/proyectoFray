<?php

	function existeParametro($nombre, $arrayDonde) {
		return array_key_exists($nombre, $arrayDonde);
	}

	function existeFileSinError($nombre) {
		if (existeParametro($nombre, $_FILES) && $_FILES[$nombre]['error'] === UPLOAD_ERR_OK) {
			return true;
		}
		return false;
	}

	function valorParametro($nombre, $arrayDonde, $default = null) {
		if (existeParametro($nombre, $arrayDonde) && !empty($arrayDonde[$nombre])) {
			return $arrayDonde[$nombre];
		}

		return $default;
	}

	function infoUsuario($email) {
		$usuarios = json_decode(file_get_contents('usuarios.json'),true);
		if (is_null($usuarios)) {
			$usuarios = ['usuarios' => []];
		}

		$existe = false;
		$posicion = null;
		$usuarioEncontrado = null;
		$proximoId = 0;

		foreach ($usuarios['usuarios'] as $indice => $usuario) {
			if ($usuario['email'] == $email) {
				$existe = true;
				$posicion = $indice;
				$usuarioEncontrado = $usuario;
			}

			$proximoId = $proximoId < $usuario['id'] ? $usuario['id']: $proximoId;
		}

		return [
			'existe' => $existe,
			'posicion' => $posicion,
			'usuario' => $usuarioEncontrado,
			'proximoId' => $proximoId
		];
	}

	function guardarAvatar($nombreDelInputFile) {
		if (array_key_exists($nombreDelInputFile, $_FILES)) {
			$file = $_FILES[$nombreDelInputFile];

			$nombre = $file['name'];
			$tmp = $file['tmp_name'];
			$ext = pathinfo($nombre, PATHINFO_EXTENSION);
			$carpetaDondeQuieroGuardar = "./img/avatar/";

			if(!file_exists($carpetaDondeQuieroGuardar)) {
				$old = umask(0);
				mkdir($carpetaDondeQuieroGuardar, 0777);
				umask($old);
			}

			$date = new DateTime();
			$urlFinalConNombreYExtension = $carpetaDondeQuieroGuardar . "perfil_".$date->getTimestamp()."." . $ext;
			move_uploaded_file($tmp, $urlFinalConNombreYExtension);
			return $urlFinalConNombreYExtension;
		}
	}

	function guardarUsuario($usuario) {
		$usuarios = json_decode(file_get_contents('usuarios.json'),true);
		if (is_null($usuarios)) {
			$usuarios = ['usuarios' => []];
		}

		$usuarios['usuarios'][] = $usuario;

		file_put_contents('usuarios.json', json_encode($usuarios,JSON_PRETTY_PRINT));
	}

?>
