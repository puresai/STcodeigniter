<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class article extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('articleModel');
        $this->load->helper('url');//载入url helper
		$this->load->library('pagination');//载入pagination
		$where['num'] = 10;
        $where['offset'] = 0;
        $where['con'] = array('is_top'=>1);
		$this->recommend = $this->articleModel->getLimitArticles('article',$where);
    }

    public function index(){
		$config['base_url'] = site_url('article/index');
		//$config['uri_segment'] = 1;//地址栏中的第几个参数,默认是第3个

		$config['use_page_numbers'] = true;//使用页码而不是offset
		$config['total_rows']= $this->articleModel->countArticles('article');//数据总条数
		$config['per_page']= 6;//每页显示条数

		$this->pagination->initialize($config);
		//echo $this->pagination->create_links();//输出分页

		$limit['num'] = $config['per_page'];
		$page = $this->uri->segment(3);
		$page = isset($page) ? $page - 1 : 0;
		//echo $page;
        $limit['offset'] = $page * $limit['num'];
        $data['article'] = $this->articleModel->getLimitArticles('article',$limit);
        
        $data['title'] = array('id'=>2);
        $data['arr'] = array('12','10','19','22','20');
        
        $this->load->view('header');
        $this->load->view('index', $data);
        $data['recommend'] = $this->recommend;
        $this->load->view('footer',$data);
    }


    public function artShow($id){
	    $data['data'] = $this->articleModel->getArticle('article', $id);
	    $pn = $this->articleModel->getPN('article', $id);
	    $data['prev'] = $pn[0];
	    $data['next'] = $pn[1];
	    $this->load->view('header');
        $this->load->view('artShow', $data);
        $data['recommend'] = $this->recommend;
        $this->load->view('footer',$data);
    }

    public function type($type){
	    $config['base_url'] = site_url('article/type/'.$type);

		$config['use_page_numbers'] = true;
		$con['type'] = $type;
		//var_dump($limit);die();
		$config['total_rows']= $this->articleModel->countArticles('article',$con);//数据总条数
		$config['per_page']= 6;//每页显示条数

		$this->pagination->initialize($config);

		$limit['num'] = $config['per_page'];
		$page = $this->uri->segment(4);
		$page = isset($page) ? $page - 1 : 0;
		//echo $page;die();
        $limit['offset'] = $page * $limit['num'];
        $limit['type'] = $con;
        $data['article'] = $this->articleModel->getLimitArticles('article',$limit);
        
        $data['title'] = array('id'=>2);
        $data['arr'] = array('12','10','19','22','20');
        
        $this->load->view('header');
        $this->load->view('index', $data);
        $data['recommend'] = $this->recommend;
        $this->load->view('footer',$data);
    }

    public function search(){
	    $title = $this->input->get('title');
	    $config['base_url'] = site_url('article/search/'.$title);

		$config['use_page_numbers'] = true;
		$con['title'] = $title;
		//var_dump($con);die();
		$config['total_rows']= $this->articleModel->countArticles('article',$con);//数据总条数
		$config['per_page']= 6;//每页显示条数

		$this->pagination->initialize($config);

		$limit['num'] = $config['per_page'];
		$page = $this->uri->segment(4);
		$page = isset($page) ? $page - 1 : 0;
		//echo $page;die();
        $limit['offset'] = $page * $limit['num'];
        $limit['con'] = $con;
        $data['article'] = $this->articleModel->getLimitArticles('article',$limit);
        
        $data['title'] = array('id'=>2);
        $data['arr'] = array('12','10','19','22','20');
        
        $this->load->view('header');
        $this->load->view('index', $data);
        $data['recommend'] = $this->recommend;
        $this->load->view('footer',$data);
    }

}
