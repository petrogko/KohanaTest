<?php
    $firstNameMsg = isset($errors['first_name']) ? $errors['first_name'] : '';
    $firstName = isset($params['first_name']) ? $params['first_name'] : '';
    $emailMsg = isset($errors['email']) ? $errors['email'] : '';
    $email = isset($params['email']) ? $params['email'] : '';
    $action = isset($params['action']) ? $params['action'] : '';
    $label = isset($params['label']) ? $params['label'] : '';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
    </head>

    <body>
        <a href="/kohana/en/home">Index</a> |
        <a href="/kohana/en/contest">Contest</a><br><br>

        <h1>Contest Entry</h1><br><br>

        <?php echo form::open('en/contest/entry'.$action); ?>
        <table class='editor'>
            <tr>
                <td colspan='2' class='editor_title'>New Entry</td>
            </tr>
            <?php echo "<tr>
                    <td>".form::label('first_name', 'First Name: ')."</td>
                    <td><span>".$firstNameMsg."</span></td>
                    <td>".form::input('first_name', $firstName)."</td>
                </tr>
                <tr>
                    <td>".form::label('email', 'Email: ')."</td>
                    <td><span>".$emailMsg."</span></td>
                    <td>".form::input('email', $email)."</td>
                <tr/>
                <tr>
                    <td colspan='2' align='left'>".form::submit('submit', $label)."</td>
                </tr>"; ?>
        </table>
        <?php echo form::close(); ?>

    </body>
</html>