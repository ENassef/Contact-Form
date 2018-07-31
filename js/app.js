/* global $, alert, console*/
/*
Function use : Hide The Placeholder When The User Foucs The Input
arg : The Id Name
Version : 1.0
Maker : Eslam Nassef ( Coder )
*/
function placeholder (id){
    
    'use strict';
    
    var myInput = document.getElementById(id);
    
    myInput.onfocus = function () {
    'use strict';
    
    this.setAttribute('date-place', this.getAttribute('placeholder'));
    
    this.setAttribute('placeholder' , '')
    
    }

    myInput.onblur = function () {
        'use strict';

        this.setAttribute('placeholder', this.getAttribute('date-place'));

        this.setAttribute('date-place' , '')

    }
}

placeholder('place1');
placeholder('place2');
placeholder('place3');
placeholder('place4');

/*
Function use : validation
arg : [The Id Name , what to find in the parent 1 , what to find in the parent 2 , charNumber to check]
Version : 1.0
Maker : Eslam Nassef ( Coder )
*/
function vald (id, find1,find2 ,charNumber){
    'use strict'
    
    var formErrors = true;
    var executed = false;
    function checkErrors(as,aa){
        
        if (as === true){
            if (!aa){
                
            console.log('Bad')
            executed = false
        }}else{
            if (!aa){
        
            console.log('Good')
            executed = false
        }}
    }
    checkErrors(formErrors,executed);
    $(function(){
   
    'use strict';
    
    $(id).blur(function () {
        
        if($(this).val().length < charNumber){
            
            $(this).css('border', '1px solid #F00')
            
            $(this).parent().find(find1).fadeIn(200);
            
            $(this).parent().find(find2).fadeIn(100);
            
            formErrors = true
            
        }else{
            
            $(this).css('border', '1px solid #080')
            
            $(this).parent().find('.custom-alert').fadeOut(200);
            
            $(this).parent().find('.asterisx').fadeOut(100);
            
            formErrors = false
        }
        
        checkErrors();
        
    });
    
});

}

vald('#place1','.custom-alert','.asterisx',4)
vald('#place2','.custom-alert','.asterisx',1)
vald('#place4','.custom-alert','.asterisx',10)


/*

This Block Have A Block of Code That Make The Phone Input Border Go Green If There is a Value In It
And The Orginal Border Color If Theren't Any Value

*/

// Strat of Block

var cellPhone = document.getElementById('place3');

cellPhone.onblur=function(){
    
    'use strict'
    
    if(this.value.length == 1){
        $(this).css('border-color', '#080');
    }else{
        
        $(this).css('border-color', '#69c3c3')
        
    }}

// End of Block


$(function() {
    
    'use strict'

    var formErrors = true;
    
    function checkErrors(){
        
        if (formErrors === true){
            
        }else{
            
        }
    }
});