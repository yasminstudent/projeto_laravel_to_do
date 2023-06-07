<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>ToDoApp</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="/assets/css/style.css">
    </head>
    <body>
        <div class="container">
            <div class="sidebar">
                <img src="/assets/images/logo.png" alt="">
            </div>
            <div class="content">
                <nav>
                    <a href="#" class="btn btn-primary">
                        Criar Tarefa
                    </a>
                </nav>
                <main>
                    {{-- Seção do Gráfico --}}
                    <section class="graph">
                        <div class="graph_header">
                            <h2> Progresso do Dia </h2>
                            <hr class="graph_header_line"/>
                            <div class="graph_header_date">
                                13 de dez
                            </div>
                        </div>

                        <div class="graph_header_subtitle">
                            Tarefas: <span>3/6</span>
                        </div>
                        
                        <div class="graph_body">
                            <div class="graph_placeholder"></div>

                            <p class="graph_body_task_left">
                                Restam 3 tarefas para serem realizadas
                            </p>
                        </div>
                    </section>
                    {{-- Seção da Lista de Tarefas --}}
                    <section class="list">
                        <div class="list_header">
                            <select name="" id="" class="list_header_select">
                                <option value="1">Todas as tarefas</option>
                            </select>
                        </div>
                        <div class="task_list">
                            <div class="task">
                                <div class="title">
                                    <input type="checkbox">
                                    <div class="task_title">Título da tarefa</div>
                                </div>
                                <div class="priority">
                                    <div class="sphere"></div>
                                    <div>Título da tarefa</div>
                                </div>
                                <div class="actions">
                                    <a href="#">
                                        <img src="/assets/images/icon-edit.png">
                                    </a>
                                    <a href="#">
                                        <img src="/assets/images/icon-delete.png">
                                    </a>
                                </div>
                            </div>

                            <div class="task">
                                <div class="title">
                                    <input type="checkbox">
                                    <div class="task_title">Título da tarefa</div>
                                </div>
                                <div class="priority">
                                    <div class="sphere"></div>
                                    <div>Título da tarefa</div>
                                </div>
                                <div class="actions">
                                    Editar - Excluir
                                </div>
                            </div>

                            <div class="task">
                                <div class="title">
                                    <input type="checkbox">
                                    <div class="task_title">Título da tarefa</div>
                                </div>
                                <div class="priority">
                                    <div class="sphere"></div>
                                    <div>Título da tarefa</div>
                                </div>
                                <div class="actions">
                                    Editar - Excluir
                                </div>
                            </div>
                        </div>
                    </section>
                </main>
            </div>
        </div>
    </body>
</html>