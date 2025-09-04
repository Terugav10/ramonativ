<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato Recebido</title>
    <style>
        :root{--bg-1:#071028;--bg-2:#071827;--accent:#06b6d4;--accent-2:#7c3aed;--muted:#9fb3c8;--glass: rgba(255,255,255,0.04)}
        *{box-sizing:border-box}
        body{font-family:Inter, Arial, sans-serif;background:linear-gradient(180deg,var(--bg-1),var(--bg-2));color:#e6eef6;margin:0;padding:36px 18px}
        .wrap{max-width:900px;margin:0 auto}
        h1{font-size:26px;margin-bottom:18px}
        .card{background:linear-gradient(180deg,rgba(255,255,255,0.02),rgba(255,255,255,0.01));padding:18px;border-radius:12px;border:1px solid rgba(255,255,255,0.03)}
        .row{display:flex;gap:12px;align-items:center}
        .label{width:120px;color:var(--muted);font-weight:700}
        .value{color:#e6eef6}
        .back{display:inline-block;margin-top:18px;color:var(--muted);text-decoration:none}

        @media(max-width:700px){.label{width:100px}}
    </style>
</head>
<body>
    <div class="wrap">
        <h1>Dados Recebidos</h1>
        <div class="card">
            <div class="row"><div class="label">Nome:</div><div class="value">{{ $data['name'] }}</div></div>
            <div class="row" style="margin-top:8px"><div class="label">E-mail:</div><div class="value">{{ $data['email'] }}</div></div>
            <div class="row" style="margin-top:8px"><div class="label">Telefone:</div><div class="value">{{ $data['phone'] ?? 'N/A' }}</div></div>
        </div>

        <a class="back" href="{{ route('contato') }}">&larr; Voltar ao formulário</a>
    </div>
</body>
</html>
