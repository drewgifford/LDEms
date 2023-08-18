<!DOCTYPE html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow&family=Barlow:wght@300;400;700;900&family=Inter&family=Julius+Sans+One&family=PT+Sans:wght@400;700&family=Source+Sans+3&display=swap" rel="stylesheet">
    <link href="./index.css" rel="stylesheet"/>
</head>

<body>
    <div class="top">
    <div class="container">
        <label for="json">JSON from /dumpevents</label>
        <input type="text" id="json"/>
        <input type="submit" id="submit" value="Process">

        <p class="error"></p>

        <select id="state">
        <option id="default-option" value="default">Select a State</option>
        </select>
        
        <span>Event Count: <span id="eventCount">0</span></span>
    </div>
    
    </div>

    <div class="events">
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="./index.js"></script>
    <script src="./load.js"></script>
</body>