<div id="menu-div">
	<div class="click-button" onclick="MapLoader.clearMap()" style="white-space: nowrap;">
	<i class="fas fa-window-close"></i> Clear
	</div>
	
	<div class="click-button" onclick="displayMenu('mapmenu')" style="white-space: nowrap;">
	<i class="fas fa-map"></i> Map
	</div>

	<div id="modebutton-paint" class="click-button mode-button" onclick='setMode("paint")' style='opacity: 0.5'>
		<i class="fas fa-paint-brush"></i>
		<div class="tooltip-menu">
			Paint
		</div>
	</div>
	<div id="modebutton-fill" class="click-button mode-button" onclick='setMode("fill");'>
		<i class="fas fa-fill-drip"></i>
		<div class="tooltip-menu">
			Fill
		</div>
	</div>
	<div id="modebutton-delete" class="click-button mode-button" onclick='setMode("delete")'>
		<i class="fas fa-eraser"></i>
		<div class="tooltip-menu">
			Disable	
		</div>
	</div>
	<div id="modebutton-ec" class="click-button mode-button" onclick='setMode("ec")'>
		<i class="fas fa-edit"></i>
		<div class="tooltip-menu">
			Delegate Edit
		</div>
	</div>
<!--
	<div id="modebutton-highlight" class="click-button mode-button" onclick='setMode("highlight")'>
		<i class="fas fa-sun"></i>
		<div class="tooltip-menu">
			Highlight
		</div>
	</div>
-->
	<div id="lockbutton" class="click-button lock-button" onclick="MapManager.toggleLockMap()">
		<i class="fas fa-lock"></i>
		<div class="tooltip-menu">
			Lock Map
		</div>
	</div>

	<div id="update-button" class="click-button" onclick="forceUpdate()" style="white-space: nowrap; display: none;">
		<i class="fas fa-arrow-up"></i> Update
	</div>

	<div class="click-button" id="share-button" onclick="displayMenu('sharemenu-autocenter');" style="white-space: nowrap;">
		<i class="fas fa-share-alt"></i> Share Map
	</div>

	<div class="click-button" onclick="displayMenu('stylemenu')" style="white-space: nowrap;">
		<i class="fas fa-palette"></i> Style
	</div>

	<div id="sidebar-toggle" class="click-button" onclick="toggleYAPNews()" style="white-space: nowrap; margin-left: 0px;">
		<i class="fas fa-bars"></i> Sidebar
	</div>

	<div id="blanks-toggle" class="click-button" onclick="toggleBlanks()" style="white-space: nowrap; margin-left: 0px;">
		<i class="fas fa-search"></i> Locate Blanks
	</div>

	<div id="tooltips-toggle" class="click-button" onclick="toggleTooltips()" style="white-space: nowrap; margin-left: 0px;">
		<i class="fas fa-comment-alt"></i> Tooltips
	</div>
</div>
