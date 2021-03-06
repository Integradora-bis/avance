<?php

echo '
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="icon" href="https://drive.google.com/thumbnail?id=1yoKK1TWp6gzZSyaRVgrtK60Js4-z2LUo" />
    <link rel="stylesheet" href="../css/design.css">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cookie </title>
</head>

<body>

      <header>
    <nav class="site-header sticky-top py-1">

      <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="#" aria-label="Product">
          <div class="container d-flex flex-column flex-md-row justify-content-between">
            <a class="py-2" href="#" aria-label="Product">
                <img style="width:1.5em" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDY0IDY0IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyIiB4bWw6c3BhY2U9InByZXNlcnZlIiBjbGFzcz0iIj48Zz48cGF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGQ9Im01OC44ODggNDIuNjE3YTExLjMgMTEuMyAwIDAgMSAtMTAuMDU1IDEuNDQgMSAxIDAgMCAwIC0uOTE1LjEyN2wtNC41IDMuMTkxIDEuMTU4IDEuNjMxIDQuMDgzLTIuOWExMy4zNjYgMTMuMzY2IDAgMCAwIDExLjM0NS0xLjgzMyAxNC4xOTEgMTQuMTkxIDAgMCAwIDEuNjcxLTEuMzIybC0xLjM1Ni0xLjQ3YTEyLjA1MSAxMi4wNTEgMCAwIDEgLTEuNDMxIDEuMTM2eiIgZmlsbD0iI2ZmZjhlZSIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTQ4LjgxOCAyNy42OTNhOS4wOTMgOS4wOTMgMCAwIDAgLTQuMTQxIDguNjcybC0xMi42NzcgOC4xMjYtMTIuNjc5LTguMTIxYTkuMDUyIDkuMDUyIDAgMCAwIC00LjE0NS04LjY3IDkuNTYxIDkuNTYxIDAgMCAwIC02LjUyLTEuNjI2IDcuNCA3LjQgMCAwIDAgLTYuMzc4IDkuNDU0IDkuNTU0IDkuNTU0IDAgMCAwIDMuOTUxIDUuNDMyIDkuMDUgOS4wNSAwIDAgMCA5LjYuNTkzbDkuODQxIDYuOTg3LTkuMzY1IDYuMDA1YTMuOTE5IDMuOTE5IDAgMCAwIC0xLjE0MiA1LjUwNyAzLjkyNiAzLjkyNiAwIDAgMCA1LjUyNSAxbDExLjMxMi04LjAyMiAxMS4zMTIgOC4wMjhhMy45MyAzLjkzIDAgMSAwIDQuMzg4LTYuNTE0bC05LjM3Ni02IDkuODQ4LTYuOTlhOS4wNSA5LjA1IDAgMCAwIDkuNi0uNTkxYzQuMTEtMi43NzQgNS40NTItOC4wMDggMi45ODktMTEuNjY4cy03LjgyNC00LjM3Ni0xMS45NDMtMS42MDJ6bS0yOS4yODggMzEuNzMyYTEuOTc0IDEuOTc0IDAgMCAxIC0yLjcxMi0uNDk1IDEuOTIxIDEuOTIxIDAgMCAxIC41NjEtMi43bDEwLjA0OS02LjQ0NCAyLjgzOSAyLjAxNHptMjcuOTQtMS45NjNhMS45MyAxLjkzIDAgMCAxIC0zLjAwNiAxLjk2NWwtMjguMDM5LTE5LjlhMSAxIDAgMCAwIC0xLjE2OC4wMDggNi45MyA2LjkzIDAgMCAxIC03LjkxLS4yMzMgNy41NjIgNy41NjIgMCAwIDEgLTMuMTM2LTQuMjkgNS40IDUuNCAwIDAgMSA0LjctNi45NTkgNy41NjMgNy41NjMgMCAwIDEgNS4xNTIgMS4zIDYuOTMgNi45MyAwIDAgMSAzLjE3NCA3LjI0NyAxIDEgMCAwIDAgLjQzIDEuMDg3bDI4Ljk1NCAxOC41NDJhMS45MTIgMS45MTIgMCAwIDEgLjg0OSAxLjIzM3ptOS4xOC0xOC4xNjJhNi45MzEgNi45MzEgMCAwIDEgLTcuOTExLjIzMSAxIDEgMCAwIDAgLTEuMTY4LS4wMDhsLTExLjA2MyA3Ljg1NC0yLjY1Mi0xLjcgMTIuNDc0LThhMSAxIDAgMCAwIC40My0xLjA4NSA2Ljk2NSA2Ljk2NSAwIDAgMSAzLjE3OC03LjI0N2MzLjItMi4xNTcgNy4zMTQtMS42ODEgOS4xNjMgMS4wNThzLjc0OCA2Ljc0LTIuNDUxIDguODk3eiIgZmlsbD0iI2ZmZjhlZSIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTEyLjkyNyAzLjgzMy0xLjEwNy0xLjY2NmExMyAxMyAwIDAgMCAtNS4wNzcgMTUuMTY3bDEuODg1LS42NjhhMTEgMTEgMCAwIDEgNC4zLTEyLjgzM3oiIGZpbGw9IiNmZmY4ZWUiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48cGF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGQ9Im0xMC43NSAyMC4yNjhhMTEuMTI1IDExLjEyNSAwIDAgMSAtMS4yNzQtMS43NjhsLTEuNzMxIDFhMTMuMTE1IDEzLjExNSAwIDAgMCAxLjUwNSAyLjA5eiIgZmlsbD0iI2ZmZjhlZSIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTQyLjk4IDM2LjIgMi44NDctMTQuMjM0YTkgOSAwIDAgMCAtLjgyNy0xNy45NjYgOC44ODggOC44ODggMCAwIDAgLTUuNTY4IDEuOTM1IDguOTg2IDguOTg2IDAgMCAwIC0xNC44NjQgMCA4Ljg4OCA4Ljg4OCAwIDAgMCAtNS41NjgtMS45MzUgOSA5IDAgMCAwIC0uODI3IDE3Ljk2MmwyLjg0NyAxNC4yMzggMS45Ni0uMzkyLS41Ni0yLjgwOGgxOS4xNmwtLjU2IDIuOHptLTQuODI3LTUuMi44MzctNS44NTgtMS45OC0uMjg0LS44NzcgNi4xNDJoLTMuMTMzdi0xMWgtMnYxMWgtMy4xMzNsLS44NzctNi4xNDItMS45OC4yODQuODM3IDUuODU4aC0zLjgyN2wtMi4wNC0xMC4yYTEgMSAwIDAgMCAtLjk4LS44IDcgNyAwIDAgMSAwLTE0IDYuOTMxIDYuOTMxIDAgMCAxIDUuMDgzIDIuMiAxIDEgMCAwIDAgMS42MjYtLjI1IDYuOTg2IDYuOTg2IDAgMCAxIDEyLjU4MiAwIDEgMSAwIDAgMCAxLjYyNi4yNSA2LjkzMSA2LjkzMSAwIDAgMSA1LjA4My0yLjIgNyA3IDAgMCAxIDAgMTQgMSAxIDAgMCAwIC0uOTguOGwtMi4wNCAxMC4yeiIgZmlsbD0iI2ZmZjhlZSIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjwvZz48L3N2Zz4=" />
            </a>
        </a>

        <a class="py-2 d-none d-md-inline-block" href="../views/categories.php">Home</a>
        <a class="py-2 d-none d-md-inline-block" href="../views/cards.php">All recipes</a>
        <a class="py-2 d-none d-md-inline-block" href="../views/about.php">About</a>
      </div>
    </nav>
  </header>
';

?>
