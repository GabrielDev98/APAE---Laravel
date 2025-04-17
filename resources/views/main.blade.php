<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APAE TATUÍ - Gestão Documental</title>
    <style>
        :root {
            --azul-primario: #0056b3;
            --azul-escuro: #003366;
            --cinza-claro: #f5f7fa;
            --cinza-escuro: #6c757d;
            --verde: #28a745;
            --laranja: #fd7e14;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Arial, sans-serif;
        }
        
        body {
            background-color: var(--cinza-claro);
            color: #333;
        }
        
        /* Header */
        .header {
            background-color: var(--azul-escuro);
            color: white;
            padding: 0.8rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .logo {
            display: flex;
            align-items: center;
        }
        
        .logo img {
            height: 45px;
            margin-right: 1rem;
        }
        
        .logo-text h1 {
            font-size: 1.4rem;
        }
        
        .logo-text p {
            font-size: 0.8rem;
            opacity: 0.8;
        }
        
        .user-area {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }
        
        .notificacao {
            position: relative;
            cursor: pointer;
        }
        
        .notificacao-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background-color: var(--laranja);
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            font-size: 0.7rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .user-info {
            display: flex;
            align-items: center;
            gap: 0.7rem;
        }
        
        .user-avatar {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background-color: #ddd;
            overflow: hidden;
        }
        
        /* Layout Principal */
        .container {
            display: flex;
            min-height: calc(100vh - 66px);
        }
        
        /* Sidebar */
        .sidebar {
            width: 220px;
            background-color: white;
            padding: 1.5rem 0;
            box-shadow: 2px 0 10px rgba(0,0,0,0.05);
        }
        
        .nav-menu {
            list-style: none;
        }
        
        .nav-title {
            color: var(--cinza-escuro);
            font-size: 0.85rem;
            text-transform: uppercase;
            font-weight: 600;
            padding: 0.8rem 1.5rem;
            margin-top: 1rem;
        }
        
        .nav-menu li a {
            display: flex;
            align-items: center;
            padding: 0.7rem 1.5rem;
            color: var(--cinza-escuro);
            text-decoration: none;
            font-size: 0.95rem;
            transition: all 0.2s;
        }
        
        .nav-menu li a:hover, .nav-menu li a.active {
            background-color: rgba(0,86,179,0.1);
            color: var(--azul-primario);
            border-left: 3px solid var(--azul-primario);
        }
        
        .nav-menu li a i {
            margin-right: 0.8rem;
            width: 20px;
            text-align: center;
            font-size: 1rem;
        }
        
        /* Conteúdo Principal */
        .main-content {
            flex: 1;
            padding: 1.8rem;
        }
        
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.8rem;
        }
        
        .page-title {
            color: var(--azul-escuro);
            font-size: 1.6rem;
        }
        
        .page-actions {
            display: flex;
            gap: 0.8rem;
        }
        
        /* Componentes */
        .btn {
            padding: 0.6rem 1.2rem;
            border: none;
            border-radius: 4px;
            font-size: 0.9rem;
            cursor: pointer;
            transition: all 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .btn i {
            font-size: 0.9rem;
        }
        
        .btn-primary {
            background-color: var(--azul-primario);
            color: white;
        }
        
        .btn-primary:hover {
            background-color: var(--azul-escuro);
        }
        
        .btn-outline {
            background-color: transparent;
            border: 1px solid var(--cinza-escuro);
            color: var(--cinza-escuro);
        }
        
        .btn-outline:hover {
            background-color: #f0f0f0;
        }
        
        .card {
            background-color: white;
            border-radius: 6px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            padding: 1.5rem;
            margin-bottom: 1.8rem;
        }
        
        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            padding-bottom: 0.8rem;
            border-bottom: 1px solid #eee;
        }
        
        .card-title {
            font-size: 1.2rem;
            color: var(--azul-escuro);
        }
        
        /* Tabelas */
        .table-responsive {
            overflow-x: auto;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.9rem;
        }
        
        th, td {
            padding: 0.8rem;
            text-align: left;
            border-bottom: 1px solid #eee;
        }
        
        th {
            background-color: #f8f9fa;
            color: var(--azul-escuro);
            font-weight: 600;
        }
        
        tr:hover {
            background-color: #f8fafc;
        }
        
        .badge {
            display: inline-block;
            padding: 0.3rem 0.6rem;
            border-radius: 4px;
            font-size: 0.75rem;
            font-weight: 600;
        }
        
        .badge-success {
            background-color: #e6f7ee;
            color: var(--verde);
        }
        
        .badge-warning {
            background-color: #fff8e6;
            color: #e6a700;
        }
        
        .badge-danger {
            background-color: #fde8e8;
            color: #dc3545;
        }
        
        /* Formulários */
        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }
        
        .form-group {
            margin-bottom: 1.2rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            font-size: 0.9rem;
            color: var(--cinza-escuro);
        }
        
        .form-control {
            width: 100%;
            padding: 0.7rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 0.9rem;
            transition: border 0.2s;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--azul-primario);
        }
        
        /* Filtros */
        .filtros {
            display: flex;
            gap: 1rem;
            margin-bottom: 1.5rem;
            flex-wrap: wrap;
        }
        
        .filtro-item {
            min-width: 200px;
        }
        
        /* Responsivo */
        @media (max-width: 992px) {
            .sidebar {
                width: 70px;
                padding: 1rem 0;
            }
            
            .nav-title, .nav-menu li a span {
                display: none;
            }
            
            .nav-menu li a {
                justify-content: center;
                padding: 0.8rem;
            }
            
            .nav-menu li a i {
                margin-right: 0;
                font-size: 1.1rem;
            }
        }
        
        @media (max-width: 768px) {
            .page-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }
            
            .page-actions {
                width: 100%;
                flex-wrap: wrap;
            }
            
            .btn {
                flex: 1;
                justify-content: center;
            }
        }
    </style>
    <!-- Ícones Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <!-- Cabeçalho -->
    <header class="header">
        <div class="logo">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR667XF4k0h6yrA1qiG-u7LvvojFgmRMe6H4A&s/45x45" alt="APAE">
            <div class="logo-text">
                <h1>APAE TATUÍ</h1>
                <p>Gestão Documental</p>
            </div>
        </div>
        
        <div class="user-area">
            <div class="notificacao">
                <i class="fas fa-bell"></i>
                <span class="notificacao-badge">3</span>
            </div>
            
            <div class="user-info">
                <div class="user-avatar">
                    <img src="https://blog.portalpos.com.br/wp-content/uploads/2023/10/cargos-executivos.jpg/38x38" alt="Usuário" width="38" height="38">
                </div>
                <div>
                    <div class="user-name">Carlos Silva</div>
                    <div class="user-role" style="font-size: 0.8rem; opacity: 0.8;">Financeiro</div>
                </div>
            </div>
        </div>
    </header>
    
    <!-- Corpo Principal -->
    <div class="container">
        <!-- Sidebar -->
        <nav class="sidebar">
            <ul class="nav-menu">
                <li class="nav-title">Documentos Fiscais</li>
                <li><a href="#" class="active"><i class="fas fa-file-invoice-dollar"></i> <span>Notas Fiscais</span></a></li>
                <li><a href="#"><i class="fas fa-file-import"></i> <span>Entradas</span></a></li>
                <li><a href="#"><i class="fas fa-file-export"></i> <span>Saídas</span></a></li>
                <li><a href="#"><i class="fas fa-exchange-alt"></i> <span>Transferências</span></a></li>
                
                <li class="nav-title">Cadastros</li>
                <li><a href="#"><i class="fas fa-boxes"></i> <span>Produtos</span></a></li>
                <li><a href="#"><i class="fas fa-building"></i> <span>Fornecedores</span></a></li>
                <li><a href="#"><i class="fas fa-users"></i> <span>Clientes</span></a></li>
                <li><a href="#"><i class="fas fa-tags"></i> <span>CFOP</span></a></li>
                
                <li class="nav-title">Relatórios</li>
                <li><a href="#"><i class="fas fa-chart-line"></i> <span>Fiscais</span></a></li>
                <li><a href="#"><i class="fas fa-chart-pie"></i> <span>Gerenciais</span></a></li>
                <li><a href="#"><i class="fas fa-file-csv"></i> <span>Exportar Dados</span></a></li>
                
                <li class="nav-title">Administração</li>
                <li><a href="#"><i class="fas fa-users-cog"></i> <span>Usuários</span></a></li>
                <li><a href="#"><i class="fas fa-cog"></i> <span>Configurações</span></a></li>
            </ul>
        </nav>
        
        <!-- Conteúdo Principal -->
        <main class="main-content">
            <div class="page-header">
                <h1 class="page-title">Notas Fiscais</h1>
                <div class="page-actions">
                    <button class="btn btn-outline"><i class="fas fa-filter"></i> Filtrar</button>
                    <button class="btn btn-outline"><i class="fas fa-download"></i> Exportar</button>
                    <button class="btn btn-primary"><i class="fas fa-plus"></i> Nova NF</button>
                </div>
            </div>
            
            <!-- Filtros -->
            <div class="card">
                <div class="filtros">
                    <div class="filtro-item">
                        <div class="form-group">
                            <label for="data-inicio">Data Início</label>
                            <input type="date" id="data-inicio" class="form-control">
                        </div>
                    </div>
                    
                    <div class="filtro-item">
                        <div class="form-group">
                            <label for="data-fim">Data Fim</label>
                            <input type="date" id="data-fim" class="form-control">
                        </div>
                    </div>
                    
                    <div class="filtro-item">
                        <div class="form-group">
                            <label for="tipo">Tipo</label>
                            <select id="tipo" class="form-control">
                                <option value="">Todos</option>
                                <option value="entrada">Entrada</option>
                                <option value="saida">Saída</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="filtro-item">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select id="status" class="form-control">
                                <option value="">Todos</option>
                                <option value="pendente">Pendente</option>
                                <option value="processada">Processada</option>
                                <option value="cancelada">Cancelada</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <button class="btn btn-primary" style="margin-top: 0.5rem;"><i class="fas fa-search"></i> Aplicar Filtros</button>
            </div>
            
            <!-- Listagem de Notas Fiscais -->
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Últimas Notas Fiscais</h2>
                    <div>
                        <span style="font-size: 0.9rem; color: var(--cinza-escuro);">Total: 124 registros</span>
                    </div>
                </div>
                
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>Número</th>
                                <th>Data</th>
                                <th>Tipo</th>
                                <th>Fornecedor/Cliente</th>
                                <th>Valor</th>
                                <th>Status</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>NF-2023-0001</td>
                                <td>15/10/2023</td>
                                <td>Saída</td>
                                <td>Escola Municipal Tatuí</td>
                                <td>R$ 2.450,00</td>
                                <td><span class="badge badge-success">Processada</span></td>
                                <td>
                                    <button class="btn btn-outline" style="padding: 0.3rem 0.6rem; font-size: 0.8rem;"><i class="fas fa-eye"></i></button>
                                    <button class="btn btn-outline" style="padding: 0.3rem 0.6rem; font-size: 0.8rem;"><i class="fas fa-print"></i></button>
                                    <button class="btn btn-outline" style="padding: 0.3rem 0.6rem; font-size: 0.8rem;"><i class="fas fa-download"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>NF-2023-0002</td>
                                <td>14/10/2023</td>
                                <td>Entrada</td>
                                <td>Fornecedor ABC Ltda</td>
                                <td>R$ 1.780,50</td>
                                <td><span class="badge badge-success">Processada</span></td>
                                <td>
                                    <button class="btn btn-outline" style="padding: 0.3rem 0.6rem; font-size: 0.8rem;"><i class="fas fa-eye"></i></button>
                                    <button class="btn btn-outline" style="padding: 0.3rem 0.6rem; font-size: 0.8rem;"><i class="fas fa-print"></i></button>
                                    <button class="btn btn-outline" style="padding: 0.3rem 0.6rem; font-size: 0.8rem;"><i class="fas fa-download"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>NF-2023-0003</td>
                                <td>13/10/2023</td>
                                <td>Saída</td>
                                <td>Prefeitura Municipal</td>
                                <td>R$ 3.210,00</td>
                                <td><span class="badge badge-warning">Pendente</span></td>
                                <td>
                                    <button class="btn btn-outline" style="padding: 0.3rem 0.6rem; font-size: 0.8rem;"><i class="fas fa-eye"></i></button>
                                    <button class="btn btn-outline" style="padding: 0.3rem 0.6rem; font-size: 0.8rem;"><i class="fas fa-print"></i></button>
                                    <button class="btn btn-outline" style="padding: 0.3rem 0.6rem; font-size: 0.8rem;"><i class="fas fa-download"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>NF-2023-0004</td>
                                <td>10/10/2023</td>
                                <td>Entrada</td>
                                <td>Distribuidora XYZ S.A.</td>
                                <td>R$ 890,25</td>
                                <td><span class="badge badge-danger">Cancelada</span></td>
                                <td>
                                    <button class="btn btn-outline" style="padding: 0.3rem 0.6rem; font-size: 0.8rem;"><i class="fas fa-eye"></i></button>
                                    <button class="btn btn-outline" style="padding: 0.3rem 0.6rem; font-size: 0.8rem;"><i class="fas fa-print"></i></button>
                                    <button class="btn btn-outline" style="padding: 0.3rem 0.6rem; font-size: 0.8rem;"><i class="fas fa-download"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <!-- Formulário de Cadastro Rápido -->
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Cadastro Rápido de Produto</h2>
                </div>
                
                <form>
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="codigo">Código</label>
                            <input type="text" id="codigo" class="form-control" placeholder="Código interno">
                        </div>
                        
                        <div class="form-group">
                            <label for="ean">EAN</label>
                            <input type="text" id="ean" class="form-control" placeholder="Código de barras">
                        </div>
                        
                        <div class="form-group">
                            <label for="ncm">NCM</label>
                            <input type="text" id="ncm" class="form-control" placeholder="Classificação fiscal">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <input type="text" id="descricao" class="form-control" placeholder="Nome do produto">
                    </div>
                    
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="unidade">Unidade</label>
                            <select id="unidade" class="form-control">
                                <option value="un">UN</option>
                                <option value="pc">PC</option>
                                <option value="kg">KG</option>
                                <option value="lt">LT</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="valor">Valor Unitário</label>
                            <input type="text" id="valor" class="form-control" placeholder="R$ 0,00">
                        </div>
                        
                        <div class="form-group">
                            <label for="estoque">Estoque Inicial</label>
                            <input type="number" id="estoque" class="form-control" placeholder="Quantidade">
                        </div>
                    </div>
                    
                    <div class="form-group" style="margin-top: 1.5rem;">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Cadastrar Produto</button>
                        <button type="button" class="btn btn-outline"><i class="fas fa-times"></i> Cancelar</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>
</html>