<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <?= $title ?>
                </div>
                <div class="card-body">

                    <?php if (session()->getFlashdata('validation')) : ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php foreach (session()->getFlashdata('validation') as $error) : ?>
                                    <li><?= esc($error) ?></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <?= form_open('buku/update/' . $post['id']); ?>
                    <input type="hidden" name="_method" value="PUT">

                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control" name="judul" value="<?= old('judul', $post['judul']) ?>" placeholder="Masukkan Judul" required>
                    </div>
                    <div class="form-group">
                        <label>Penulis</label>
                        <input type="text" class="form-control" name="penulis" value="<?= old('penulis', $post['penulis']) ?>" placeholder="Masukkan Penulis" required>
                    </div>
                    <div class="form-group">
                        <label>Penerbit</label>
                        <input type="text" class="form-control" name="penerbit" value="<?= old('penerbit', $post['penerbit']) ?>" placeholder="Masukkan Penerbit" required>
                    </div>
                    <div class="form-group">
                        <label>Tahun Terbit</label>
                        <input type="number" class="form-control" name="tahun_terbit" value="<?= old('tahun_terbit', $post['tahun_terbit']) ?>" placeholder="Masukkan Tahun Terbit" required>
                    </div>
                    <div class="form-group mt-3">
                        <button class="btn btn-primary">Update</button>
                        <a href="<?= base_url('home') ?>" class="btn btn-link">Kembali</a>
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('extra-js') ?>
<script>
    setTimeout(() => {
        $('.alert').fadeOut('slow');
    }, 3000);
</script>
<?= $this->endSection() ?>