
<div class="container-fluid ps-5">

<div class="row">
    <div class="col-lg-6 mt-3">
    <?php Flasher::flash() ?>
    </div>
</div> 

<div class="row my-3">
    <div class="col-lg-6">
        <button type="button" class="btn btn-primary tambahDataMember" data-bs-toggle="modal" data-bs-target="#formModal">
        + Tambah Member
        </button>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <form action="<?= BASEURL ?>/blackbulls/cari" method="post" class="w-50">
            <div class="input-group">
            <input type="text" class="form-control" placeholder="Search..." name="keyword" id="keyword" autocomplete="off" autofocus>
            <button class="btn btn-primary" type="submit" id="tombol-cari">Cari</button>
            </div>
        </form>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <!-- Modal -->
        <div class="modal fade" id="formModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">+ Tambah Member</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
            <form class="form-signin" action="<?= BASEURL;?>/blackbulls/tambah" method="post">
            <input type="hidden" name="Rank" id="Rank"/>
            <input type="text" name="Name" id="Name" class="form-control my-4" placeholder="Add Name..." required autocomplete="off">
            <input type="number" name="Power" id="Power" class="form-control my-4" placeholder="Add Power..." required autocomplete="off">
            <input type="text" name="Magic" id="Magic"class="form-control my-4" placeholder="Add Magic..." required autocomplete="off">
            <input type="text" name="Grimoire" id="Grimoire" class="form-control my-4" placeholder="Add Grimoire..." required autocomplete="off">
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0" id="Jurusan" >Position</legend>
                <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="Position" id="Captain" value="Captain">
                    <label class="form-check-label" for="Captain">
                    Captain
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="Position" id="viceCaptain" value="viceCaptain">
                    <label class="form-check-label" for="viceCaptain">
                    Vice Captain
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="Position" id="member" value="member" >
                    <label class="form-check-label" for="member">
                    Member
                    </label>
                </div>
                </div>
            </fieldset>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Tambah!</button>
            </div>
            </div>
            </form>

        </div>
        </div>
        <h3 class="my-4">Daftar Member Blackbulls</h3>
            
            <div class="row">
            <div class="col-6">
            <ul class="list-group">
            <?php foreach($data['member'] as $blbuls) : ?>
                <li class="list-group-item">
                    <span> <?= $blbuls['Name'] ?> </span>

                    <span class="btn-group-sm" role="group" aria-label="Basic mixed styles example" >
                        <a href="<?= BASEURL; ?>/blackbulls/delete/<?= $blbuls['Rank'] ?>" style="text-decoration: none;" class="btn btn-danger float-end mx-1" onclick="return confirm('Apakah anda yakin ingin menghapus member?')">Delete</a>

                        <a href="<?= BASEURL; ?>/blackbulls/edit/<?= $blbuls['Rank'] ?>" style="text-decoration: none;" class="btn btn-success float-end mx-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-rank="<?= $blbuls['Rank'] ?>">Edit</a>

                        <a href="<?= BASEURL; ?>/blackbulls/detail/<?= $blbuls['Rank'] ?>" style="text-decoration: none;" class="btn btn-primary float-end mx-1 detail">Detail</a>
                    </span>
                </li>
                
            <?php endforeach ?>
            </ul>
            
            </div> 
            </div>
        

    </div>
</div>

</div>