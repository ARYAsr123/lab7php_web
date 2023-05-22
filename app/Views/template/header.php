<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $title; ?></title>
  <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
</head>

<body>
  <div id="container">
    <div class="nav">
      <a href="<?= base_url('/'); ?>" class="active">Home</a>
      <a href="<?= base_url('/article'); ?>">Article</a>
      <a href="<?= base_url('/about'); ?>">About</a>
      <a href="<?= base_url('/contact'); ?>">Contact</a>
    </div>
    <section id="hero">
    </section>
    <section class="wrapper">
      <div class="main">