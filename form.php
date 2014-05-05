
<?php 
include "top.php";
$errorMsg = array();
if (isset($_POST["btnSubmit"])){
    $email = "ablasi@uvm.edu";
    $pizza =  htmlentities($_POST["radPizza"],ENT_QUOTES,"UTF-8");

    $pepperoni = isset($_POST["chkPepperoni"]);
    $buffalochicken = isset($_POST["chkBuffaloChicken"]);
    $chkBroccoli = isset($_POST["chkBroccoli"]);
    $chkSausage = isset($_POST["chkSausage"]);
    $chkMeatball = isset($_POST["chkMeatball"]);
    
    $Hotsub =  htmlentities($_POST["radHotsub"],ENT_QUOTES,"UTF-8");
    $radwrap =  htmlentities($_POST["radwrap"],ENT_QUOTES,"UTF-8");
    
    $chkTurkey= isset($_POST["chkMeatball"]);
    $chkHam= isset($_POST["chkHam"]);
    $chkSalami= isset($_POST["chkSalami"]);
    $chkPepperoni2= isset($_POST["chkPepperoni2"]);
    $chkBacon= isset($_POST["chkBacon"]);
    $chkCheese= isset($_POST["chkCheese"]);
    $chkLettuce= isset($_POST["chkLettuce"]);
    $chkTomato= isset($_POST["chkTomato"]);
    $chkOnions= isset($_POST["chkOnions"]);
    $chkOil= isset($_POST["chkOil"]);
    $chkVinegar= isset($_POST["chkVinegar"]);
    $chkMayo= isset($_POST["chkMayo"]);
    $chkMustard= isset($_POST["chkMustard"]);
    
    $message  = '<h2>Your information.</h2>';
    foreach ($_POST as $key => $value){
        
        $message .= "<p>"; 
        
        $camelCase = preg_split('/(?=[A-Z])/',substr($key,3));
        
        foreach ($camelCase as $one){
            $message .= $one . " ";
        }
        $message .= " = " . htmlentities($value,ENT_QUOTES,"UTF-8") . "</p>";
    }
    
    
    
    
        include_once('mailMessage.php');
        $mailed = sendMail($email, $message);
}
if (isset($_POST["btnSubmit"]) AND empty($errorMsg)){  // closing of if marked with: end body submit
    echo $message;
} else {
?>


 
    <p class="title">Place your Order below</p>

<article id="main">
<div class="desc">
    <form action="<? print $phpSelf; ?>" 
      method="post"
      id="frmRegister">
			
<fieldset class="wrapper">
  
     
<h2>Pizza: (15 Dollars)</h2>
<fieldset class="Pizza">
    
    <label><input type="radio"   name="radPizza" value="None" 
                  tabindex="250" checked="checked"        >None</label>
    <label><input type="radio"   name="radPizza" value="Cheese" 
                  tabindex="250"         >Cheese</label>

    <label><input type="radio" name="radPizza" value="White" 
                  tabindex="251" >White</label>
    <label><input type="radio"   name="radPizza" value="Sicilian" 
                  tabindex="231"         >Sicilian</label>

    <label><input type="radio" name="radPizza" value="Pesto" 
                  tabindex="233" >Pesto</label>
    
    
    <h3>Toppings: (2 Dollars Each)</h3>
    
    <label><input type="checkbox" id="chkPepperoni" name="chkPepperoni" value="Pepperoni" 
                  tabindex="221" >Pepperoni</label>
    <br >
    <label><input type="checkbox" id="chkBuffaloChicken" name="chkBuffaloChicken" value="BuffaloChicken"
                  tabindex="223" >Buffalo Chicken</label>
    <br >
    <label><input type="checkbox" id="chkBroccoli" name="chkBroccoli" value="Broccoli"
                  tabindex="223" >Broccoli</label>
    <br >
    <label><input type="checkbox" id="chkSausage" name="chkSausage" value="Sausage"
                  tabindex="223" >Sausage</label>
    <br >
    <label><input type="checkbox" id="chkMeatball" name="chkMeatball" value="Meatball"
                  tabindex="223" > Meatball</label>
</fieldset>

<h2>Subs and Wraps:  (10 Dollars Each)</h2>
<p>** All cold subs and wraps come with a side of fries or chips and a pickle **</p>
<fieldset id="SubsNWraps">
    <h3>Hot Subs</h3>
    <label><input type="radio"  name="radHotsub" value="None" 
                  tabindex="121" checked="checked" >None</label>
    <br >
    <label><input type="radio"  name="radHotsub" value="ChickenParma" 
                  tabindex="121" >Chicken Parma</label>
    <br >
    <label><input type="radio"  name="radHotsub" value="ShrimpParma"
                  tabindex="623" >Shrimp Parma</label>
    <br >
    <label><input type="radio"  name="radHotsub" value="EggplantParma"
                  tabindex="423" >Eggplant Parma</label>
    <br >
    <label><input type="radio"  name="radHotsub" value="BuffaloChicken"
                  tabindex="123" >Buffalo Chicken</label>
    
    <br >
    <label><input type="radio" id="Hsub" name="radHotsub" value="CheeseSteak"
                  tabindex="523" >Cheese Steak</label>
    
    
    <h3>Wraps</h3>
    <label><input type="radio" id="wrap" name="radwrap" value="None" 
                  tabindex="224" checked="checked" >None</label>
    <br >
    <label><input type="radio"  name="radwrap" value="ChickCaesar" 
                  tabindex="224" >Chicken Caesar</label>
    <br >
    <label><input type="radio"  name="radwrap" value="BuffaloChicken"
                  tabindex="225" >Buffalo Chicken</label>
    <br >
    <label><input type="radio"  name="radwrap" value="TunaMelt"
                  tabindex="226" >Tuna Melt</label>
    <br >
    <label><input type="radio"  name="radwrap" value="TurkeyClub"
                  tabindex="227" >Turkey Club</label>
    <br >
    

    <h3>Cold Subs</h3>
    
       <label><input type="checkbox" id="sand" name="chkTurkey" value="Turkey" 
                  tabindex="221" >Turkey</label>
    <br >
    <label><input type="checkbox"  name="chkHam" value="Ham"
                  tabindex="223" >Ham</label>
    <br >
    <label><input type="checkbox"  name="chkSalami" value="Salami"
                  tabindex="223" >Salami</label>
    <br >
    <label><input type="checkbox"  name="chkPepperoni2" value="Pepperoni"
                  tabindex="223" >Pepperoni</label>
    <br >
    <label><input type="checkbox"  name="chkBacon" value="Bacon"
                  tabindex="223" >Bacon</label>
    <br >
    <label><input type="checkbox"  name="chkCheese" value="Cheese"
                  tabindex="223" >Cheese</label>
    <br >
    <label><input type="checkbox"  name="chkTomato" value="Lettuce"
                  tabindex="223" >Lettuce</label>
    <br >
    <label><input type="checkbox"  name="chkTomato" value="Tomato"
                  tabindex="223" >Tomato</label>
    <br >
    <label><input type="checkbox"  name="chkOnions" value="Onions"
                  tabindex="223" >Onions</label>
    <br >
    <label><input type="checkbox"  name="chkOil" value="Oil"
                  tabindex="223" >Oil</label>
    <br >
    <label><input type="checkbox"  name="chkVinegar" value="Vinegar"
                  tabindex="223" >Vinegar</label>
    <br >
    <label><input type="checkbox"  name="chkMayo" value="Mayo"
                  tabindex="223" >Mayo</label>
    <br >
    <label><input type="checkbox" name="chkMustard" value="Mustard"
                  tabindex="223" >Mustard</label>
    
    
</fieldset>




</fieldset>
    <br>
    <fieldset>
    <h2>Information</h2>
    <fieldset class="radio">
    
    <label><input type="radio"   name="opt" value="Delivery" 
                  tabindex="231" checked="checked"        >Delivery</label>

         <label><input type="radio" name="opt" value="PickUp" 
                  tabindex="233" >Pick Up</label>
        <br>
    <label for="txtFirstName" class="required">First Name
  	<input type="text" id="txtFirstName" name="txtFirstName" 
               value=""
               tabindex="100" maxlength="25" placeholder="First Name" 
               onfocus="this.select()" required>
        
	</label>
        <br>
    
    <label for="txtLastName" class="required">Last Name
  	<input type="text" id="txtLastName" name="txtLastName" 
               value=""
               tabindex="110" maxlength="25" placeholder="Last Name" 
               onfocus="this.select()" required>
	</label>
        <br>
    
    	<label for="number" class="required">Phone Number
  	<input type="text" id="number" name="txtnumber" 
               value=""
               tabindex="120" maxlength="45" placeholder="Phone Number" 
               onfocus="this.select()" required >
        </label>
        
        <h3>If Delivery then fill out the following information:</h3>
        <p>** For Delivery we accept cash only **</p>
        
    <label><input type="checkbox" id="cash" name="txtcash" value="cash"
                  tabindex="223" >Paying with cash?</label>
        <br>
        <br>
        
        
        <label for="city" class="required">City
  	<input type="text" id="city" name="txtFirstName" 
               value=""
               tabindex="100" maxlength="25" placeholder="City" 
               onfocus="this.select()" required>
        
	</label>
    
    <label for="State" class="required">State
  	<input type="text" id="State" name="txtState" 
               value=""
               tabindex="110" maxlength="25" placeholder="State" 
               onfocus="this.select()" required>
	</label>
    
    	<label for="Address"  class="required">Address
  	<input type="text" id="Address" name="txtAddress" 
               value=""
               tabindex="120" maxlength="45" placeholder="Address" 
               onfocus="this.select()" required >
        </label>
        
        
        
        <br>	
    <input type="submit" id="btnSubmit" name="btnSubmit" value="Submit Order" 
           tabindex="991" class="button">
    
    <input type="reset" id="btnReset" name="btnReset" value="Clear Order" 
	   tabindex="993" class="button" >

        
        
    </fieldset>
</fieldset>
</form>
</div>
</article>
<? include ("footer.php"); ?>
</body>
<?php } ?>
</html>