<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index()
    {
        $akun = User::orderBy('id')->get();
        $superAdminEmails = $this->superAdminEmails();

        return view('admin.akun.index', compact('akun', 'superAdminEmails'));
    }

    public function create()
    {
        return view('admin.akun.create');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ],
        [
            'name.required' => 'Nama wajib diisi!',
            'name.string' => 'Nama hanya boleh berupa teks!',
            'name.max' => 'Nama maksimal 255 karakter!',
            'email.required' => 'Email wajib diisi!',
            'email.email' => 'Format email tidak valid!',
            'email.max' => 'Email maksimal 255 karakter!',
            'email.unique' => 'Email sudah digunakan!',
            'password.required' => 'Kata sandi wajib diisi!',
            'password.string' => 'Kata sandi hanya boleh berupa teks!',
            'password.min' => 'Kata sandi minimal 8 karakter!',
            'password.confirmed' => 'Konfirmasi kata sandi tidak cocok!'
        ],
        [
            'name' => 'Nama',
            'email' => 'Email',
            'password' => 'Kata Sandi'
        ]);

        $validate['is_admin'] = true;

        User::create($validate);

        return redirect()
            ->route('admin.akun.index')
            ->with('success', 'Akun Admin Berhasil Ditambahkan!');
    }

    public function edit(User $akun)
    {
        return view('admin.akun.edit', compact('akun'));
    }

    public function update(Request $request, User $akun)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'email' => [
                'required', 'string', 'email', 'max:255',
                Rule::unique('users', 'email')->ignore($akun->id)
            ],
            'password' => 'nullable|string|min:8|confirmed',
        ],
        [
            'name.required' => 'Nama wajib diisi!',
            'name.string' => 'Nama hanya boleh berupa teks!',
            'name.max' => 'Nama maksimal 255 karakter!',
            'email.required' => 'Email wajib diisi!',
            'email.email' => 'Format email tidak valid!',
            'email.max' => 'Email maksimal 255 karakter!',
            'email.unique' => 'Email sudah digunakan!',
            'password.string' => 'Kata sandi hanya boleh berupa teks!',
            'password.min' => 'Kata sandi minimal 8 karakter!',
            'password.confirmed' => 'Konfirmasi kata sandi tidak cocok!'
        ],
        [
            'name' => 'Nama',
            'email' => 'Email',
            'password' => 'Kata Sandi'
        ]);

        if (in_array($akun->email, $this->superAdminEmails()) && $validate['email'] !== $akun->email) {
            return back()
                ->withInput()
                ->withErrors(['email' => 'Email akun super admin tidak boleh diubah!']);
        }

        if (blank($validate['password'] ?? null)) {
            unset($validate['password']);
        }

        $akun->update($validate);

        return redirect()
            ->route('admin.akun.index')
            ->with('success', 'Akun Admin Berhasil Diperbarui');
    }

    public function destroy(Request $request, User $akun)
    {
        if ($akun->id === $request->user()->id) {
            return redirect()
                ->route('admin.akun.index')
                ->with('error', 'Anda tidak dapat menghapus akun Anda sendiri!');
        }

        if (in_array($akun->email, $this->superAdminEmails())) {
            return redirect()
                ->route('admin.akun.index')
                ->with('error', 'Akun super admin tidak dapat dihapus!');
        }

        $akun->delete();

        return redirect()
            ->route('admin.akun.index')
            ->with('success', 'Akun Admin Berhasil Dihapus');
    }

    private function superAdminEmails(): array
    {
        return array_map(
            'trim',
            array_filter(explode(',', env('SUPER_ADMIN_EMAILS', 'aidil@dev')))
        );
    }
}
