<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.7/tailwind.min.css" integrity="sha512-y6ZMKFUQrn+UUEVoqYe8ApScqbjuhjqzTuwUMEGMDuhS2niI8KA3vhH2LenreqJXQS+iIXVTRL2iaNfJbDNA1Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
@csrf

    <!-- <h1>Author: {{ $works->author }}</h1></br>
    <h1>Title: {{ $works->title }}</h1></br>
    <h1>Text: {{ $works->text }}</h1>
    <a href="/works"><= Back</a> -->


    <table class="table-auto">
  <thead>
    <tr>
      <th>Author</th>
      <th>Title</th>
      <th>Text</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{ $works->author }}</td>
    </tr>
    <tr>
      <td>{{ $works->title }}</td>
    </tr>
    <tr class="bg-emerald-200">
      <td>{{ $works->text }}</td>
    </tr>
  </tbody>
</table>
<a href="/works">Go back to work!</a>

</body>
</html>