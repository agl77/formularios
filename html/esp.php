<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ordenar Especialidades</title>
    <style>
        .container {
            display: flex;
            justify-content: space-between;
        }

        .especialidades {
            width: auto;
            border: 1px solid #ccc;
            padding: 10px;
        }

        .mais-identifica {
            background-color: #ffffc3; /* Amarelo Claro */
            text-align: left;
        }

        .menos-identifica {
            background-color: #fced98; /* Alaranjado Claro */
        }

        .especialidade {
            cursor: pointer;
            margin: 5px;
            padding: 5px;
            border: 1px solid #333;
            background-color: #f9f9f9;
        }
        .umacinco {
           margin: 4px;
           border: 0px; 
           line-height: 13px;

        }
    </style>
</head>
<body>
    <h1>Escolha de Especialidades</h1>
    
    <?php
    // Verifique se o ID do cadastro foi passado na URL
    if (isset($_GET['idcadastro'])) {
        $idcadastro = $_GET['idcadastro'];
        echo "<p>ID do Cadastro: $idcadastro</p>";
    } else {
        echo "<p>ID do Cadastro não foi especificado na URL.</p>";
    }
    ?>
    

    <div class="container">
        <div class="especialidades">
            <h2>Especialidades</h2>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Acupuntura</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Cirurgia Vascular</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Nutrologia</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Alergia e Imunologia</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Clínica Médica</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Medicina de Emergência</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Oncologia Clínica</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Anestesiologia</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Coloproctologia</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Medicina da Família e Comunidade</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Ortopedia</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Angiologia</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Dermatologia</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Medicina do Trabalho</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Otorrinolaringologia</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Cardiologia</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Endocrinologia</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Medicina do Tráfego</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Patologia</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Cirurgia Cardíaca</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Endoscopia</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Medicina Esportiva</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Patologia Clínica</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Cirurgia da Mão</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Gastroenterologia</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Fisiatria e Reabilitação</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Pediatria</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Cirurgia de Cabeça e Pescoço</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Genética</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Medicina Intensiva</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Pneumologia</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Cirurgia do Aparelho Digestivo</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Geriatria</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Medicina Legal e Perícia</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Psiquiatria</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Cirurgia Geral</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Ginecologia e Obstetrícia</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Medicina Nuclear</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Radiologia e Imagem</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Cirurgia Oncológica</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Hematologia</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Medicina Preventiva</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Radioterapia</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Cirurgia Pediátrica</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Homeopatia</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Nefrologia</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Reumatologia</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Cirurgia Plástica</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Infectologia</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Neurologia</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Urologia</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Cirurgia Torácica</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Oftalmologia</div>
            <div class="especialidade" draggable="true" data-identificacao="nenhuma">Neurocirurgia</div>
        </div>
        <div class="umacinco">
            <h4><br><br> <br> <br> <br>1 </h4>
            <h4>2</h4> 
            <h4>3</h4> 
            <h4>4</h4> 
            <h4>5</h4> 
            
        </div>
        <div class="especialidades mais-identifica">
            <h2>Mais se Identifica</h2>
        </div>
        <div class="umacinco">
            <h4><br><br> <br> <br> <br>1 </h4>
            <h4>2</h4> 
            <h4>3</h4> 
            <h4>4</h4> 
            <h4>5</h4> 
            
        </div>
        <div class="especialidades menos-identifica">
            <h2>Menos se Identifica</h2>
        </div>
    </div>

    <script>
        const especialidades = document.querySelectorAll('.especialidade');
        const maisIdentifica = document.querySelector('.mais-identifica');
        const menosIdentifica = document.querySelector('.menos-identifica');

        const especialidadesMaisIdentifica = [];
        const especialidadesMenosIdentifica = [];

        especialidades.forEach(especialidade => {
            especialidade.addEventListener('dragstart', (e) => {
                e.dataTransfer.setData('text/plain', especialidade.textContent);
                e.dataTransfer.setData('identificacao', especialidade.getAttribute('data-identificacao'));
            });

            especialidade.addEventListener('dragend', () => {
                // Este evento pode ser usado para atualizar o estado, se necessário
            });
        });

        [maisIdentifica, menosIdentifica].forEach(caixa => {
            caixa.addEventListener('dragover', (e) => {
                e.preventDefault();
            });

            caixa.addEventListener('drop', (e) => {
                e.preventDefault();
                const especialidadeNome = e.dataTransfer.getData('text/plain');
                const especialidadeIdentificacao = e.dataTransfer.getData('identificacao');

                // Verifique se a especialidade não foi adicionada à outra caixa e se não excedeu 5 especialidades
                if (caixa.children.length < 6 && !especialidadesMaisIdentifica.includes(especialidadeNome) && !especialidadesMenosIdentifica.includes(especialidadeNome)) {
                    const especialidade = document.createElement('div');
                    especialidade.className = 'especialidade';
                    especialidade.textContent = especialidadeNome;
                    especialidade.setAttribute('data-identificacao', especialidadeIdentificacao);
                    caixa.appendChild(especialidade);

                    if (caixa === maisIdentifica) {
                        especialidadesMaisIdentifica.push(especialidadeNome);
                    } else if (caixa === menosIdentifica) {
                        especialidadesMenosIdentifica.push(especialidadeNome);
                    }
                }
            });
        });
    </script>
</body>
</html>
