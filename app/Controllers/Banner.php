<?php

namespace App\Controllers;

use App\Models\BannerModel;

class Banner extends BaseController
{
    protected $bannerModel;
    public function __construct()
    {
        $this->bannerModel = new BannerModel();
    }

    public function index()
    {
        if (session()->get('logged_in')) {
            if (session()->get('tipe_admin') == 'Super Admin') {
                $banner = $this->bannerModel->where(['layanan' => 'home'])->first();
                $data = [
                    'judul' => 'Home Page Data | Admin',
                    'title' => 'Home Banner',
                    'banner' => $banner,
                    'validation' => \Config\Services::validation()
                ];
                return view('admin/homepage/v_data_banner', $data);
            } else {
                $data = [
                    'tipe_admin' => session()->get('tipe_admin'),
                    'nama'     => session()->get('nama'),
                    'email'     => session()->get('email'),
                    'password'     => session()->get('password'),
                    'foto'     => session()->get('foto'),
                ];
                return redirect()->to('/admin');
            }
        } else {
            return redirect()->to('/login');
        }
    }

    public function karirbanner()
    {
        if (session()->get('logged_in')) {
            if (session()->get('tipe_admin') == 'Super Admin') {
                $banner = $this->bannerModel->where(['layanan' => 'karir'])->first();
                $data = [
                    'judul' => 'Home Page Data | Admin',
                    'title' => 'Karir Banner',
                    'banner' => $banner,
                    'validation' => \Config\Services::validation()
                ];
                return view('admin/karir/v_karir_banner', $data);
            } else {
                $data = [
                    'tipe_admin' => session()->get('tipe_admin'),
                    'nama'     => session()->get('nama'),
                    'email'     => session()->get('email'),
                    'password'     => session()->get('password'),
                    'foto'     => session()->get('foto'),
                ];
                return redirect()->to('/admin');
            }
        } else {
            return redirect()->to('/login');
        }
    }
    public function mobilebanner()
    {
        if (session()->get('logged_in')) {
            if (session()->get('tipe_admin') == 'Super Admin') {
                $banner = $this->bannerModel->where(['layanan' => 'mobile'])->first();
                $data = [
                    'judul' => 'Home Page Data | Admin',
                    'title' => 'Mobile Banner',
                    'banner' => $banner,
                    'validation' => \Config\Services::validation()
                ];
                return view('admin/layanan/v_mobile_banner', $data);
            } else {
                $data = [
                    'tipe_admin' => session()->get('tipe_admin'),
                    'nama'     => session()->get('nama'),
                    'email'     => session()->get('email'),
                    'password'     => session()->get('password'),
                    'foto'     => session()->get('foto'),
                ];
                return redirect()->to('/admin');
            }
        } else {
            return redirect()->to('/login');
        }
    }
    public function integrasibanner()
    {
        if (session()->get('logged_in')) {
            if (session()->get('tipe_admin') == 'Super Admin') {
                $banner = $this->bannerModel->where(['layanan' => 'integrasi'])->first();
                $data = [
                    'judul' => 'Home Page Data | Admin',
                    'title' => 'Integrasi Sisten Banner',
                    'banner' => $banner,
                    'validation' => \Config\Services::validation()
                ];
                return view('admin/layanan/v_integrasi_banner', $data);
            } else {
                $data = [
                    'tipe_admin' => session()->get('tipe_admin'),
                    'nama'     => session()->get('nama'),
                    'email'     => session()->get('email'),
                    'password'     => session()->get('password'),
                    'foto'     => session()->get('foto'),
                ];
                return redirect()->to('/admin');
            }
        } else {
            return redirect()->to('/login');
        }
    }
    public function pengadaanbanner()
    {
        if (session()->get('logged_in')) {
            if (session()->get('tipe_admin') == 'Super Admin') {
                $banner = $this->bannerModel->where(['layanan' => 'pengadaan'])->first();
                $data = [
                    'judul' => 'Home Page Data | Admin',
                    'title' => 'Pengadaan IT Banner',
                    'banner' => $banner,
                    'validation' => \Config\Services::validation()
                ];
                return view('admin/layanan/v_pengadaan_banner', $data);
            } else {
                $data = [
                    'tipe_admin' => session()->get('tipe_admin'),
                    'nama'     => session()->get('nama'),
                    'email'     => session()->get('email'),
                    'password'     => session()->get('password'),
                    'foto'     => session()->get('foto'),
                ];
                return redirect()->to('/admin');
            }
        } else {
            return redirect()->to('/login');
        }
    }
    public function aboutmebanner()
    {
        if (session()->get('logged_in')) {
            if (session()->get('tipe_admin') == 'Super Admin') {
                $banner = $this->bannerModel->where(['layanan' => 'about'])->first();
                $data = [
                    'judul' => 'Home Page Data | Admin',
                    'title' => 'Tentang Kami Banner',
                    'banner' => $banner,
                    'validation' => \Config\Services::validation()
                ];
                return view('admin/layanan/v_aboutme_banner', $data);
            } else {
                $data = [
                    'tipe_admin' => session()->get('tipe_admin'),
                    'nama'     => session()->get('nama'),
                    'email'     => session()->get('email'),
                    'password'     => session()->get('password'),
                    'foto'     => session()->get('foto'),
                ];
                return redirect()->to('/admin');
            }
        } else {
            return redirect()->to('/login');
        }
    }
    public function egovbanner()
    {
        if (session()->get('logged_in')) {
            if (session()->get('tipe_admin') == 'Super Admin') {
                $banner = $this->bannerModel->where(['layanan' => 'egov'])->first();
                $data = [
                    'judul' => 'Home Page Data | Admin',
                    'title' => 'E-Goverment Banner',
                    'banner' => $banner,
                    'validation' => \Config\Services::validation()
                ];
                return view('admin/layanan/v_egov_banner', $data);
            } else {
                $data = [
                    'tipe_admin' => session()->get('tipe_admin'),
                    'nama'     => session()->get('nama'),
                    'email'     => session()->get('email'),
                    'password'     => session()->get('password'),
                    'foto'     => session()->get('foto'),
                ];
                return redirect()->to('/admin');
            }
        } else {
            return redirect()->to('/login');
        }
    }
    public function informasibanner()
    {
        if (session()->get('logged_in')) {
            if (session()->get('tipe_admin') == 'Super Admin') {
                $banner = $this->bannerModel->where(['layanan' => 'informasi'])->first();
                $data = [
                    'judul' => 'Home Page Data | Admin',
                    'title' => 'Sistem Infromasi Banner',
                    'banner' => $banner,
                    'validation' => \Config\Services::validation()
                ];
                return view('admin/layanan/v_informasi_banner', $data);
            } else {
                $data = [
                    'tipe_admin' => session()->get('tipe_admin'),
                    'nama'     => session()->get('nama'),
                    'email'     => session()->get('email'),
                    'password'     => session()->get('password'),
                    'foto'     => session()->get('foto'),
                ];
                return redirect()->to('/admin');
            }
        } else {
            return redirect()->to('/login');
        }
    }

