@extends('layouts.main-layout')

@section('content')
<div class="container mt-5">
    <h2>Data Pengguna</h2>

    <!-- Form Tambah Pengguna -->
    <div class="card mb-3">
        <div class="card-header">
            @if(isset($user))
                Edit Pengguna
            @else
                Tambah Pengguna
            @endif
        </div>
        <div class="card-body">
            <form action="{{ isset($user) ? route('users.update', $user->id) : route('users.store') }}" method="POST">
                @csrf
                @if(isset($user)) @method('PUT') @endif
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan nama pengguna" value="{{ isset($user) ? $user->name : old('name') }}" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan email pengguna" value="{{ isset($user) ? $user->email : old('email') }}" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan password" {{ isset($user) ? '' : 'required' }}>
                </div>
                @if(!isset($user))
                <div class="form-group">
                    <label for="password_confirmation">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Konfirmasi password" required>
                </div>
                @endif
                <div class="form-group">
                    <label for="role">Role</label>
                    <select name="role" class="form-control" id="role" required>
                        <option value="user" {{ isset($user) && $user->role == 'user' ? 'selected' : '' }}>User</option>
                        <option value="admin" {{ isset($user) && $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mt-3">{{ isset($user) ? 'Simpan Perubahan' : 'Simpan' }}</button>
                <a href="{{ route('users.index') }}" class="btn btn-secondary mt-3">Batal</a>
            </form>
        </div>
    </div>

    <!-- Tabel Data Pengguna -->
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $index => $user)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>
                    <!-- Edit Button -->
                    <button class="btn btn-info btn-sm" onclick="openEditModal({{ $user->id }}, '{{ $user->name }}', '{{ $user->email }}', '{{ $user->role }}')">Edit</button>

                    <!-- Delete Button -->
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
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

<!-- Modal Edit Pengguna -->
<div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUserModalLabel">Edit Pengguna</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="editUserForm" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="editName">Nama</label>
                        <input type="text" name="name" class="form-control" id="editName" required>
                    </div>
                    <div class="form-group">
                        <label for="editEmail">Email</label>
                        <input type="email" name="email" class="form-control" id="editEmail" required>
                    </div>
                    <div class="form-group">
                        <label for="editRole">Role</label>
                        <select name="role" class="form-control" id="editRole" required>
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="editPassword">Password</label>
                        <input type="password" name="password" class="form-control" id="editPassword" placeholder="Masukkan password (opsional)">
                    </div>
                    <div class="form-group">
                        <label for="editPasswordConfirmation">Konfirmasi Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="editPasswordConfirmation" placeholder="Konfirmasi password">
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

@endsection

<script>
    function openEditModal(id, name, email, role) {
        // Set the values of the modal inputs
        document.getElementById('editName').value = name;
        document.getElementById('editEmail').value = email;
        document.getElementById('editRole').value = role;
        // Set form action to update route
        document.getElementById('editUserForm').action = '/users/' + id;
        // Show the modal
        $('#editUserModal').modal('show');
    }
</script>
@section('scripts')

@endsection
