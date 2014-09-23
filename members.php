<?php
include_once 'inc/db_connect.php';
include_once 'inc/functions.php';
sec_session_start();
include('header.php');
?>
<?php if (login_check($mysqli) == true) : ?>

        <div class="row">
            <div class="container">
                <div class="col-md-7">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">Members</h3>
                        </div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Email</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $sql = 'SELECT id, username, email FROM members';


                            $result = mysqli_query($mysqli, $sql);
                            if ($result) { // If it ran OK, display the records.
                                // Fetch and print all the records:
                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                    echo "<tr><td>" . $row['id'] . "</td>"."<td>" . $row['username'] . "</td>"."<td>" . $row['email'] . "</td></tr>";

                                } // Free up the resources.
                            }
                            mysqli_close($mysqli); // Close the database connection. ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="login.php">login</a>.
            </p>
        <?php endif; ?>


<?php include('footer.php'); ?>

 