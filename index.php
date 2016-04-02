
<?php
include "top.php";
?>

<!-- Display form -->
	<form action="<?php print $phpSelf; ?>"
          method="post"
          id="frmRegister">
          <legend>Enter class number</legend>
          <fieldset>

  	           <label for="firstClass" class="">1

                <input type="text" 
                       id="firstClass" 
                       name="$classes[0]"
                       value="<?php print $classes[0]; ?>"
                       tabindex="100" 
                       maxlength="45" 
                       onfocus="this.select()"
                       autofocus>


                <label for="secondClass" class="">2

                <input type="text" 
                       id="secondClass" 
                       name="$classes[1]"
                       value="<?php print $classes[1]; ?>"
                       tabindex="100" 
                       maxlength="45" 
                       onfocus="this.select()"
                       autofocus>


                <label for="thirdClass" class="">3

                <input type="text" 
                       id="thirdClass" 
                       name="$classes[2]"
                       value="<?php print $classes[2]; ?>"
                       tabindex="100" 
                       maxlength="45" 
                       onfocus="this.select()"
                       autofocus>


                <label for="fourthClass" class="">4

                <input type="text" 
                       id="fourthClass" 
                       name="$classes[3]"
                       value="<?php print $classes[3]; ?>"
                       tabindex="100" 
                       maxlength="45" 
                       onfocus="this.select()"
                       autofocus>

                <label for="fifthClass" class="">5

                <input type="text" 
                       id="fifthClass" 
                       name="$classes[4]"
                       value="<?php print $classes[4]; ?>"
                       tabindex="100" 
                       maxlength="45" 
                       onfocus="this.select()"
                       autofocus>

                <label for="sixthClass" class="">6

                <input type="text" 
                       id="sixthClass" 
                       name="$classes[5]"
                       value="<?php print $classes[5]; ?>"
                       tabindex="100" 
                       maxlength="45" 
                       onfocus="this.select()"
                       autofocus>

                <label for="seventhClass" class="">7

                <input type="text" 
                       id="$classes[6]" 
                       name="seventhClass"
                       value="<?php print $classes[6]; ?>"
                       tabindex="100" 
                       maxlength="45" 
                       onfocus="this.select()"
                       autofocus>


                <label for="eightClass" class="">8

                <input type="text" 
                       id="eighthClass" 
                       name="$classes[7]"
                       value="<?php print $classes[7]; ?>"
                       tabindex="100" 
                       maxlength="45" 
                       onfocus="this.select()"
                       autofocus>


                <label for="ninthClass" class="">9

                <input type="text" 
                       id="ninthClass" 
                       name="$classes[8]"
                       value="<?php print $classes[8]; ?>"
                       tabindex="100" 
                       maxlength="45" 
                       onfocus="this.select()"
                       autofocus>

                <label for="tenthClass" class="">10

                <input type="text" 
                       id="tenthClass" 
                       name="$classes[9]"
                       value="<?php print $classes[9]; ?>"
                       tabindex="100" 
                       maxlength="45" 
                       onfocus="this.select()"
                       autofocus>

          	</fieldset>

          	<fieldset class="buttons">
                <input type="submit" id="btnSubmit" name="btnSubmit" value="Submit" tabindex="900" class="button">
          	</fieldset>
          	
    </form>

    <?php 
    	$_SESSION['classes'] = $classes;
    ?>

<script>
function showResult(str) {
  if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>

<div class="container">
	<input class="search" type="search" name="search" id="search" placeholder="Enter course name or course number" onkeyup="showResult(this.value)"/>
	<div id="livesearch"></div>
</div>


<?php
	include "footer.php";
?>