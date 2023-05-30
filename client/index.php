<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .button {
            padding: 12px 24px;
            font-size: 18px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        #response {
            margin-top: 20px;
            text-align: center;
            font-size: 24px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div>
            <h1>Contoh</h1>

            <button class="button" onclick="getData()">Coba Di Klik</button>

            <div id="response"></div>
        </div>
    </div>

    <script>
        function getData() {
            fetch('http://localhost/goto_api/server/api.php')
                .then(response => response.json())
                .then(data => {
                    document.getElementById('response').innerText = data.message;
                })
                .catch(error => console.log(error));
        }
    </script>
</body>

</html>
