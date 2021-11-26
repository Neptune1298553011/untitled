
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>

</head>
<body>
<nav>

    <ul><a href="about.view.php" >About Me</ul>
    <ul><a href="contact.view.php">Contact</a> </ul>
</nav>
<ul>
       <?php foreach ($tasks as $task):?>
          <?php if($task->completed):?>
           <del><li><?= $task->description; ?></li></del>
       <?php else:?>
       <li><?= $task->description; ?></li>
       <?php endif?>
       <?php endforeach?>
   </ul>
</body>
</html>