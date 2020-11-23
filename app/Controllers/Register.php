<?php

namespace App\Controllers;

class Register extends BaseController
{
    public function index()
    {
        session();
        $validation = \Config\Services::validation();
        $data['validation'] = $validation;

        return view('register_view', $data);
    }

    public function terdaftar()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required|alpha|min_length[2]',
                'errors' => [
                    'required' => 'Nama Harus Diisi',
                    'alpha' => 'Nama Hanya Mengandung Huruf',
                    'min_length[2]' => 'Nama Minimal 2 Huruf'
                ]
            ],
            'username' => [
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => 'Username Harus Diisi',
                    'min_length' => 'Username Minimal 3 Huruf'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Email Harus Diisi',
                    'valid_email' => 'Email Tidak Valid'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[5]|regex_match[^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{5,}$]',
                'errors' => [
                    'required' => 'Password Harus Diisi',
                    'min_length' => 'Password Minimal 5 Karakter',
                    'regex_match' => 'Password Minimal 1 Angka, 1 Huruf Besar, 1 Huruf Kecil'
                ]
            ],
            'konfir-pass' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'Konfirmasi Password Harus Diisi',
                    'matches' => 'Konfirmasi Password Tidak Sesuai '
                ]
            ]
        ])) {
            session()->setFlashdata('state', 'true');
            $validation = \Config\Services::validation();
            return redirect()->to('http://localhost/login-ci4/register')->withInput()->with('validation', $validation);
        }
        return view('success_register');
    }

    public function success()
    {
        return view('success_register');
    }
}
