<?php

// cheak if the user coming from A Request

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $user      =  $_POST['Username'] ;
    $email     =  $_POST['Email'] ;
    $CellPhone =  $_POST['PhoneNumber'] ; 
    $Message   =  $_POST['Message']; 
    
    // creating array of Errors
    
    $FormErrors = array();
    
    if(strlen($user) <= 3 ){
        
        $FormErrors[] = 'The Username Must be Larger than 3 Char  ';
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Contact-Form</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">  
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700,900,900i" >
        <link rel="stylesheet" href="css/app.css" />

    <!--[if lt IE 9]>
        <script src="js/htmlsshiv.min.js"></script>
    <![endif]-->

    </head>
    <body>
        
        <!-- Start Form -->
        <div class="container">
            <h2 class="text-center">Contact Me</h2>
            <?php if(isset($FormErrors)){
            foreach($FormErrors as $Error){
                    echo $Error . '<br>' ;
                  } }
            ?>
            <form class="contact-form" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">        
                <input type="text" 
                       name="Username" 
                       name='username' 
                       class='form-control' 
                       id="place1" 
                       autocomplete="off"  
                       placeholder="Username" />
                
                <i class="fas fa-user fa-fw"></i>
                
                <input 
                       type="Email" 
                       name="Email" 
                       id="place2" 
                       class='form-control' 
                       placeholder='Email' 
                       autocomplete="off"
                       />
                
                <i class="fas fa-envelope fa-fw"></i>

                <input type="text" 
                       name="PhoneNumber" 
                       class='form-control' 
                       id="place3" 
                       name= 'CellPhone' 
                       placeholder='Your Phone Number' 
                       autocomplete="off"/>
                
                <i class="fas fa-mobile-alt fa-fw"></i> 
                
                <textarea 
                          class="form-control place" 
                          id="place4" 
                          placeholder='Type Your Message' 
                          name="Message"></textarea>
                
                <input type='submit' value="Send Message" class="btn btn-success" />
                
                <i class="fas fa-paper-plane send"></i>
                
            </form>
            
        </div>
        
        
        
        
        
        
        <script src='https://code.jquery.com/jquery-3.3.1.min.js'></script>
        <script src='js/app.js'></script>
        <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
        <script src='js/bootstrap.min.js'></script>
        <script src='js/html5shiv.min.js'></script>
    </body>
</html>