
<DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset="UTF-8">
        <title>PHP</title>
    </head>
    <body>

       <nav>

           <ul><a href="/about.php">About ME</a> </ul>
           <ul><a href="/contact.php">Contact</a> </ul>
       </nav>
    <ul>

        <?php foreach($tasks as $task):?>
           <?php if($tasks->completed):?>
             <del><li><?= $task->description; ?></li></del>
             <?php else:?>
             <li><?= $task->description; ?></li>

        <?php endif?>
    </ul>
    </body>
    </html>
</DOCTYPE>

