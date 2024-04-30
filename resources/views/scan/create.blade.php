<div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
           <div class="modal-header">
                <h5 class="modal-title">Form Input Data</h5>
            </div>
            <form action="{{ route('scan.store') }}" method="POST">
              @csrf
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">No. Induk</label>
                                <input type="text" name="induk" class="form-control" placeholder="Nomor Induk" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">No. Lot</label>
                                <input type="text" name="lot" class="form-control" placeholder="Nomor Lot" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">No. Seri Awal</label>
                                <input type="text" name="seri_awal" class="form-control" placeholder="Nomor Seri Awal" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">No. Seri Akhir</label>
                                <input type="text" name="seri_akhir" class="form-control" placeholder="Nomor Seri Akhir" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jenis Tanaman</label>
                                <input type="text" name="jenis" class="form-control" placeholder="Jenis Tanaman" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Varietas</label>
                                <input type="text" name="varietas" class="form-control" placeholder="Varietas" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">No. Kelompok</label>
                                <input type="text" name="kelompok" class="form-control" placeholder="Nomor Kelompok" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Berat Bersih</label>
                                <input type="text" name="berat" class="form-control" placeholder="Berat Bersih" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal Panen</label>
                                <input type="date" name="panen" class="form-control" placeholder="Tanggal Panen" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal Selesai Uji</label>
                                <input type="date" name="uji" class="form-control" placeholder="Tanggal Selesai Uji" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal Akhir Label</label>
                                <input type="date" name="akhir" class="form-control" placeholder="Tanggal Akhir Label" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Kadar Air</label>
                                <input type="number" step="any" name="kadar" class="form-control" placeholder="Kadar Air" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Benih Murni</label>
                                <input type="number" step="any" name="benih" class="form-control" placeholder="Benih Murni" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Campuran Var Lain</label>
                                <input type="number" step="any" name="campuran" class="form-control" placeholder="Campuran Var Lain" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kotoran Benih</label>
                                <input type="number" step="any" name="kotoran" class="form-control" placeholder="Kotoran Benih" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Benih Tanaman Lain</label>
                                <input type="number" step="any" name="benih_lain" class="form-control" placeholder="Benih Tanaman Lain" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Daya Berkecambah</label>
                                <input type="number" step="any" name="daya" class="form-control" placeholder="Daya Berkecambah" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Biji Gulma</label>
                                <input type="number" step="any" name="biji" class="form-control" placeholder="Biji Gulma" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <a href="#" class="btn btn-outline-danger" data-bs-dismiss="modal">
                        Cancel
                    </a>
                    <button type="submit" class="btn btn-primary ms-auto">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
