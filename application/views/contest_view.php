<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <style type="text/css">
            table.gridtable {
                font-family: verdana,arial,sans-serif;
                font-size:11px;
                color:#333333;
                border-width: 1px;
                border-color: #666666;
                border-collapse: collapse;
            }
            table.gridtable th {
                border-width: 1px;
                padding: 8px;
                border-style: solid;
                border-color: #666666;
                background-color: #dedede;
            }
            table.gridtable td {
                border-width: 1px;
                padding: 8px;
                border-style: solid;
                border-color: #666666;
                background-color: #ffffff;
            }
        </style>
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
                    echo "<tr>";
                    echo "<td class='item'>".$u->id."</td>";
                    echo "<td class='item'>".$u->first_name."</td>";
                    echo "<td class='item'>".$u->email."</td>";
                    echo "<td class='item'><a href='contest/entry/$u->id'>Edit</td>";
                    echo "</tr>";
                }
            }
            ?>
        </table>
    </body>
</html>