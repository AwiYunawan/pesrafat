<div class="modal fade" id="addRoom" tabindex="-1" aria-labelledby="formModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Form Tambah {{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="text-align: left;">
                <form action="/dashboard/rooms" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="room_id" id="room_id">
                    <div class="mb-3">
                        <label for="code" class="form-label">Kode Alat Ruangan</label>
                        <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" name="code" required value="{{ old('code') }}">
                        @error('code')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Alat Ruangan</label>
                        <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name" name="name" required value="{{ old('name') }}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    
                    
                    <div class="mb-3">
                        <label for="description" class="form-label  @error('description') is-invalid @enderror">Deskripsi Alat Ruangan</label>
                        <input type="text" name="description" id="description"  class="form-control" required>{{ old('description') }}
                        @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>