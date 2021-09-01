<html>

    <head>
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
        <link href="./index.css" rel="stylesheet">
    </head>

    <title>LDE Graphics Creator</title>

<body>
    <button id="add">
        Add Candidate +
    </button>
    <button id="remove">
        Remove Candidate -
    </button>
    <button id="startSim">
        Start
    </button>
    
    <br>
    
    <div class="hidden result-template">
    
    
    
    </div>
    <div class="hidden template">
    
        <br>
        <!--Policy-Related Factors-->
    
        <div class="section">
        <div class="panel">
            <b>CANDIDATE</b><br>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Sunset Coda"><br>
            <label for="percent">Percent Votes</label>
            <input type="number" name="percent" id="percent" value=0><br>
            <label for="graph">Graph Type</label>
            <select id="graph" name="graph">
                <option value="slow">Slow Start</option>
                <option value="fast">Fast Start</option>
                <option value="bal">Balanced</option>
                <option value="levelOff">Start Fast, Level Off</option>
                <option value="sine1">Sine Type 1 (Oscillating)</option>
                <option value="sine2">Sine Type 2 (Mid-Gain)</option>
                <option value="quad1">Quadratic Type 1 (Mid Slow down, End Dump)</option>
                <option value="quad2">Quadratic Type 2 (Less extreme Mid-Slow, End Dump)</option>
                <option value="quad3">Quadratic Type 3 (Competitive, Mid-Slow)</option>
                <option value="quad4">Quadratic Type 4 (Fast Start, Mid Slow, End Dump)</option>
                <option value="quad5">Quadratic Type 5 (Less extreme Fast Start, Mid Slow, End Dump)</option>
                <option value="quad6">Quadratic Type 6 (Fast Start, Mid-End Balanced)</option>
                <option value="quad7">Quadratic Type 7 (Balanced, End Dump)</option>
                <option value="funny">Funny (Extremely Slow Start, End Dump)</option>
                
            </select>
            <label for="party">Party ID</label>
            <input type="text" name="party" id="party" list="parties" style="width:75px" value="">
            <datalist id="parties">
                <option value="L">Labor</option>
                <option value="R">Republican</option>
                <option value="T">Tea Party</option>
                <option value="LA">Left Alternative</option>
                <option value="AK">AKIP</option>
                <option value="I">Independent</option>
            </datalist>
            <label for="totalVotes">Color</label>
            <input type="color" name="color" id="color" value="#ffffff">

            <br>
            
        </div>
        </div>
        </div>
        <label for="totalVotes">Total Votes Cast</label>
        <input type="number" name="totalVotes" id="totalVotes" value=100000>
        <label for="iterations">Iterations</label>
        <input type="number" name="iterations" id="iterations" value=5>
        <label for="location">Location</label>
        <input type="text" name="location" id="location" value="United States">
        <label for="raceLabel">Race Label</label>
        <input type="text" name="raceLabel" id="raceLabel" value="Senate"><br>
        <input type="checkbox" name="enableDelegates" id="enableDelegates" checked></option>
        <label for="delegates">Delegates</label>
        <input type="number" name="delegates" id="delegates" value=1 style="width: 50px">
        <label for="delegateLabel">Delegate Type</label>
        <input type="text" name="delegateLabel" id="delegateLabel" value="Delegates">
        <br>
        <input type="checkbox" name="enableTime" id="enableTime" checked></option>
        <label for="time">Poll Closing Time</label>
        <input type="text" name="time" id="time" value="7:00PM ET" style="width: 150px">
        <div></div>

        <label for="modelResult">Input Model Result Text</label>
        <textarea type="text" name="modelResult" id="modelResult"></textarea> <input type="button" value="Generate" id="modelResultButton">
        <i><small>This automatically generates candidates based on a run model result!</small></i>

        <hr>
        <div class="candidates">
        <button id="randomizeGraph">Randomize Graph Types</button>
        
        </div>
        <hr>
        <div class="results">
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="dist/FileSaver.min.js"></script>
<script src="dist/jszip.min.js"></script>
<script src="http://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
<script defer src="index.js"></script>
</body>

  </html>