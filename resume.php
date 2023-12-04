
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-18">
        <title>resume</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="bootstrap.css">
      <link rel="stylesheet" href="style.css">

      <style>


.cont{
background-color:#658b6f;
}
.prof{
	background-color:aquamarine;
}

.object{
	background-color:#658b6f;
}

.exper{
	background-color:aquamarine;
}

#btn:hover{
	background-color:chartreuse;
}


.languag{
	background-color:#658b6f
}

.hobbiess{
	background-color: aquamarine;
}

.refer{
	background-color:#658b6f
}

#btn{
	background-color: #4CAF50;
}



          </style>
    </head>
    <body>
<div class="container-fluid">
    <div class="row" id="id2">

        <div class="bg-info col-sm-12 col-md-12 col-lg-12 navbar navbar-expand-lg" id="id1">

            <ul id="menu_id" class="nav-bar list-unstyleds d-inline-flex container-fluid">
                <li class="nav-item"><a href="#" class="nav-link text-white">CONTACT</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white">PROFILE</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white">objective</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white">education</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white">experience</a></li>
                <li class="nav-item"><a href="#" id="products_dropdown"
                    aria-expanded="false" 
					data-bs-toggle="dropdown" 
					role="button" class="nav-link text-white dropdown-toggle">skills</a>
                    <ul class="dropdown-menu" aria-labelledby="products_dropdown">
                        <li class="nav-item"><a href="#" class="nav-link text-white">languages</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-white">hobbies</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-white">references</a></li>
                    </ul>
                
                </li>

        </div>
    </div>
  
</div>



<div class=container>
    <div>
        <button id="btn" type="button">loadProfile</button>
    </div>
    <div id="contact" class="cont">
        <h1>CONTACT:</h1>
        <p>click on loadProfile button for resume</p>
    </div>
    <div id="profile" class="prof">
        <h1>PROFILE:</h1>
        <p>click on loadProfile button for resume</p>
    </div>
    <div id="objectives" class="object">
        <h1>OBJECTIVES:</h1>
        <p>click on loadProfile button for resume</p>
    </div>
    <div id="experience" class="exper">
        <h1>EXPERIENCE:</h1>
        <p>click on loadProfile button for resume</p>
    </div>
    <div id="language" class="languag">
        <h1>LANGUAGES:</h1>
        <p>click on loadProfile button for resume</p>
    </div>
    <div id="hobbies" class="hobbiess">
        <h1>HOBBIES:</h1>
        <p>click on loadProfile button for resume</p>
    </div>
    <div id="reference" class="refer">
        <h1>REFERENCES:</h1>
        <p>click on loadProfile button for resume</p>
    </div>
</div>

<script>



var get_node = document.getElementById('btn');
            var xhr = new XMLHttpRequest();
            get_node.addEventListener('click',(e) => {
                var id = e.target.value;
                
                 xhr.open('GET','show_details.php',true);
                 xhr.send();
                
                xhr.onreadystatechange = receive_data;
                //receive
                
            });
            function receive_data() {
                if (xhr.readyState == XMLHttpRequest.DONE) {
                   document.getElementById('contact').innerHTML=this.responseText;
                   
                   
                }
            }

            var xhrp = new XMLHttpRequest();
            get_node.addEventListener('click',(e) => {
                var id = e.target.value;
                
                xhrp.open('GET','show_prifile.php',true);
                xhrp.send();
                
                xhrp.onreadystatechange = receive_profile;
                //receive
                
            });
            function receive_profile() {
                if (xhrp.readyState == XMLHttpRequest.DONE) {
                   document.getElementById('profile').innerHTML=this.responseText;
                    
                   
                }
            }

            var xhrobj = new XMLHttpRequest();
            get_node.addEventListener('click',(e) => {
                var id = e.target.value;
                
                xhrobj.open('GET','show_objectives.php',true);
                xhrobj.send();
                
                xhrobj.onreadystatechange = receive_objectives;
                //receive
                
            });
            function receive_objectives() {
                if (xhrobj.readyState == XMLHttpRequest.DONE) {
                   document.getElementById('objectives').innerHTML=this.responseText;
                   
                   
                }
            }


            var xhrexp = new XMLHttpRequest();
            get_node.addEventListener('click',(e) => {
                var id = e.target.value;
                
                xhrexp.open('GET','show_experience.php',true);
                xhrexp.send();
                
                xhrexp.onreadystatechange = receive_experience;
                //receive
                
            });
            function receive_experience() {
                if (xhrexp.readyState == XMLHttpRequest.DONE) {
                   document.getElementById('experience').innerHTML=this.responseText;
                   
                   
                }
            }


            var xhrlang = new XMLHttpRequest();
            get_node.addEventListener('click',(e) => {
                var id = e.target.value;
                
                xhrlang.open('GET','show_language.php',true);
                xhrlang.send();
                
                xhrlang.onreadystatechange = receive_language;
                //receive
                
            });
            function receive_language() {
                if (xhrlang.readyState == XMLHttpRequest.DONE) {
                   document.getElementById('language').innerHTML=this.responseText;
                   
                   
                }
            }


            var xhrhobby = new XMLHttpRequest();
            get_node.addEventListener('click',(e) => {
                var id = e.target.value;
                
                xhrhobby.open('GET','show_hobbies.php',true);
                xhrhobby.send();
                
                xhrhobby.onreadystatechange = receive_hobbies;
                //receive
                
            });
            function receive_hobbies() {
                if (xhrhobby.readyState == XMLHttpRequest.DONE) {
                   document.getElementById('hobbies').innerHTML=this.responseText;
                   
                   
                }
            }


            var xhrrefer = new XMLHttpRequest();
            get_node.addEventListener('click',(e) => {
                var id = e.target.value;
                
                xhrrefer.open('GET','show_references.php',true);
                xhrrefer.send();
                
                xhrrefer.onreadystatechange = receive_reference;
                //receive
                
            });
            function receive_reference() {
                if (xhrrefer.readyState == XMLHttpRequest.DONE) {
                   document.getElementById('reference').innerHTML=this.responseText;
                   
                   
                }
            }





   
</script>

    </body>
</html>