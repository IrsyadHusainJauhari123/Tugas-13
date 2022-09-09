@extends('template.base')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <table>
                    <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Berat</th>
                    </thead>
                    <tbody>
                        @foreach ($list as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->harga }}</td>
                                <td>{{ $item->berat }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $list->links() }}
            </div>
        </div>
    </div>
@endsection
