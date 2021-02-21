<?php

namespace App\Controllers;

use App\Models\m_auth;

class Auth extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->model = new m_auth();
    }

    public function register()
    {
        $data = [
            'judul' => 'Register'
        ];
        echo view('v_register', $data);
    }
    public function save_register()
    {

        if ($this->validate([
            'nama' => [
                'label' => 'Nama User',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama harus diisi dan tidak boleh kosong !!!'
                ]
            ],
            'email' => [
                'label' => 'Email User',
                'rules' => 'required',
                'errors' => [
                    'required' => 'email harus diisi dan tidak boleh kosong !!!'
                ]
            ],
            'noHp' => [
                'label' => 'Nomor HP User',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor Hp harus diisi dan tidak boleh kosong !!!'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => 'ini harus diisi dan tidak boleh kosong !!!',

                ]
            ],
            'repassword' => [
                'label' => 'Nomor HP User',
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'ini harus diisi dan tidak boleh kosong !!!',
                    'matches' => 'password tidak sama'
                ]
            ]
        ])) {
            $data = array(

                'nama' => $this->request->getPost('nama'),
                'noHp' => $this->request->getPost('noHp'),
                'email' => $this->request->getPost('email'),
                'password' => $this->request->getPost('password'),
                'level' => 3
            );
            $this->model->save_register($data);
            Session()->setFlashdata('pesan', 'Register Berhasil');
            return redirect()->to(base_url('Auth/login'));
        } else {
            session()->setFlashData('errors', \config\Services::validation()->getErrors());
            return redirect()->to(base_url('Auth/register'));
        }
    }
    public function login()
    {
        $data = [
            'judul' => 'Login'
        ];
        echo view('v_login', $data);
    }
    public function cek_login()
    {
        if ($this->validate([
            'email' => [
                'label' => 'Email User',
                'rules' => 'required',
                'errors' => [
                    'required' => 'email harus diisi dan tidak boleh kosong !!!'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => 'ini harus diisi dan tidak boleh kosong !!!'
                ]
            ],
        ])) {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $cek = $this->model->login($email, $password);
            if ($cek) {
                session()->set('log', true);
                session()->set('nama', $cek['nama']);
                session()->set('email', $cek['email']);
                session()->set('level', $cek['level']);
                session()->set('foto', $cek['foto']);
                return redirect()->to(base_url('test1'));
            } else {
                session()->setFlashData('pesan', 'login gagal');
                return redirect()->to(base_url('Auth/login'));
            }
        } else {
            session()->setFlashData('errors', \config\Services::validation()->getErrors());
            return redirect()->to(base_url('Auth/login'));
        }
    }
    public function logout()
    {
        session()->remove('log');
        session()->remove('nama');
        // session()->remove('email');
        session()->remove('level');
        session()->remove('foto');
        Session()->setFlashdata('pesan', 'logout sukses');
        return redirect()->to(base_url('Auth/login'));
    }
}