    public function UpdateBanner($id)
    {
        if (session()->get('logged_in')) {
            if (session()->get('tipe_admin') == 'Super Admin') {
                $banner = $this->bannerModel->where(['id' => $id])->first();
                $data = [
                    'judul' => 'Home Page Data | Admin',
                    'title' => 'Update Banner',
                    'banner' => $banner,
                    'validation' => \Config\Services::validation()
                ];
                return view('admin/homepage/v_update_banner', $data);
            } else {
                $data = [
                    'tipe_admin' => session()->get('tipe_admin'),
                    'nama'     => session()->get('nama'),
                    'email'     => session()->get('email'),
                    'password'     => session()->get('password'),
                    'foto'     => session()->get('foto'),
                ];
                return redirect()->to('/admin');
            }
        } else {
            return redirect()->to('/login');
        }
    }
    // public function save()
    // {
    //     $link = $this->request->getVar('link');

    //     if (!$this->validate([
    //         'deskripsi' => [
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => 'Deskripsi harus diisi'
    //             ]
    //         ],
    //         'foto' => [
    //             'rules' => 'uploaded[foto]|max_size[foto, 1024]|is_image[foto]|mime_in[foto,image/jpg,image/JPG,image/jpeg,image/JPEG,image/png]',
    //             'errors' => [
    //                 'uploaded' => 'gambar harus ditambahkan',
    //                 'max_size' => 'Ukuran gambar terlalu besar',
    //                 'is_image' => 'File yang dipilih bukan gambar',
    //                 'mime_in' => 'File yang dipilih bukan gambar'

    //             ]
    //         ]
    //     ])) {

    //         return redirect()->to('/data_banner_' . $link)->withInput();
    //     }

    //     $fotoFile = $this->request->getFile('foto');
    //     $namaFoto = $fotoFile->getRandomName();
    //     $fotoFile->move('assets/img', $namaFoto);


    //     $this->bannerModel->save([
    //         'deskripsi' => $this->request->getVar('deskripsi'),
    //         'layanan' => $this->request->getVar('layanan'),
    //         'foto' => $namaFoto
    //     ]);

    //     session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

    //     return redirect()->to('/data_banner_' . $link);
    // }

    public function update($id)
    {
        if (!$this->validate([
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi harus diisi'
                ]
            ],
            'foto' => [
                'rules' => 'max_size[foto, 5000]|is_image[foto]|mime_in[foto,image/jpg,image/JPG,image/jpeg,image/JPEG,image/png]',
                'errors' => [
                    'uploaded' => 'gambar harus ditambahkan',
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'File yang dipilih bukan gambar',
                    'mime_in' => 'File yang dipilih bukan gambar'

                ]
            ]
        ])) {

            return redirect()->to('/update_banner' . $this->request->getVar('id'))->withInput();
        }
        $layanan = $this->request->getVar('layanan');

        $fotoFile = $this->request->getFile('foto');
        if ($fotoFile->getError() == 4) {
            $namaFoto = $this->request->getVar('fotoLama');
        } else {
            $namaFoto = $fotoFile->getRandomName();
            $fotoFile->move('assets/img/banner', $namaFoto);
            // unlink('assets/img/banner/' . $this->request->getVar('fotoLama'));
        }

        $this->bannerModel->save([
            'id' => $id,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'layanan' => $this->request->getVar('layanan'),
            'foto' => $namaFoto
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/data_banner_' . $layanan);
    }

    public function delete($id)
    {
        $banner = $this->bannerModel->find($id);
        $layanan = $banner['layanan'];
        unlink('assets/img/banner/' . $banner['foto']);
        $this->bannerModel->delete($id);
        session()->getFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/data_banner_' . $layanan);
    }
}