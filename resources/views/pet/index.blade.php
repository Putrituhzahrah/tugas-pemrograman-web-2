<x-app>

    <x-slot:title>{{ $title }}</x-slot>

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
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

</x-app>
