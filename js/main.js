window.addEventListener("load", function(){

var httpRequest = new HttpRequest();
    httpRequest.load("http://ip.jsontest.com/", function(data){
       console.log(data);
	});

});