<?php 

    class Register extends CI_Controller{

        public function index()
	    {
		    $this->load->view('kayitol_v.php');
	    }

        public function registerdata(){
            
            if($this->input->method() == "post"){

                $this->form_validation->set_rules('adi','Adınız','trim|required');
                $this->form_validation->set_rules('soyadi','Soyadınız','trim|required');
                $this->form_validation->set_rules('eposta','E-posta Adresiniz','trim|required|is_unique[kullanicilar.eposta]|valid_email');
                $this->form_validation->set_rules('sifre','Şifreniz','trim|required');    

                if($this->form_validation->run() == FALSE){
                    echo validation_errors();
                }
                else
                {
                    $data = array(
                        "adi" => strip_tags(trim($this->input->post('adi',true))),
                        "soyadi" => strip_tags(trim($this->input->post('soyadi',true))),
                        "eposta" => strip_tags(trim($this->input->post('eposta',true))),
                        "sifre" => sha1(md5(strip_tags(trim($this->input->post('sifre',true)))))
                    );

                    $ekle = $this->common_model->addata('kullanicilar',$data);

                    if($ekle)
                    {
                        echo "Üyelik Oluşturuldu.";
                    }
                    else
                    {
                        echo "Hata oluştu.";
                    }
                }
            }
        }
    }

?>