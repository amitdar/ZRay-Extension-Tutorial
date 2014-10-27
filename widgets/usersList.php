<?php global $tutorial; ?>
<h2>Users list</h2>
<table>
    <tbody>
        <?php
        $users = $tutorial->getUsers(10);
        
        if (count($users) == 0) {
            echo '<tr><td>No users found</td></tr>';   
        } else {
            foreach($users as $user) {
                echo '<tr>';
                echo '<td>' . $user->getName() . '</td>';
                echo '<td>' . $user->getLast() . '</td>';
                echo '</tr>';
            }
        }
        ?>
    </tbody>
</table>