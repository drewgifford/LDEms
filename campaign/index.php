<?php

    $PASTEBIN_LINK = isset($_GET["id"]) ? $_GET["id"] : "";

?>

<style>

    body {
    background-color: #36393e;
    }

    * {
    font-family: sans-serif;
    color: white;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-rendering: optimizeLegibility;
    
    font-family: "PT Sans";
    }
    input,select,option {
    color: #2f3136 !important;
    }

    .error {
    color: red;
    }
    p,h1,h2,h3 {
    margin: 0;
    padding: 0;
    }
    .top {
    display: block;
    
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background: rgba(30, 30, 35, 0.95);
    }
    .top .container {
    max-width: 1400px;
    margin: 1em auto;
    display: block;
    }
    .events {
    padding-top: 5em;
    display: grid;
    grid-template-columns: 1fr 1fr;
    max-width: 1400px;
    margin: auto;
    row-gap: 10px;
    column-gap: 10px;
    }
    .event {
    padding: 2em;
    border: 1px solid white;
    background: #202225;
    }
    .event pre {
    width: 100%;
    white-space: pre-wrap;
    color: #eee;
    
    }
</style>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow&family=Barlow:wght@300;400;700;900&family=Inter&family=Julius+Sans+One&family=PT+Sans:wght@400;700&family=Source+Sans+3&display=swap" rel="stylesheet">

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

<script>
    let eventsJson;

    function renderEvents(events){
    
    if(!events) return;
    
    $("#eventCount").text(events.length);
    
    $(".events").html("");
    
    for(var event of events){
        $(".events").append(`
        
        <div class="event">
        
            <h2>${event.Title.replaceAll("__","").replaceAll("*","")}</h2>
            <pre>${event.Description.replaceAll("__","").replaceAll("*","")}</pre>
        
        </div>
        `)
        
    }
    }

    function filterToState(events, val){
    return events.filter(e => {
        
        let states = e.States;
        for(var state of states){
        if(state.value == val) return true;
        }
        return false;
        
    })
    }

    $("#state").change(function(){
    
    let val = $("#state").val();
    
    if(val == "default"){
        return renderEvents(eventsJson);
    }
    
    return renderEvents(filterToState(eventsJson, val));
    

    });


    function initialize(){
    let value = $("#json").val();
    
    let json;
    
    try {
        json = JSON.parse(value);
    } catch (e){
        $(".error").text("Invalid JSON provided");
        return;
    }
    $(".error").text("");
    
    eventsJson = json;
    
    
    
    let states = [];
    for(var event of json){ 
        for(var state of event.States){
        if(!states.includes(state.value)){
            states.push(state.value);
        }
        }
    }
    $("#state option:not(#default-option)").remove();
    states = states.sort();
    
    states.forEach((state) => {
        $("#state").append(`<option value=${state}>${state} - ${filterToState(json, state).length}</option>`);
    })
    
    
    renderEvents(json);

    }


    $("#submit").click(initialize);
</script>

<script>

    let pastebinLink = "<?= $PASTEBIN_LINK ?>";

    if(pastebinLink != ""){

        $.get(`https://corsproxy.io/?https://pastebin.com/raw/${pastebinLink}`, function(data, status){
            $("#json").val(data);
            initialize();
        })

    }

</script>