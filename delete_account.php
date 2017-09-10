<div id="lightbox-panel">

	<div id="flashaccount"></div>

	<div id="delete_notify">

    <p class="delete_page">Are you sure you would like to delete your account ?</p>

    <p><center>Remember you can hide your profile and it will be invisible to other users</center></p><br/>

   <form id="send_message" action="flash_account.php" method="post" enctype="multipart/form-data">

    	<div style="padding:20px";>

    	Enter Password to delete :  <input type="passowrd" name="password" id"password" required/>

    </div>

    	<button type="submit" class="btn confirm" id="confirm">Confirm</button><a href="index.php"  class="btn go_back">Go Back</a>

    </form>

    

</div>

</div>

<script type="text/javascript">

    $("a#close-panel").click(function(){

    $("#lightbox, #lightbox-panel").fadeOut(300);

      $("#lightbox").html("result reloaded successfully");

      $("body").removeAttr("style");

  });

</script>

