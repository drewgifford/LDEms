let eventsJson;

    function renderEvents(events){
    
    if(!events) return;
    
    $("#eventCount").text(events.length);
    
    $(".events").html("");
    
    for(var event of events){

        let str="";
        if(Object.keys(event).includes("Url")){
            str = `<img src='${event.Url}'/>`
        }

        $(".events").append(`
        
        <div class="event">
            
            <h2>${event.Title.replaceAll("__","").replaceAll("*","")}</h2>
            ${str}
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