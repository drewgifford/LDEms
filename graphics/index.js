var candidates = 0;
var totalVotes = 1000000;
const r = Math.round;

var partyColors = {
  "L": "#20aa8f",
  "R": "#a91212",
  "N": "#592811",
  "C": "#498a1c",
  "LD": "#FFD800",
  "AK": "#1b1a75",
  "I": "#636363",
  "P": "#ff6a00",
  "T": "#009BFF",
  "LA": "#7E00B4",
  "N/A": "#ffffff"
}

function makeid(length) {
  var result           = '';
  var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
  var charactersLength = characters.length;
  for ( var i = 0; i < length; i++ ) {
    result += characters.charAt(Math.floor(Math.random() * 
charactersLength));
 }
 return result;
}

function loadImage(imageURL, query, width, height){
  downloadedImg = new Image;
  downloadedImg.src = imageURL;
  downloadedImg.crossOrigin = "Anonymous";
  downloadedImg.addEventListener("load", function(){
      var canvas = document.createElement("canvas");
      canvas.width = width;
      canvas.height = height;
      ctx=  canvas.getContext("2d");
      ctx.drawImage(downloadedImg, 0, 0);
      var dataURL = canvas.toDataURL("image/png");
      $("body").append(
          `<style>${query} { background-image: url('${dataURL}')}</style>`)
      canvas.remove();
  }, false);
  
};

loadImage("https://i.imgur.com/gWE7tvY.png", ".result-background", 1178, 3351);
/*loadImage("https://i.imgur.com/NPEq9Z7.jpg", ".result-background-inner", 1920, 1080);*/

$("#add").click(function(){
    candidates++;
    var html = $(".template").html();
    $(".candidates").append(`<div class="candidate" id="candidate${candidates}">${html}</div>`);
});
$("#remove").click(function(){
    candidates--;
    $(".candidate:last-of-type").remove();
});

$("#modelResultButton").click(function(){
    $(".candidate").remove();

    var value = $("#modelResult").val().replace(/(^[ \t]*\n)/gm, "").split("\n");

    console.log("Input query", value);
    console.log("(?<=\\@)(.*?)(?=\\()");

    for (var val = 0; val < value.length; val++){
      console.log("LINE", val)
      var line = value[val];

      if(line.trim() == "Model Result") { continue; }

      console.log("LINE BITCH", line)

      var user_match, pct_match, party_match;

      try {
        user_match = line.match("(?<=^)(.*?)(?=\\()")[0].replace("[AFK]", "").replace(/[^a-zA-Z ]/g, "").trim();
        pct_match = line.match("[^\\- ]+(?=\\%)")[0].trim();
        party_match = line.match("(?!.*\\().(?=\\))")[0].trim();

        console.log("user match", user_match);
        console.log("pct match", pct_match);
        console.log("party match", party_match);
      } catch(e){
        alert("An error occurred trying to pregenerate candidates. See console for details.");
        console.log("Could not successfully find all values for the candidates in RegEx expression. Did you paste it correctly?");
        console.log(e.stack);
        return;
      }

      if (user_match == "" || pct_match == "" || party_match == "") {
        alert("An error occurred trying to pregenerate candidates. See console for details.");
        console.log("Could not successfully find all values for the candidates in RegEx expression. Did you paste it correctly?");
        return;
      }

      var html = $(".template").html();

      $(".candidates").append(`<div class="candidate" id="candidate${val}">${html}</div>`);

      $(`#candidate${val} input[name='name']`).val(user_match);
      $(`#candidate${val} input[name='percent']`).val(pct_match);
      $(`#candidate${val} input[name='party']`).val(party_match);
      $(`#candidate${val} input[name='color']`).val(partyColors[party_match]);


    }

    randomizeGraphTypes();


});

$("input[type='checkbox']").change(function(){
  var next = $(this).next().next();
  var val = $(this).is(":checked");

  if(!val){
    next.attr("disabled", "true");
    next.next().next().attr("disabled", "true");
  } else {
    next.removeAttr("disabled");
    next.next().next().removeAttr("disabled");
  }
});
Array.prototype.remove = function(value) {
  var index = this.indexOf(value);
  if (index > -1) {
    this.splice(index, 1);
  }
  return this;
}

function randomizeGraphTypes(){
  var factors = [
    "fast",
    "slow",
    "bal",
    "levelOff",
    "sine1",
    "sine2",
    "quad1",
    "quad2",
    "quad3",
    "quad4",
    "quad5",
    "quad6",
    "quad7"
  ];
  $("select[name='graph']").each(function(){
    var length = factors.length;
    var random = Math.round(Math.random()*(length-1));

    var value = factors[random];
    $(this).val(value);
    factors.remove(value);



  });
}

