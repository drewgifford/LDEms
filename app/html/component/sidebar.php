<div id="sidebar">
	<div id="sidebar-social">
	<a id="sidebar-discord-link" class="social-link" href="https://discord.gg/lde" target="_blank"><div id="sidebar-discord" class="sidebar-button">
		Discord
	</div></a>
	</div>
	<div id="sidebar-header">
		<h1>
		<?php
			echo $h1title
		?>
		</h1>
	</div>

	<ins class="adsbygoogle adslot_sidebar"
		style="display:inline-block; width:336px; height:280px;"
		data-ad-client="ca-pub-1660456925957249"
		data-ad-slot="8033943742"></ins>
	<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
	</script>

	<div id="sidebar-shortcuts" class="sidebar-box">
		<h3>Shortcuts</h3>
		<ul>
			<li>
				F - Hold down to quickly fill in districts
			</li>
			<li id="county-house-d" style="display: none">
				D - Hold down to fill/disable entire states
			</li>
		</ul>
	</div>

	<div id="sidebar-toggle-popularvote" class="sidebar-box sidebar-tool-button" onclick="PopularVote.toggle()" style="display: none">
		<i class="fas fa-chevron-circle-right"></i>
		<h4 id="sidebar-popularvote-head">
			Enable Popular Vote
		</h4>
	</div>
	<div id="sidebar-popularvote-settings" class="sidebar-box sidebar-tool">
		<h3>
			Settings
		</h3>
		<div class="sidebar-box-settings">
			<div class="sidebar-hover-popup"><input type="checkbox" id="popularvote-automargins" onclick="PopularVote.autoMarginsOnClick();" checked>Auto Margins
				<div class="tooltip-text">
					Setting the popular vote will also set the color of a state
				</div>
			</div>
			<div class="sidebar-hover-popup"><input type="checkbox" id="popularvote-clicksetpv" checked>Auto Popular Vote
				<div class="tooltip-text">
					Clicking on a district will set the popular vote to max
				</div>
			</div>
		</div>
	</div>
	<div id="sidebar-popularvote" class="sidebar-box sidebar-tool">
		<h3>
			<span>
			State Popular Vote
			</span>
		</h3>
		<div id="popularvote-message">
			Select a State
		</div>
		<div id="popularvote-state-title">
		</div>
		<div id="popularvote-ranges">
		</div>
	</div>
	<div id="sidebar-national-popularvote" class="sidebar-box sidebar-tool">
		<h3>
			<span>
				National Popular Vote
			</span>
		</h3>
		<div id="national-popularvote-ranges">
		</div>
	</div>

	<div id="sidebar-enable-simulator" class="sidebar-box sidebar-tool-button" onclick="Simulator.toggle();">
		<i class="fas fa-chevron-circle-right"></i> 
		<h4 id="sidebar-simulator-head">
			Enable Simulator
		</h4>
	</div>
	<div id="sidebar-presets-simulator" class="sidebar-box sidebar-tool" style="display: none;">
		<h3>
			National Presets
		</h3>
		<select id="sidebar-presets-select-simulator">
		</select>
	</div>
	<div id="sidebar-settings-simulator" class="sidebar-box sidebar-tool">
		<h3>
			Settings
		</h3>
		<div class="sidebar-box-settings">
			<div class="sidebar-hover-popup">
				<input type="checkbox" id="simulator-noclick">
					Ignore Click
				</input>
				<div class="tooltip-text">
					Clicking doesn\'t set state color or open menu
				</div>
			</div>	
		</div>
	</div>
	<div id="sidebar-state-simulator" class="sidebar-box sidebar-tool">
		<h3>
			State Percentage
		</h3>
		<div id="simulator-state-title">
			Select a State
		</div>
		<div id="simulator-ranges">
		</div>
	</div>
	<div id="sidebar-run-simulator" class="sidebar-box sidebar-tool-button sidebar-tool" onclick="Simulator.run();">
		<h4>
			<i class="fas fa-play"></i> Run Simulation
		</h4>
	</div>

	<div id="sidebar-congress" class="sidebar-box">
		<h3><span id="sidebar-congress-district">District</span></h3>
		<div id="sidebar-congress-representative">
		</div>
		<div id="sidebar-congress-party">
		</div>
	</div>
<div id="yapnews-articles">
</div>
</div>
