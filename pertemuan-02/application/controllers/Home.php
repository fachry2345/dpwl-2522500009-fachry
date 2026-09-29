<?php
class Home extends Controller
{
    public function index(): void
    {
        $data = [
            'judul' => 'Fondasi MVC DPWL',
            'pesan' => 'Request telah melewati front controller, Router, Controller, dan View.'
        ];
        $this->view('home/index', $data);
    }

    public function info(string $topik = 'mvc'): void
    {
        $this->view('home/info', ['topik' => $topik]);
    }

    public function dokter(string $nik = '2522500009'): void
    {
        $data = [
            'title' => 'Detail Dokter',
            'nik'   => $nik,
            'nama'  => 'Fahry',
            'kelas' => 'SI3A'
        ];
        $this->view('home/dokter', $data);
    }
}