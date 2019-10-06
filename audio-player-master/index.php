<?php require 'includes/header.php'; ?>
	<div id="audioPlayer">
		<div>
			<div id="audioPos">
				<div id="audioVolDiv">
					<input id="audioVol" type="text" name="audioVol" value="1">
				</div>

				<div id="loadingDiv">
					<i class="fas fa-spinner fa-10x"></i>
				</div>

				<div id="audioVisualizer"></div>

				<div id="controls">
					<div id="repeatButton" data-repeat="none" data-color="white"><img src="assets/img/repeatIco/white/repeat-none.svg"></div>
					<div id="backButton" class="disabled"><i class="fas fa-step-backward"></i></div>
					<div id="playButton"><i class="fas fa-play"></i></div>
					<div id="pauseButton"><i class="fas fa-pause"></i></div>
					<div id="skipButton"><i class="fas fa-step-forward"></i></div>
				</div>

				<div id="audioProgLinePos">
					<div id="audioProgLineDiv">
						<div id="audioProgLine"></div>
					</div>
					<div id="audioProgDot"></div>
				</div>
			</div>
		</div>

		<div id="playlistPosition" data-open="false">
			<div id="playlistControl">
				<div id="playlistDrawer">
					<h3>Open Playlist</h3>
					<i class="fas fa-angle-up"></i>
				</div>

				<div id="playlistGradientT"></div>
				<div id="playlistGradientR"></div>
				<div id="playlistGradientL"></div>
				<div id="playlistGradientTL"></div>
				<div id="playlistGradientTR"></div>

				<form id="audioInputDiv" action="includes/saveaudio.php" method="POST" enctype="multipart/form-data">
					<!-- <input id="audioInput" type="text" name="audioInput" placeholder="Direct Audio Stream URL (Direct URL to file download, should end in the file extension i.e. .mp3)."> -->
					<input id="audioFileInput" type="file" name="fileUpload">
					<div id="audioInputIcoPos">
						<button id="audioInputBtn" type="submit"><i class="fas fa-plus"></i></button>
					</div>
				</form>

				<div id="playlistView"></div>
			</div>
		</div>
	</div>
<?php require 'includes/footer.php' ?>
