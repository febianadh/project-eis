<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\GalleryModel; 

class Gallery extends ResourceController
{
    public function __construct() {
        $this->galleryModel = new GalleryModel();
        
    }


    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index() 
    {
        $gallery2 = $this->galleryModel->paginate(1, 'gallery2');


        $payload = [
            "gallery2" => $gallery2,
            "pager" => $this->galleryModel->pager,
        ];

        echo view('gallery/index', $payload);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        echo view('gallery/new');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        
        $payload = [
            "nama" => $this->request->getPost('nama'),
            "seniman" => $this->request->getPost('seniman'),
            "tahun" => (int) $this->request->getPost('tahun'),
            "deskripsi" => $this->request->getPost('deskripsi'),
        ];

        $this->galleryModel->insert($payload);
        return redirect()->to('/gallery');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $gallery = $this->galleryModel->find($id);

        
        
        echo view('gallery/edit', ["data" => $gallery]);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $payload = [
                "nama" => $this->request->getPost('nama'),
                "tahun" => (int)$this->request->getPost('tahun'),
                "seniman" => $this->request->getPost('seniman'),
                "deskripsi" => $this->request->getPost('deskripsi'),
                
            ];
       
        $this->galleryModel->update($id, $payload);
        return redirect()->to('/gallery');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
       
        $this->galleryModel->delete($id);
        return redirect()->to('/gallery');
    }
}
