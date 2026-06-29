<?php

require 'header.php';

require_once '../app/models/User.php';

$user = new User();

$data =
    $user->getAll();

?>

<div class="card">

    <div class="card-body">

        <h3 class="mb-4">

            Data User

        </h3>

        <table class="table table-bordered">

            <thead>

                <tr>

                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>

                </tr>

            </thead>

            <tbody>

                <?php foreach($data as $row): ?>

                    <tr>

                        <td>
                            <?= $row['id']; ?>
                        </td>

                        <td>
                            <?= $row['nama']; ?>
                        </td>

                        <td>
                            <?= $row['email']; ?>
                        </td>

                        <td>

                            <?= $row['role']; ?>

                        </td>

                    </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </div>

</div>

<?php require 'footer.php'; ?>