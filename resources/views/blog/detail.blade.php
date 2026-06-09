@extends('layouts.blog')

@section('title', $artikel->judul)

@section('content')
<div class="breadcrumb-blog mb-3">

    <a href="{{ route('blog.index') }}"
        class="text-decoration-none">
        Beranda
    </a>

    /

    {{ $artikel->kategori->nama_kategori }}

    /

    {{ $artikel->judul }}

</div>

<div class="row">

    <!-- Konten Artikel -->
    <div class="col-md-8">

        <div class="card shadow-sm">

            @if($artikel->gambar)
            <img src="{{ asset('storage/gambar/' . $artikel->gambar) }}"
                class="card-img-top"
                style="max-height:400px;object-fit:cover;">
            @endif

            <div class="card-body">

                <span class="badge bg-primary mb-2">
                    {{ $artikel->kategori->nama_kategori }}
                </span>

                <h2>
                    {{ $artikel->judul }}
                </h2>

                <div class="d-flex align-items-center mb-3">

                    <img src="{{ asset('storage/foto/' . $artikel->penulis->foto) }}"
                        alt="Foto Penulis"
                        class="author-photo me-3">

                    <div>
                        <div class="fw-semibold">
                            {{ $artikel->penulis->nama_depan }}
                            {{ $artikel->penulis->nama_belakang }}
                        </div>

                        <small class="text-muted">
                            {{ $artikel->hari_tanggal }}
                        </small>
                    </div>

                </div>

                <hr>

                <div>
                    {!! nl2br(e($artikel->isi)) !!}
                </div>

                <hr>

                <a href="{{ route('blog.index') }}"
                    class="btn btn-secondary">
                    ← Kembali ke Beranda
                </a>

            </div>

        </div>

    </div>

    <!-- Sidebar Artikel Terkait -->
    <div class="col-md-4">

        <div class="card shadow-sm card-blog">

            <div class="card-header">
                Artikel Terkait
            </div>

            <div class="card-body">

                @forelse($terkait as $item)

                <a href="{{ route('blog.detail',$item->id) }}"
                    class="text-decoration-none text-dark">

                    <div class="d-flex mb-3">

                        <img src="{{ asset('storage/gambar/' . $item->gambar) }}"
                            class="related-thumb me-2">

                        <div>

                            <div style="font-size:13px;font-weight:600;">
                                {{ Str::limit($item->judul,40) }}
                            </div>

                            <small class="text-muted">
                                {{ $item->hari_tanggal }}
                            </small>

                        </div>

                    </div>

                </a>

                @empty

                <p>Tidak ada artikel terkait.</p>

                @endforelse

            </div>

        </div>

    </div>

</div>

@endsection