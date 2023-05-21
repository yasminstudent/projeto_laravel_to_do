--- Planejamento

Entidades

-- Usuário
-- Tarefa
-- Categoria

Relacionamentos

-- Usuário x Tarefa
--- Um Usuário pode ter 0 ou N tarefas

-- Usuário x Categoria 
--- Um Usuário pode ter 0 ou N categorias

-- Tarefa x Usuário
--- Uma Tarefa SEMPRE vai pertencer a 1 único Usuário

-- Tarefa x Categoria
--- Uma Tarefa SEMPRE vai pertencer a 1 única Categoria

-- Categoria x Tarefa
--- Uma Categoria pode pertencer a 0 ou N tarefas

-- Categoria x Usuário
--- Uma categoria SEMPRE vai pertencer a 1 único Usuário

Detalhamento das Migrations

Usuário (users):
- Padrão do Laravel

(os campos serão em inglês, dont't worry)
Tarefa (tasks):
- id
- title
- due_date
- description
- category_id
- user_id

Categoria (categories):
- id
- name
- color (hexadecimal)
- user_id