<!DOCTYPE html>
<html>
<head>


</head>
<body> 

   <form>
     <input type="text" name="yourname" placeholder="Enter Your First and Last Name" id="fullname">
    <input type="text" name="phone" placeholder="Enter Your Phone NUmber" id="phonenumber" required>
    <input type="submit" name="save" value="Save">
   </form>
<?php
// check if the button has been submitted
if(isset($_GET['save'])){
   echo "form submitted";

}else{
   echo "form not submitted";
}

?>
 <!--we use an id to uniquely identify an item, it is used as a target for CSS styling,
     it can also be used as javascript. No two fields cannot have the same id. -->
    <!--The name field is used to help php, the identity for the server side is the name.
     If i submit the form, i can only access the form ffrom the attribute name.-->
</body>
</html>