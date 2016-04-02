
<?php 
	// Variables
	$classes = array[];

	// Save data on submit
	if (isset($_POST["btnSubmit"])) {

	}
?>
	<!-- Display form -->
	<form action="<?php print $phpSelf; ?>"
          method="post"
          id="frmRegister">
          <fieldset>

  	           <label for="firstClass" class="">1

                <input type="text" 
                       id="firstClass" 
                       name="firstClass"
                       value="<?php print $classes[0]; ?>"
                       tabindex="100" 
                       maxlength="45" 
                       onfocus="this.select()"
                       autofocus>


                <label for="secondClass" class="">2

                <input type="text" 
                       id="secondClass" 
                       name="secondClass"
                       value="<?php print $classes[1]; ?>"
                       tabindex="100" 
                       maxlength="45" 
                       onfocus="this.select()"
                       autofocus>


                <label for="thirdClass" class="">3

                <input type="text" 
                       id="thirdClass" 
                       name="thirdClass"
                       value="<?php print $classes[2]; ?>"
                       tabindex="100" 
                       maxlength="45" 
                       onfocus="this.select()"
                       autofocus>


                <label for="fourthClass" class="">4

                <input type="text" 
                       id="fourthClass" 
                       name="fourthClass"
                       value="<?php print $classes[3]; ?>"
                       tabindex="100" 
                       maxlength="45" 
                       onfocus="this.select()"
                       autofocus>

                <label for="fifthClass" class="">5

                <input type="text" 
                       id="fifthClass" 
                       name="fifthClass"
                       value="<?php print $classes[4]; ?>"
                       tabindex="100" 
                       maxlength="45" 
                       onfocus="this.select()"
                       autofocus>

                <label for="sixthClass" class="">6

                <input type="text" 
                       id="sixthClass" 
                       name="sixthClass"
                       value="<?php print $classes[5]; ?>"
                       tabindex="100" 
                       maxlength="45" 
                       onfocus="this.select()"
                       autofocus>

                <label for="seventhClass" class="">7

                <input type="text" 
                       id="seventhClass" 
                       name="seventhClass"
                       value="<?php print $classes[5]; ?>"
                       tabindex="100" 
                       maxlength="45" 
                       onfocus="this.select()"
                       autofocus>


                <label for="eightClass" class="">8

                <input type="text" 
                       id="eighthClass" 
                       name="eighthClass"
                       value="<?php print $classes[5]; ?>"
                       tabindex="100" 
                       maxlength="45" 
                       onfocus="this.select()"
                       autofocus>


                <label for="ninthClass" class="">9

                <input type="text" 
                       id="ninthClass" 
                       name="ninthClass"
                       value="<?php print $classes[5]; ?>"
                       tabindex="100" 
                       maxlength="45" 
                       onfocus="this.select()"
                       autofocus>

          	</fieldset>

          	<fieldset class="buttons">
                <input type="submit" id="btnSubmit" name="btnSubmit" value="Register" tabindex="900" class="button">
          	</fieldset>
          	
    </form>