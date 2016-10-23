$('#search-form').submit(function(e) {

	// Prevent default browser behaviour
	e.preventDefault();

	// Do stuff with form here

});

function runSearch() {
	str=$("#search-input").val();
	
    if (str=="") {
        document.getElementById("search-result").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("search-result").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","pages-php/search.php?go="+str,true);
        xmlhttp.send();
    }
}