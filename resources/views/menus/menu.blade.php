@section('conteudo')

<div>
<nav>
    <ul id="menu">
        <li><a href="#">Home</a></li>
        <li><a href="#">Sobre</a></li>
        <li><a href="#">O que Fazemos?</a>
            <ul>
                <li><a href="#">Web Design</a></li>
                <li><a href="#">Hospedagem</a></li>
                <li><a href="#">SEO</a></li>
                <li><a href="#">Sistemas</a></li>
            </ul>
        </li>

        <li><a href="#">Contato</a></li>
    </ul>
 </nav>

</div>
<nav id=menu_submenu>
    <ul>
        <li><a href="#">Cadastros</a>
            <ul>
                <li><a href="FRcadastro.php">Clientes</a></li>
                <li><a href="FRcadastroPlano.php">Funcionarios</a></li>
            </ul>
        <li>
        <li><a href="#">listagem</a>
            <ul>
                <li>
                    <a href="FRlistaPesquisa_cadastro.php">Clientes</a>
                    <a href="FRlistaPesquisa_plano.php">Planos</a>
                </li>
            </ul>
        </li>
        <li><a href="#">Relatorios</a>
            <ul>
                <li>
                    <a href="FRlistaPesquisaMovimento.php">Movimentos</a>
                </li>
            </ul>
        </li>
        <li><a href="#">a desemvolver</a></li>
        <li><a href="#">a desemvolver<</a> <li>
        <li><a href="FRlistaALiberar.php">Liberar acesso</a></li>
    </ul>
</nav>

@endsection