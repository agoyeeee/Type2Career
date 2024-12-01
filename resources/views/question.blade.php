@extends('layouts.main-layout')

@section('content')
<div class="container mt-5">
    <h2>Data Pertanyaan</h2>

    <!-- Form Tambah Pertanyaan -->
    <div class="card mb-3">
        <div class="card-header">
            Tambah Pertanyaan
        </div>
        <div class="card-body">
            <form action="{{ route('question.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="pertanyaan">Pertanyaan</label>
                    <input type="text" name="pertanyaan" class="form-control" id="pertanyaan"
                        placeholder="Masukkan pertanyaan" required>
                </div>
                <div class="form-group">
                    <label for="dimensi">Dimensi Kepribadian MBTI</label>
                    <select name="dimensi" class="form-control" id="dimensi" required>
                        <option value="" disabled selected>Pilih dimensi kepribadian</option>
                        <option value="E/I">E/I</option>
                        <option value="S/N">S/N</option>
                        <option value="T/F">T/F</option>
                        <option value="J/P">J/P</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Simpan</button>
            </form>
        </div>
    </div>

    <!-- Tabel Data Pertanyaan -->
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Pertanyaan</th>
                <th>Dimensi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($questions as $index => $question)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $question->pertanyaan }}</td>
                <td>{{ $question->dimensi }}</td>
                <td>
                    <button type="button" class="btn btn-info btn-sm"
                        onclick="openEditModal({{ $question->id }}, '{{ $question->pertanyaan }}', '{{ $question->dimensi }}')">Edit</button>
                    <form action="{{ route('question.destroy', $question->id) }}" method="POST"
                        style="display:inline-block;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Modal Edit Pertanyaan -->
    <div class="modal fade" id="editPertanyaanModal" tabindex="-1" aria-labelledby="editPertanyaanModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editPertanyaanModalLabel">Edit Pertanyaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editForm" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="editPertanyaan">Pertanyaan</label>
                            <input type="text" name="pertanyaan" class="form-control" id="editPertanyaan" required>
                        </div>
                        <div class="form-group">
                            <label for="editDimensi">Dimensi</label>
                            <select name="dimensi" class="form-control" id="editDimensi" required>
                                <option value="E/I">E/I</option>
                                <option value="S/N">S/N</option>
                                <option value="T/F">T/F</option>
                                <option value="J/P">J/P</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    function openEditModal(id, pertanyaan, dimensi) {
        document.getElementById('editPertanyaan').value = pertanyaan;
        document.getElementById('editDimensi').value = dimensi;
        document.getElementById('editForm').action = `/question/${id}`;
        $('#editPertanyaanModal').modal('show');
    }
</script>
@section('scripts')
@endsection
