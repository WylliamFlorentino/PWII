<?php include "cabecario.php"; ?>
<h1>Aula Bootstrap 09-08-24</h1>
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="alert alert-success" role="alert">Cadastrado com Sucesso!</div>
            </div>
        </div>

        <table  class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
        </table>
        <form>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control">
                <div class="form-text">Digite um email para acessar o sistema.</div>
            </div>
            <div class="mb-3">
                <label>Senha</label>
                <input type="password" class="form-control">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input">
                <label for="exampleCheck1">Deseja Receber SMS enchendo seu saco com promoções.</label>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>

        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-secondary">Secondary</button>
        <button type="button" class="btn btn-success">Success</button>
        <button type="button" class="btn btn-danger">Danger</button>
        <button type="button" class="btn btn-warning">Warning</button>
        <button type="button" class="btn btn-info">Info</button>
        <button type="button" class="btn btn-light">Light</button>
        <button type="button" class="btn btn-dark">Dark</button>
        <button type="button" class="btn btn-link">Link</button>
        <a href="www.google.com" class="btn btn-primary">Acesso o Google aqui.</a>
<?php include "rodape.php"; ?>