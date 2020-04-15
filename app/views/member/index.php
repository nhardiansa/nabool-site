<div class="container">

    <div class="row mt-3 justify-content-center">
        <div class="col-md-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mt-2 justify-content-center">
        <h1>Memberpage</h1>
    </div>

    <div class="row mt-2 justify-content-center">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahMember">
            Tambah Member
        </button>
    </div>

    <div class="row mt-4 justify-content-center">
        <div class="col-md-6">
            <ul class="list-group">
                <?php foreach($data['member'] as $mbr): ?>
                    <li class="list-group-item">
                        <?= $mbr['nama'] ;?>
                        <a href="<?= BASEURL;?>member/detail/<?= $mbr['id'] ;?>" class="badge ml-2 badge-primary float-right">Detail</a>
                        <a href="<?= BASEURL;?>member/hapus/<?= $mbr['id'] ;?>" class="badge ml-2 badge-danger float-right">Hapus</a>
                        <a href="#" class="badge badge-warning float-right">Edit</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>



<!-- Modal -->
<div class="modal fade" id="tambahMember" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Member</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>member/tambah" method="post">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">

                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">

                <label for="region">Region</label>
                <select class="form-control" id="region" name="region">
                    <option value="Makassar">Makassar</option>
                    <option value="Jakarta">Jakarta</option>
                    <option value="Surabaya">Surabaya</option>
                    <option value="Denpasar">Denpasar</option>
                    <option value="Bandung">Bandung</option>
                </select>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
        <button type="submit" name="submit" id="submit" class="btn btn-primary">Tambah</button>
        </form>
      </div>
    </div>
  </div>
</div>
