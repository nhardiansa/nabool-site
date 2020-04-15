<div class="container">

    <div class="row mt-3 justify-content-center">
        <h1>
            Profil <?= $data['nama'] ;?>
        </h1>
    </div>

    <div class="row mt-3 justify-content-center">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?= $data['nama']; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?= $data['email'] ;?></h6>
                <p class="card-text"><?= $data['region'] ;?></p>
                <a href="<?= BASEURL; ?>member" class="card-link">Kembali</a>
            </div>
        </div>
    </div>

</div>
