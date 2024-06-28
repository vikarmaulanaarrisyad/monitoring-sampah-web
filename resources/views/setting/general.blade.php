<form action="{{ route('setting.update', $setting->id) }}" method="post">
    @csrf
    @method('put')

    <x-card>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="nama_aplikasi">Nama Aplikasi</label>
                    <input id="nama_aplikasi" name="nama_aplikasi" value="{{ $setting->nama_aplikasi }}" class="form-control" type="text" name="">
                </div>
            </div>
        </div>

        <x-slot name="footer">
            <button class="btn btn-primary">Simpan</button>
        </x-slot>
    </x-card>
</form>
