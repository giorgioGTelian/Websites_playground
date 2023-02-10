<form method="post">
   <input type="radio" name="search_type" value="title"> Search by Title<br>
   <input type="radio" name="search_type" value="content"> Search by Content<br>
   <input type="radio" name="search_type" value="excerpt"> Search by Excerpt<br>
   <input type="text" name="search_term" placeholder="Enter search term"><br>
   <input type="submit" name="submit" value="Search">
</form>

<?php
if (isset($_POST['submit'])) {
   $search_type = $_POST['search_type'];
   $search_term = $_POST['search_term'];
   
   $query = new WP_Query(array(
      's' => $search_term,
      'post_type' => 'page',
      'posts_per_page' => -1
   ));
   
   if ($query->have_posts()) {
      $output = '<ul>';
      while ($query->have_posts()) {
         $query->the_post();
         if ($search_type == 'title') {
            if (stripos(get_the_title(), $search_term) !== false) {
               $output .= '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
            }
         } elseif ($search_type == 'content') {
            if (stripos(get_the_content(), $search_term) !== false) {
               $output .= '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
            }
         } elseif ($search_type == 'excerpt') {
            if (stripos(get_the_excerpt(), $search_term) !== false) {
               $output .= '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
            }
         }
      }
      $output .= '</ul>';
   } else {
      $output = 'No results found for "' . $search_term . '".';
   }
   wp_reset_postdata();
   
   echo $output;
}
?>
