
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
                            function previewPDF() {
                                var pdfURL = '/gerar-pdf';
                                window.open(pdfURL, '_blank');
                            }
                        </script>

        <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="banner">
            <h1>Export aqui seu PDF</h1>
            <p>Mil Grau!</p>
        </div>
        <div class="frase-de-impacto">
            <!-- <p>Quando você acredita em si mesmo, o mundo acredita em você.</p> -->
            <h4>O futuro pertence àqueles que desafiam o status e abraçam a mudança com ousadia e criatividade.</h4>
        </div>
        <div class="style_body">
            <div class="container">
                <h3 class="text-center mt-4">Gerar PDF Mágico</h3>
                <!-- Botão para abrir o modal -->
                <div class="text-center mt-4">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Visualizar PDF
                    </button>
                </div>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Pré-visualização do PDF</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Inserir aqui o conteúdo do PDF ou uma imagem representando o PDF -->
                            <img src="/caminho/para/imagem-do-pdf.png" alt="Pré-visualização do PDF" class="img-fluid">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            <!-- Adicione aqui a funcionalidade para o download ou visualização do PDF completo -->
                            <button type="button" onclick="previewPDF()" class="btn btn-primary">Visualizar PDF Completo</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <p>Desenvolvido por <a href="mailto:seuemail@example.com">Gabriel Anselmo Ramos</a></p>
        </footer>

        <!-- Adicione o script do Bootstrap no final do arquivo -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>

<!-- <!DOCTYPE html>
<html>
<head>
    <title>Pré-Visualização de PDF</title>
    <style>
        .preview-button {
            padding: 12px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <h1>Pré-Visualização de PDF</h1>
    <p>Clique no botão abaixo para pré-visualizar o PDF:</p>
    
    <button class="preview-button" onclick="previewPDF()">Pré-visualizar PDF</button>

    <script>
        function previewPDF() {
            var pdfURL = '/gerar-pdf';
            window.open(pdfURL, '_blank');
        }
    </script>
</body>
</html> -->
