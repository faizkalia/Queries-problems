
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="Jquery.js"></script>
    

    <link rel="stylesheet" href="form.css" >
    <title>Inputs and Attributes</title>
</head>

<body>
<div class="container">
   <form id="form"  action="fetch_data_list.php" method="post">
      <div class="row">
      <p class="text-center fs-2">Simple Form</p>
</div>
<div class="links">
      <a href="input-types.php"  id="hide" class="link1">Back to login</a>
      <a href="fetch_data_list.php">Next</a>
</div>

      <!------------firstname--------------->
      <div class="row">
      <div class="col-md-4  firstName">
      <label for="firstName" class="form-label">First_name</label>
      <input type="text" class="form-control"name="firstName" id="firstName"
      placeholder="Enter your firstname" value="<?php echo isset($_GET['firstName']) ? $_GET['firstName'] : ''; ?>" autocomplete="off">
      <span id="user" class="text-danger">
      <i class="fa fa-exclamation-circle text-danger" aria-hidden="true" id="icon" style="display:none;"></i>
      </span>
    </div>
      <!------------lastname--------------->
      <div class="col-md-4  lastName">
        <label for="lastName" class="form-label">Last_name</label>
        <input type="text" class="form-control" name="lastName" id="lastName"
        placeholder="Enter your lastname" value="<?php echo isset($_GET['lastName']) ? $_GET['lastName'] : ''; ?>" autocomplete="off">
        <span id="user1" class="text-danger">
        <i class="fa fa-exclamation-circle text-danger" aria-hidden="true" id="icon1" style="display:none;"></i>
        </span>
      </div>
      </div>
      <hr>
      <!------------password--------------->
      
      <div class="row">
      <div class="col-md-4 password">
        <label for="Password1" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="Password1" 
        placeholder="Enter your password" value="<?php echo isset($_GET['password']) ? $_GET['password'] : ''; ?>" autocomplete="off">
        <span id="user2" class="text-danger">
      <i class="fa fa-exclamation-circle text-danger" aria-hidden="true" id="icon2" style="display:none;"></i>
        </span>
        <img id="hidden" src="eye-close.png" alt="hide">
      </div>
      

      
      <!------------mobile-no--------------->
      <div class="col-md-4 Mobile">
        <label for="Mobile1" class="form-label">Mobile No</label>
        <input type="tel" id="phone" class="form-control" name="Mobile" id="phone" maxlength="15" 
        placeholder="Enter your phoneNo" value="<?php echo isset($_GET['Mobile']) ? $_GET['Mobile'] : ''; ?>" autocomplete="off">
        <span id="user3"class="text-danger">
      <i class="fa fa-exclamation-circle text-danger" aria-hidden="true" id="icon3" style="display:none;"></i>
        </span>
      </div>
      </div>
      <hr>
      <!------------email--------------->
      <div class="row">
      <div class="col-md-4 email">
        <label for="Email" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" id="Email" aria-describedby="emailHelp"
        placeholder="Enter your email" value="<?php echo isset($_GET['email']) ? $_GET['email'] : ''; ?>" autocomplete="off">
        <span id="user4" class="text-danger">
      <i class="fa fa-exclamation-circle text-danger" aria-hidden="true" id="icon4" style="display:none;"></i>
        </span>
      </div>
      <!------------textarea--------------->
      <div class="col-md-4 textarea">
        <label for="Address" class="form-label">Address</label>
        <textarea class="form-control" name="address" id="Address" placeholder="Enter your address"
        value="<?php echo isset($_GET['address']) ? $_GET['address'] : '';?>"></textarea>
        <span id="user5" class="text-danger">
        <i class="fa fa-exclamation-circle text-danger" aria-hidden="true" id="icon5" style="display:none;"></i>
      </span>
        </span>
      </div>
      </div>
      <hr>
      <!------------dob--------------->
      <div class="row">
      <div class="col-md-4 DOB">
        <label for="validationbirth" class="form-label">Select your DOB:</label>
        <input type="date" name="DOB" id="validationbirth"
        value="<?php echo isset($_GET['DOB']) ? $_GET['DOB'] : ''; ?>" class="rounded text-center bg-dark text-white border-white" required/><br>
      </div>
      

      <!------------gender--------------->
    <div class="col-md-4 form-check pt-3">
    Select your Gender: <br>
    Male<input class="form-check-input" type="radio" name="Gender" value="male"
    <?php echo (isset($_GET['Gender']) && $_GET['Gender'] === 'male') ? 'checked' : ''; ?>><br>
    Female<input class="form-check-input" type="radio" name="Gender"  value="female"
    <?php echo (isset($_GET['Gender']) && $_GET['Gender']==='female')?'checked':'';?>><br>
    Other<input class="form-check-input" type="radio" name="Gender" value="other"
    <?php echo (isset($_GET['Gender'])&& $_GET['Gender']==='other')?'checked':'';?>><br>
  </div>
</div>
<hr>
  <div class="row p-0">
    <!-----------------------Country----------------------------->
  <div class="dropdown col p-0
  ">
    <label for="select">Select your Country:</label>
      <select class="form-select bg-dark text-white" name="Country" aria-label="Select Country">
          <option value="India" id="select"
          <?php echo (isset($_GET['Country'])&& $_GET['Country']==='India')?'selected':'';?>>India</option>
          <option value="Canada"
          <?php echo (isset($_GET['Country'])&& $_GET['Country']==='Canada')?'selected':'';?>>Canada</option>
          <option value="United Kingdom"
          <?php echo (isset($_GET['Country'])&& $_GET['Country']==='United Kingdom')?'selected':'';?>>United Kingdom</option>
      </select>
  </div>
    <!-----------------------Hobby----------------------------->
  <div class="form-check col">
    Select Your Hobbies:<br>
    <input class="form-check-input" type="checkbox"  id="defaultCheck1" name="Hobby[]" value="ReadingBooks"
    <?php