$("#randomizeGraph").click(randomizeGraphTypes);

$(document).on("change", "input[name='party']", function(){
  var colorInput = $(this).next().next().next();
  var party = $(this).val()
  colorInput.val(partyColors[party]);
  
});

function demEquation(x){
	return Math.pow(x, 0.8);
}
function repEquation(x){
	return Math.pow(x, 1.333);
}
function indEquation(x){
	return (1/0.977)*(Math.exp((12/11)*x)-Math.pow(x,2)-1);
}
function levelOffEquation(x){
	return Math.cbrt(x);
}
function sineTypeOneEquation(x){
	return 0.965463881*(x-(1/15)*Math.sin(12*x));
}
function sineTypeTwoEquation(x){
	return (Math.sin(Math.PI*Math.pow(x, 0.8)+(3/2)*Math.PI)+1)/2;
}
function quadraticOne(x){ // Slow down mid way through, dump 80% of votes at the end
  return (3*Math.pow(x, 2) - 2*Math.pow(x, 3));
}
function quadraticTwo(x){ // Same thing as Quadratic one, but slightly less extreme
  return (3*Math.pow(x, 3) - 3*Math.pow(x, 2) + x);
}
function quadraticThree(x){ // Competitive but slight dip from 60-80% of votes counted
  return (Math.pow(x, 4) - Math.pow(x, 3) + x);
}
function quadraticFour(x){ // Starts off slightly fast, levels off and curves upward
  return (Math.pow(x, 0.42) - Math.pow(x,2) + Math.pow(x,3));
}
function quadraticFive(x){ // Same as Quadratic four but less extreme
  return (Math.sqrt(x) - x + Math.pow(x, 2));
}
function quadraticSix(x){ // Starts fast, votes steadily come in after
  return (Math.pow(x, 0.3) - Math.pow(x, 0.7) + Math.pow(x, 2) - Math.pow(x, 3) + Math.pow(x, 1.7));
}
function quadraticSeven(x){ // Overall balanced with some curves, finishes fast
  return (Math.pow(x, 0.42) - Math.pow(x, 2) + Math.pow(x, 3));
}
function funny(x){ //Opposite of Start Fast, Level Off. More extreme.
  return (Math.pow(x, 5));
}
function getFactors(factor){
  return {
    "fast": demEquation(factor),
    "slow": repEquation(factor),
    "bal": indEquation(factor),
    "levelOff": levelOffEquation(factor),
    "sine1": sineTypeOneEquation(factor),
    "sine2": sineTypeTwoEquation(factor),
    "quad1": quadraticOne(factor),
    "quad2": quadraticTwo(factor),
    "quad3": quadraticThree(factor),
    "quad4": quadraticFour(factor),
    "quad5": quadraticFive(factor),
    "quad6": quadraticSix(factor),
    "quad7": quadraticSeven(factor),
    "funny": funny(factor),
  }
}

