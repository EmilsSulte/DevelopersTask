<?php print "<!DOCTYPE html>

<html>

<head>
  <title>Product List</title>
</head>

<body>

<b><span style=\"font-size: 20pt; position:relative; right: -50px\">Product List</span></b>
</html><hr style=\"width: 1800px; height: 1%\">
<input  onclick=\"Redirect()\" style=\"position:relative; right: -1660px; top:-40px\"   id=\"button1\" name=\"Add product\" type=\"button\" value=\"Add product\">
<input style=\"position:relative; right: -1680px; top:-40px\"  id=\"button2\" name=\"delete_button\" type=\"button\" value=\"Mass Delete\" tabindex=\"15\">
<hr style=\"width: 1800px; height: 1%; position:relative; top:785px\">
<textarea style=\"position:relative; right: -80px; text-align: center; height: 60px\"  id=\"Product_box\" name=\"object1\">
JVC200123
Acme DISC
1.00\$
Size:700MB
</textarea>
<input id=\"Check_box_1\" name=\"Check\" type=\"checkbox\" style=\"position: relative; right: 91px; top:-53px\">
<textarea style=\"position:relative; right: -120px; text-align: center; height: 60px\"  id=\"Product_box2\" name=\"object2\">
JVC200369
Acme DISC
1.00\$
Size:700MB
</textarea>
<input id=\"Check_box_2\" name=\"Check\" type=\"checkbox\" style=\"position: relative; right: 51px; top:-53px\">
<textarea style=\"position:relative; right: -160px; text-align: center; height: 60px\" id=\"Product_box3\" name=\"object3\">
JVC200442
Acme DISC
1.00\$
Size:700MB
</textarea>
<input id=\"Check_box3\" name=\"Check\" type=\"checkbox\" style=\"position: relative; right: 10px; top: -53px\">
<textarea style=\"position:relative; right: -200px; text-align: center; height: 60px\" id=\"Product_box4\" name=\"object4\">
JVC200522
Acme DISC
1.00\$
Size:700MB
</textarea>
<input id=\"Check_box4\" name=\"Check\" type=\"checkbox\" style=\"position: relative; right: -30px; top: -53px\">
<textarea style=\"position:relative; right: 685px; top: 310px ; text-align: center; height: 60px\" id=\"Product_box5\" name=\"object5\">
GGWP0007
War and Peace
20.00\$
Weight: 2KG
</textarea>
<input id=\"Check_box5\" name=\"Check\" type=\"checkbox\" style=\"position: relative; right: 855px; top: 257px\">
<textarea style=\"position:relative; right: 645px; top: 310px; text-align: center; height: 60px\" id=\"Product_box6\" name=\"object6\">
GGWP0008
War and Peace
20.00\$
Weight: 2KG
</textarea>
<input id=\"Check_box6\" name=\"Check\" type=\"checkbox\" style=\"position:relative; right: 815px; top: 257px\">
<textarea style=\"position:relative; right: 605px; top: 310px; text-align: center; height: 60px\" id=\"Product_box7\" name=\"object7\">
GGWP0009
War and Peace
20.00\$
Weight: 2KG
</textarea>
<input id=\"Check_box7\" name=\"Check\" type=\"checkbox\" style=\"position:relative; right: 775px; top: 257px\">
<textarea style=\"position:relative; right: 565px; top: 310px; text-align: center; height: 60px\" id=\"Product_box8\" name=\"object8\">
GGWP0009
War and Peace
20.00\$
Weight: 2KG
</textarea>
<input id=\"Check_box7\" name=\"Check\" type=\"checkbox\" style=\"position:relative; right: 735px; top: 257px\">
<textarea style=\"position:relative; right: 1445px; top: 640px; text-align: center; height: 60px\" id=\"Product_box9\" name=\"object9\">
TR120555
Chair
40.00\$
Dimension:24x45x15
</textarea>
<input id=\"Check_box8\" name=\"Check\" type=\"checkbox\" style=\"position:relative; right: 1615px; top: 588px\">
<textarea style=\"position:relative; right: 1410px; top: 640px; text-align: center; height: 60px\" id=\"Product_box10\" name=\"object10\">
TR120666
Chair
40.00\$
Dimension:24x45x15
</textarea>
<input id=\"Check_box9\" name=\"Check\" type=\"checkbox\" style=\"position:relative; right: -305px; top: 518px\">
<textarea style=\"position:relative; right: -535px; top: 570px; text-align: center; height: 60px\" id=\"Product_box11\" name=\"object11\">
TR120777
Chair
40.00\$
Dimension:24x45x15
</textarea>
<input id=\"Check_box10\" name=\"Check\" type=\"checkbox\" style=\"position:relative; right: -365px; top: 517px\">
<textarea style=\"position:relative; right: -595px; top: 570px; text-align: center; height: 60px\" id=\"Product_box12\" name=\"object12\">
TR120888
Chair
40.00\$
Dimension:24x45x15
</textarea>
<input id=\"Check_box11\" name=\"Check\" type=\"checkbox\" style=\"position:relative; right: -425px; top: 517px\">"; ?>
<script type="text/javascript">
function Redirect(){
    window.location.assign("scandiwebtask.000webhostapp.com/AddProduct.php")
}
</script>
</body>
  <script>
  function Validate(){
      var x, text;
      x = document.getElementById("Input_box3").value;
      if (is NaN(x) x = str){
          text = "Please, enter the price using numbers";
      }  else {
          text = "Input is good !";
      }
      document.getElementById("demo").innerHtml = text;
  }

  </script>
