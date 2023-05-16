//javasscript image generator
//create the XMLHttpRequest object for communicating with the web server
var xmlHttp = new XMLHttpRequest ();
//stores number of horizontal columns gallery
var numberOfColumns = 4;
//stores newly generated gallery HTML code
var htmlCode = "";
//Temporarily stores sever response while code is generated 
var response;
 
$(document).ready(function(){
   // setup the path to the php function that reads the image directory to find the thumbnail  file names
   var send = 'scripts/hook.php';
   //open the connection to the server
   xmlHttp.open("GET", send, true);
   //tell the server that the client has no outgoing messgae, i.e we are sending nothing to the server
   xmlHttp.send(null);
   //Check we get a valid server response
   xmlHttp.onreadystatechange = function(){
    if(xmlHttp.readyState == 4){
       // alert('yess');
        //response handler
       //alert(xmlHttp.responseText); 
       //tokenise the response
        response = xmlHttp.responseText.split("~");
        //start to write the HTMLcode into the htmlcode string
        htmlCode+='<tr>';
        //loop round the response array of tokens, which are the image names
        for (var i=0;i<response.length;i++){
            //continue to build the HTML code for the gallery
          //alert(response[i])
            htmlCode+='<td id="gallery_cell">';
            htmlCode+='<a href="images/'+response[i]+'">';
            htmlCode+='<img src="images/'+response[i]+'" id="image_thumbnail"/>';
            htmlCode+='</a>';
            htmlCode+='</td>';
            //control the column layout for the gallery thumbnails
            if(((i+1)%numberOfColumns) == 0){
                htmlCode+= '</tr><tr>';  
            }    
        }
        htmlCode+='</tr>';
        //write the HTML code into the gallery
       // document.getElementById("gallery").innerHTML = htmlCode;
        $("#gallery").html(htmlCode);
    }
   } 
 });