<?php require 'views/partials/header.php'; ?>

<!-- ...:::: Start Breadcrumb Section:::... -->
<div class="breadcrumb-section breadcrumb-bg-color--golden">
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="breadcrumb-title">My Account</h3>
                    <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                        <nav aria-label="breadcrumb">
                            <ul>
                                <li><a href="/customers/index">Home</a></li>
                                <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                                <li class="active" aria-current="page">My Account</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- ...:::: End Breadcrumb Section:::... -->

<!-- ...:::: Start Account Dashboard Section:::... -->
<div class="account-dashboard">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-3 col-lg-3">
                <!-- Nav tabs -->
                <div class="dashboard_tab_button" data-aos="fade-up" data-aos-delay="0">
                    <ul role="tablist" class="nav flex-column dashboard-list">
                        <li><a href="#dashboard" data-bs-toggle="tab"
                                class="nav-link btn btn-block btn-md btn-black-default-hover active">Dashboard</a>
                        </li>
                        <li><a href="#orders" data-bs-toggle="tab"
                                class="nav-link btn btn-block btn-md btn-black-default-hover">Orders</a></li>
                        <li><a href="#address" data-bs-toggle="tab"
                                class="nav-link btn btn-block btn-md btn-black-default-hover">Addresses</a></li>
                        <li><a href="/customers/logout"
                                class="nav-link btn btn-block btn-md btn-black-default-hover">Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-9 col-lg-9">
                <!-- Tab panes -->
                <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
                    <div class="tab-pane fade show active" id="dashboard">
                        <section>
                            <div class="account-dashboard">
                                <div class="container">
                                    <div class="profile-form">
                                        <h3>Profile Information</h3>
                                        <div class="profile-table">
                                            <table>
                                                <tr>
                                                    <td><strong>Username</strong></td>
                                                    <td><?php echo htmlspecialchars($user['username']); ?></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Email</strong></td>
                                                    <td><?php echo htmlspecialchars($user['email']); ?></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Full Name</strong></td>
                                                    <td><?php echo htmlspecialchars($user['first_name'] . ' ' . $user['last_name']); ?></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Phone Number</strong></td>
                                                    <td><?php echo htmlspecialchars($user['phone_number']); ?></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Address</strong></td>
                                                    <td><?php echo htmlspecialchars($user['address']); ?></td>
                                                </tr>
                                            </table>
                                            <button id="editProfileBtn">Edit</button>
                                        </div>
                                    </div>

                                    <div id="editProfileForm" style="display:none;">
    <h3>Edit Profile</h3>
    <form action="/profile/saveProfile" method="POST">
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" value="<?php echo htmlspecialchars($user['username']); ?>" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>
        </div>
        <div>
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" id="first_name" value="<?php echo htmlspecialchars($user['first_name']); ?>" required>
        </div>
        <div>
            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" id="last_name" value="<?php echo htmlspecialchars($user['last_name']); ?>" required>
        </div>
        <div>
            <label for="phone_number">Phone Number:</label>
            <input type="tel" name="phone_number" id="phone_number" value="<?php echo htmlspecialchars($user['phone_number']); ?>" required>
        </div>
        <div>
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" value="<?php echo htmlspecialchars($user['address']); ?>" required>
        </div>
        <div>
            <label for="city">City:</label>
            <input type="text" name="city" id="city" value="<?php echo htmlspecialchars($user['city']); ?>" required>
        </div>
        <div>
            <label for="postal_code">Postal Code:</label>
            <input type="text" name="postal_code" id="postal_code" value="<?php echo htmlspecialchars($user['postal_code']); ?>" required>
        </div>
        <div>
            <label for="country">Country:</label>
            <input type="text" name="country" id="country" value="<?php echo htmlspecialchars($user['country']); ?>" required>
        </div>
        <div>
            <button type="submit">Save Changes</button>
        </div>
    </form>
</div>

                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="tab-pane fade" id="orders">
                        <h4>Orders</h4>
                        <div class="table_page table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Order</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Total</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>May 10, 2018</td>
                                        <td><span class="success">Completed</span></td>
                                        <td>$25.00 for 1 item </td>
                                        <td><a href="cart.php" class="view">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>May 10, 2018</td>
                                        <td>Processing</td>
                                        <td>$17.00 for 1 item </td>
                                        <td><a href="cart.php" class="view">View</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="downloads">
                        <h4>Downloads</h4>
                        <div class="table_page table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Downloads</th>
                                        <th>Expires</th>
                                        <th>Download</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Shopnovilla - Free Real Estate PSD Template</td>
                                        <td>May 10, 2018</td>
                                        <td><span class="danger">Expired</span></td>
                                        <td><a href="#" class="view">Click Here To Download Your File</a></td>
                                    </tr>
                                    <tr>
                                        <td>Organic - eCommerce HTML Template</td>
                                        <td>Sep 11, 2018</td>
                                        <td>Never</td>
                                        <td><a href="#" class="view">Click Here To Download Your File</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="tab-pane" id="address">
                        <p>The following addresses will be used on the checkout page by default.</p>
                        <h5 class="billing-address">Billing address</h5>
                        <a href="#" class="view">Edit</a>
                        <p><strong>Bobby Jackson</strong></p>
                        <address>
                            Address: Your address goes here.
                        </address>
                    </div>

                    <div class="tab-pane fade" id="account-details">
                        <h3>Account Details</h3>
                        <div class="login">
                            <div class="login_form_container">
                                <div class="account_login_form">
                                    <form action="#">
                                        <p>Already have an account? <a href="#">Log in instead!</a></p>
                                        <div class="input-radio">
                                            <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Mr.</span>
                                            <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Mrs.</span>
                                        </div>
                                        <br>
                                        <div class="default-form-box mb-20">
                                            <label>First Name</label>
                                            <input type="text" name="first-name">
                                        </div>
                                        <div class="default-form-box mb-20">
                                            <label>Last Name</label>
                                            <input type="text" name="last-name">
                                        </div>
                                        <div class="default-form-box mb-20">
                                            <label>Email</label>
                                            <input type="text" name="email-name">
                                        </div>
                                        <div class="default-form-box mb-20">
                                            <label>Password</label>
                                            <input type="password" name="password">
                                        </div>
                                        <div class="default-form-box mb-20">
                                            <label>Confirm Password</label>
                                            <input type="password" name="confirm-password">
                                        </div>
                                        <div class="login_submit">
                                            <button>Save Changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- end of tab content -->
            </div>
        </div>
    </div>
</div> <!-- ...:::: End Account Dashboard Section:::... -->

<?php require 'views/partials/footer.php'; ?>

<script>
    document.getElementById('editProfileBtn').addEventListener('click', function() {
        document.getElementById('editProfileForm').style.display = 'block';
    });

    document.getElementById('cancelEditBtn').addEventListener('click', function() {
        document.getElementById('editProfileForm').style.display = 'none';
    });
</script>
