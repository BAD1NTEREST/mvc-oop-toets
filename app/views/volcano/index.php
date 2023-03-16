<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volkanen</title>
    <style>
        body {
            font-family: "Segoe UI", sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f1f1f1;
            color: #444;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .title {
            text-align: center;
            color: #ff5722;
            margin-top: 1rem;
            text-transform: uppercase;
        }

        .link {
            display: inline-block;
            margin-bottom: 1rem;
            text-decoration: none;
            color: #03a9f4;
            font-weight: bold;
            transition: color 0.2s ease-in-out;
        }

        .link:hover {
            color: #01579b;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 2rem;
        }

        .table th,
        .table td {
            padding: 0.75rem;
            text-align: left;
            border: 1px solid #ccc;
        }

        .table th {
            background-color: #f1f1f1;
            font-weight: bold;
            text-transform: uppercase;
        }

        .table td:last-child {
            font-weight: bold;
            color: #e91e63;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3 class="title"><?= $data['title']; ?></h3>
        <a class="link" href="#">Meer informatie</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Naam</th>
                    <th>Hoogte (m)</th>
                    <th>Land</th>
                    <th>Laatste uitbarsting</th>
                    <th>Aantal slachtoffers</th>
                </tr>
            </thead>
            <tbody>
                <?= $data['rows']; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
