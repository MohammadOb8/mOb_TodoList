<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>mOb Todo List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-/qZtNjEe9x9pF7NCg+bd+NCEvVcQ38ZDgYNcQIby+UMQuDlHCUGZ8T8IIf6BCr30UpEMmCWEDqMmcIuHLW0HTQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .mobGold {
        --bs-btn-font-weight: 600;
        --bs-btn-color:#000000;
        --bs-btn-bg:#FFEB36;
        --bs-btn-border-color:#FFEB36;
        --bs-btn-border-radius: .5rem;
        --bs-btn-hover-color:#FFEB36;
        --bs-btn-hover-bg:#000000;
        }
    </style>
  </head>
  <body class="container ">
    <div class="text-center mt-5">
        <img src="/assets/mob3-01.png"  width="50%" height="50%"  alt="mob_todo_list_logo">
    </div>
    <div>
        <a href="{{route('mob.index')}}" class="position-absolute top-50 start-50 translate-middle-x px-5 btn mobGold btn-lg fw-bold">Start</a>
    </div>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
