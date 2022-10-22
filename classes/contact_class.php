<?php
//contact phone entity
require('../setting/db_class.php');


class ContactphoneClass extends db_connection{

    //add, edit, delete
    //the function below indicates that this wil take two items, let's say
    // for instance name and number 
    function addcontact_cls($a,$b){
        //writting the sql query, there are two possible queries. Learn the difference Tawina
        $sql = "INSERT INTO tablename VALUES ('$a', '$b')";

        $sqltwo = "INSERT INTO tablename ('pname', 'pphone') VALUES ('$a', '$b')";

         //executing the query
         // we are using the this keyword means that you are
         // running the db_query in the other class(the db_class)
         //return $this->db_query($sql);
    }
    //if we are doing edit, what do we do? see below: we take the id, and the attributes
        function editcontact_cls($itemid, $newfullname, $newphonenumber){

        }
    
        //if we are doing delete we only need the id
        function deletecontact_cls($itemid){

        }

    //slecting contacts, we can select one contact, or all contacts
    //select one contact
    function selectone($itedmid){

    }

    //selecting all

    }

?>