// Assuming 'Hobby' is a comma-separated string in the URL
$hobbies = isset($_GET['Hobby']) ? explode(',', $_GET['Hobby']) : array();
echo (in_array('ReadingBooks', $hobbies)) ? 'checked' : '';
?>
>
    <label class="form-check-label" for="defaultCheck1" required>
      Reading Books
    </label><br>
    <input class="form-check-input" type="checkbox"  id="defaultCheck2" name="Hobby[]" value="Cricket"
    <?php
// Assuming 'Hobby' is a comma-separated string in the URL
$hobbies = isset($_GET['Hobby']) ? explode(',', $_GET['Hobby']) : array();
echo (in_array('Cricket', $hobbies)) ? 'checked' : '';
?>
 >
    <label class="form-check-label" for="defaultCheck1" required>
      Cricket
    </label><br>
    <input class="form-check-input" type="checkbox"  id="defaultCheck3" name="Hobby[]" value="Music"
    <?php
// Assuming 'Hobby' is a comma-separated string in the URL
$hobbies = isset($_GET['Hobby']) ? explode(',', $_GET['Hobby']) : array();
echo (in_array('Music', $hobbies)) ? 'checked' : '';
?>
>
    <label class="form-check-label" for="defaultCheck1" required>
      Music
    </label>
  </div>
  </div>
  
  
  <div class="row buttons">
    <input type="reset"  name="reset" id="btn" value="Reset"/>
    <input type="submit" name="button" id="btn1" value="Submit" onclick="validation()"/>
  </div>
   </form>
</body>
<script>
    document.getElementById('hidden').addEventListener('click', function () {
    var passwordInput = document.getElementById('Password1');
    if (passwordInput.type === 'password') {
      passwordInput.type = 'text';
      this.src = 'eye-open.png'; // Change to the open eye icon
    } else {
      passwordInput.type = 'password';
      this.src = 'eye-close.png'; // Change to the closed eye icon
    }
  });

  
  /*---------------------------form validation -----------------------------*/
  function validation() {
    let firstName = document.getElementById('firstName').value;
    let lastName = document.getElementById('lastName').value;
    let Password1=document.getElementById('Password1').value;
    let phone=document.getElementById('phone').value;
    let Email=document.getElementById('Email').value;
    let Address=document.getElementById('Address').value;
    let icon=document.getElementById('icon');
    let icon1=document.getElementById('icon1');
    let icon2=document.getElementById('icon2');
    let icon3=document.getElementById('icon3');
    let icon4=document.getElementById('icon4');
    let icon5=document.getElementById('icon5');

    

  /*-----------------------firstname------------------*/    
  if (firstName == "") {
    $('#icon').css('display', 'block').html('Enter your firstname');
} else if (firstName.length < 3 || firstName.length > 8) {
  $('#icon').css('display', 'block').html('Minimum 3 letters and maximum 8 letters');
} else if (!isNaN(firstName)) {
  $('#icon').css('display', 'block').html('Numbers are not allowed');
} else {
   $('#icon').css('display','none').html('');
}

    /*---------------------lastname-------------------------*/
    if (lastName == "") {
    $('#icon1').css('display', 'block').html('Enter your firstname');
} else if (lastName.length < 3 || lastName.length > 8) {
  $('#icon1').css('display', 'block').html('Minimum 3 letters and maximum 8 letters');
} else if (!isNaN(lastName)) {
  $('#icon1').css('display', 'block').html('Numbers are not allowed');
} else {
   $('#icon1').css('display','none').html('');
}

  /*---------------------------password------------------------------*/
    if(Password1 == ""){
      $('#icon2').css('display','block').html('Enter your password');
    }else if(!/^[A-Z]/.test(Password1)){
      $('#icon2').css('display','block').html('Start will Capital');
    }else if((Password1.length<=5) || (Password1.length >15)){
      $('#icon2').css('display','block').html('Minimum 5 length and maximum 15 length');
    }
    else{
      $('#icon2').css('display','none').html('');
    }
    /*---------------------phoneno-------------------------*/
    if(phone==""){
      $('#icon3').css('display','block').html('Enter your phone NO');
    }else if(isNaN(phone)){
      $('#icon3').css('display','block').html('Characters are not allowed');
    }else if(phone.length!=10){
      $('#icon3').css('display','block').html('only 10 digit number is allowed');
    }
    else{
      $('#icon3').css('display','none').html('');
    }
    /*-----------------------email---------------------*/
    if(Email==""){
      // document.getElementById('icon4').style.display = "block";
      $('#icon4').css('display','block').html('Enter your email');
    }else if(Email.indexOf('@')<=0){
      // document.getElementById('icon4').style.display = "block";
      $('#icon4').css('display','block').html('@ invalid position');
    }else if((Email.charAt(Email.length-4)!='.') && (Email.charAt
    (Email.length-2)!='.')){
      // document.getElementById('icon4').style.display = "block";
      $('#icon4').css('display','block').html('. Invalid Position');
    }
    else{
      $('#icon4').css('display','none').html('');
    }
    /*-----------------------------address---------------------*/
    if(Address==""){
      $('#icon5').css('display','block').html('Enter your address');
    }else{
      $('#icon5').css('display','none').html('');
    }
    
    
}
   </script>
</html>