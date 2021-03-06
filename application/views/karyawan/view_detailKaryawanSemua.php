<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid mt-2">
            <div class="card">
                <div class="card-header card-outline card-primary shadow">
                    <a class="fw-bold text-dark" style="text-decoration:none ;"><?= strtoupper($title) ?></a>
                    <a href="<?= base_url('karyawan/karyawan_semua'); ?>"><button class="btn btn-primary btn-sm float-end"><i class="fas fa-reply"></i> Kembali</button></a>
                </div>
                <div class="p-2">
                    <?= $this->session->flashdata('info'); ?>
                    <?= $this->session->unset_userdata('info'); ?>
                </div>
                <div class="card-body px-2">
                    <div class="card">
                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>Nama Lengkap</td>
                                                <td> : </td>
                                                <td class="fw-bold"><?= $karyawan->nama ?></td>
                                            </tr>
                                            <tr>
                                                <td>Nik</td>
                                                <td> : </td>
                                                <td class="fw-bold"><?= $karyawan->nik ?></td>
                                            </tr>
                                            <tr>
                                                <td>Bagian / UPK</td>
                                                <td> : </td>
                                                <td class="fw-bold"><?= $karyawan->nama_bagian ?></td>
                                            </tr>
                                            <tr>
                                                <td>Jabatan</td>
                                                <td> : </td>
                                                <td class="fw-bold"><?= $karyawan->nama_jabatan ?><?= ' ' ?><?= $karyawan->nama_subag ?></td>
                                            </tr>
                                            <tr>
                                                <td>Status</td>
                                                <td> : </td>
                                                <td class="fw-bold"><?= $karyawan->status_pegawai ?></td>
                                            </tr>
                                            <tr>
                                                <td>Masa Kerja</td>
                                                <td> : </td>
                                                <?php
                                                $waktuMasuk = $karyawan->tgl_masuk;
                                                $waktuSkrng = date('Y-m-d');
                                                $date1 = new DateTime($waktuMasuk);
                                                $date2 = new DateTime($waktuSkrng);
                                                $durasi = $date1->diff($date2);
                                                ?>
                                                <td class="fw-bold"><?= $durasi->format('%Y Tahun %m bulan %d hari'); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Purna</td>
                                                <td> : </td>
                                                <?php
                                                $waktuLahir = $karyawan->tgl_lahir;
                                                $waktuKerja = '+56 years';
                                                $waktuPurna = DateTime::createFromFormat('Y-m-d', $waktuLahir);
                                                $waktuPurna->modify($waktuKerja);
                                                $waktuSkrng = date('Y');
                                                $sisa = $waktuPurna->format('Y') - $waktuSkrng;
                                                ?>
                                                <td class="fw-bold"><?= $waktuPurna->format('d F Y'); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Sisa Masa Kerja</td>
                                                <td> : </td>
                                                <td class="fw-bold"><?= $sisa ?> Tahun lagi</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>Alamat</td>
                                                <td> : </td>
                                                <td class="fw-bold"><?= $karyawan->alamat ?></td>
                                            </tr>
                                            <tr>
                                                <td>Agama</td>
                                                <td> : </td>
                                                <td class="fw-bold"><?= $karyawan->agama ?></td>
                                            </tr>
                                            <tr>
                                                <td>No HP</td>
                                                <td> : </td>
                                                <td class="fw-bold"><?= $karyawan->no_hp ?></td>
                                            </tr>
                                            <tr>
                                                <td>Jenis Kelamin</td>
                                                <td> : </td>
                                                <td class="fw-bold"><?= $karyawan->jenkel ?></td>
                                            </tr>
                                            <tr>
                                                <td>Tempat lahir</td>
                                                <td> : </td>
                                                <td class="fw-bold"><?= $karyawan->tmp_lahir ?></td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Lahir</td>
                                                <td> : </td>
                                                <td class="fw-bold"><?= date('d F Y', strtotime($karyawan->tgl_lahir)) ?></td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Masuk</td>
                                                <td> : </td>
                                                <td class="fw-bold"><?= date('d F Y', strtotime($karyawan->tgl_masuk))  ?></td>
                                            </tr>
                                            <tr>
                                                <td>Aktif</td>
                                                <td> : </td>
                                                <td class="fw-bold"><?= $karyawan->aktif == 1 ? 'Karyawan Aktif' : 'Karyawan Purna' ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>