<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <form method="POST" action="{{ route('pet.update', $pet) }}">
        @csrf
        @method('put')

        <div class="mb-3">
            <label for="spesies" class="form-label">Spesies</label>
            <input type="text" class="form-control @error('spesies') is-invalid @enderror" id="spesies" name="spesies"
                value="{{ old('spesies', $pet->spesies) }}">
            @error('spesies')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="ras" class="form-label">Ras</label>
            <input type="text" class="form-control @error('ras') is-invalid @enderror" id="ras" name="ras"
                value="{{ old('ras', $pet->ras) }}">
            @error('ras')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select class="form-select @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin"
                id="jenis_kelamin">
                <option value="">-- Choose Jenis Kelamin --</option>
                <option value="Jantan" @selected(old('jenis_kelamin', $pet->jenis_kelamin) == 'Jantan')>Jantan</option>
                <option value="Betina" @selected(old('jenis_kelamin', $pet->jenis_kelamin) == 'Betina')>Betina</option>
            </select>
            @error('jenis_kelamin')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="umur_bulan" class="form-label">Umur (Bulan)</label>
            <input type="text" class="form-control @error('umur_bulan') is-invalid @enderror" id="umur_bulan"
                name="umur_bulan" value="{{ old('umur_bulan', $pet->umur_bulan) }}">
            @error('umur_bulan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga"
                value="{{ old('harga', $pet->harga) }}">
            @error('harga')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select @error('status') is-invalid @enderror" name="status" id="status">
                <option value="">-- Choose Status --</option>
                <option value="Tersedia" @selected(old('status', $pet->status) == 'Tersedia')>Tersedia</option>
                <option value="Terjual" @selected(old('status', $pet->status) == 'Terjual')>Terjual</option>
            </select>
            @error('status')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <a class="btn btn-warning" href="{{ route('pet.index') }}" role="button">Back</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</x-app>
