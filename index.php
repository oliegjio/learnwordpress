<?php
// Этот файл описывает домашнюю страницу, на которой перечисляются все
// опубликованные посты.
// Этот файл всегда называется index.php

// Выводит сюда содержимое файла header.php
get_header();

// Есть ли статьи
if(have_posts()):
  while(have_posts()):
    // Итерирует все посты, что позволяет использовать функции
    // снизу
    the_post();
    // Выводит сюда содержимое файла content-*POST_FORMAT*.php, например:
    // содержимое фала content-aside.php или content-link.php
    get_template_part('content', get_post_format());
  endwhile;
else:
  echo '<p>No content found</p>';
endif;

// Выводит сюда содержимое файла footer.php
get_footer();
?>
