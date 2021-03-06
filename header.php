<!-- Подвал сайта, который можно вывести в основной файл функцией
get_header().
Этот файл всегда называется header.php -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <!-- bloginfo('name') - выводит название сайта -->
    <title>
      <?php bloginfo('name'); ?>
    </title>
    <!-- Обязательная функция, ныжна WordPress'у -->
    <?php wp_head(); ?>
  </head>
<!-- body_class() - обязательная функция, нужна WordPress'у -->
<body <?php body_class(); ?>>
  <div class="wrapper">
    <header class="site-header">
      <!-- Строка поиска -->
      <div class="search-form">
        <!-- Вывести сюда содержимое файла searchform.php -->
        <?php get_search_form(); ?>
      </div>
      <h1>
        <!-- home_url() выводит адрес домашней страницы -->
        <a href="<?php home_url(); ?>">
          <!-- Выводит название сайта -->
          <?php bloginfo('name'); ?>
        </a>
      </h1>
      <h5>
        <!-- Выводит описание сайта -->
        <?php bloginfo('description'); ?>
      </h5>
      <!-- Меню навигации -->
      <!-- Здесь WordPress выводит ul с элементами li - пунктами менью,
      при этом к активному пункту меню (li) WordPress автоматически
      добавляет класс current-menu-item, что позволяет его стилизовать -->
      <nav class="site-nav">
        <?php
        $args = array(
          'theme_location' => 'primary'
        );

        // Выводит список меню из группы 'Primary Menu',
        // содержимое этой группы можно изменить в админке:
        // Appearence > Menus > Select a menu to edit
        // Подробнее в файле functions.php
        wp_nav_menu($args);
        ?>
      </nav>
    </header>
