let pageHref = window.location.search;
let searchParams = new URLSearchParams(pageHref.substring(pageHref.indexOf("?")));
if(searchParams.has("id")) {
        let pastebinLink = searchParams.get("id");
        if(pastebinLink != ""){
            $.get(`https://corsproxy.io/?https://pastebin.com/raw/${pastebinLink}`, function(data, status){
                $("#json").val(data);
                initialize();
            })
        }
}
