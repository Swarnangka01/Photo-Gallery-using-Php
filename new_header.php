<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin:0%;
        }
        .header {
            margin:0%;
            background-image: url('rose.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 200px;
            text-align: center;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        
        .header h1 {
            margin: 0%;
            font-size: 36px;
        }
        .overlay {
            position:;
            top: 0;
            left: 0;
            width: 280px;
            height: 80px;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(10px); /* Apply the blur effect */
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .overlay p {
            margin: 0;
            font-size: 24px;
            color: white;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="overlay">
            <h1>Photo Gallery</h1>
        </div>
    </div>
</body>
</html>
