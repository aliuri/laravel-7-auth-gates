<div class="modal fade" id="ajaxModel" tabindex="-1" aria-labelledby="createUserLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        @include('flash::message')
        <h5 class="modal-title" id="createUserLabel">Tambah User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="UserForm" name="UserForm" class="form-horizontal">
          <input type="hidden" name="User_id" id="User_id">
          {{-- @csrf --}}
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Nama</label>
            <input type="text" name="name" class="form-control" id="recipient-name" required">
            <div class="alert-message alert-warning" id="nameError"></div>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Email</label>
            <input type="text" name="email" class="form-control" id="recipient-email" required>
            <div class="alert-message alert-warning" id="emailError"></div>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Password</label>
            <input type="password" name="password" class="form-control" id="recipient-password" required>
            <div class="alert-message alert-warning" id="passwordError"></div>
          </div>
          <div class="mb-3">
            <div class="form-check form-switch">
              <input class="form-check-input verif" type="checkbox" name="verif" value="1" id="flexSwitchCheckDefault">
              <label class="form-check-label" for="flexSwitchCheckDefault">Verifikasi email</label>
            </div>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Hak akses</label>
            <select name="role" class="form-select form-select-sm" id="akses" aria-label=".form-select-sm example" required>
              <option selected value="">Pilih...</option>
              <option value="admin">Admin</option>
              <option value="prodi">Prodi</option>
              <option value="unit">Unit</option>
              <option value="pusat">Pusat</option>
              <option value="author">Author</option>
            </select>
            <div class="alert-message alert-warning" id="roleError"></div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

