<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function wapstore_debug($data) {
	echo '<pre>'.print_r($data,true).'</pre>';
}

function price($price) {
	echo 'Rp. '.number_format($price,2,",",".");
}

function word_limit($string, $limit) {
  $words = explode(" ", $string);
  echo implode(" ",array_splice($words, 0, $limit)).' ...';
}

function wapstore_menu($m1, $m2, $m3, $m4, $m5, $m6, $page) {
	if($m1 =='in'){
		$ico1 = '';
		$ico2 = $ico3 = $ico4 = $ico5 = $ico6 = 'collapsed';
	}elseif($m2 =='in'){
		$ico2 = '';
		$ico1 = $ico3 = $ico4 = $ico5 = $ico6 = 'collapsed';
	}elseif($m3 =='in'){
		$ico3 = '';
		$ico1 = $ico2 = $ico4 = $ico5 = $ico6 = 'collapsed';
	}elseif($m4 =='in'){
		$ico4 = '';
		$ico1 = $ico2 = $ico3 = $ico5 = $ico6 = 'collapsed';
	}elseif($m5 =='in'){
		$ico5 = '';
		$ico1 = $ico2 = $ico3 = $ico4 = $ico6 = 'collapsed';
	}elseif($m6 =='in'){
		$ico6 = '';
		$ico1 = $ico2 = $ico3 = $ico4 = $ico5 = 'collapsed';
	}
	
	ob_start(); 
?>
  
	<a href="#user-management" class="nav-header <?php echo $ico1; ?>" data-toggle="collapse"><i class="icon-user"></i>User Management<i class="icon-chevron-up"></i></a>
	<ul id="user-management" class="nav nav-list collapse <?php echo $m1; ?>">
		<li class="<?php echo ($page == "m11" ? "active" : "")?>"><a href="<?php echo base_url('user/admin_group');?>">User Admin Group</a></li>
	  <li class="<?php echo ($page == "m12" ? "active" : "")?>"><a href="<?php echo base_url('user/admin');?>">User Admin</a></li>
	  <li class="<?php echo ($page == "m13" ? "active" : "")?>"><a href="<?php echo base_url('user/profile');?>">My Profile</a></li>
	</ul>

	<a href="#content-management" class="nav-header <?php echo $ico2; ?>" data-toggle="collapse"><i class="icon-briefcase"></i>Content Management<i class="icon-chevron-up"></i></a>
	<ul id="content-management" class="nav nav-list collapse <?php echo $m2; ?>">
	  <li class="<?php echo ($page == "m21" ? "active" : "")?>"><a href="<?php echo base_url('category/content');?>">Content Category</a></li>
	  <li class="<?php echo ($page == "m22" ? "active" : "")?>"><a href="<?php echo base_url('content/master');?>">Master Content</a></li>
	  <li class="<?php echo ($page == "m23" ? "active" : "")?>"><a href="<?php echo base_url('phone/brand');?>">Phone Brand</a></li>
	  <li class="<?php echo ($page == "m24" ? "active" : "")?>"><a href="<?php echo base_url('phone/type');?>">Phone Type</a></li>
	  <li class="<?php echo ($page == "m25" ? "active" : "")?>"><a href="<?php echo base_url('phone/group');?>">Phone Group</a></li>
	</ul>

	<a href="#store-management" class="nav-header <?php echo $ico3; ?>" data-toggle="collapse"><i class="icon-credit-card"></i>Store Management<i class="icon-chevron-up"></i></a>
	<ul id="store-management" class="nav nav-list collapse <?php echo $m3; ?>">
		<li class="<?php echo ($page == "m31" ? "active" : "")?>"><a href="<?php echo base_url('store/master');?>">Store Master</a></li>
	  <li class="<?php echo ($page == "m32" ? "active" : "")?>"><a href="<?php echo base_url('content/assignment');?>">Content Assignment</a></li>
	  <li class="<?php echo ($page == "m33" ? "active" : "")?>"><a href="<?php echo base_url('banner/management');?>">Banner Management</a></li>
	  <li class="<?php echo ($page == "m34" ? "active" : "")?>"><a href="<?php echo base_url('banner/adnetwork');?>">Adnetwork Banner</a></li>
	</ul>

	<a href="#partner-management" class="nav-header <?php echo $ico4; ?>" data-toggle="collapse"><i class="icon-group"></i>Partner Management<i class="icon-chevron-up"></i></a>
	<ul id="partner-management" class="nav nav-list collapse <?php echo $m4; ?>">
	  <li class="<?php echo ($page == "m41" ? "active" : "")?>"><a href="<?php echo base_url('content/partner');?>">Content Owner Partner</a></li>
	  <li class="<?php echo ($page == "m42" ? "active" : "")?>"><a href="<?php echo base_url('store/partner');?>">Channel/Store Owner Partner</a></li>
	</ul>
			
	<a href="#approval" class="nav-header <?php echo $ico5; ?>" data-toggle="collapse"><i class="icon-signal"></i>Approval<span id="mApproval" class="label label-info">0</span><i class="icon-chevron-up"></i></a>
	<ul id="approval" class="nav nav-list collapse <?php echo $m5; ?>">
		<li class="<?php echo ($page == "m51" ? "active" : "")?>"><a href="<?php echo base_url('content/approval');?>"><span id="m51" class="label label-info pull-right">0</span>Content Approval<div class="cleaner"></div></a></li>
	  <li class="<?php echo ($page == "m52" ? "active" : "")?>"><a href="<?php echo base_url('content/storeapproval');?>"><span id="m52" class="label label-info pull-right">0</span>Store Content Approval<div class="cleaner"></div></a></li>
	  <li class="<?php echo ($page == "m53" ? "active" : "")?>"><a href="<?php echo base_url('content/partnerapproval');?>"><span id="m53" class="label label-info pull-right">0</span>Content Owner Partner Approval<div class="cleaner"></div></a></li>
	  <li class="<?php echo ($page == "m54" ? "active" : "")?>"><a href="<?php echo base_url('store/approval');?>"><span id="m54" class="label label-info pull-right">0</span>Store/Channel Owner partner Approval<div class="cleaner"></div></a></li>
	  <li class="<?php echo ($page == "m55" ? "active" : "")?>"><a href="<?php echo base_url('promo/approval');?>"><span id="m55" class="label label-info pull-right">0</span>Promo Approval <div class="cleaner"></div></a></li>
	</ul>
			
	<a href="#promo-management" class="nav-header <?php echo $ico6; ?>" data-toggle="collapse"><i class="icon-bullhorn"></i>Promo Management<i class="icon-chevron-up"></i></a>
	<ul id="promo-management" class="nav nav-list collapse <?php echo $m6; ?>">
	  <li class="<?php echo ($page == "m61" ? "active" : "")?>"><a href="<?php echo base_url('promo/management');?>">Promo</a></li>
	</ul>

<?php  
	$menu = ob_get_clean();
	//return $menu;
}
