@extends('layouts.main-layout')

@section('content')
    <div class="container mt-5">
        <h2>Data Rekomendasi Pekerjaan</h2>

        <!-- Form Tambah/Edit Pekerjaan -->
        <div class="card mb-3">
            <div class="card-header">
                {{ isset($job) ? 'Edit Rekomendasi Pekerjaan' : 'Tambah Rekomendasi Pekerjaan' }}
            </div>
            <div class="card-body">
                <form action="{{ isset($job) ? route('job.update', $job->id) : route('job.store') }}" method="POST">
                    @csrf
                    @if (isset($job))
                        @method('PUT')
                    @endif

                    <div class="form-group">
                        <label for="mbti_type_id">MBTI Type</label>
                        <select name="mbti_type_id" class="form-control" id="mbti_type_id" required>
                            <option value="">Pilih MBTI Type</option>
                            @foreach ($mbtiTypes as $mbtiType)
                                <option value="{{ $mbtiType->id }}"
                                    {{ isset($job) && $job->mbti_type_id == $mbtiType->id ? 'selected' : '' }}>
                                    {{ $mbtiType->type_code }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="job_title">Job Title</label>
                        <input type="text" name="job_title" class="form-control" id="job_title"
                            placeholder="Masukkan judul pekerjaan" value="{{ $job->job_title ?? '' }}" required>
                    </div>

                    <div class="form-group">
                        <label for="job_description">Job Description</label>
                        <textarea name="job_description" class="form-control" id="job_description" rows="4"
                            placeholder="Deskripsi pekerjaan" required>{{ $job->job_description ?? '' }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

        <!-- Tabel Data Rekomendasi Pekerjaan -->
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>MBTI Type</th>
                    <th>Job Title</th>
                    <th>Job Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jobs as $index => $job)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <!-- Tampilkan tipe MBTI daripada ID -->
                        <td>{{ $job->mbtiType->type_code ?? 'N/A' }}</td>
                        <td>{{ $job->job_title }}</td>
                        <td>{{ $job->job_description }}</td>
                        <td>
                            <a href="{{ route('job.update', $job->id) }}" class="btn btn-info btn-sm">Edit</a>
                            <form action="{{ route('job.destroy', $job->id) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
