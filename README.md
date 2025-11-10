# 💼 Sistema de Currículos — Fichário Digital (PHP + MVC)

Este projeto foi desenvolvido nas aulas de **Desenvolvimento de Sistemas III**, com base no padrão **MVC (Model–View–Controller)**, utilizando **PHP e W3.CSS** na camada de apresentação (View).

🎓 **Objetivo:**  
Criar uma aplicação web simples e funcional que permita o gerenciamento de informações de um currículo digital — incluindo dados pessoais, formações e experiências profissionais — simulando o uso de camadas de um sistema real.

---

## 📚 Sumário
- [🎯 Objetivo](#-objetivo)
- [🖼️ Preview do Sistema](#️-preview-do-sistema)
- [🧩 Estrutura do Sistema](#-estrutura-do-sistema)
- [🧠 Funcionalidades da Camada View](#-funcionalidades-da-camada-view)
- [🧰 Tecnologias Utilizadas](#-tecnologias-utilizadas)
- [📅 Andamento de Desenvolvimento](#-andamento-de-desenvolvimento)
- [💻 Agendas 11 e 12](#-agendas-11-e-12--construção-do-projeto-mvc-em-php-orientado-a-objetos)
- [💻 Agenda 13](#-agenda-13--digitalização-e-implementação-da-camada-controller-mvc-em-php)

---

## 🖼️ Preview do Sistema

<img width="1084" height="528" alt="image" src="https://github.com/user-attachments/assets/3c67c88b-d1e9-44ae-acd6-7ed09130d2a1" />


> 📷 *Tela principal do sistema com o menu lateral, seções de Dados Pessoais, Formação e Experiência Profissional.*

---


## 🧩 Estrutura do Sistema

O sistema segue o modelo **MVC**, dividido em:

- **Model:** responsável pela manipulação dos dados.  
- **View:** camada de interface com o usuário, desenvolvida em HTML + W3.CSS.  
- **Controller:** camada lógica de controle (implementada nas etapas seguintes do curso).

---

## 🧠 Funcionalidades da Camada View

📌 **Interfaces Principais:**
- **Login:** autenticação com CPF e senha.  
- **Primeiro Acesso:** formulário de cadastro de novos usuários.  
- **Principal:** página central do sistema com:
  - 📋 **Dados Pessoais:** formulário de identificação e contato.  
  - 🎓 **Formação Acadêmica:** inclusão e exibição das formações do usuário.  
  - 🎓 **Outras Formações:** cursos complementares e capacitações.  
  - 💼 **Experiência Profissional:** histórico de experiências, cargos e empresas.

📌 **Interfaces Secundárias:**
- Mensagens de confirmação (Cadastro Realizado, Atualização, Inclusão, Exclusão, etc.), cada uma representada por um arquivo `.php` individual na pasta `/View`.

---

## 🧮 Layout e Padrões

O projeto utiliza o framework **W3.CSS** e ícones da **Font Awesome**, conforme o modelo apresentado na apostila da disciplina.

🎨 **Características visuais:**
- Sidebar azul com ícones interativos e navegação por âncoras.  
- Formulários padronizados com ícones e botões arredondados.  
- Tabelas centralizadas com cabeçalho azul e linhas alternadas.  
- Estrutura responsiva e de fácil leitura, ideal para homologação e portfólio.

---

## 🧰 Tecnologias Utilizadas

- **PHP 8+** — linguagem principal.  
- **HTML5 + CSS3** — estrutura e estilo.  
- **W3.CSS** — framework de layout e componentes visuais.  
- **Font Awesome** — ícones visuais e interativos.  
- **XAMPP / Apache** — ambiente de execução local.  

---

## 📅 Andamento de Desenvolvimento

✅ **Agenda 10:** Revisão da arquitetura MVC.  
✅ **Agenda 11:** Desenvolvimento e Modelagem da Camada Model (MVC)  
✅ **Agenda 12:** Desenvolvimento da Camada View (Interfaces, Layout).  

<img width="1092" height="541" alt="image" src="https://github.com/user-attachments/assets/01d7b37f-6000-44c5-a618-0dbc9df1a6f8" />

<img width="1108" height="597" alt="image" src="https://github.com/user-attachments/assets/f4ab7ca2-57a8-4021-9186-9aa53b8d0257" />

---

# 💻 Agendas 11 e 12 – Construção do Projeto MVC em PHP Orientado a Objetos

> 👩‍💻 *Etapas: Model (Agenda 11) e View (Agenda 12)*

---

## 🎯 Contexto Geral

As **Agendas 11 e 12** representam etapas consecutivas e fundamentais na construção do projeto de software utilizando o padrão **MVC (Model-View-Controller)** com **PHP Orientado a Objetos**.

- A **Agenda 11** concentrou-se na **Camada Model**, responsável pela **estrutura lógica, regras de negócio e persistência de dados**.
- A **Agenda 12** abordou a **Camada View**, que cuida da **interface com o usuário e da apresentação das informações**.

Essas duas etapas formam a base da **arquitetura do sistema**, preparando o ambiente para a integração total com a **Camada Controller** (Agenda 13).

---

## 🧩 Estrutura Geral do Projeto MVC

📂 projeto/
│
├── 📁 model/ → Lida com dados e regras de negócio
│ ├── ConexaoBD.php
│ ├── Usuario.php
│ ├── FormacaoAcad.php
│ └── ExperienciaProfissional.php
│
├── 📁 view/ → Interface visual e formulários do usuário
│ ├── login.php
│ ├── primeiroAcesso.php
│ ├── principal.php
│ ├── cadastroRealizado.php
│ └── atualizacaoRealizada.php
│
└── 📁 controller/ → (Implementada na Agenda 13)


---

## 🧠 **Resumo da Agenda 11 – Camada Model**

A Agenda 11 teve como objetivo desenvolver a **Camada Model**, encarregada da **modelagem das classes**, **manipulação dos dados** e **regras de negócio**.

### 1. 🗃️ Preparação do Banco de Dados e Conexão

- **Banco criado:** `projeto_final`  
- **Tabelas definidas:** `usuario`, `formacaoAcademica`, e posteriormente `experienciaprofissional`  
- **Classe `ConexaoBD.php`:**  
  Contém atributos privados (`serverName`, `userName`, `password`, `dbName`) e o método público `conectar()` para estabelecer e retornar a conexão MySQL.

### 2. 👤 Modelagem da Classe `Usuario`

- Atributos: `id`, `nome`, `cpf`, `email`, `dataNascimento`, `senha`  
- **Getters e Setters:** para encapsulamento e controle de acesso.  
- **Método `inserirBD()`:** insere dados do usuário e retorna o ID gerado (`mysqli_insert_id`).  
- **Método `carregarUsuario($cpf)`:** busca dados por CPF e popula o objeto.  
- **Método `atualizarBD()`:** atualiza dados do usuário no banco conforme o `idusuario`.

### 3. 🎓 Modelagem da Classe `FormacaoAcad`

- Atributos: `id`, `idusuario`, `inicio`, `fim`, `descricao`  
- **Método `inserirBD()`:** insere uma formação no banco.  
- **Método `excluirBD($id)`:** remove formação específica.  
- **Método `listaFormacoes($idusuario)`:** retorna as formações vinculadas ao usuário.

### 4. 💼 Desafio: Experiência Profissional (Model)

Replicação da lógica da Model `FormacaoAcad` para a entidade `ExperienciaProfissional`:

- **Tabela:** `experienciaprofissional`  
- **Classe:** `ExperienciaProfissional.php`  
- **Atributos:** `id`, `idusuario`, `inicio`, `fim`, `empresa`, `descricao`  
- **Métodos:** `inserirBD`, `excluirBD`, `listaExperiencias`  

> 🧩 Essa etapa consolidou a **espinha dorsal lógica do projeto**, definindo a estrutura de dados e as operações CRUD.

---

## 🖥️ **Resumo da Agenda 12 – Camada View**

A Agenda 12 focou na **Camada View**, responsável por **apresentar os dados ao usuário** e **receber suas ações**.

### 1. 🧱 Estrutura e Ferramentas

- **Pasta View:** criação de todas as interfaces.  
- **Frameworks e recursos:**  
  - `W3CSS` para o layout responsivo  
  - `Font Awesome` para ícones e elementos visuais  

---

### 2. 🧾 Interfaces Principais

| Interface | Função | Botões/Ações |
|------------|--------|--------------|
| **`login.php`** | Entrada no sistema com CPF e senha | `btnLogin`, `btnPrimeiroAcesso` |
| **`primeiroAcesso.php`** | Cadastro inicial de usuário | `btnCadastrar` |
| **`principal.php`** | Página central com navegação lateral e formulários | `btnAtualizar`, `btnAddFormacao`, `btnAddEP` |

#### 🧭 Estrutura da Página Principal (`principal.php`)

- **Barra lateral (`w3-sidebar`):** links para Home, Dados Pessoais e Formação.  
- **Seção Dados Pessoais:** formulário com campos de nome, CPF, e-mail e data de nascimento.  
- **Seção Formação Acadêmica:** formulário e tabela para cadastrar e listar formações.  

---

### 3. 🔔 Interfaces Secundárias

Interfaces de notificação com estrutura simples e mensagens de retorno:

- `cadastroRealizado.php`
- `atualizacaoRealizada.php`
- `informacaoExcluida.php`

Cada uma contém apenas um botão (ex: `btnCadRealizado`, `btnInfExcluir`) para retorno ao fluxo principal.

---

### 4. 💼 Desafio: Experiência Profissional (View)

Adição da seção “**Experiência Profissional**” à página `principal.php`, replicando a estrutura da Formação Acadêmica.

Campos:
- `txtInicioEP`, `txtFimEP`, `txtEmpEP`, `txtDescEP`
- Botão `btnAddEP`
- Tabela com colunas: Início | Fim | Empresa | Descrição | Apagar

> Essa implementação completou a **interface interativa do usuário**, tornando o sistema visualmente navegável e pronto para integração com o Controller.

---

## 🔄 Integração Planejada

As ações dos botões das Views têm `action` vazio, pois o **controle do fluxo foi digitalizado** na próxima etapa (Agenda 13), através do arquivo `Navegacao.php`.

---

## 🧭 Conclusão

> Em essência:  
> A **Agenda 11** construiu a **espinha dorsal lógica (Model)** que salva e recupera dados.  
> A **Agenda 12** construiu o **rosto do projeto (View)**, permitindo a interação com o usuário.  

Essas etapas consolidam o ciclo de desenvolvimento **MVC em PHP POO**, preparando o terreno para a **digitalização da camada Controller** e o funcionamento completo do sistema.

---

## 📊 Progresso do Projeto

| Etapa | Camada | Status |
|-------|---------|--------|
| 🧱 Agenda 11 | Model | ✅ Concluída |
| 🖥️ Agenda 12 | View | ✅ Concluída |
| ⚙️ Agenda 13 | Controller | 🚧 Em andamento |


> 💡 “Model pensa, View mostra, e o Controller faz acontecer.”

---

# 💻 Agenda 13 – Digitalização e Implementação da Camada Controller (MVC em PHP)

## 🎯 Contexto Geral

No contexto dos documentos fornecidos, que tratam da **implementação técnica de um projeto de software**, a ação de **digitalizar** refere-se à **estruturação do sistema, à codificação das regras de negócio e ao gerenciamento do fluxo de informações** entre as camadas **Model**, **View** e **Controller**.

A **digitalização** representa a **transformação prática do projeto em código funcional**, garantindo que cada ação do usuário na interface (View) seja corretamente interpretada, processada e persistida pelo sistema por meio do **Controller**.

---

## 🧭 1. Gestão do Fluxo e Navegação (`Navegacao.php`)

O arquivo `Navegacao.php` centraliza o **controle das ações e o fluxo de navegação** entre as páginas do projeto.  
Ele atua como o **núcleo de controle da aplicação**, responsável por identificar eventos e direcionar as requisições aos controladores corretos.

### 🔹 Funções Principais:

- **Controle de Ações:**  
  Verifica qual botão ou evento foi acionado pelo usuário (ex: `btnCadastrar`, `btnAtualizar`, `btnExcluirFA`).
  
- **Direcionamento:**  
  Usa estruturas condicionais (`if/elseif` ou `switch`) para chamar a classe Controller apropriada.

- **Login e Sessão:**  
  Gerencia o processo de autenticação, verificando CPF e senha e redirecionando para a tela principal em caso de sucesso.

📌 *Exemplo:*  
Ao clicar em “Primeiro Acesso” (`btnPrimeiroAcesso`), o `Navegacao.php` redireciona o usuário para a tela de cadastro inicial.

---

## 🧩 2. Implementação das Regras de Negócio e Persistência de Dados

A **Camada Controller** é responsável por **traduzir as ações da View** em **operações sobre a Model**, como criar, atualizar, excluir e listar registros.  
Essas ações concretizam a **digitalização das regras de negócio** do sistema.

### 🔹 Inserção de Dados (Cadastrar)

1. O usuário clica em “Cadastrar” (`btnCadastrar`).
2. O `Navegacao.php` chama o `UsuarioController.php`.
3. O método `inserir()`:
   - Cria um objeto da Model (`Usuario`);
   - Popula os atributos (nome, CPF, email, senha);
   - Invoca o método `inserirBD()` para persistir os dados no banco.

### 🔹 Atualização de Dados (Atualizar)

- O método `atualizar()` da classe Controller recebe o ID e os novos dados.  
- Instancia a Model correspondente, ajusta os atributos e executa `atualizarBD()`.
- O `Navegacao.php` trata o evento `btnAtualizar`, convertendo datas e enviando ao Controller.

### 🔹 Exclusão de Dados (Remover)

- O método `remover()` da classe Controller executa um **`DELETE`** no banco.  
- O evento `btnExcluirFA` no `Navegacao.php` passa o ID da formação a ser removida.

---

## 💾 3. Gerenciamento de Dados em Sessão

Após a execução das ações CRUD, o sistema **mantém o estado do usuário** utilizando variáveis de sessão.

### 🔹 Etapas do Processo:

1. **Serialização:**  
   O objeto atualizado é transformado em string (`serialize()`).
2. **Alocação em Sessão:**  
   É armazenado na variável `$_SESSION['Usuario']`.
3. **Desserialização e Exibição:**  
   Na View (`principal.php`), os dados são recuperados com `unserialize()` e exibidos via *getters* (ex: `getNome()`).

Isso permite a **transferência de informações entre páginas** sem necessidade de reconsulta ao banco.

---

## 🧠 4. Síntese Conceitual

> A **digitalização** neste contexto é o ato de **converter regras e fluxos do projeto em código PHP estruturado no padrão MVC**.  
> Cada clique do usuário é como uma chamada que o **Controller digitaliza e roteia** para a função correta — cadastrar, atualizar, excluir ou navegar.

Essa arquitetura assegura:
- Separação de responsabilidades entre as camadas;
- Melhor manutenção e reuso de código;
- Maior clareza no fluxo de informações do sistema.

---

## 🏁 Conclusão

A digitalização na Agenda 13 simboliza a **transição do projeto conceitual para o sistema funcional**,  
onde o **Controller** atua como ponte entre a lógica do usuário e a base de dados, consolidando o ciclo completo do padrão MVC.

> 🔧 “Digitalizar é transformar ideias em instruções que o sistema entende — é dar vida ao projeto através do código.”

---

## ⚙️ **Agenda 14 – Implementação Final e Módulo Administrativo**

Na **Agenda 14**, implementamos o **último módulo do sistema**, permitindo que o **Administrador visualize todos os dados dos usuários** cadastrados.

### 🔹 Novas Páginas Criadas
- **`ADMListarCadastrados.php`** → lista todos os usuários.  
- **`ADMVisualizarCadastro.php`** → exibe os dados completos de um usuário selecionado.  

Cada linha da tabela de listagem contém o botão **“Visualizar”**, que redireciona o administrador à página detalhada do usuário.

### 🔹 Novos Métodos Implementados
- `UsuarioController::gerarLista()` — lista todos os usuários cadastrados.  
- `UsuarioController::buscarUsuarioPorId()` — retorna os dados de um usuário específico.  
- Atualização do `Navegacao.php` com as rotas administrativas.

### 🔹 Padrões e Layout
- Estrutura baseada em **W3.CSS** com cartões (`w3-card`) e tabelas (`w3-table-all`).  
- Uso de ícones **Font Awesome** para facilitar a navegação.  
- Layout intuitivo com botões arredondados e cores padronizadas.

---

<img width="1353" height="554" alt="image" src="https://github.com/user-attachments/assets/61ed1a2d-a67f-4861-b8cd-5c76668bab2b" />
<br>
<img width="1360" height="554" alt="image" src="https://github.com/user-attachments/assets/d67dafc6-21c0-4cbf-818b-b7fab630d9db" />
<br>
<img width="1365" height="447" alt="image" src="https://github.com/user-attachments/assets/88b95b9e-482f-4797-81d7-7beb3e8ac8c7" />
<br>
<img width="1157" height="590" alt="image" src="https://github.com/user-attachments/assets/02d12730-3070-4dd7-b992-1273caebb195" />
<br>
<img width="1073" height="545" alt="image" src="https://github.com/user-attachments/assets/f0448304-9b33-4055-bcb2-26749adf1771" />






