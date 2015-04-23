<?php
  get_header();
  global $query_string;
  query_posts($query_string . '&posts_per_page=10');
?>

<div class="mainContent mt10 fix">
  <div class="borderBox colLeft l per55">
    <div class="Box codePage">
      <div class="Box digcssPath">
        <a href="<?php echo home_url(); ?>">首页</a> &gt;
        <a href="<?php echo home_url(); ?>/snippets/">代码</a> &gt;
        <a href="#" class="collapseBox viewByTag">按标签查看<i class="collapse"></i></a>
        <div class="allTag verList">
           <?php
            wp_tag_cloud(array(
              'taxonomy' => 'snippetstags',
              'smallest' => '13',
              'largest'  => '13',
              'unit'     => 'px',
              'format'   => 'list',
            ));
          ?>
        </div>
      </div>
      <div class="mt10 codeWrap BoxInner">
        <h2>所有代码片段</h2>
        <ul class="codeList verList">
        <?php while (have_posts()) :the_post(); ?>
          <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php endwhile; ?>
        </ul>
      </div>
    </div>
  </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>