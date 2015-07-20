<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>
<?php include("navigation.php"); ?>

<main>
	<div class="hero">
		<div class="container vertical-align">
			<h1>Who in the World<br>is John Zaritsky?</h1>
		</div> <!-- /.container -->
		<div class="container">
			<a href="#below">
				<svg class="arrow-down" viewBox="0 0 350 350">
					<path d="M294.664 346.402H55.346c-28.532 0-51.744-23.21-51.744-51.744V55.34c0-28.53 23.212-51.743 51.744-51.743h239.318c28.53 0 51.734 23.212 51.734 51.743v239.318c0 28.533-23.204 51.744-51.734 51.744zM55.346 29.47c-14.266 0-25.872 11.605-25.872 25.87v239.318c0 14.266 11.606 25.878 25.872 25.878h239.318c14.267 0 25.868-11.612 25.868-25.878V55.34c0-14.265-11.603-25.87-25.868-25.87H55.346z"/><path d="M175.44 217.067l-97.977-84.134h195.944"/>
				</svg>
			</a>
		</div>
	</div>

	<section class="project-details overlay" id="below">
		<div class="container">
			<p>John Zaritsky is an acclaimed Academy Award winning documentary filmmaker, the film subject of The Zaritsky Project.</p>
			<br>
			<p>Never heard of John Zaritsky?</p>
			<br>
			<p>He's bigger than you think! Explore The <a href="#">Six Degrees of Zaritsky</a>, and discover the steps of separation from the personalities you know and love.</p>
			<button>Feature-Length Film Coming Soon To 
				<svg class="doc-logo" viewBox="0 0 403.5 350">
					<path d="M182.287 186.71c-3.104-4.175-7.102-7.58-11.965-10.233-4.91-2.625-10.59-3.998-17.096-3.998-9.487 0-17.916 1.968-25.332 5.877-7.398 3.908-13.693 8.98-18.87 15.244-5.162 6.296-9.175 13.548-11.98 21.75-2.79 8.235-4.22 16.5-4.22 24.855 0 2.746.148 5.37.416 7.908h90.326c1.373-2.746 2.568-5.61 3.613-8.504 2.786-7.968 4.204-15.546 4.204-22.796 0-5.28-.73-10.592-2.21-15.873-1.486-5.31-3.77-10.024-6.887-14.23zM79.532 4.953v119.522c13.813-6.416 29.79-9.637 47.93-9.637 20.424 0 37.445 3.79 51.08 11.308 13.59 7.488 23.353 17.124 29.29 28.792h.895l27.955-130.592h78.588l-49.525 223.77H322.7V4.95H79.532zM44.863 280.783l-9.19 42.068c-.267 1.43-.52 2.835-.76 4.177-.255 1.344-.403 2.447-.492 3.342h-8.264l.85-5.015h-.12c-1.342 1.848-2.864 3.28-4.595 4.295-1.758 1.016-3.922 1.494-6.518 1.494-2.042 0-3.79-.36-5.28-1.137-1.464-.744-2.672-1.818-3.626-3.13-.94-1.343-1.657-2.864-2.118-4.536-.448-1.7-.688-3.46-.688-5.308 0-2.568.36-5.104 1.074-7.668.716-2.537 1.747-4.865 3.148-6.893 1.43-2.028 3.19-3.698 5.34-4.98 2.12-1.284 4.655-1.91 7.562-1.91 2.208 0 4.147.388 5.848 1.224 1.7.777 3.267 1.998 4.67 3.58l4.298-19.6h8.863zm-22.213 21.66c-1.596 0-2.968.477-4.117 1.434-1.178.982-2.162 2.146-2.924 3.55-.792 1.43-1.343 2.923-1.717 4.503-.402 1.582-.552 3.014-.552 4.328 0 .865.06 1.76.21 2.715.165.924.433 1.79.82 2.623.404.777.955 1.432 1.67 1.912.702.504 1.598.773 2.702.773 1.625 0 3.087-.446 4.37-1.28 1.284-.867 2.358-1.97 3.238-3.283.894-1.314 1.55-2.805 2.014-4.418.462-1.64.7-3.222.7-4.83 0-.956-.12-1.91-.358-2.896-.267-.955-.642-1.822-1.178-2.598-.52-.773-1.208-1.402-2-1.848-.82-.446-1.774-.685-2.878-.685zM61.11 295.55c2.295 0 4.398.36 6.323 1.02 1.925.685 3.566 1.698 4.937 2.95 1.343 1.28 2.433 2.834 3.208 4.684.776 1.85 1.135 3.94 1.135 6.295 0 2.983-.478 5.76-1.463 8.294-.984 2.506-2.402 4.715-4.178 6.535-1.79 1.817-3.923 3.22-6.414 4.265-2.49 1.045-5.236 1.553-8.235 1.553-4.862 0-8.638-1.373-11.382-4.148-2.713-2.773-4.087-6.564-4.087-11.338 0-2.834.507-5.46 1.536-7.965 1.044-2.447 2.476-4.566 4.28-6.357s3.94-3.223 6.37-4.236c2.464-1.016 5.105-1.555 7.97-1.555zm-3.955 28.73c1.73 0 3.207-.444 4.49-1.31 1.282-.867 2.356-2.03 3.207-3.37.88-1.376 1.507-2.866 1.954-4.446.434-1.643.67-3.164.67-4.598 0-1.104-.133-2.176-.327-3.13-.224-.985-.598-1.85-1.09-2.597-.537-.687-1.208-1.313-2.058-1.73-.865-.42-1.954-.658-3.267-.658-1.776 0-3.312.42-4.625 1.28-1.282.868-2.373 2-3.268 3.343-.865 1.344-1.52 2.867-1.984 4.477-.434 1.64-.656 3.223-.656 4.773 0 1.135.135 2.178.36 3.133.237.984.625 1.85 1.192 2.537.566.688 1.27 1.252 2.164 1.67.865.42 1.954.626 3.237.626zM105.936 304.145c-1.76-1.105-3.908-1.703-6.458-1.703-1.774 0-3.356.36-4.715 1.105-1.358.777-2.536 1.758-3.46 2.982-.955 1.224-1.67 2.626-2.148 4.177-.508 1.584-.732 3.164-.732 4.713 0 1.105.105 2.21.33 3.254.222 1.043.61 1.998 1.148 2.863.552.805 1.298 1.49 2.282 2 .97.477 2.224.742 3.774.742 1.088 0 2.28-.12 3.566-.417 1.298-.297 2.507-.717 3.655-1.283l-1 7.014c-1.372.656-2.79 1.074-4.207 1.252-1.417.21-2.88.3-4.326.3-2.208 0-4.192-.358-5.997-1.013-1.774-.72-3.312-1.734-4.55-2.986-1.268-1.283-2.222-2.834-2.907-4.656-.67-1.786-1.03-3.786-1.03-5.993 0-2.953.478-5.7 1.416-8.268.955-2.534 2.298-4.774 4.043-6.653 1.746-1.908 3.863-3.37 6.355-4.416 2.476-1.073 5.25-1.61 8.293-1.61 1.67 0 3.268.152 4.79.39 1.507.27 2.878.6 4.07.954l-2.192 7.25zM137.546 325.477c-.224 1.014-.403 1.97-.537 2.775-.12.896-.255 1.58-.33 2.12h-8.666l.596-3.315h-.133c-1.223 1.135-2.655 2.12-4.296 2.924-1.625.776-3.416 1.167-5.354 1.167-3.342 0-6.04-.955-8.056-2.895-2.043-1.91-3.043-4.596-3.043-7.967 0-1.283.12-2.596.403-3.88.255-1.31.493-2.476.73-3.548l3.552-16.5h8.875l-3.296 16.05c-.237 1.105-.447 2.298-.67 3.462-.24 1.163-.344 2.386-.344 3.64 0 1.432.448 2.594 1.343 3.46.91.866 2.087 1.312 3.49 1.312 1.536 0 2.85-.326 3.922-.982 1.09-.686 1.984-1.52 2.715-2.537.73-1.043 1.313-2.207 1.79-3.46.462-1.284.822-2.567 1.09-3.85l3.624-17.097h8.877l-6.28 29.12zM150.497 300.115c.12-.656.253-1.312.372-2 .148-.623.267-1.223.342-1.758h8.265l-.79 4.535h.132c1.193-1.762 2.7-3.07 4.52-3.967 1.835-.928 3.805-1.375 5.922-1.375 1.015 0 2.03.152 3.013.45.984.27 1.88.688 2.67 1.253.804.568 1.462 1.225 1.998 2.03.523.804.867 1.76.984 2.743h.12c.58-1.104 1.284-2.06 2.165-2.86.863-.81 1.818-1.497 2.88-2.003 1.042-.562 2.177-.953 3.354-1.22 1.193-.24 2.373-.36 3.594-.36 1.27 0 2.463.21 3.61.69 1.165.503 2.15 1.16 3.015 2.026.88.806 1.553 1.788 2.057 2.952.492 1.13.748 2.357.748 3.64 0 1.52-.15 3.103-.494 4.683-.328 1.67-.656 3.133-1.014 4.535l-3.58 16.262h-8.86l3.565-16.59c.223-1.014.477-2.21.732-3.61.25-1.403.4-2.626.4-3.64 0-1.283-.4-2.268-1.222-3.014-.822-.717-1.805-1.074-2.94-1.074-1.536 0-2.817.387-3.817 1.193-.983.775-1.804 1.76-2.462 2.955-.67 1.19-1.178 2.475-1.564 3.848-.36 1.373-.688 2.625-.94 3.762l-3.52 16.17h-8.848l3.55-16.59c.238-1.014.462-2.21.745-3.61.255-1.403.39-2.626.39-3.64 0-1.283-.403-2.268-1.208-3.014-.82-.717-1.805-1.074-2.94-1.074-1.535 0-2.744.387-3.743 1.193-1 .775-1.837 1.79-2.493 2.955-.67 1.19-1.194 2.475-1.597 3.848-.388 1.373-.73 2.625-1 3.762l-3.49 16.17h-8.86l6.237-30.257zM210.578 316.11c0 3.16.807 5.4 2.447 6.68 1.64 1.224 3.965 1.882 7.01 1.882 1.85 0 3.64-.21 5.342-.656 1.732-.447 3.43-1.043 5.102-1.762l-1.134 7.014c-1.7.506-3.46.984-5.31 1.342-1.82.36-3.67.54-5.522.54-2.475 0-4.713-.302-6.71-.866-2-.598-3.73-1.523-5.16-2.748-1.435-1.252-2.538-2.77-3.34-4.654-.778-1.88-1.196-4.086-1.196-6.562 0-2.654.477-5.22 1.463-7.697.985-2.508 2.33-4.715 4.026-6.654 1.703-1.94 3.762-3.49 6.148-4.655 2.387-1.162 4.982-1.762 7.727-1.762 2.122 0 4.03.27 5.73.81 1.73.534 3.163 1.31 4.415 2.415 1.225 1.074 2.18 2.418 2.834 4.057.655 1.61.983 3.52.983 5.67 0 1.314-.06 2.566-.21 3.79-.177 1.253-.388 2.534-.626 3.817h-24.02v-.003zm16.2-6.09c.12-.805.21-1.55.21-2.324 0-1.822-.508-3.252-1.432-4.207-.957-.956-2.357-1.435-4.21-1.435-2.743 0-4.8.746-6.204 2.238-1.402 1.492-2.537 3.37-3.37 5.727h15.005zM242.77 301.25c.24-1.016.39-1.97.507-2.773.148-.895.268-1.584.357-2.12h8.654l-.598 3.312h.12c1.253-1.134 2.687-2.12 4.325-2.925 1.61-.805 3.404-1.164 5.342-1.164 3.344 0 6.057.958 8.086 2.897 1.998 1.94 3.043 4.592 3.043 7.965 0 1.283-.148 2.598-.418 3.88-.24 1.31-.508 2.476-.717 3.55l-3.58 16.5h-8.858l3.312-16.023c.207-1.136.445-2.327.654-3.49.24-1.167.33-2.358.33-3.673 0-1.4-.45-2.504-1.344-3.398-.926-.897-2.06-1.345-3.46-1.345-1.554 0-2.866.328-3.94.984-1.102.687-1.998 1.52-2.713 2.534-.743 1.047-1.343 2.21-1.788 3.49-.48 1.254-.838 2.537-1.105 3.818l-3.64 17.098h-8.862l6.296-29.12zM277.143 296.357h6.414l1.518-7.012 9.52-3.102-2.18 10.113h7.907l-1.37 6.473h-7.94l-3.22 14.858c-.12.387-.18.896-.27 1.432-.09.598-.118 1.193-.118 1.85 0 1.016.3 1.848.924 2.447.598.566 1.434.863 2.447.863.775 0 1.553-.06 2.3-.207.743-.18 1.4-.39 1.966-.6l-1.49 6.895c-.776.146-1.552.355-2.386.535-.838.15-1.643.24-2.357.24-1.553 0-2.895-.152-4.178-.447-1.224-.328-2.298-.777-3.224-1.523-.893-.715-1.61-1.643-2.12-2.744-.505-1.194-.772-2.567-.772-4.18 0-1.343.12-2.653.357-3.937.21-1.283.478-2.627.776-3.998l2.537-11.49h-6.445l1.405-6.468zM319.328 325.148h-.15c-1.52 1.94-3.133 3.4-4.803 4.445-1.643 1.045-3.7 1.553-6.176 1.553-3.075 0-5.61-.775-7.55-2.447-1.998-1.673-2.953-4.09-2.953-7.222 0-2.834.688-5.072 2.06-6.652 1.433-1.61 3.134-2.834 5.222-3.64 2.118-.804 4.384-1.313 6.83-1.52 2.446-.178 4.716-.297 6.774-.297h3.1c.15-.48.24-.987.24-1.464.03-.48.03-.957.03-1.463 0-.807-.21-1.52-.597-2.09-.45-.564-.984-1.014-1.64-1.37-.66-.358-1.374-.6-2.18-.776-.808-.09-1.612-.15-2.388-.15-2 0-3.88.21-5.76.688-1.82.45-3.64 1.104-5.43 1.94l1.253-7.07c1.908-.657 3.818-1.167 5.76-1.524 1.877-.356 3.848-.505 5.818-.505 1.73 0 3.4.15 4.983.506 1.58.358 2.98.958 4.205 1.763 1.193.805 2.178 1.88 2.922 3.223.746 1.342 1.137 3.012 1.137 4.98 0 .777-.092 1.73-.27 2.953-.178 1.194-.387 2.538-.688 3.938-.24 1.46-.536 2.984-.864 4.566-.27 1.61-.6 3.193-.896 4.742-.328 1.52-.598 2.984-.863 4.418-.27 1.4-.48 2.652-.598 3.7h-7.46l.928-5.226zm-13.187-3.996c0 1.162.478 2.057 1.405 2.652.924.598 1.967.867 3.102.867 1.64 0 3.014-.24 4.146-.776 1.105-.537 2.06-1.252 2.834-2.176.777-.957 1.375-2 1.852-3.195.476-1.22.862-2.506 1.22-3.846h-3.13c-1.02 0-2.21.057-3.583.146-1.34.148-2.596.447-3.727.924-1.166.45-2.12 1.104-2.895 1.943-.806.833-1.224 1.968-1.224 3.462zM338.87 300.89c.27-1.43.538-2.952.808-4.532h8.47l-1.19 6.414h.12c.388-.926.925-1.82 1.64-2.686.715-.867 1.52-1.61 2.447-2.326.893-.658 1.85-1.223 2.893-1.61 1.047-.39 2.06-.6 3.074-.6.566 0 1.133.06 1.73.06.566.062 1.104.15 1.64.27l-1.85 8.684c-1.044-.36-2.177-.54-3.37-.54-1.58 0-2.953.302-4.115.954-1.195.656-2.18 1.465-3.016 2.54-.833 1.07-1.55 2.296-2.087 3.577-.564 1.314-.953 2.625-1.223 4l-3.162 15.275h-8.89l6.083-29.48zM372.854 296.357l3.162 25.3h.15l13.543-25.3h9.728l-23.062 39.176c-.686 1.133-1.43 2.268-2.236 3.43-.805 1.133-1.76 2.148-2.807 3.076-1.043.892-2.295 1.606-3.67 2.145-1.402.566-3.012.863-4.86.863-2.15 0-4.358-.328-6.597-.953l1.97-6.742c.536.24 1.103.418 1.702.566.562.147 1.312.237 2.205.237 1.314 0 2.537-.418 3.7-1.252 1.132-.838 2.476-2.477 4.058-4.895l-6.024-35.652h9.04z"/>
				</svg>
			</button>
		</div>
	</section> <!-- /.details -->
</main> <!-- /.main -->

<?php get_footer(); ?>