<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            /* background-color: #c2fdff;  */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            margin: 28px;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.2); /* Efek shadow lebih kuat */
            max-width: 300px; 
            width: 100%; 
        }
        h2 {
            color: #007bff; 
            text-align: center;
            margin-bottom: 15px;
            font-size: 18px; 
        }
        .form-control {
            border-radius: 4px;
            font-size: 12px; 
            padding: 4px 8px; 
        }
        .btn-primary {
            background-color: #28a745; 
            border-color: #28a745;
            border-radius: 4px;
            font-size: 12px; 
            padding: 6px; 
        }
        .btn-primary:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
        label {
            color: #495057; 
            font-weight: bold;
            font-size: 12px; 
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Contact Form</h2>
    <form action="process_contact.php" method="post">
        <div class="form-group">
            <label for="Nama">Nama:</label>
            <input type="text" class="form-control" id="Nama" name="Nama" required>
        </div>

        <div class="form-group">
            <label for="Nim">NIM:</label>
            <input type="text" class="form-control" id="Nim" name="Nim" required>
        </div>

        <div class="form-group">
            <label for="Email">Email:</label>
            <input type="email" class="form-control" id="Email" name="Email" required>
        </div>

        <div class="form-group">
            <label for="Kelas">Kelas:</label>
            <input type="text" class="form-control" id="Kelas" name="Kelas" required>
        </div>

        <div class="form-group">
            <label for="Saran">Saran:</label>
            <textarea class="form-control" id="Saran" name="Saran" rows="3" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Kirim</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

