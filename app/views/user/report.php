<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 14px;
            font-weight: bold;
            color: #555;
            margin-bottom: 5px;
        }

        input[type="text"], input[type="email"], textarea, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 14px;
            color: #333;
        }

        textarea {
            height: 100px;
            resize: none;
        }

        input[type="file"] {
            margin-bottom: 15px;
        }

        .submit-btn {
            width: 100%;
            padding: 10px;
            background-color: red;
            border: none;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            background-color: #2980b9;
        }

        .error-message {
            color: red;
            font-size: 12px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Submit Your Report</h2>

        <form action="<?= BASEURL?>/report/store" method="POST" enctype="multipart/form-data">
    
            <!-- Description Field -->
            <label for="description">Issue Description:</label>
            <textarea id="description" name="report" placeholder="Describe the issue in detail" required></textarea>

            <!-- Submit Button -->
            <button type="submit" class="submit-btn">Submit Report</button>
        </form>
    </div>

</body>
</html>
