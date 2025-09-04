<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <style>
        :root{
            --bg-1:#071028;
            --bg-2:#071827;
            --card:#071429;
            --accent:#06b6d4;
            --accent-2:#7c3aed;
            --muted:#9fb3c8;
            --glass: rgba(255,255,255,0.04);
        }
        *{box-sizing:border-box}
        body{font-family: Inter, Arial, Helvetica, sans-serif;background:linear-gradient(180deg,var(--bg-1) 0%, var(--bg-2) 70%);color:#e6eef6;margin:0;padding:36px 18px;}
        .wrap{max-width:900px;margin:0 auto;padding:28px}
        header{display:flex;align-items:center;justify-content:space-between;margin-bottom:22px}
        header h1{font-size:28px;letter-spacing:0.4px;margin:0}
        header p{color:var(--muted);margin:6px 0 0}
        .back{color:var(--muted);text-decoration:none;font-size:14px}

        .card{
            background: linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));
            border-radius:14px;padding:22px;border:1px solid rgba(255,255,255,0.03);
            box-shadow: 0 10px 30px rgba(2,6,23,0.6);
        }

        label{display:block;color:var(--muted);margin-top:12px;font-size:14px}
        input, textarea{width:100%;padding:12px;border-radius:8px;border:1px solid rgba(255,255,255,0.04);background:rgba(255,255,255,0.02);color:#e6eef6;margin-top:8px}
        textarea{min-height:120px;resize:vertical}
        .btn{display:inline-block;margin-top:16px;padding:10px 18px;border-radius:10px;background:linear-gradient(90deg,var(--accent),var(--accent-2));color:#021025;border:none;font-weight:700;text-decoration:none}
        .error-box{background:rgba(255,50,50,0.06);border:1px solid rgba(255,50,50,0.12);padding:12px;border-radius:8px;color:#ffd7d7}
        .help{color:var(--muted);font-size:13px;margin-top:6px}

        @media (max-width:700px){body{padding:18px}.wrap{padding:16px}}
    </style>
</head>
<body>
    <div class="wrap">
        <header>
            <div>
                <h1>Contato</h1>
                <p>Envie sua mensagem — responderemos em breve</p>
            </div>
            <div>
                <a class="back" href="{{ route('sobre') }}">&larr; Voltar para Sobre</a>
            </div>
        </header>

        <section class="card">
            @if ($errors->any())
                <div class="error-box">
                    <strong>Foram encontrados erros:</strong>
                    <ul style="margin:8px 0 0 16px">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('contato.enviar') }}" style="margin-top:14px">
                @csrf

                <label for="name">Nome</label>
                <input id="name" name="name" type="text" value="{{ old('name') }}" required>

                <label for="email">E-mail</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" required>

                <label for="phone">Telefone</label>
                <input id="phone" name="phone" type="text" value="{{ old('phone') }}">

                <label for="message">Mensagem <span class="help">(opcional)</span></label>
                <textarea id="message" name="message">{{ old('message') }}</textarea>

                <button class="btn" type="submit">Enviar mensagem</button>
            </form>
        </section>

    </div>
</body>
</html>
