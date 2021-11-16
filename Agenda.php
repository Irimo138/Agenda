<!DOCTYPE html>
    <html>
    <head>
    <title>Form</title>
    <meta charset = "UTF-8">
    </head>
    <body>
    <?php
        $users;
        $newName = filter_input(INPUT_POST, 'name');
        $newMail = filter_input(INPUT_POST, 'mail');
        $data = filter_input(INPUT_POST, 'data');
        $data=$data." ". $newName . " " . $newMail;
        
        
        function show($data) {
            $users = explode(" ", $data);        
            $length=sizeof($users);
                for ($i=1; $i <$length ; $i++)  {
                    if($i%2==1 || $i==0){
                        echo "<article>" .$users[$i]." ".$users[$i+1]."</article>";
                    }  
                }
        }
        show($data);
        ?>

        <form action="Agenda.php" method="POST">
        <p>Name: <input type="text" name="name"></p>
        <p>Mail <input type="text" name="mail"></p>
        <p><input type="submit" value="Enviar" name="send"></p>
        <?php
            echo '<input type="hidden"  name="data" value="' . htmlspecialchars($data) . '" />';
            echo "<br>";
        ?>

    </form>
 
    </body>
</html>