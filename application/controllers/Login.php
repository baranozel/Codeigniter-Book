<?php 

    class Login extends CI_Controller{

        public function index()
	    {
		    $this->load->view('login_v.php');
	    }

        public function logindata()
        {
            if($this->input->method() == "post")
            {
                $this->form_validation->set_rules('email','E-posta Adresiniz','trim|required|valid_email');
                $this->form_validation->set_rules('password','Şifreniz','trim|required');

                if($this->form_validation->run() == FALSE)
                {
                    echo validation_errors();
                }
                else
                {
                    $query = $this->common_model->get([
                        'sifre' => sha1(md5(strip_tags(trim($this->input->post('password',true))))),
                        'eposta' => strip_tags(trim($this->input->post('email',true)))
                    ],'kullanicilar');

                    if($query)
                    {
                        $this->session->set_userdata([
                            'oturum'  => true,
                            'id'      => $query->id,
                            'sifre'   => $query->sifre,
                            'eposta'  => $query->eposta,
                            'adi'     => $query->adi

                        ]);
                        
                        redirect(base_url('welcome'));
                    }
                    else
                    {
                        echo "Girilen bilgiler yanlış!!!";
                    }
                }
            }
        }
    }
?>