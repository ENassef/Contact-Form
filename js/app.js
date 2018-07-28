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


