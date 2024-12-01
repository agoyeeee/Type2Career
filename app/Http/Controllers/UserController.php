<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Menampilkan daftar pengguna
    public function index()
    {
        $users = User::all();
        return view('user', compact('users'));
    }

    // Menyimpan pengguna baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role ?? 'user',
        ]);

        return redirect()->route('user')->with('success', 'Pengguna berhasil ditambahkan.');
    }

    // Memperbarui dan menampilkan form pengeditan pengguna
    public function update(Request $request, $id)
    {
        // Jika request adalah metode PUT atau PATCH
        if ($request->isMethod('put')) {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email,' . $id,
                'password' => 'nullable|confirmed|min:8',
            ]);

            $user = User::findOrFail($id);
            $user->name = $request->name;
            $user->email = $request->email;

            // Update password hanya jika diisi
            if ($request->password) {
                $user->password = Hash::make($request->password);
            }

            $user->role = $request->role ?? 'user';
            $user->save();

            return redirect()->route('users.index')->with('success', 'Pengguna berhasil diperbarui.');
        }

        // Jika request adalah metode GET (menampilkan form edit)
        $user = User::findOrFail($id);
        return view('user', compact('user'));
    }

    // Menghapus pengguna
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Pengguna berhasil dihapus.');
    }
}
