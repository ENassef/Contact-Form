<?php

// cheak if the user coming from A Request
include 'Function/Function.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $user      =  filter_var($_POST['Username'], FILTER_SANITIZE_STRING) ;
    $email     =  filter_var($_POST['Email'], FILTER_SANITIZE_EMAIL) ;
    $CellPhone =  filter_var($_POST['PhoneNumber'], FILTER_SANITIZE_NUMBER_INT) ; 
    $msg       =  filter_var($_POST['Message'], FILTER_SANITIZE_STRING); 
    
    // creating array of Errors
    
    if(strlen($user) <= 3 ){
        /*Form Errors Var In The Function Page*/
        $FormErrors[] = 'The Username Must be Larger than <strong> 3 </strong> Char';
    }
    if(strlen($msg) <= 10 ){
        /*Form Errors Var In The Function Page*/
        $FormErrors[] = 'The Message Must be Larger than <strong> 10 </strong> Char';
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Contact-Us</title>
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
            <h2 class="text-center">Contact Us</h2>
            <form class="contact-form" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST"> 
            <?php Errors($FormErrors) ?>
                <div class="form-group">
                <input type="text"
                       name="Username"
                       name='username'
                       class='form-control username'
                       id="place1"
                       placeholder="Username" 
                       autocomplete="off"
                       value="<?php if(isset($user)){echo $user;}; ?>"
                       />
                
                <i class="fas fa-user fa-fw"></i>
                <span class="asterisx">*</span>
                    <div class="alert alert-danger custom-alert">
                        The Username Must be Larger than <strong> 3 </strong> Char
                    </div>
                </div>
                <div class="form-group">
                <input 
                       type="Email" 
                       name="Email" 
                       id="place2" 
                       class='form-control email' 
                       placeholder='Email'
                       autocomplete="off"
                       value="<?php if(isset($email)){echo $email;}; ?>"
                       />
                
                <i class="fas fa-envelope fa-fw"></i>
                <span class="asterisx">*</span>
                    <div class="alert alert-danger custom-alert">
                        Email Can't be <strong>Empty</strong>
                    </div>
                </div>
                <div class="form-group">
                <input type="text" 
                       name="PhoneNumber" 
                       class='form-control' 
                       id="place3" 
                       name= 'CellPhone' 
                       placeholder='Your Phone Number' 
                       autocomplete="off"
                       value="<?php if(isset($CellPhone)){echo $CellPhone;}; ?>"/>
                
                <i class="fas fa-mobile-alt fa-fw"></i>
                </div>
                <div class="form-group">
                <textarea 
                          class="form-control place" 
                          id="place4" 
                          placeholder='Type Your Message' 
                          name="Message"><?php if(isset($msg)){echo $msg;}; ?></textarea>
                <div class="alert alert-danger custom-alert">
                        The Message Must be Larger than <strong> 10 </strong> Char
                </div>
                </div>
                <input type='submit' value="Send Message" class="btn btn-success" id="msg" disabled />
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