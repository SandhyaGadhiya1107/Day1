<html>
    <body bgcolor="grey">
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Book Name</th>
                <th>Amount</th>
</tr>
<tr>
    
<td>
        <?php
        print$_POST["MyName"];
        ?>
        </td>
        <td>
        <?php
        print$_POST["MyAddress"];
        ?>
        </td>
        <td>
        <?php
        print$_POST["MyPhone"];
        ?>
        </td>
        <td>
        <?php
        print$_POST["MyMenu"];
        ?>
        </td>
        <td>
            <?php
            $val=$_POST["Price"]*$_POST["Qty"];
            print$val;
            ?>
            </td>
</tr>
</table>
</body>
</html>