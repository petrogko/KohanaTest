<?php
    $firstNameMsg = isset($errors['first_name']) ? $errors['first_name'] : '';
    $firstName = isset($params['first_name']) ? $params['first_name'] : '';
    $emailMsg = isset($errors['email']) ? $errors['email'] : '';
    $email = isset($params['email']) ? $params['email'] : '';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
    </head>

    <body>
        <a href="/kohana/en/home">Index</a> |
        <a href="/kohana/en/contest">Contest</a><br><br>

        <h1>Contest Entry</h1><br><br>

        <?php echo form::open('contest/entry'); ?>
        <table class='editor'>
            <tr>
                <td colspan='2' class='editor_title'>New Entry</td>
            </tr>
            <?php
            echo "<tr>";
            echo "<td>".form::label('first_name', 'First Name: ')."</td>";
            echo "<td><span>".$firstNameMsg."</span></td>";
            echo "<td>".form::input('first_name', $firstName)."</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>".form::label('email', 'Email: ')."</td>";
            echo "<td><span>".$emailMsg."</span></td>";
            echo "<td>".form::input('email', $email)."</td>";
            echo "<tr/>";

            echo "<tr>";
            echo "<td colspan='2' align='left'>".form::submit('submit', 'Add')."</td>";
            echo "</tr>";
            ?>
        </table>
        <?php echo form::close(); ?>

    </body>
</html>