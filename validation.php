<?php
// Global result of form validation
$valid = false;
// Global array of validation messages. For valid fields, message is ""
$val_messages = Array();

// Output the results if all fields are valid.
function the_results()
{
  global $valid;

  if($_SERVER["REQUEST_METHOD"]=="POST"){
    if($valid===true){
            echo '<div class="results">';
                echo '<div class="result-text">Your accommodation name is: '.$_POST['accommName'].'</div>';
                echo '<div class="result-text">Your accommodation address is: '.$_POST['address'].'</div>';
                echo '<div class="result-text">Your contact email address is: '.$_POST['email'].'</div>';
                echo '<div class="result-text">Your contact phone number is: '.$_POST['phoneNr'].'</div>';
                echo '<div class="result-text">Your type of accommodation is: '.$_POST['accommodation'].'</div>';
            echo '</div>';
    }
  }
  else{
    echo '';
  }
}

// Check each field to make sure submitted data is valid. If no boxes are checked, isset() will return false
function validate()
{
    global $valid;
    global $val_messages;

    if($_SERVER['REQUEST_METHOD']== 'POST')
    {
      //Accommodation name
      if(isset($_POST['accommName'])){
        $accommName = $_POST['accommName'];
        foreach($_POST as $type => $value){
          if($type === 'accommName'){
            if((preg_match('~^\p{Lu}~u', $accommName) === 1)){
              $val_messages['accommName'] = '';
            }else{
              $val_messages['accommName'] = 'Name has to start with a capital letter';
            }
          }
        }
      }else{
        echo "Please, enter an official name";
      } 

      //address
      if(isset($_POST['address'])){
        $address = $_POST['address'];
        foreach($_POST as $type => $value){
          if($type === 'address'){
            if(strlen($address)>=5){
              $addressMatch=true;
              $val_messages['address'] = '';
            }else{
              $addressMatch=false;
              $val_messages['address'] = 'Address must have at least 5 characters';
            }
          }
        }
      }else{
        $addressMatch=false;
        echo "Please, enter your address";
      } 

      //email
      if(isset($_POST['email'])){
        $email = $_POST['email'];
        foreach($_POST as $type => $value){
          if($type === 'email'){
            if((preg_match('#^(.+)@([^\.].*)\.([a-z]{2,})$#',$email))){
              $val_messages['email'] = '';
            }else{
              $val_messages['email'] = 'Invalid email address format';
            }
          }
        }
      }else{
        echo "Please, enter an email address";
      } 


      //Phone number
      if(isset($_POST['phoneNr'])){
        $phoneNr = $_POST['phoneNr'];
        foreach($_POST as $type => $value){
          if($type === 'phoneNr'){
            if((is_numeric($phoneNr))===true){
                $phoneNrMatch = true;
              $val_messages['phoneNr'] = '';
            }else{
                $phoneNrMatch = false;
              $val_messages['phoneNr'] = 'Invalid phone number (In case you need to enter a country code use 00 instead of +, e.g. 001, not +1).';
            }
          }
        }
      }else{
        echo "Please, enter the contact number";
      } 

      //accommodation type
      if(isset($_POST['accommodation'])){
        $accommodationMatch=true;
        $val_messages['accommodation'] = '';
      }else{
        $val_messages['accommodation'] = 'Choose 1 accommodation option';
        $accommodationMatch=false;
      }

      $emailMatch=preg_match('#^(.+)@([^\.].*)\.([a-z]{2,})$#',$_POST['email']);
      $accommMatch=preg_match('~^\p{Lu}~u',$_POST['accommName']);
      //set $valid to true if all fields are entered correctly, else keep it set to false
      if(($emailMatch&&$accommMatch&&$phoneNrMatch&&$accommodationMatch&&$addressMatch)==true){
        $valid = true;
      }else{
        $valid = false;
      }
    }
}

// Display error message if a field is not valid. Displays nothing if the field is valid.
function the_validation_message($type) {

  global $val_messages;

  if($_SERVER['REQUEST_METHOD']== 'POST')
  {
    echo '<p class="failure-message">'.$val_messages[$type].'</p>';
  }
}
