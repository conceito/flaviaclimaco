<?php include("config.php") ?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html lang="pt-BR" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html lang="pt-BR" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html lang="pt-BR" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="pt-BR" class="no-js"> <!--<![endif]-->
<head>
	<?php include("head_before.php") ?>
	<title>contato - <?php echo $titleSite ?></title>
	<meta name="title" content="contato - <?php echo $titleSite ?>">
	<meta name="description" content="(21) 2267-2644 Rua Visconde de Pirajá, 303, sala 1002 - Ipanema, Rio de Janeiro - RJ">

	<?php include("head_after.php") ?>
</head>
<body class="<?php body_class() ?>">

<?php include("header.php") ?>

<div id="main" class="clearfix" role="main">

	<div class="container">
		<div class="row">
			<div class="col-xs-12">

				<h1 class="page-title">Contato</h1>

				<p>Envie sua mensagem para o e-mail <a href="mailto:<?php echo $emailSite?>"><?php echo $emailSite?></a> ou pelo formulário
					abaixo:</p>

				<?php
				/*
				|===================================================================================
				|        Alertas
				|-----------------------------------------------------------------------------------
				*/
				if (!empty($error)):
					?>
					<div class="alert alert-<?php echo ($error['id'] == 0) ? 'success' : 'danger'; ?>">
						<p><?php echo $error['msg']; ?></p>
					</div>
				<?php
				endif;
				?>

				<form action="mail.php?t=contato" method="post" role="form" class="-form-horizontal">

					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="nome_field" class="control-label">Nome</label>

								<input type="text" name="nome" class="form-control" id="nome_field" value="<?php echo
								set_value
								('nome')?>" required>

							</div>
						</div>

						<div class="col-sm-6">
							<div class="form-group">
								<label for="email_field" class="control-label">E-mail</label>

								<input type="email" name="email" class="form-control" id="email_field" value="<?php
								echo set_value('email')?>"
								       required>

							</div>
						</div>


					</div>


					<div class="form-group">
						<label for="mensagem_field" class=" control-label">Mensagem</label>

						<textarea name="mensagem" id="mensagem_field" class="form-control" rows="6"
						          required><?php echo set_value('mensagem') ?></textarea>

					</div>

					<div class="form-group">

							<button type="submit" class="btn btn-primary">ENVIAR MENSAGEM</button>

					</div>
				</form>

			</div>
		</div>
	</div>

</div>
<!-- main -->

<?php include("footer.php") ?>

<script type="text/javascript">
	(function ($) {

	})(jQuery);
</script>

</body>
</html>
