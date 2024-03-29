<div>
<div class="container my-4 p-5 bg-hero rounded">
    <div class="py-5 text-white">
        <h5 class="display-5 fw-bold"></h5>
        <p class="fst-italic fs-4 col-md-8 text-warning">XII RPL 1</p>
    </div>
</div>
<!-- untuk menampilkan foto yang sudah di upload di halaman depan -->
<div class="container bg-sampul">
    <div class="row">
        <?php 
        $tampil=mysqli_query($conn, "SELECT * FROM foto INNER JOIN user ON foto.UserID=user.UserID");
        foreach($tampil as $tampils):
        ?>
        <div class="col-6 col-md-4 col-lg-3 mb-4">
            <div class="card">
                <img src="uploads/<?= $tampils['LokasiFile'] ?>" class="object-fit-cover" style="aspect-ratio: 16/9;">
                <div class="card-body">
                    <h5 class="card-title"><?= $tampils['JudulFoto'] ?></h5>
                    <p class="card-text text-muted">by: <?= $tampils['Username'] ?></p>
                    <a href="?url=detail&&id=<?= $tampils['FotoID'] ?>" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
</div>