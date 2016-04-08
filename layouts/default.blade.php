<!DOCTYPE html>
<html>
	<head>
		{{ Theme::partial('seostuff') }} 
		{{ Theme::partial('defaultcss') }} 
		{{ Theme::asset()->styles() }} 
		<noscript>
			{{generate_theme_css('shibotik/assets/css/style.css')}} 
		</noscript>
	</head>
	<body>
		{{ Theme::partial('header') }} 
		<section id="main-content">
			{{ Theme::place('content') }} 
		</section>
		{{ Theme::partial('footer') }} 
		{{ Theme::partial('defaultjs') }} 
		{{ Theme::partial('analytic') }} 
	</body>
</html>