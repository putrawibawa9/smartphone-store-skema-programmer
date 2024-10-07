
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        table th, table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background-color: #3498db;
            color: white;
            font-size: 16px;
        }

        table td {
            font-size: 14px;
            color: #333;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        /* Add styles for the only column */
        .report-details {
            display: flex;
            flex-direction: column;
        }

        .report-details span {
            margin-bottom: 5px;
            font-weight: bold;
        }

        .report-description {
            color: #666;
            font-size: 13px;
            margin-top: 10px;
        }

        .report-footer {
            margin-top: 15px;
            display: flex;
            justify-content: space-between;
            font-size: 12px;
            color: #888;
        }

    </style>
</head>
<body>

    <h2>Report List</h2>

    <table>
        <thead>
            <tr>
                <th>Report Details</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['reports'] as $report) : ?>
            <tr>
                <td>
                    <div class="report-details">
                      
                        <div class="report-description">
                            <?= $report['report'] ?>
                        </div>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
