<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function masuk()
    {
        $data = [
            'title' => 'Masuk'
        ];
        return view('pages/masuk', $data);
    }


    public function profil()
    {
        $data = [
            'title' => 'Profil'
        ];
        return view('pages/profil', $data);
    }

    public function billing()
    {
        $data = [
            'title' => 'Billing'
        ];
        return view('pages/billing', $data);
    }

    public function kamar()
    {
        $data = [
            'title' => 'Kamar'
        ];
        return view('pages/kamar', $data);
    }

    public function rapor()
    {
        $data = [
            'title' => 'Rapor'
        ];
        return view('pages/rapor', $data);
    }


    public function pelanggaran()
    {
        $data = [
            'title' => 'Pelanggaran'
        ];
        return view('pages/pelanggaran', $data);
    }


    public function perijinan()
    {
        $data = [
            'title' => 'Perijinan'
        ];
        return view('pages/perijinan', $data);
    }


    public function absensi()
    {
        $data = [
            'title' => 'Absensi'
        ];
        return view('pages/absensi', $data);
    }


    public function formal()
    {
        $data = [
            'title' => 'Formal'
        ];
        return view('pages/formal', $data);
    }


    public function madrasah()
    {
        $data = [
            'title' => 'Madrasah'
        ];
        return view('pages/madrasah', $data);
    }


    public function kesehatan()
    {
        $data = [
            'title' => 'Kesehatan'
        ];
        return view('pages/kesehatan', $data);
    }
}
