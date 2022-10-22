<?php
//make the controller aware of the existence if the class
require('../classes/contact_class.php');

//edit, select, update, delete fucntion

//function that will add contact
function addcontact_ctr($a,$b){
    //now let's create an instance f the class and then run the method. 
    //We have taken contactphoneclass from the classes folder. That means we can run all the methods in the classes
    //adn the extended class
    $add_item = new ContactphoneClass();

    //return addcontact_cls($a, $b);

}

?>