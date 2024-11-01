<?php
require $_SERVER['DOCUMENT_ROOT'] . "/views/SuperAdmin/partials/header.php";
?>
<div id="addForm" style="display: none;">
    <div id="addUserForm" >
        <h1>Add User</h1>
        <form method="POST" action="/SuperAdmin/users/create">
            <div class="input-group">
                <input type="text" name="username" placeholder="Username" required>
                <input type="email" name="email" placeholder="Email" required>
            </div>

            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>
                <input type="text" name="phone_number" placeholder="Phone Number" required>
            </div>

            <div class="input-group">
                <input type="text" name="first_name" placeholder="First Name" required>
                <input type="text" name="last_name" placeholder="Last Name" required>
            </div>

            <div class="input-group">
                <input type="text" name="address" placeholder="Address" required>
                <input type="text" name="postal_code" placeholder="Postal Code" required>
            </div>

            <div class="input-group">
                <input type="text" name="city" placeholder="City" required>
                <input type="text" name="country" placeholder="Country" required>
            </div>

            <button type="submit" class="btn-blue">Add User</button>
            <button type="button" class="btn-danger" onclick="toggleAddUserForm()">Cancel</button>
        </form>
    </div>
</div>

    <div class="container-table">
    <br><br>
    <button id="addUserBtn" class="btn-blue" onclick="toggleAddUserForm()">+Add User</button>
    <br><br>
    <h2 class="mb-4">Users List</h2>

    <br><br>
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
        <tr>
            <th>User ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone Number</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php if (isset($users)) {
            foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo htmlspecialchars($user['username']); ?></td>
                    <td><?php echo htmlspecialchars($user['email']); ?></td>
                    <td><?php echo htmlspecialchars($user['first_name']); ?></td>
                    <td><?php echo htmlspecialchars($user['last_name']); ?></td>
                    <td><?php echo htmlspecialchars($user['phone_number']); ?></td>
                    <td>
                        <a href="/SuperAdmin/users/toggleStatus/<?php echo $user['id']; ?>/<?php echo ($user['status'] == 1 ? '0' : '1'); ?>"
                           class="<?php echo ($user['status'] == 1 ? 'btn-danger' : 'btn-Green'); ?>">
                            <?php echo ($user['status'] == 1 ? 'Disable' : 'Enable'); ?>
                        </a>

                    </td>
                </tr>
            <?php endforeach;
        } ?>
        <tr>
            <td class="footer-table"   colspan="7";>

            </td>
        </tr>

        </tbody>
    </table>
</div>

<?php
require $_SERVER['DOCUMENT_ROOT'] . "/views/SuperAdmin/partials/footer.php";
?>