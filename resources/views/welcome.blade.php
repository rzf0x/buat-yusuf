<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <h1 class="text-center">Cari data ...</h1>

    <div class="container">
        <form action="{{ route('cari-data') }}" method="get" class="form-input">
            {{-- @csrf --}}
            <div>
                <label for="cariData" class="form-label">Cari data pengaduan</label>
                <input type="text" name="cariData" id="cariData" class="form-control" placeholder="cari data...">
            </div>

            <div class="d-flex justify-content-end">
                <a href="{{ route('landing-page') }}">
                    <button class="btn btn-warning mt-2 me-2">
                        Reset
                    </button>
                </a>
                <button type="submit" class="btn btn-primary mt-2">Search</button>
            </div>
        </form>

        <table class="table table-responsive">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>Status</th>
            </tr>

            @forelse ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->description }}</td>
                    <td>
                        @if ($item->status == 'pending')
                            <span class="badge text-bg-danger">{{ $item->status }}</span>
                        @elseif ($item->status == 'proses')
                            <span class="badge text-bg-warning">{{ $item->status }}</span>
                        @else
                            <span class="badge text-bg-primary">{{ $item->status }}</span>
                        @endif
                    </td>
                </tr>
            @empty
            @endforelse


        </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
