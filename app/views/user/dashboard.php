<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Layout with Search and Circular Complaint Button</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        /* Style for the circular complaint button */
        .complaint-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #e74c3c;
            color: #fff;
            border: none;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 18px;
            font-weight: bold;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .complaint-button:hover {
            background-color: #c0392b;
            transform: scale(1.1);
        }

        .cards-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            margin-top: 50px;
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 300px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .card img {
            width: 100%;
            height: auto;
        }

        .card-body {
            padding: 15px;
        }

        .card-title {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .card-description {
            font-size: 14px;
            color: #666;
            margin-bottom: 15px;
        }

        .card-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card-price {
            font-size: 16px;
            font-weight: bold;
            color: #27ae60;
        }

        .card-button {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .card-button:hover {
            background-color: #2980b9;
        }

        @media (max-width: 768px) {
            .card {
                width: 100%;
            }
        }

        /* Search Input Styling */
        .search-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .search-container input[type="text"] {
            padding: 10px;
            width: 80%;
            max-width: 400px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        .search-container input[type="submit"] {
            padding: 10px 20px;
            border: none;
            background-color: #3498db;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .search-container input[type="submit"]:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

    <!-- Circular Complaint Button in the Bottom-Right -->
    <a class="complaint-button" href="<?= BASEURL?>/report/index">!</a>
<?php if(isset($data['success'])) : ?>
    <div style="background-color: #28a745; color: white; text-align: center; padding: 10px; margin: 10px;">
        <?= $data['success'] ?>
    </div>
<?php endif; ?>
    <!-- Search Bar -->
    <div class="search-container">
        <form action="<?= BASEURL ?>/produk/search" method="POST">
            <input type="text" name="nama" placeholder="Search products...">
            <input type="submit">
        </form>
             <a href="<?=BASEURL?>/dashboard/index">Refresh</a>
    </div>


    <div class="cards-container">
        <?php foreach ($data['produk'] as $produk) : ?>
        <div class="card">
            <img src="<?=BASEURL?>/img/<?=$produk['gambar']?>" alt="Product Image">
            <div class="card-body">
                <h3 class="card-title"><?= $produk['nama']?></h3>
                <p class="card-description"><?= $produk['deskripsi']?></p>
                <div class="card-footer">
                    <span class="card-price">Rp.<?= $produk['harga']?></span>
                </div>
                
                <!-- Buy Form -->
                <form action="<?=BASEURL?>/sale/store" method="POST">
                    <input type="hidden" name="produk_id" value="<?=$produk['id']?>">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="quantity" min="1" value="1" style="width: 60px;">
                    <button type="submit" class="card-button">Buy</button>
                </form>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

</body>
</html>