$("#startSim").click(function(){
	tabulateVotes();
});
var imagesGenerated = 0;
function tabulateVotes(){
  var zip = new JSZip();
  imagesGenerated = 0;
	totalVotes = $("#totalVotes").val();
  var times = $("#iterations").val();
	$(".results").html("");
	var object = {};
	$(".candidates .candidate").each(function(index){
        var party = findInput($(this), "party").val();
        var percent = findInput($(this), "percent").val();
        var name = findInput($(this), "name").val();
        var graph = findInput($(this), "graph").val();
        console.log("PARTY: ", party);
        var color = findInput($(this), "color").val();
        object[index] = {
        	"party": party,
          "name": name,
          "percent": percent,
          "color": color,
          "graph": graph,
        }
        
    });

  
  for (i = 0; i < times; i++){
    var factor = (i+1)/times;
    var factors = getFactors(factor);
    var totalCountedVotes = 0;
    
    for(e = 0; e < Object.keys(object).length; e++){
    	var obj = object[e];
      var f = factors[obj.graph];
      var votes = Math.round(f*((obj.percent/100)*totalVotes));
      obj.votes = votes;
      
 
      
       totalCountedVotes+=votes;
    }
    var raceLabel = $("#raceLabel").val();
    var location = $("#location").val();
    var usingDelegates = $("#enableDelegates").is(":checked");
    var delegateStr="display: none;";
    var delegateCt = 0;
    if(usingDelegates){
      delegateStr = "";
      delegateCt = $("#delegates").val();
    }
    var usingTime = $("#enableTime").is(":checked");
    var timeStr="display: none;";
    var time=$("#time").val();
    if(usingTime){
      timeStr = "";
    }

    /*
    .c-party-i .c-name {
      border-color: rgba(99, 99, 99, 1);
    }
    .c-party-i .c-party-inside {
      background: rgba(99, 99, 99, 1);
    }
    .c-party-i .c-party-inside::after {
      content: "I";
    }


    */

    var finalStr = `<div class="result" id="result-${i}">
        <div class="result-background"></div>
        <div class="result-header">
            <div class="inside">
                <div class="divider">
                    <div class="half">
                        <p class="result-region">${location}</p>
                        <p class="result-type left">${raceLabel}</p>
                    </div>
                    <div class="half special">
                        <div class="special-electoral" style="${delegateStr}">
                                <div class="special-electoral-inner">
                                    <div class="special-electoral-label">
                                    <p class="special-electoral-label-inner">${$("#delegateLabel").val()}</p>
                                    </div>
                                    
                                    <p class="result-electoral">${delegateCt}</p>
                                </div>
                            </div>
                        <p class="result-closing left" style="${timeStr}">${time}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="inside">
                `;

    object = sort_object(object, "votes");

		for(e = 0; e < Object.keys(object).length; e++){
    	var obj = arrayReverseObj(object)[e];
      var pct = ((obj.votes/totalCountedVotes)*100).toFixed(2);
    	var str = `${obj.name.replace(" ","&nbsp;")}`;
      
      
      
      finalStr+=getPartyStr(str, pct, obj.color, obj, e);


      
    }
    var reportingColor = "#35a147";
    var reportingColors = []
    var percentReporting = ((totalCountedVotes/totalVotes)*100).toFixed(0);

    var remain = percentReporting % 10;
    var full = (percentReporting - remain)/10;
    var z = 0;
    for(z; z < full; z++){
      
      reportingColors[z] = reportingColor;
    }
    console.log(z);
    reportingColors[z] = blend(reportingColor, "#666666", 1-remain/10);
    z++;
    for(z; z < 10; z++){
      reportingColors[z] = "#666666";
    }



    finalStr+=`
    <div class="reporting">
      <p class="result-percentage right">${percentReporting}%</p>
      <div class="reporting-progress">
        <div class="reporting-progress-inner-1" style="background-color:${reportingColors[0]}"></div>
        <div class="reporting-progress-inner-2" style="background-color:${reportingColors[1]}"></div>
        <div class="reporting-progress-inner-3" style="background-color:${reportingColors[2]}"></div>
        <div class="reporting-progress-inner-4" style="background-color:${reportingColors[3]}"></div>
        <div class="reporting-progress-inner-5" style="background-color:${reportingColors[4]}"></div>
        <div class="reporting-progress-inner-6" style="background-color:${reportingColors[5]}"></div>
        <div class="reporting-progress-inner-7" style="background-color:${reportingColors[6]}"></div>
        <div class="reporting-progress-inner-8" style="background-color:${reportingColors[7]}"></div>
        <div class="reporting-progress-inner-9" style="background-color:${reportingColors[8]}"></div>
        <div class="reporting-progress-inner-0" style="background-color:${reportingColors[9]}"></div>

      </div>
    </div>
    </div></div>`;
    $(".results").append(finalStr);
    var localI = `I: ${i}`;
    console.log(`I: ${i}`);
    canv(zip, i, times, location, raceLabel)
    $(`#result-${i}`).remove();
  }
}
function canv(zip, it, times, location, raceLabel){
  html2canvas($("#result-"+i).get()[0], {scrollX: 0,scrollY: 0}).then(canvas => {
      
    var img = new Image();
    
    img.crossOrigin = "anonymous";
    img.src = canvas.toDataURL("image/png");
    $(".results").append(img);
    addToZip(zip, it, canvas, times, location, raceLabel);
    
  });
}
function addToZip(zip, it, canvas, times, location, raceLabel){
  console.log(it);
  canvas.toBlob(function(blob){
    var filename = `${location}-${raceLabel}-${it}.png`;
    console.log(canvas);
    zip.file(filename, blob);
    imagesGenerated++;
    console.log(`Saving ${filename}`);
    if(imagesGenerated >= times){
      zip.generateAsync({type:"blob"}).then(function(content) {
        saveAs(content, `${location}-${raceLabel}.zip`);
    });
    }
  });

}

function getPercentageStr(pct, color){

  var main = "#DBD9D9";

  /*
    right side = 742px, 91.4%
    left side = 69px, 8.6%
    total = 811px
  */

  pct = 8.6 + ((pct/100)*91.4);

  var final = blend(main, color, 0.25);

  return `linear-gradient(to right, ${final} 0%, ${final} ${pct}%, ${main} ${pct}%)`;


}

