<?php 
/**
* 
*/
class IndexController extends Controller
{
	
	function __construct()
	{
		//parent::__construct();
	}
	function index(){
		$goods=M('Friendlink')->select('select * from zt_goods');
		$link = M('Friendlink')->select('select * from zt_friend_link where is_del=0 order by sort desc limit 10');
		$classli_list = $link;
		foreach ($classli_list as $key => $value) {
			$classli_list[$key]['goods'] = M('Friendlink')->select ('select * from zt_goods classli_id='.$value['id']);
		}
		include "./home/view/Index/index.php";
	}
}
?>