<?php 
/**
* 
*/
class GoodsController //extends Controller
{
	
	function __construct()
	{

	}
	function index(){
		
		include "./admin/view/Goods/index.html";
	}
	function add(){
		$cassify_list = M('Friendlink')->select('select * from zt_friend_link');
		include "./admin/view/Goods/add.html";
	}
	function save(){
		$_POST['pic'] = uploadFile('pic');
		M('Goods')->insert('zt_goods',$_POST);
	}
}


 ?>