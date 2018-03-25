$(document).ready(function(){

	// remove humhub powered
	$('body > .powered').remove();

	// Append quartiersapp poweredBy and link to website to registration views
	$loginContainer = $('body.login-container .container');
	if($loginContainer[0]){
		$loginContainer.after(`
			<div class="container">
				<div class="text text-center">
					<div class="poweredBy">
						POWERED BY<br/>
						<a href="https://www.quartiersapp.de/" target="_blank">
							<span class="poweredBy__logo"><span>
						</a>
					</div>
					<a target="_blank" href="https://www.quartiersapp.de/impressum/">Impressum</a>
				</div>
			</div>
		`);
	}

});
