<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cek Khodam - Aplikasi untuk mengetahui khodam berdasarkan nama">
    <title>Cek Khodam</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            color: #333;
            text-align: center;
            padding: 20px;
            margin: 0;
        }
        h1 {
            color: #007BFF;
            font-size: 2.5em;
        }
        form {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            display: inline-block;
            margin-top: 20px;
            text-align: center;
            max-width: 500px;
            width: 100%;
            box-sizing: border-box;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            font-size: 1.2em;
        }
        input[type="text"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1.1em;
            box-sizing: border-box;
        }
        button {
            background-color: #007BFF;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1em;
            display: block;
            margin: 0 auto;
            box-sizing: border-box;
        }
        button:hover {
            background-color: #0056b3;
        }
        .result {
            margin-top: 20px;
            background-color: #e9f5ff;
            border: 1px solid #007BFF;
            border-radius: 10px;
            padding: 20px;
            font-size: 1.1em;
        }
        footer {
            margin-top: 40px;
            font-size: 0.9em;
            color: #777;
        }

        /* Responsive adjustments */
        @media (max-width: 600px) {
            h1 {
                font-size: 2em;
            }
            form {
                padding: 20px;
            }
            label {
                font-size: 1.1em;
            }
            input[type="text"] {
                font-size: 1em;
            }
            button {
                font-size: 1em;
            }
            .result {
                font-size: 1em;
            }
        }
    </style>
</head>
<body>
    <h1>Cek Khodam</h1>
    <form action="" method="post">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Cek Khodam</button>
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
            <?php
            $name = htmlspecialchars($_POST['name']);
            
            // Daftar khodam
            $khodams = array(
                "Tidak Ada Khodam", "Kepala charger", "Ular type c", "Harimau pincang", "Naga berbulu",
                "Ikan Berkepala Tikus", "Genduruwo berbadan Jalangkung", "Buto Biru", 
                "Tidak Ada Khodam", "Singa PadlePop", "Bane Mage", "Khodam Lele"
            );

            // Pilih khodam secara acak
            $random_khodam = $khodams[array_rand($khodams)];
            ?>
            <div class='result'>
                <h2>Halo, <?php echo $name; ?>!</h2>
                <p>Khodam Anda adalah: <?php echo $random_khodam; ?></p>
            </div>
        <?php elseif (isset($_POST['name']) && empty(trim($_POST['name']))) : ?>
            <div class='result'>
                <p style="color: red;">Silakan masukkan nama untuk mengetahui khodam Anda.</p>
            </div>
        <?php endif; ?>
    </form>
    <footer>
        &copy; 2024 Code by Armana Afif
    </footer>
</body>
</html>
