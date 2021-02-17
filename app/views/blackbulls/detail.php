<div class="container-fluid mt-5">

    <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?= $data['member']['Name'] ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?= $data['member']['Power'] ?></h6>
        <p class="card-text"><?= $data['member']['Magic'] ?></p>
        <a href="<?= BASEURL; ?>/blackbulls" class="card-link">Kembali</a>
    </div>
    </div>

</div>