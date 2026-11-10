<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <a class="btn btn-primary mb-3" href="{{ route('pet.create') }}" role="button">Tambah Data Baru</a>

    <table class="table table-bordered border-dark table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Spesies</th>
                <th scope="col">Ras</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Umur (Bulan)</th>
                <th scope="col">Harga</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($pets as $pet)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $pet->spesies }}</td>
                    <td>{{ $pet->ras }}</td>
                    <td>{{ $pet->jenis_kelamin }}</td>
                    <td>{{ $pet->umur_bulan }}</td>
                    <td>Rp. {{ number_format($pet->harga, 0, ',', '.') }}</td>
                    <td>{{ $pet->status }}</td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="{{ route('pet.edit', $pet) }}" role="button">Edit</a>

                        <form method="POST" action="{{ route('pet.destroy', $pet) }}" class="d-inline">
                            @csrf
                            @method('delete')

                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

</x-app>
