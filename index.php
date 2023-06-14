<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <!-- main.js -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div id="app">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-8 my-3 py-3 text-center rounded bg-primary">
                    <h1>{{title}}</h1>
                    <div class="card">
                        <div class="card-header">
                            <input type="text" class="rounded py-2 my-3 mx-3" v-model="this.aggiungi">
                            <button class="btn btn-primary" @click="addTask">Add Task</button>
                            <button class="btn btn-danger" @click="this.deleteAll">delete all</button>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li id="list_custom" v-for="(items,i) in lista[0]"> <span class="">{{items.name}}</span>
                                <span class="ms-3 badge rounded-pill" :class="(items.done == true) ? 'bg-primary' : 'bg-danger'" >  {{items.done}}</span>
                                <button class="btn btn-danger m-2" @click="deleteTask(i)">delete</button>
                                <button  @click="toggleTask(i)" class="btn btn-warning m-2">done/undone</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="./main.js"></script>
</html>