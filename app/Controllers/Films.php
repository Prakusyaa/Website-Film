<?php

    namespace App\Controllers;

    use App\Models\FilmModel;

    class Films extends BaseController
    {
        protected $filmModel;
        public function __construct()
        {
            $this->filmModel = new FilmModel();
        }
        public function list(): string
        {
            $data = [
                'title' => 'Filmjir - List Film',
                'film' => $this->filmModel->getFilm(),
                'active' => '
                <li class="nav-item">
                <a class="nav-link text-white fw-bolder" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white fw-bolder" href="/Pages/about">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active text-white me-4 fw-bolder" href="/Films/list">List</a>
                </li>
                '
            ];
        
            return view('film/listfilm', $data);
        }

        public function detail($slug): string
        {
            $data = [
                'title' => 'Filmjir - Detail Film',
                'film' => $this->filmModel->getFilm($slug),
                'active' => '
                <li class="nav-item">
                <a class="nav-link text-white fw-bolder" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white fw-bolder" href="/Pages/about">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active text-white me-4 fw-bolder" href="/Films/list">List</a>
                </li>
                '
            ];

            return view('film/detail', $data);
        }

        public function delete($id)
        {
            $this->filmModel->delete($id);
            session()->setFlashdata('pesan', 'Data telah berhasil dihapus');
            return redirect()->to('/Films');
        }

        public function edit($slug)
        {
            session();
            $data = [
                'title' => 'Filmjir - Edit Film',
                'validation' => \Config\Services::validation(),
                'film' => $this->filmModel->getFilm(($slug)),
                'active' => '
                <li class="nav-item">
                <a class="nav-link text-white fw-bolder" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white fw-bolder" href="/Pages/about">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active text-white me-4 fw-bolder" href="/Films/list">List</a>
                </li>
                '
            ];

            return view('film/edit', $data);
        }

        public function create(): string
        {
            session();
            $data = [
                'title' => 'Filmjir - Add Film',
                'validation' => \Config\Services::validation(),
                'active' => '
                <li class="nav-item">
                <a class="nav-link text-white fw-bolder" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white fw-bolder" href="/Pages/about">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active text-white me-4 fw-bolder" href="/Films/list">List</a>
                </li>
                '
            ];

            return view('film/create', $data);
        }

        public function save()
        {
            if (
                !$this->validate([
                    'judul' => 'required|is_unique[listfilm.judul]',
                    'sutradara' => 'required',
                    'synopsis' => 'required',
                    'cover' => 'required',
                    'genre' => 'required',
                    'rilis' => 'required',
                ])
            ) {
                // Menyimpan error ke dalam session dan menampilkan kembali form dengan inputan yang ada
                $validation = \Config\Services::validation();
                session()->setFlashdata('validate', 'Harap Isi Formulir Dengan Benar');
                return redirect()->to('/film/create')->withInput()->with('validation', $validation);
            }

            $slug = url_title($this->request->getVar('judul'), '-', true);
            $this->filmModel->save([
                'judul' => $this->request->getVar('judul'),
                'slug' => $slug,
                'sutradara' => $this->request->getVar('sutradara'),
                'synopsis' => $this->request->getVar('synopsis'),
                'cover' => $this->request->getVar('cover'),
                'genre' => $this->request->getVar('genre'),
                'rilis' => (int)$this->request->getVar('rilis')
            ]);

            session()->setFlashdata('pesan', 'Data Telah Berhasil Ditambahkan');
            return redirect()->to('/Films/list');
        }

        public function update($id)
        {
            $filmLama = $this->filmModel->getFilm($this->request->getVar('slug'));
            if ($filmLama['judul'] == $this->request->getVar('judul')) {
                $rule_judul = 'required';
            } else {
                $rule_judul = 'required|is_unique[listfilm.judul]';
            }

            if (!$this->validate([
                'judul' => $rule_judul,
                'sutradara' => 'required',
                'synopsis' => 'required',
                'cover' => 'required',
                'genre' => 'required',
                'rilis' => 'required',
            ])) {
                $validation = \Config\Services::validation();

                return redirect()->to('/Films/edit/' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
            }

            $slug = url_title($this->request->getVar('judul'), '-', true);
            $this->filmModel->save([
                'id' => $id,
                'judul' => $this->request->getVar('judul'),
                'slug' => $slug,
                'sutradara' => $this->request->getVar('sutradara'),
                'synopsis' => $this->request->getVar('synopsis'),
                'cover' => $this->request->getVar('cover'),
                'genre' => $this->request->getVar('genre'),
                'rilis' => (int)$this->request->getVar('rilis')
            ]);            
            session()->setFlashdata('pesan', 'Data telah berhasil diedit');
            return redirect()->to('/Films/list');
        }
    }