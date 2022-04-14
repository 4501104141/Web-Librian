<?php
get_header();
?>

<?php

$list_dell = get_list_product_by_cat_id(1); // lấy danh sách sp với cat_id =1
$list_asus = get_list_product_by_cat_id(2);
$list_hp = get_list_product_by_cat_id(3);
$list_macbook = get_list_product_by_cat_id(4);
$list_lenovo = get_list_product_by_cat_id(5);
$list_msi = get_list_product_by_cat_id(6);
$list_acer = get_list_product_by_cat_id(7);

$info_cat_dell = get_info_cat(1);
//show_array($info_cat_dell);
$info_cat_asus = get_info_cat(2);
$info_cat_hp = get_info_cat(3);
$info_cat_macbook = get_info_cat(4);
$info_cat_lenovo = get_info_cat(5);
$info_cat_msi = get_info_cat(6);
$info_cat_acer = get_info_cat(7);

$product_highlights = get_product_highlights();
$list_slider = get_list_slider();
$list_post = get_post();
//show_array($list_slider);
?>
<?php
get_footer();
?>