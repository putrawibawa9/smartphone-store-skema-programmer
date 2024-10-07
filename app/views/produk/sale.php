  <!-- include the header partial -->
   <?php
   require_once HEADER;
   ?>
    <main>
        <h2>Tabel Penjualan</h2>
    <a href="<?= BASEURL?>/sale/printPDF" style="display: inline-block; background-color: #007bff; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none; font-size: 16px; transition: background-color 0.3s ease;" 
   onmouseover="this.style.backgroundColor='#0056b3'" onmouseout="this.style.backgroundColor='#007bff'">Print</a>

        <table id="dataTable">
            <thead>
                <tr>
                    <th>Nama Barang</th>
                    <th>Tanggal Terjual</th>
                    <th>Gambar</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data['sale'] as $row) : ?>
                <tr>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['date'] ?></td>
                    <td> <img height="100px" width="100px" src="<?=BASEURL?>/img/<?=$row['gambar']?>" alt="Foto Produk"></td>
                    <td><?= $row['jumlah'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
             <a href="<?= BASEURL;?>/auth/logout" class="btn btn-logout">Logout</a>
    </main>

    <footer>
        
        <p>&copy; 2024 My Website. All rights reserved.</p>
    </footer>
</body>
</html>