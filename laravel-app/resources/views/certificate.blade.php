<!DOCTYPE html>
<html>
<head>
    <title>Certificado de Conclusão</title>
</head>
<body>
    <h1>Certificado de Conclusão</h1>
    <p>Nome: {{ $employeeTraining->user->name }}</p>
    <p>Treinamento: {{ $employeeTraining->training->title }}</p>
    <p>Data de Conclusão: {{ $employeeTraining->completed_at }}</p>
    <p>Assinatura: ________________________</p>
</body>
</html>
