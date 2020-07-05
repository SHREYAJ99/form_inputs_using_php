


<?php 
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $con=$_POST['contact'];
    $msg=$_POST['message'];
    $xml=new domdocument("1.0","UTF-8");
    $xml->load('data.xml');
    $rt=$xml->documentElement;
        $it=$xml->createElement("info");
        $nt=$xml->createElement("name",$name);
        $et=$xml->createElement("email",$email);
        $ct=$xml->createElement("contact",$con);
        $mt=$xml->createElement("message",$msg);
    $it->appendChild($nt);
    $it->appendChild($et);
    $it->appendChild($ct);
    $it->appendChild($mt);
    $rt->appendChild($it);
    $xml->save('data.xml');
    echo "Node interested";
}
?>

<DOCTYPE! html>
    <html lang="eng">
    <head>
     <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta name="description" content="Gohool Tutorials">
        <meta name="author" content="Jhon Doe" >
        <title>FORM INPUTS</title>
        
       <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        
        </head>    
        <style>
            
            
            html,*{
                box-sizing:border-box;
            }
            body,p{
                color:white;
                font-family: 'Roboto', sans-serif;
                margin:0;
            }
            .background{
                background: linear-gradient(to right, #232526, #414345);
            width:100%;
                background-size:cover;
                background-position:center center;
                margin:0;
                overflow:auto;
                height:1080px;px;
                text-align:center;
            }
            p{
                padding:5px;
                
            }
            
            
            .form{
                width:40%;
                margin:0 auto;
                background:linear-gradient(to right, #334d50, #cbcaa5);
                border-radius:5px;
                border:2px solid grey;
                padding:2em;
                position:relative;
                top:5em;
                
            }
            input{
                background:#ffffff;
                height:3em;
                border-radius:5px;
                border:none;
                padding:0 10px;
                width:100%;
                margin-top:10px;
            }
            .btn-login{    
                    background:#0000ff85;
                    width:100%;
                margin:15 0;
                height:3em;
                border:none;
                border-radius:100px;
                color:white;
    }
            
            }
            h3{
                color:antiquewhite;
                font-family: sans-serif;
                font-weight: 500;
                
                
                
            }
        
        </style>
        
        <body>
            
            <div class="background">
               
                <div class="form">
                
                
               <form method="post">
                    <h3>Contact Form</h3>
                   <input type="text" id="name1" name="name" placeholder="name">
                    <input type="email" id="email1" name="email" placeholder="Email Address">
                    <input type="number" id="contact1" name="contact" placeholder="contact (contains 10 digits)">
                    <input type="text" id="message1" name="message" placeholder="Message">
                    
                   
                   
                   <hr>
                   
                   <input type="submit" type="submit" name="submit" value="SUBMIT" class="btn-login"/>
                   
                    </form> 
                
                </div>
                
           </div>
             </body>      
    </html>