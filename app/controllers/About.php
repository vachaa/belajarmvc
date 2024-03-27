<?php

class About
{
    public function index()
    {
        echo "Anda masuk Class About, Method Index";
    }

    public function page($name = 'Vanisha', $pekerjaan = 'Mahasiswa')
    {
        echo "Halo, Nama saya $name, pekerjaan saya $pekerjaan";
    }
}