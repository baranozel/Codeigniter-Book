<?php 

    class Profile extends CI_Controller{
        
        public function __construct()
        {
            parent::__construct();

            if(!$this->session->userdata('oturum'))
            {
                redirect(base_url('login'));
            }
        }
        
        
        public function index(){
            $this->load->view('profile_v.php');
        }

        public function profiledata(){
            if($this->input->method() == 'post'){

                $this->form_validation->set_rules('eposta','E-posta Adresiniz','trim|required|valid_email');
                $this->form_validation->set_rules('sifre','Şifreniz','trim');    

                if($this->form_validation->run() == FALSE){
                    echo validation_errors();
                }
                else
                {
                    $query = $this->common_model->get([
                        'eposta'  => $this->input->post('eposta'.true),
                        'id !='      => $this->session->userdata('id')
                    ],'kullanicilar');

                    if($query)
                    {
                        echo "E-posta adresi sistemde zaten kayıtlı.";
                    }
                    else
                    {
                        if($this->input->post('sifre') == "")
                        {
                            $data = array(
                                "eposta" => strip_tags(trim($this->input->post('eposta',true))),
                            );
                        }
                        else
                        {
                            $data = array(
                                "eposta" => strip_tags(trim($this->input->post('eposta',true))),
                                "sifre" => sha1(md5(strip_tags(trim($this->input->post('sifre',true)))))
                            );
                        }

                        $update = $this->common_model->update(['id' => $this->session->userdata('id')],$data,'kullanicilar');
                        
                        if($update)
                        {
                            echo "Profiliniz güncellendi.";
                        }
                        else
                        {
                            echo "Bir hata oluştu.";
                        }
                    }
                }    
            }
        }
    }

?>