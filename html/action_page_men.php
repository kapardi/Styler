<html>
<body>

Welcome your waist is <?php echo $_POST["Waist"]; ?><br>
Your Chest is: <?php echo $_POST["Chest"]; ?><br>
Your Hip is: <?php echo $_POST["Hips"]; ?><br>
Your Complexion is: <?php echo $_POST["Complexion"]; ?><br>
<?php
if($_POST["Waist"] > "39" or $_POST["Hips"] > 50 or $_POST["Chest"] > 50)
{
        echo "Your Body Shape is Heavy";
}
else if($_POST["Chest"] < 40 and $_POST["Waist"] <30)
{
        echo "Your Body Shape is Skinny";
}
else if($_POST["Chest"] > 40 and $_POST["Chest"] < 44 and $_POST["Waist"] >=30 and $_POST["Waist"] <36)
{
        echo "Your Body Shape is Muscular";
}
else if($_POST["Chest"] >= 44 and $_POST["Chest"] <= 50 and $_POST["Waist"] >=36 and $_POST["Waist"] <=39)
{
        echo "Your Body Shape is Soft";
}

?>
</body>
</html>
