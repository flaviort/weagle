<div id='contact-success' class='popup'>
	<div class='wrap'>

		<h2 class='text-bigger'>
			<b>
				Sucesso
			</b>
		</h2>

		<p class='desc'>
			Sua mensagem foi enviada com sucesso, em breve entraremos em contato.
        </p>

		<button class='blue-button magnet' onclick='Fancybox.close();'>
			<span>
				Fechar
			</span>
		</button>

	</div>
</div>

<div id='contact-error' class='popup'>
	<div class='wrap'>

		<h2 class='text-bigger'>
			<b>
				Erro
			</b>
		</h2>

		<p class='desc'>
			Ocorreu um erro ao enviar sua mensagem, por favor, tente novamente em alguns minutos. Caso o problema persista, entre em contato direto pelo email: <a href='mailto:<?php echo($email); ?>'><u><?php echo($email); ?></u></a>.
        </p>

		<button class='blue-button magnet' onclick='Fancybox.close();'>
			<span>
				Fechar
			</span>
		</button>

	</div>
</div>