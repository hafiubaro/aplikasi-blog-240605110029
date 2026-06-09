@extends('layouts.blog')

@section('title', 'Blog Kami')

@section('content')

<div class="row">

    <!-- Artikel -->
    <div class="col-md-8">

        @foreach($artikel as $item)

        <div class="card mb-4 shadow-sm">

            @if($item->gambar)
            <img src="{{ asset('storage/gambar/' . $item->gambar) }}"
                class="card-img-top"
                style="height:250px;object-fit:cover;">
            @endif

            <div class="card-body">

                <span class="badge bg-primary mb-2">
                    {{ $item->kategori->nama_kategori }}
                </span>

                <h4>
                    {{ $item->judul }}
                </h4>

                <small class="text-muted">
                    {{ $item->penulis->nama_depan }}
                    {{ $item->penulis->nama_belakang }}
                    |
                    {{ $item->hari_tanggal }}
                </small>

                <p class="mt-3">
                    {{ Str::limit($item->isi, 200) }}
                </p>

                <a href="{{ route('blog.detail', $item->id) }}"
                    class="btn btn-success">
                    Baca Selengkapnya
                </a>

            </div>

        </div>

        @endforeach

    </div>

    <!-- Sidebar -->
    <div class="col-md-4">

        <div class="card shadow-sm">

            <div class="card-header">
                Kategori Artikel
            </div>

            <div class="list-group list-group-flush">

                <a href="{{ route('blog.index') }}"
                    class="list-group-item d-flex justify-content-between">

                    <span>Semua Artikel</span>

                    <span class="badge bg-secondary">
                        {{ $totalArtikel }}
                    </span>

                </a>

                @foreach($kategori as $item)

                <a href="{{ route('blog.kategori', $item->id) }}"
                    class="list-group-item d-flex justify-content-between">

                    <span>
                        {{ $item->nama_kategori }}
                    </span>

                    <span class="badge bg-secondary">
                        {{ $item->artikel_count }}
                    </span>

                </a>

                @endforeach

            </div>

        </div>

    </div>

</div>

@endsection