function getPartyStr(str, pct, color, obj){

    return `
    <div class="c-row"  style="background: ${getPercentageStr(pct, color)}">
      
      <div style="display: flex; width: 100%;">
        <div class="c-party">
          <div class="c-party-inside" style='background-color: ${color}'>
            <p class="c-party-inside-id">
              ${obj.party}
            </p>
          </div>
        </div>
        <div class="c-candidate">
          <p class="c-name" style='border-color: ${color}'>${obj.name}</p>
          <p class="c-votes">
          ${numberWithCommas(obj.votes)}
          </p>
        </div>
        <div class="c-percentage">
          <p>${pct}%</p>
        </div>
      </div>
      

              
    </div>`
}
function findInput(el, name){
    return el.find(`*[name='${name}'`);
}
function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}


function sort_object(data, attr) {
  var arr = [];
  for (var prop in data) {
      if (data.hasOwnProperty(prop)) {
          var obj = {};
          obj[prop] = data[prop];
          obj.tempSortName = data[prop][attr];
          arr.push(obj);
      }
  }

  arr.sort(function(a, b) {
      var at = a.tempSortName,
          bt = b.tempSortName;
      return at > bt ? 1 : ( at < bt ? -1 : 0 );
  });

  var result = [];
  for (var i=0, l=arr.length; i<l; i++) {
      var obj = arr[i];
      delete obj.tempSortName;
      for (var prop in obj) {
          if (obj.hasOwnProperty(prop)) {
              var id = prop;
          }
      }
      var item = obj[id];
      result.push(item);
  }
  return result;
}

function arrayReverseObj(obj) {
  let newArray = []

  Object.keys(obj)
    .sort()
    .reverse()
    .forEach(key => {
      console.log(key)
      newArray.push( {
      'key':key, 
      'votes':obj[key].votes,
      "party": obj[key].party,
      "name": obj[key].name,
      "percent": obj[key].percent,
      "color": obj[key].color,
      "graph": obj[key].graph,
      })
    })

  console.log(newArray)
  return newArray  
}



function toRGBA(d) {
	const l = d.length;
	const rgba = {};
	if (d.slice(0, 3).toLowerCase() === 'rgb') {
		d = d.replace(' ', '').split(',');
		rgba[0] = parseInt(d[0].slice(d[3].toLowerCase() === 'a' ? 5 : 4), 10);
		rgba[1] = parseInt(d[1], 10);
		rgba[2] = parseInt(d[2], 10);
		rgba[3] = d[3] ? parseFloat(d[3]) : -1;
	} else {
		if (l < 6) d = parseInt(String(d[1]) + d[1] + d[2] + d[2] + d[3] + d[3] + (l > 4 ? String(d[4]) + d[4] : ''), 16);
		else d = parseInt(d.slice(1), 16);
		rgba[0] = (d >> 16) & 255;
		rgba[1] = (d >> 8) & 255;
		rgba[2] = d & 255;
		rgba[3] = l === 9 || l === 5 ? r((((d >> 24) & 255) / 255) * 10000) / 10000 : -1;
	}
	return rgba;
}

function blend(from, to, p = 0.5) {
	from = from.trim();
	to = to.trim();
	const b = p < 0;
	p = b ? p * -1 : p;
	const f = toRGBA(from);
	const t = toRGBA(to);
	if (to[0] === 'r') {
		return 'rgb' + (to[3] === 'a' ? 'a(' : '(') +
			r(((t[0] - f[0]) * p) + f[0]) + ',' +
			r(((t[1] - f[1]) * p) + f[1]) + ',' +
			r(((t[2] - f[2]) * p) + f[2]) + (
				f[3] < 0 && t[3] < 0 ? '' : ',' + (
					f[3] > -1 && t[3] > -1
						? r((((t[3] - f[3]) * p) + f[3]) * 10000) / 10000
						: t[3] < 0 ? f[3] : t[3]
				)
			) + ')';
	}

	return '#' + (0x100000000 + ((
		f[3] > -1 && t[3] > -1
			? r((((t[3] - f[3]) * p) + f[3]) * 255)
			: t[3] > -1 ? r(t[3] * 255) : f[3] > -1 ? r(f[3] * 255) : 255
		) * 0x1000000) +
		(r(((t[0] - f[0]) * p) + f[0]) * 0x10000) +
		(r(((t[1] - f[1]) * p) + f[1]) * 0x100) +
		r(((t[2] - f[2]) * p) + f[2])
	).toString(16).slice(f[3] > -1 || t[3] > -1 ? 1 : 3);
}
