<?php
 $post = $wp_query->post;
 if ( in_category('Tin tức sự kiện') ) {
  include(TEMPLATEPATH . '/single-news-life.php');
}if ( in_category('Đào tạo') ) {
    include(TEMPLATEPATH . '/single-news-life.php');}
 if(in_category('Công việc tuyển dụng') ){
   include(TEMPLATEPATH . '/single-job.php');
  }
?>