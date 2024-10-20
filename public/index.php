<?php
require_once __DIR__ . '/../config/database_server.php';

$results = fetchAll($pdo, 'account_transition');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Page</title>
    <link rel="stylesheet" href="/assets/styles.css">
</head>

<body>

    <h1>transition modals</h1>

    <table>
        <thead>
            <tr>
                <th>barcode</th>
                <th>valuse</th>
                <th>datetimg</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($results as $row): ?>
                <tr>
                    <td><?= htmlspecialchars($row['account_transition_id']) ?></td>
                    <td><?= htmlspecialchars($row['account_transition_value']) ?></td>
                    <td><?= htmlspecialchars($row['account_transition_datetime']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>