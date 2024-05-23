<?php include 'header.php'; ?>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="assets/css/alunos.css">
<section class="home-section">
    <div class="text">Alunos</div>
    <div id="divBusca">
        <input type="text" id="txtBusca" placeholder="Buscar..."/>
        <i class="fas fa-search"></i>
    </div>
    <button class="btn btn-add" data-toggle="modal" data-target="#exampleModal">+ NOVO</button>
    <div class="table-wrapper">
        <table class="table table-striped table-fixed">
            <thead class="thead">
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Matrícula</th>
                    <th>Turma</th>
                    <th>Senha</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Ações</th> <!-- Nova coluna para as ações -->
                </tr>
            </thead>
            <tbody>
                <!-- Exemplo de dados, você pode substituir pelos seus próprios -->
                <tr>
                    <td>João Silva</td>
                    <td>123.456.789-00</td>
                    <td>202401</td>
                    <td>A</td>
                    <td>senha123</td>
                    <td>(12) 3456-7890</td>
                    <td>joao.silva@example.com</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-small"><i class="fas fa-edit"></i></button>
                        <button type="button" class="btn btn-danger btn-small"><i class="fas fa-trash-alt"></i></button>
                    </td>
                </tr>
                <!-- Outros dados aqui -->
            </tbody>
        </table>
    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Novo Aluno</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulário de cadastro aqui -->
                <form>
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" placeholder="Digite o nome do aluno">
                    </div>
                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" id="cpf" placeholder="Digite o CPF do aluno">
                    </div>
                    <div class="form-group">
                        <label for="matricula">Matrícula</label>
                        <input type="text" class="form-control" id="matricula" placeholder="Digite a matrícula do aluno">
                    </div>
                    <div class="form-group">
                        <label for="turma">Turma</label>
                        <input type="text" class="form-control" id="turma" placeholder="Digite a turma do aluno">
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" id="senha" placeholder="Digite a senha do aluno">
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" id="telefone" placeholder="Digite o telefone do aluno">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Digite o email do aluno">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary" id="saveBtn">Salvar</button>
            </div>
        </div>
    </div>
</div>

<!-- Inclua o jQuery antes de incluir o Bootstrap.js -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
$(document).ready(function() {
    $('#saveBtn').click(function() {
        // Aqui você pode adicionar a lógica para salvar os dados do formulário
        // Exibir o alerta de sucesso do SweetAlert2
        Swal.fire({
            title: 'Sucesso!',
            text: 'Os dados foram salvos com sucesso.',
            icon: 'success',
            confirmButtonText: 'OK'
        }).then((result) => {
            if (result.isConfirmed) {
                // Fechar o modal após confirmar o SweetAlert
                $('#exampleModal').modal('hide');
            }
        });
    });
});
</script>
</body>
</html>
