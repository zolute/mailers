<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
    <script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
    <link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
    <link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <form name="form1" method="post" action="">
      <table width="600" border="0">
        <tr>
          <th scope="col">Name:</th>
          <th scope="col"><span id="sprytextfield1">
            <label for="name"></label>
            <input type="text" name="name" id="name">
          <span class="textfieldRequiredMsg">A value is required.</span></span></th>
        </tr>
        <tr>
          <th scope="row">Email:</th>
          <td><span id="sprytextfield2">
          <label for="email"></label>
          <input type="text" name="email" id="email">
          <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
        </tr>
        <tr>
          <th scope="row">Phone:</th>
          <td><span id="sprytextfield3">
          <label for="tel"></label>
          <input type="text" name="tel" id="tel">
          <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
        </tr>
        <tr>
          <th scope="row">Message</th>
          <td><span id="sprytextarea1">
            <label for="message"></label>
            <textarea name="message" id="message" cols="45" rows="5"></textarea>
          <span class="textareaRequiredMsg">A value is required.</span></span></td>
        </tr>
        <tr>
          <th colspan="2" scope="row"><input type="submit" name="submit" id="submit" value="Submit"></th>
        </tr>
      </table>
    </form>
    <!-- comment -->
    <script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "email");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "real");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
    </script>
    </body>
</html>
