<!-- File: /app/View/User/index.ctp -->

<h1>User List</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Gender</th>
        <th>DOB</th>
        <th>License</th>
        <th>Address</th>
        <th>Postal Code</th>
        <th>City</th>
        <th>Email</th>
        <th>Studies</th>
        <th>Societies</th>
        <th>Created At</th>
    </tr>

    <?php foreach ($users as $user) : ?>
        <tr>
            <td><?php echo $user['User']['id']; ?></td>
            <td>
                <?php echo $this->Html->link(
                    $user['User']['title'],
                    array('controller' => 'users', 'action' => 'view', $user['User']['id'])
                ); ?>
            </td>
            <!-- Add studies and society column here -->
            <td><?php echo $user['User']['created']; ?></td>
        </tr>
    <?php endforeach; ?>
    <?php unset($user); ?>
</table>