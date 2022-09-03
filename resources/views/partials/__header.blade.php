<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title !== "" ? $title : 'Student System' }}</title>
  @vite('resources/css/app.css')
  <link
    rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
  />
  <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body>
<x-message />