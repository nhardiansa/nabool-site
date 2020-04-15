<?php 

class Member extends Controller{

    public function index()
    {
        $data['member'] = $this->model('Member_model')->getAllMember();
        $data['judul'] = 'Memberpage';
        $this->view('templates/header',$data);
        $this->view('member/index',$data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data = $this->model('Member_model')->getMemberById($id);
        $data['judul'] = 'Profil Member';
        $this->view('templates/header',$data);
        $this->view('member/detail',$data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if($this->model('Member_model')->tambahMember($_POST) > 0){
            Flasher::setFlash('berhasil','ditambahkan','success');
            header('Location:' . BASEURL . 'member');
            exit;
        }else{
            Flasher::setFlash('gagal','ditambahkan','danger');
            header('Location:' . BASEURL . 'member');
            exit;
        }
    }

    public function hapus($id)
    {
        if($this->model('Member_model')->hapusMember($id) > 0){
            Flasher::setFlash('berhasil','dihapus','success');
            header('Location:' . BASEURL . 'member');
            exit;
        }else{
            Flasher::setFlash('gagal','dihapus','danger');
            header('Location:' . BASEURL . 'member');
            exit;
        }
    }
}