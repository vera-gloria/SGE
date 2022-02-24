<?php
    $nome = "Vera";
    $email = "twiiggi@gmail.com";
    $assunto = "Teste";
    $mensagem = "Teste campo texto";
    $retorno = "";
    $exibe = false;

    if($_POST)
    {
        # Filtra os dados do formulário
    	$nome = ucwords(trim($_POST['nome']));
		$email = strtolower(trim($_POST['email']));
		$assunto = trim($_POST['assunto']);
		$mensagem = trim($_POST['mensagem']);

    	# Executa a validação do formulário
        $erros = "";
        if(empty($nome)) {
        	$erros .= "O nome deve ser preenchido.<br>";
        }
        if(empty($email)) {
        	$erros .= "O e-mail deve ser preenchido.<br>";
        } else {
            $email = $_POST['email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
               $erros .= "Informe um e-mail válido.<br>";
            }
        }
        if(empty($assunto)) {
        	$erros .= "A assunto deve ser preenchido.<br>";
        }
        if(empty($mensagem)) {
        	$erros .= "A mensagem deve ser preenchida.";
        }

 		# Continua caso não houver erros na validação
        if (empty($erros)) {

        	# Inclui a classe que faz o envio do e-mail
    		require('phpmailer/PHPMailerAutoload.php');

        	# Cria uma instância da classe
        	$mail = new PHPMailer();
            # Define que a mensagem será enviada via servidor SMTP
            $mail->IsSMTP();
            # Aqui você deve informar o endereço do seu servidor SMTP
            $mail->Host = "";
            # Ativa a autenticação
            $mail->SMTPAuth = true;
            # Aqui você deve informar o e-mail que será usado na autenticação
            $mail->Username = "";
            # Aqui você deve informar a senha que será usada na autenticação
            $mail->Password = "";
            # Aqui você deve informar o número da porta (verifique as configurações do servidor SMTP informado)
            $mail->Port = 587;
            # E-mail do usuário que está enviando a mensagem 
            $mail->From = $email;
            # Nome do usuário que está enviando a mensagem
            $mail->FromName = $nome;

			# Adiciona o destinatário que receberá a mensagem (substitua pelo e-mail desejado)
            $mail->AddAddress('destinatario@dominio.com', 'Nome do Destinatário');
            # Adiciona o destinatário que receberá uma cópia da mensagem (substitua pelo e-mail desejado)
            $mail->AddCC('destinatario_copia@dominio.com', 'Nome do Destinatário'); 
            # Adiciona o destinatário oculto que receberá uma cópia da mensagem (substitua pelo e-mail desejado)
            $mail->AddBCC('destinatario_copia_oculta@dominio.com', 'Nome do Destinatário');

			# Define que o e-mail será enviado no formato HTML
            $mail->IsHTML(true);
            # Define a codificação
            $mail->CharSet = 'utf-8';

			# Define o título da mensagem
            $mail->Subject  = "Contato - ". $assunto;

            # Define o conteúdo (corpo) da mensagem
            $mail->Body .= "<b>Nome</b>: ". $nome."<br>";
            $mail->Body .= "<b>E-mail</b>: ". $email."<br>";
            $mail->Body .= "<b>Assunto</b>: ". $assunto."<br><br>";
            $mail->Body .= "<b>Mensagem</b>:<br> ". nl2br(htmlspecialchars($mensagem, ENT_QUOTES));

			# Envia o e-mail
            $enviado = $mail->Send();

			# Limpa os recipientes
            $mail->ClearAllRecipients();
            $mail->ClearAttachments();

			# Grava a mensagem que será exibida ao usuário após o envio
            if ($enviado) {
                $retorno = "E-mail enviado com sucesso!";
            } else {
                $retorno = "Não foi possível enviar o e-mail. Erro: " . $mail->ErrorInfo;
            }
        } else {
        	$retorno = $erros;
        }
        $exibe = true; 
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Formulário de Contato com PHPMailer</title>
		<style type="text/css">
			* {
				font-family: verdana, tahoma, sans-serif;
				font-size: 12px;
			}
			body {
				padding: 20px;
			}
			fieldset {
				margin: 0 auto;
				padding: 10px;
				border: 1px solid #ddd;
				border-radius: 5px;
			}
			#painel {
				margin: 0 auto;
				padding: 10px;
				margin-bottom: 20px;
				border: 1px solid #ddd;
				border-radius: 5px;
			}
		    #contato input, #contato textarea {
		        padding: 10px;
		        width: 300px;
		        border: 1px solid #ddd;
		    }
		    #contato select {
		    	padding: 10px;
		        width: 150px;
		        border: 1px solid #ddd;
		    }
		    #contato input[type=submit] {
		    	cursor: pointer;de3a31
		    }
		    #contato input[type=submit]:hover {
		    	background-color: #de3a31;
		    	color: white;
		    }
		</style>
	</head>
	<body>
        <?php if ($exibe) : ?>
		    <div id="painel">
			    <?php
				    if (!empty($retorno)) {
					    echo $retorno;
				    }
			    ?>
		    </div>
        <?php endif; ?>
		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" id="contato">
			<fieldset>
				<legend>Formulário de Contato com PHPMailer</legend><br>

				<label>Nome:</label><br>
				<input id="nome" name="nome" type="text" placeholder="Digite seu nome" value="<?= $nome; ?>" /><br><br>

				<label>E-mail:</label><br>
				<input id="email" name="email" type="text" placeholder="Digite seu e-mail" value="<?= $email; ?>" /><br><br>

				<label for="assunto">Escolha o Assunto:</label><br>
		        <select id="assunto" name="assunto">
		            <option value="Dúvida" <?= $assunto == 'Dúvida' ? 'selected' : ''; ?> >Dúvida</option>
		            <option value="Sugestão" <?= $assunto == 'Sugestão' ? 'selected' : ''; ?> >Sugestão</option>
		            <option value="Outro" <?= $assunto == 'Outro' ? 'selected' : ''; ?> >Outro</option>
		        </select><br><br>

				<label>Mensagem:</label><br>
				<textarea id="mensagem" name="mensagem" rows="10""><?= $mensagem; ?></textarea><br><br>

				<input name="submit" type="submit" value="Enviar" style="width: auto;" />
			</fieldset>
		</form>
	</body>
</html>