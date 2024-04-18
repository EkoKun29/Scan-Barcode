<div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
           <div class="modal-header">
                <h5 class="modal-title">Form Input User</h5>
            </div>
            <form action="{{ route('user.store') }}" method="POST">
              @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" name="example-text-input"
                            placeholder="Nama" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" name="example-text-input"
                            placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" name="example-text-input"
                            placeholder="Password" required>
                    </div>
                    <label class="form-label">Role</label>
                    <div class="form-selectgroup-boxes row mb-3">
                        <div class="col-lg-4">
                            <label class="form-selectgroup-item d-flex align-items-center p-3">
                                <input type="radio" name="role" value="admin" class="form-selectgroup-input me-2">
                                <span class="form-selectgroup-title strong mb-0">Admin</span>
                            </label>
                        </div>
                        <div class="col-lg-4">
                            <label class="form-selectgroup-item d-flex align-items-center p-3">
                                <input type="radio" name="role" value="penyedia" class="form-selectgroup-input me-2">
                                <span class="form-selectgroup-title strong mb-0">Penyedia Jasa</span>
                            </label>
                        </div>
                        <div class="col-lg-4">
                            <label class="form-selectgroup-item d-flex align-items-center p-3">
                                <input type="radio" name="role" value="user" class="form-selectgroup-input me-2">
                                <span class="form-selectgroup-title strong mb-0">User</span>
                            </label>
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
