<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class article extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('articleModel');
        $this->load->helper('url');//载入url helper
		$this->load->library('pagination');//载入pagination
		$this->load->library('session');//载入pagination
    }

    public function checkLogin(){
	    $user = $this->session->userdata('user');
	    if(empty($user)) redirect('admin');
    }

	//生成验证码
    public function code($w, $h){
	    $arr = array();
	    $num = rand(1000,9999);
	    $_SESSION['code'] = $num;
        $this->load->helper('image');
        createCode($num,$w,$h);
    }

    public function index(){
        if($_POST){
            $code = $_POST['code'];
            if($code != $_SESSION['code']){
                $arr['info'] = '验证码不正确！';
                $arr['url'] = 'admin';
                $data['arr'] = $arr;
                $this->load->view('admin/tips',$data);
            }else{
	            $user = $_POST['user'];
	            $pw = $_POST['pw'];
	            $admin = $this->articleModel->getArticle('admin', $user, 'user');
	            if(md5($pw) == $admin['password']){
		            $array['user'] = $user;
		            $this->session->set_userdata($array);
		            redirect('admin/article/create');
	            }else{
		            $arr['info'] = '用户名或密码错误！';
	                $arr['url'] = 'admin';
	                $data['arr'] = $arr;
	                $this->load->view('admin/tips',$data);
	            }
            }
	            
        }else{
            $this->load->view('admin/header');
            $this->load->view('admin/index');
        }
    }

    public function lists(){
	    $this->checkLogin();
		$config['base_url'] = site_url('admin/article/lists');
		//$config['uri_segment'] = 1;//地址栏中的第几个参数,默认是第3个

		$config['use_page_numbers'] = true;//使用页码而不是offset
		$config['total_rows']= $this->articleModel->countArticles('article');//数据总条数
		$config['per_page']= 10;//每页显示条数

		$this->pagination->initialize($config);

		$limit['num'] = $config['per_page'];
		$page = $this->uri->segment(4);
		$page = isset($page) ? $page - 1 : 0;
		//echo $page;
        $limit['offset'] = $page * $limit['num'];
        $data['article'] = $this->articleModel->getLimitArticles('article',$limit);
        
        $data['title'] = array('id'=>2);
        $data['arr'] = array('12','10','19','22','20');
        
        $this->load->view('admin/left');
        $this->load->view('admin/lists', $data);
    }

    public function create(){
	    $this->checkLogin();
        if($_POST){
            $config['upload_path']      = './upload/article';
	        $config['allowed_types']    = 'gif|jpg|png';
	        $config['max_size']     = 10280;
	        $config['max_width']        = 1024;
	        $config['max_height']       = 1024;

	        $this->load->library('upload', $config);
	        if ( ! $this->upload->do_upload('pic')){
	            echo "<meta charset='utf-8'/>上传失败！";
		        //$error = $this -> upload -> display_errors();
		        //var_dump($error);
	        }else{
		        //$this->upload->do_upload('pic');
	            $data = $_POST;
		        $data['pic'] = '/upload/article/'.$this->upload->data('file_name');
	            $id = $this->articleModel->insertOne('article',$data);
	            if($id == 1){
		            redirect('admin/article/lists');
	            }else{
		            echo "<meta charset='utf-8'/>文章发布失败！";
	            }
	        }
        }else{
            $this->load->view('admin/left');
            $this->load->view('admin/create');
        }
    }

	public function del($id){
	    $this->checkLogin();
		$id = $this->articleModel->delOne('article',$id);
		if($id){
			redirect('admin/article/lists');
		}else{
			echo "<meta charset='utf-8'/>文章删除失败！";
		}
	}

	public function update($id = ''){
	    $this->checkLogin();
		if($_POST){
            $data = $_POST;
			if(empty($_FILES['pic']['tmp_name'])){
	            $id = $this->articleModel->updateOne('article',$data,$this->input->post('id'));
	            if($id == 1){
		            redirect('admin/article/lists');
	            }else{
		            echo "<meta charset='utf-8'/>文章更新失败！";
	            }
	        }else{
		        $config['upload_path']      = './upload/article';
		        $config['allowed_types']    = 'gif|jpg|png';
		        $config['max_size']     = 10280;
		        $config['max_width']        = 1024;
		        $config['max_height']       = 1024;
		        $this->load->library('upload', $config);
		        if ( ! $this->upload->do_upload('pic')){
		            echo "<meta charset='utf-8'/>上传失败！";
		        }else{
			        $data['pic'] = '/upload/article/'.$this->upload->data('file_name');
		            $id = $this->articleModel->updateOne('article',$data,$this->input->post('id'));
		            if($id == 1){
			            redirect('admin/article/lists');
		            }else{
			            echo "<meta charset='utf-8'/>文章更新失败！";
		            }
		        }
	        }
        }else{
	        $data['data'] = $this->articleModel->getArticle('article', $id);
            $this->load->view('admin/left');
            $this->load->view('admin/update',$data);
        }
	}

	public function logout(){
		$this->session->unset_userdata('user');
		redirect('admin');
	}
}

