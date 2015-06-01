<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <?php echo HTML::style("/assets/css/style.css", array('media' => 'screen')).PHP_EOL ?>
    </head>

    <body>
        <a href="home">Index</a> |
        <a href="contest/entry">Contest Entry</a><br><br>
        <h1>Contest</h1><br>

        <table class="gridtable" cellspacing="0">
            <tr>
                <td colspan="4" class="">Users</td>
            </tr>
            <tr>
                <td class="headers">Id</td>
                <td class="headers">Name</td>
                <td class="headers">Email</td>
                <td class="headers">Edit</td>
            </tr>
            <?php
            if($userCount == 0) {
                echo 'There are no entries currently';
            }else{
                foreach($users as $u) {
                    echo "<tr>
                            <td class='item'>".$u->id."</td>
                            <td class='item'>".$u->first_name."</td>
                            <td class='item'>".$u->email."</td>
                            <td class='item'><a href='contest/entry/$u->id'>Edit</td>
                         </tr>";
                }
            }
            ?>
        </table>
    </body>
</html>